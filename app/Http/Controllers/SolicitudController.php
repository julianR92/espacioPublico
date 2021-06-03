<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Solicitud;
use App\Experiencia;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnvioNotificacion;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('intervencion.confirmacion');
    }
    public function end()
    {

        Session::flush();
        return redirect("/");
    }

    public function experiencia(Request $request)
    {

        $experiencia = new Experiencia;
        $experiencia->valor = $request->valor;
        if ($request->sugerencias == null) {
            $experiencia->sugerencias = "SIN SUGERENCIAS";
        } else {
            $experiencia->sugerencias = $request->sugerencias;
        }
        if ($experiencia->save()) {
            $resp = ["success" => true];
            return response()->json($resp);
        } else {
            $resp = ["success" => false];
            return response()->json($resp);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validacion campos requeridos
        $this->validate($request, [
            "modalidad" => "required",
            "construccion" => "required",
            "direccion_predio" => "required",
            "matricula" => "required",
            "identificacion_catastral" => "required",
            "barrio" => "required",
            "vereda" => "required",
            "nom_titular" => "required",
            "ape_titular" => "required",
            "identificacion_titular" => "required",
            "tel_titular" => "required",
            "email_titular" => "required",
            "nom_profesional" => "required",
            "ape_profesional" => "required",
            "ide_profesional" => "required",
            "matricula_profesional" => "required",
            "fecha_matricula" => "required",
            "nom_responsable" => "required",
            "ape_responsable" => "required",
            "ide_responsable" => "required",
            "tel_responsable" => "required",
            "email_responsable" => "required",
            "dir_responsable" => "required",
            "adjunto_documentoIdentidad" => "required",
            "adjunto_poder" => "required",
            "adjunto_descripcion" => "required",
            "adjunto_planos" => "required",
            "tratamiento_datos" => "required",
            "acepto_terminos" => "required",
            "confirmo_mayorEdad" => "required",
            "compartir_informacion" => "required"
        ]);

        $ultimo_id = Solicitud::latest('id')->first();
        // return $ultimo_id;
        if (!$ultimo_id) {
            $idRadicado = 1;
        } else {
            $idRadicado = $ultimo_id->id + 1;
        }

        $radicado = date("Ymd") . $request->matricula . $idRadicado; // numero radicado

        // move archivos
        $adjunto1 = $request->file('adjunto_documentoIdentidad')->storeAs('public/Documentos_Solicitud/' . $radicado, 'Documentos_Identidad-' . $radicado . '.pdf');


        $adjunto2 = $request->file('adjunto_poder')->storeAs('public/Documentos_Solicitud/' . $radicado, 'Documentos_Poder-' . $radicado . '.pdf');

        $adjunto3 = $request->file('adjunto_descripcion')->storeAs('public/Documentos_Solicitud/' . $radicado, 'Documentos_Descripcion-' . $radicado . '.pdf');

        $adjunto4 = $request->file('adjunto_planos')->storeAs('public/Documentos_Solicitud/' . $radicado, 'Documentos_Planos-' . $radicado . '.pdf');


        if ($adjunto1 && $adjunto2 && $adjunto3 && $adjunto4) {

            //rutas de guardado
            $archivo_documento = 'storage/Documentos_Solicitud/' . $radicado . '/Documentos_Identidad-' . $radicado . '.pdf';

            $archivo_poder = 'storage/Documentos_Solicitud/' . $radicado . '/Documentos_Poder-' . $radicado . '.pdf';
            $archivo_descripcion = 'storage/Documentos_Solicitud/' . $radicado . '/Documentos_Descripcion-' . $radicado . '.pdf';

            $archivo_planos = 'storage/Documentos_Solicitud/' . $radicado . '/Documentos_Planos-' . $radicado . '.pdf';

            // add parametros al request

            $request->request->add([
                'radicado' => $radicado,
                'archivo_documento' => $archivo_documento,
                'archivo_poder' => $archivo_poder,
                'archivo_descripcion' => $archivo_descripcion,
                'archivo_planos' => $archivo_planos,
                'estado_solicitud' => 'ENVIADA'
            ]);
            $request->merge([
                "construccion" => implode("-", $request->construccion)
            ]);

            $detalleCorreo = [
                'nombres' => $request->nom_responsable . ' ' . $request->ape_responsable,
                'radicado' => $radicado,
                'Subject' => 'Envío de Solicitud Intervención de Espacio Publico'
            ];


            $solicitud = $request->all();
            // return $solicitud;
            $saveSolicitud = Solicitud::create($solicitud);

            if ($saveSolicitud) {

                // envio de correo                
                Mail::to($request->email_responsable)->send(new EnvioNotificacion($detalleCorreo));

                $request->session()->flash('radicado_id', $radicado);
                return redirect()->route('solicitud.confirmacion');
            } else {
                Alert::error('Ha Ocurrido un error', 'Ha ocurrido un error en en registrar su solicitud');
                return redirect()->route('home');
            }
        } else {

            Alert::error('Ha Ocurrido un error', 'Los archivos no se han cargado correctamente vuelva intentarlo');
            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $QuerySolicitud = Solicitud::where($request->tipo_parametro, $request->parametro)->get();

        if ($QuerySolicitud->count() > 0) {

            return view('intervencion.resultado', compact('QuerySolicitud'));
        } else {
            Alert::error('Ha Ocurrido un error', 'El Numero: .' . $request->parametro . ' no tiene registros asociados');
            return redirect()->route('home');
        }
    }

    public function detalle($id){

        $solicitud = Solicitud::FindOrFail(Crypt::decrypt($id));

        $date = Carbon::now();
        $date1 = Carbon::parse($solicitud->fecha_pendiente);
        $diff = $date1->diffInDays($date);      
        
         return view('intervencion.detalle', compact('solicitud', 'diff'));


    }

    public function updateDoc(Request $request){


        $solicitud = Solicitud::FindOrFail($request->id);
        $contador = 0;
        if($request->adjunto_documentoIdentidad){
            $adjunto1 = $request->file('adjunto_documentoIdentidad')->storeAs('public/Documentos_Solicitud/' . $solicitud->radicado, 'Documentos_Identidad-' . $solicitud->radicado . '.pdf');
            $contador++;
        }

        if($request->adjunto_poder){
            $adjunto2 = $request->file('adjunto_poder')->storeAs('public/Documentos_Solicitud/' . $solicitud->radicado, 'Documentos_Poder-' . $solicitud->radicado . '.pdf');
            $contador++;
        }

        if($request->adjunto_descripcion){
            $adjunto3 = $request->file('adjunto_descripcion')->storeAs('public/Documentos_Solicitud/' . $solicitud->radicado, 'Documentos_Descripcion-' . $solicitud->radicado . '.pdf');
            $contador++;
        }

        if($request->adjunto_planos){
            $adjunto4 = $request->file('adjunto_planos')->storeAs('public/Documentos_Solicitud/' . $solicitud->radicado, 'Documentos_Planos-' . $solicitud->radicado . '.pdf');
            $contador++;

        }
        
        if($adjunto1 || $adjunto2 || $adjunto3 || $adjunto4){

            $solicitud->act_documentos = "SI";
            $solicitud->save();            
            Alert::success('Operacion exitosa', 'Se han cargado '.$contador.' archivo(s) en el sistema');
            return redirect()->route('home');

        }else{
            Alert::error('Error', 'No se ha realizado la carga de los archivos en el sistema');
            return redirect()->route('home');
        }
   




        



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
