<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesEspacioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_espacio', function (Blueprint $table) {
            $table->id();
            $table->string('radicado',40)->comment("Numero de radicado Unico");
            $table->string('modalidad',200)->comment('Modalidad de licencia de intervencion del espacio publico');
            $table->string('construccion',80)->comment('Construccion y rehablitacion');
            $table->string('direccion_predio', 150)->comment("Direccion o Nomenclatura del predio a intervenir");
            $table->string('matricula', 30)->comment("N° de Matricula Inmobiliaria");
            $table->string('identificacion_catastral', 30)->comment("Numero Predial");
            $table->string('barrio', 50)->comment("Barrio donde esta ubicado el predio");
            $table->string('vereda', 50)->nullable()->comment("Vereda donde esta ubicado el predio");
            $table->string('nom_titular', 40)->comment("Nombre del titular del predio");
            $table->string('ape_titular',40)->comment("Apellidos del titular del predio");
            $table->string('identificacion_titular',20)->comment("Numero de identificacion del titular del predio");
            $table->string('tel_titular',15)->comment("Telefono del titular del predio");
            $table->string('email_titular', 40)->comment("Email del titular del predio");
            $table->string('nom_profesional', 40)->comment("Nombre del profesional Responsable");
            $table->string('ape_profesional', 40)->comment("Apellido del Profesional responsable");
            $table->string('ide_profesional', 20)->comment("Numero de Identificacion del Profesional responsable");
            $table->string('matricula_profesional', 20)->comment("Matricula Profesional del Especialista encargado");
            $table->date('fecha_matricula')->comment("Fecha de expedicion de matricula profesional");
            $table->string('nom_responsable', 40)->comment("Nombre del responsable de solicitud");
            $table->string('ape_responsable', 40)->comment("Apellido del reponsable de solicitud");
            $table->string('ide_responsable',20)->comment("identificacion del responsable de solicitud");
            $table->string('tel_responsable', 15)->comment("Telefono del responsable de la solicitud");
            $table->string('email_responsable',40)->comment("Email del responsable de solicitud");
            $table->string('dir_responsable',120)->comment("direccion del responsable de la solicitud");
            $table->string('archivo_documento', 500)->comment("Ruta de Guardado Documento de Copia del Documento de identidad del solicitante");
            $table->string("archivo_poder", 500)->comment("Ruta de Guardado Poder Especial");
            $table->string("archivo_descripcion", 500)->comment("Ruta de Guardado de Descripcion del Proyecto");
            $table->string('archivo_planos', 500)->comment("Ruta de Guardado Planos del Proyecto");
            $table->enum('estado_solicitud',['ENVIADA','RADICADA','EN PROGRESO','APROBADA','RECHAZADA',]);
            $table->string('observaciones_solicitud',300)->nullable();
            $table->date('fecha_actuacion');
            $table->string('tratamiento_datos', 5)->comment('Verificacion de Tratamiento de datos personales');
            $table->string('acepto_terminos', 5)->comment("Acepta Terminos y condiciones");
            $table->string("confirmo_mayorEdad", 5)->comment("Confirma que es Mayor de edad, y esta diciendo informacion veraz");
            $table->string("compartir_informacion",5)->comment("Acepta Compartir Informacion con otras entidades");












            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes_espacio');
    }
}
