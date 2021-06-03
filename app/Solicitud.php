<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitudes_espacio';
    protected $primaryKey = 'id';

    protected $fillable=[
        "radicado",
        "modalidad",
        "construccion",
        "direccion_predio",
        "matricula",
        "identificacion_catastral",
        "barrio",
        "vereda",
        "nom_titular",
        "ape_titular",
        "identificacion_titular",
        "tel_titular",
        "email_titular",
        "nom_profesional",
        "ape_profesional",
        "ide_profesional",
        "matricula_profesional",
        "fecha_matricula",
        "nom_responsable",
        "ape_responsable",
        "ide_responsable",
        "tel_responsable",
        "email_responsable",
        "dir_responsable",
        "archivo_documento",
        "archivo_poder",
        "archivo_descripcion",
        "archivo_planos",
        "estado_solicitud",
        "observacion_solicitud",
        "fecha_actuacion",
        "tratamiento_datos",
        "acepto_terminos",
        "confirmo_mayorEdad",
        "compartir_informacion"
 
    ];
    //
}
