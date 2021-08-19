@extends('layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">


    <div class="container mt-3 mb-4 m-xs-x-3">
        <div class="row pl-4">
            <div class="px-0 col-md-9 col-xs-12 col-sm-12">
                <nav aria-label="Miga de pan" style="max-height: 20px;">
                    <ol class="breadcrumb" style="background-color: #FFFFFF;">
                        <li class="breadcrumb-item ml-3 ml-md-0">
                            <a style="color: #004fbf;" class="breadcrumb-text" href="https://www.gov.co/home/">Inicio</a>
                        </li>
                        <li class="breadcrumb-item ">
                            <div class="image-icon">
                                <span class="breadcrumb govco-icon govco-icon-shortr-arrow" style="height: 22px;"></span>
                                <a style="color: #004fbf;" class="breadcrumb-text" href="#">Tramites y servicios</a>
                            </div>
                        </li>
                        <li class="breadcrumb-item ">
                            <div class="image-icon">
                                <span class="breadcrumb govco-icon govco-icon-shortr-arrow" style="height: 22px;"></span>
                                <p class="ml-3 ml-md-0" style="font-size: 14px!important;"><b style="color: #004fbf;text-transform: none;">
                                        Intervención del Espacio Publico para la Localización de Equipamiento
                                    </b></p>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="col-md-12" style="padding-left: 0!important">
                        <div class="card step-progress border-0" style="font-size: 10px;">
                            <div class="step-slider">
                                <!--<div data-id="step1" class="step-slider-item active" ><p style="padding-top: 0px;margin-top:5px;"></p></div>-->
                                <div data-id="step2" class="step-slider-item active">
                                    <p style="padding-top: 0px;margin-top:5px;color: #3366CC;" id="barra_progreso"><span
                                            class="circle_uno">1</span> Inicio</p>
                                </div>
                                <div data-id="step3" class="step-slider-item">
                                    <p style="padding-top: 0px;margin-top:5px;color: #3366CC" id="barra_progreso"><span
                                            class="circle_uno">2 </span> Hago mi solicitud</p>
                                </div>
                                <div data-id="step4" class="step-slider-item">
                                    <p style="padding-top: 0px;margin-top:5px;" id="barra_progreso"><span
                                            class="circle_dos">3</span>Procesan mi solicitud</p>
                                </div>
                                <div data-id="step5" class="step-slider-item">
                                    <p style="padding-top: 0px;margin-top:5px;" id="barra_progreso"><span
                                            class="circle_dos">4</span> Respuesta</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <form action="{{route('solicitud.insert')}}" method="POST"  enctype="multipart/form-data" id="myForm" class="form-ciudadano">
                    @csrf
                    <div class="card govco-card border-0 shadow-none" style="border-radius: 0px;">

                        <h1 class="headline-xl-govco">Licencia de Intervención de Espacio Público para la Localización de Equipamiento</h1>

                        <div class="alert-warning-govco alert alert-dismissible fade show" aria-label="Alerta de advertencia">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"
                                title="Cerrar">&times;</button>
                                <div class="alert-heading">
                                    <span class="govco-icon govco-icon-exclamation-cn size-2x"></span>
                                    <span class="headline-l-govco">Importante</span>
                                  </div>
                            <p style="text-align: justify;">Este tramite es la autorización previa para ocupar o para intervenir bienes de uso público incluidos en el espacio público, de conformidad con las normas urbanísticas adoptadas en el
                                Plan de Ordenamiento Territorial, en los instrumentos que lo desarrollen y complementen y
                                demás normatividad vigente. </p>
                                <h5>Documentos comunes a toda solicitud</h5>
                                <ol>
                                    <li><p style="text-align: justify; text-justify: inter-word">Copia del documento de identidad del solicitante cuando se trate de personas naturales o certificado de existencia y representación legal, cuya fecha de expedición no sea superior a un mes, cuando se trate de personas jurídicas.</p></li>
                                    <li><p style="text-align: justify; text-justify: inter-word">Poder especial debidamente otorgado, ante notario o juez de la república, cuando se actúe mediante apoderado o mandatario, con la correspondiente presentación personal.</p></li>                              
                                  </ol>  
                                <h5>Documentos adicionales en licencias de intervención y ocupación del espacio público para la localización de equipamiento</h5>  
                                <ol>
  
                                  <li><p style="text-align: justify; text-justify: inter-word">Descripción del proyecto, indicando las características generales, los elementos urbanos a intervenir en el espacio público, la escala y cobertura.</p></li>                                
  
                                  <li><p style="text-align: justify; text-justify: inter-word">Copia de los planos de diseño del Proyecto, acotados y rotulados indicando la identificación del solicitante, la escala, el contenido del plano y la orientación norte. 
  
                                  Los planos deben estar firmados por el profesional responsable del diseño y deben contener la siguiente información:
                                      </p>  
                                      <ol type="a">  
                                          <li><p style="text-align: justify; text-justify: inter-word">	Localización del proyecto en el espacio público a intervenir en escala 1:250 o 1:200 que guarde concordancia con los cuadros de áreas y mojones del plano urbanístico cuando este exista.</p></li>
  
                                          <li><p style="text-align: justify; text-justify: inter-word">Para equipamientos comunales se deben presentar, plantas, cortes y fachadas del proyecto arquitectónico a escala 1:200 o 1:100.</p></li>
  
                                          <li><p style="text-align: justify; text-justify: inter-word">Cuadro de áreas que determine índices de ocupación, porcentajes de zonas duras, zonas verdes, áreas libres y construidas según sea el caso y cuadro de arborización en el evento de existir. </p></li>
  
                                          <li><p style="text-align: justify; text-justify: inter-word">Registro fotográfico de la zona a intervenir.</p></li>
  
                                          <li><p style="text-align: justify; text-justify: inter-word">Especificaciones de diseño y construcción del espacio público.</p></li>                                          
  
                                        </ol>                                
                                   </li>  
                                </ol>

                        </div>

                        <h3 class="headline-l-govco mt-3 pl-0">1. Identificación de la solicitud</h3>

                        <div class="row form-group mt-2">
                           
                            <div class="col-md-12 pl-1 pr-1">

                                <label for="modalidad" class="form-label">Modadalidad de Licencia*</label>
                                <select class="form-control  @error('modalidad') is-invalid @enderror" name="modalidad"
                                    id="modalidad" required>
                                    <option value=""></option>
                                    <option
                                        value="UTILIZACION DEL ESPACIO AEREO O DEL SUBSUELO PARA GENERAR ELEMENTOS DE ENLACE URBANO,TALES COMO PUENTES PEATONALES O PASOS SUBTERRANEOS">
                                        UTILIZACION DEL ESPACIO AEREO O DEL SUBSUELO PARA GENERAR ELEMENTOS DE ENLACE
                                        URBANO, TALES COMO PUENTES PEATONALES O PASOS SUBTERRANEOS</option>
                                    <option value="DOTACION DE AMOBLAMIENTO URBANO">DOTACION DE AMOBLAMIENTO URBANO</option>
                                    <option value="INSTALACION DE EXPRESIONES ARTISTICAS">INSTALACION DE EXPRESIONES
                                        ARTISTICAS</option>
                                    <option value="INSTALACION DE EXPRESIONES ARTISTICAS">ARBORIZACIÓN</option>

                                </select>

                                @error('modalidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 pt-4 pl-1">
                                <label for="construccion y rehabilitacion" class="form-label pt-4">Construcción y
                                    rehabilitación*</label><br>
                                <div class="row">
                                    <div class="col-md-6 pt-2">



                                        <label class="checkbox-govco checklist-govco" style="border-bottom:none!important;">
                                            <input type="checkbox" id="ANDENES" name="construccion[]" value="ANDENES" class="group_check1" />
                                            <label for="ANDENES"> ANDENES </label>
                                        </label>


                                        <label class="checkbox-govco checklist-govco mt-4"
                                            style="border-bottom:none!important;">
                                            <input type="checkbox" id="ALAMEDAS" name="construccion[]" value="ALAMEDAS" class="group_check1" />
                                            <label for="ALAMEDAS"> ALAMEDAS </label>
                                        </label>

                                        <label class="checkbox-govco checklist-govco mt-4"
                                            style="border-bottom:none!important;">
                                            <input type="checkbox" id="CICLORRUTAS" name="construccion[]"
                                                value="CICLORRUTAS"  class="group_check1"/>
                                            <label for="CICLORRUTAS"> CICLORRUTAS </label>
                                        </label>

                                        <label class="checkbox-govco checklist-govco mt-4"
                                            style="border-bottom:none!important;">
                                            <input type="checkbox" id="VIAS" name="construccion[]" value="VÍAS PEATONALES" class="group_check1" />
                                            <label for="VIAS"> VÍAS PEATONALES </label>
                                        </label>



                                    </div>

                                    <div class="col-md-6 pt-2">


                                        <label class="checkbox-govco checklist-govco" style="border-bottom:none!important;">
                                            <input type="checkbox" id="PARQUES" name="construccion[]"
                                                value="PARQUES-PLAZAS" class="group_check1" />
                                            <label for="PARQUES"> PARQUES-PLAZAS </label>
                                        </label>


                                        <label class="checkbox-govco checklist-govco mt-4"
                                            style="border-bottom:none!important;">
                                            <input type="checkbox" id="SEPARADORES" name="construccion[]"
                                                value="SEPARADORES" class="group_check1" />
                                            <label for="SEPARADORES"> SEPARADORES </label>
                                        </label>

                                        <label class="checkbox-govco checklist-govco mt-4"
                                            style="border-bottom:none!important;">
                                            <input type="checkbox" id="OREJAS" name="construccion[]"
                                                value="OREJAS DE PUENTES VEHICULARES" class="group_check1" />
                                            <label for="OREJAS"> OREJAS DE PUENTES VEHICULARES </label>
                                        </label>

                                        <label class="checkbox-govco checklist-govco mt-4"
                                            style="border-bottom:none!important;">
                                            <input type="checkbox" id="ESCALERAS" name="construccion[]"
                                                value="ESCALERAS Y RAMPAS" class="group_check1" />
                                            <label for="ESCALERAS"> ESCALERAS Y RAMPAS </label>
                                        </label>



                                    </div>
                                </div>

                                @error('construccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>

                            <h3 class="headline-l-govco mt-4">2. Información sobre el predio</h3>

                            <div class="col-md-12 pl-1 pr-1">

                                <label for="direccion" class="form-label">Dirección o Nomenclatura* </label><button type="button" class="btn btn-link"><span style="text-transform: lowercase; font-size: 12px;" class="text-primary" data-toggle="modal" data-target="#ModalDirecciones">(Clic para insertar direccion)</span></button>
                                <input type="text" value="{{old('direccion_predio')}}" class="form-control  @error('direccion_predio') is-invalid @enderror" name="direccion_predio" id="direccion"  maxlength="120" required readonly>
                                @error('direccion_predio')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="matricula" class="form-label">N° de matricula Inmobiliaria </label>
                                <input type="text" value="{{old('matricula')}}" class="form-control  @error('matricula') is-invalid @enderror" name="matricula" id="matricula"  maxlength="20" onkeypress="return Matricula(event)" onkeyup="aMayusculas(this.value,this.id)">
                                @error('matricula')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            
                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="identificacion_catastral" class="form-label">N° de Identificación catastral </label>
                                <input type="text" value="{{old('identificacion_catastral')}}" class="form-control  @error('identificacion_catastral') is-invalid @enderror" name="identificacion_catastral" id="identificacion_catastral"  maxlength="20" onkeypress="return Numeros(event)">
                                @error('identificacion_catastral')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="barrio" class="form-label">Barrio* </label>
                               <select name="barrio" id="barrio" class="form-control @error('barrio') is-invalid @enderror" required>
                                   <option value=""></option>
                                   @foreach ($Barrios as $barrio)
                                   <option value="{{$barrio->nombre}}">{{$barrio->nombre}}</option>
                                       
                                   @endforeach
                               </select>
                                @error('barrio')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="vereda" class="form-label">Vereda* </label>
                               <select name="vereda" id="vereda" class="form-control @error('vereda') is-invalid @enderror" required>
                                   <option value=""></option>
                                   @foreach ($Veredas as $vereda)
                                   @if($vereda->nombre == 'NO APLICA')
                                   <option value="{{$vereda->nombre}}" selected>{{$vereda->nombre}}</option>
                                   @else
                                   <option value="{{$vereda->nombre}}">{{$vereda->nombre}}</option>
                                   @endif    
                                   @endforeach
                               </select>
                                @error('vereda')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        
                            <h3 class="headline-l-govco mt-4">3. Titulares y profesionales responsables </h3><br>
                            <div class="col-md-12 pl-0"><h5 class="headline-s-govco mt-4">Titular*</h5></div>
                            <hr>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="nom_titular" class="form-label">Nombres Titular* </label>
                                <input value="{{old('nom_titular')}}" type="text" class="form-control  @error('nom_titular') is-invalid @enderror" name="nom_titular" id="nom_titular"  maxlength="25" minlength="4" required onkeypress="return Letras(event)" onkeyup="aMayusculas(this.value,this.id)" >
                                @error('nom_titular')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="ape_titular" class="form-label">Apellidos Titular* </label>
                                <input value="{{old('ape_titular')}}" type="text" class="form-control  @error('ape_titular') is-invalid @enderror" name="ape_titular" id="ape_titular"  maxlength="25" minlength="4" required onkeypress="return Letras(event)" onkeyup="aMayusculas(this.value,this.id)" >
                                @error('ape_titular')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4 pl-1 pr-1 pt-3">
                                <label for="identificacion_titular" class="form-label">C.C./NIT Titular* </label>
                                <input value="{{old('identificacion_titular')}}" type="text" class="form-control  @error('identificacion_titular') is-invalid @enderror" name="identificacion_titular" id="identificacion_titular"  maxlength="15" minlength="4" required onkeypress="return Numeros(event)" >
                                @error('identificacion_titular')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4 pl-1 pr-1 pt-3">
                                <label for="tel_titular" class="form-label">Teléfono / Celular * </label>
                                <input value="{{old('tel_titular')}}" type="text" class="form-control  @error('tel_titular') is-invalid @enderror" name="tel_titular" id="tel_titular"  maxlength="10" minlength="7" required onkeypress="return Numeros(event)" >
                                @error('tel_titular')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4 pl-1 pr-1 pt-3">
                                <label for="email_titular" class="form-label">Correo Electronico * </label>
                                <input value="{{old('email_titular')}}" type="mail" class="form-control  @error('email_titular') is-invalid @enderror" name="email_titular" id="email_titular"  required>
                                @error('email_titular')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 pl-0"><h5 class="headline-s-govco mt-4">Profesional Responsable*</h5></div>
                            <hr>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="nom_profesional" class="form-label">Nombres Profesional* </label>
                                <input value="{{old('nom_profesional')}}" type="text" class="form-control  @error('nom_profesional') is-invalid @enderror" name="nom_profesional" id="nom_profesional"  maxlength="25" minlength="4" required onkeypress="return Letras(event)" onkeyup="aMayusculas(this.value,this.id)">
                                @error('nom_profesional')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="ape_profesional" class="form-label">Apellidos Profesional* </label>
                                <input value="{{old('ape_profesional')}}" type="text" class="form-control  @error('ape_profesional') is-invalid @enderror" name="ape_profesional" id="ape_profesional"  maxlength="25" minlength="4" required onkeypress="return Letras(event)" onkeyup="aMayusculas(this.value,this.id)">
                                @error('ape_profesional')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4 pl-1 pr-1 pt-3">
                                <label for="ide_profesional" class="form-label">C.C. Profesional* </label>
                                <input value="{{old('ide_profesional')}}" type="text" class="form-control  @error('ide_profesional') is-invalid @enderror" name="ide_profesional" id="ide_profesional"  maxlength="15" minlength="4" required onkeypress="return Numeros(event)" >
                                @error('ide_profesional')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4 pl-1 pr-1 pt-3">
                                <label for="matricula_profesional" class="form-label">N° Matricula Profesional* </label>
                                <input value="{{old('matricula_profesional')}}" type="text" class="form-control  @error('matricula_profesional') is-invalid @enderror" name="matricula_profesional" id="matricula_profesional"  maxlength="15" minlength="4" required onkeypress="return Numeros(event)" >
                                @error('matricula_profesional')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4 pl-1 pr-1 pt-3">
                                <label for="fecha_matricula" class="form-label">Fecha Exp Matricula* </label>
                                <input value="{{old('fecha_matricula')}}" type="date" class="form-control  @error('fecha_matricula') is-invalid @enderror" name="fecha_matricula" id="fecha_matricula"  maxlength="15" minlength="4" required>
                                @error('fecha_matricula')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 pl-0"><h5 class="headline-s-govco mt-4">Responsable de la solicitud*</h5></div>
                            <hr>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="nom_responsable" class="form-label">Nombres Responsable* </label>
                                <input value="{{old('nom_responsable')}}" type="text" class="form-control  @error('nom_responsable') is-invalid @enderror" name="nom_responsable" id="nom_responsable"  maxlength="25" minlength="4" required onkeypress="return Letras(event)" onkeyup="aMayusculas(this.value,this.id)">
                                @error('nom_responsable')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="ape_responsable" class="form-label">Apellidos Responsable* </label>
                                <input value="{{old('ape_responsable')}}" type="text" class="form-control  @error('ape_responsable') is-invalid @enderror" name="ape_responsable" id="ape_responsable"  maxlength="25" minlength="4" required onkeypress="return Letras(event)" onkeyup="aMayusculas(this.value,this.id)">
                                @error('ape_responsable')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="ide_responsable" class="form-label">C.C. Responsable* </label>
                                <input value="{{old('ide_responsable')}}" type="text" class="form-control  @error('ide_responsable') is-invalid @enderror" name="ide_responsable" id="ide_responsable"  maxlength="15" minlength="4" required onkeypress="return Numeros(event)" >
                                @error('ide_responsable')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="tel_responsable" class="form-label"> Teléfono responsable* </label>
                                <input value="{{old('tel_responsable')}}" type="text" class="form-control  @error('tel_responsable') is-invalid @enderror" name="tel_responsable" id="tel_responsable"  maxlength="10" minlength="7" required onkeypress="return Numeros(event)" >
                                @error('tel_responsable')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="email_responsable" class="form-label">Correo Electronico Responsable * </label>
                                <input value="{{old('email_responsable')}}" type="mail" class="form-control  @error('email_responsable') is-invalid @enderror" name="email_responsable" id="email_responsable"  required>
                                @error('email_responsable')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="email_confirmado" class="form-label">Confirme su correo* </label>
                                <input type="mail" class="form-control  @error('email_confirmado') is-invalid @enderror" name="email_confirmado" id="email_confirmado"  required onpaste="return false;">
                                @error('email_confirmado')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                                       

                            <div class="col-md-12 pl-1 pr-1 pt-3">
                                <label for="dir_responsable" class="form-label"> Dirección responsable* </label>
                                <input value="{{old('dir_responsable')}}" type="text" class="form-control  @error('dir_responsable') is-invalid @enderror" name="dir_responsable" id="dir_responsable"  maxlength="120" minlength="7" required onkeypress="return Direccion(event)" >
                                @error('dir_responsable')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <h3 class="headline-l-govco mt-4">4. Documentos que acompañan la solicitud </h3><br>

                            {{-- <div class="alert-warning-govco alert alert-dismissible fade show" aria-label="Alerta de advertencia">                                
                                <div class="alert-heading">
                                  <span class="govco-icon govco-icon-exclamation-cn size-2x"></span>
                                  <span class="headline-l-govco">Importante</span>
                                </div>
                                <h5>Documentos comunes a toda solicitud</h5>
                              <ol>
                                  <li><p style="text-align: justify; text-justify: inter-word">Copia del documento de identidad del solicitante cuando se trate de personas naturales o certificado de existencia y representación legal, cuya fecha de expedición no sea superior a un mes, cuando se trate de personas jurídicas.</p></li>
                                  <li><p style="text-align: justify; text-justify: inter-word">Poder especial debidamente otorgado, ante notario o juez de la república, cuando se actúe mediante apoderado o mandatario, con la correspondiente presentación personal.</p></li>                              
                             </ol>

                              <h5>Documentos adicionales en licencias de intervencion y ocupación del espacio público</h5>

                              <ol>

                                <li><p style="text-align: justify; text-justify: inter-word">Descripción del proyecto, indicando las características generales, los elementos urbanos a intervenir en el espacio público, la escala y cobertura.</p></li>  
                             

                                <li><p style="text-align: justify; text-justify: inter-word">Copia de los planos de diseño del Proyecto, acotados y rotulados indicando la identificación del solicitante, la escala, el contenido del plano y la orientación norte. 

                                Los planos deben estar firmados por el profesional responsable del diseño y deben contener la siguiente información:                                    </p>

                                    <ol type="a">

                                        <li><p style="text-align: justify; text-justify: inter-word">	Localización del proyecto en el espacio público a intervenir en escala 1:250 o 1:200 que guarde concordancia con los cuadros de áreas y mojones del plano urbanístico cuando este exista.</p></li>

                                        <li><p style="text-align: justify; text-justify: inter-word">Para equipamientos comunales se deben presentar, plantas, cortes y fachadas del proyecto arquitectónico a escala 1:200 o 1:100.</p></li>

                                        <li><p style="text-align: justify; text-justify: inter-word">Cuadro de áreas que determine índices de ocupación, porcentajes de zonas duras, zonas verdes, áreas libres y construidas según sea el caso y cuadro de arborización en el evento de existir. </p></li>

                                        <li><p style="text-align: justify; text-justify: inter-word">Registro fotográfico de la zona a intervenir.</p></li>

                                        <li><p style="text-align: justify; text-justify: inter-word">Especificaciones de diseño y construcción del espacio público.</p></li>                                       
                                   </ol>                               
                                </li>
                              </ol>
                                
                              </div> --}}

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="archivo_documento" class="form-label"> Copia documento de identidad/certificado* </label>
                            <div class="form-group">
                                <div class="file-loading">
                                    <input class=" @error('adjunto_documentoIdentidad') is-invalid @enderror" id="archivo_documento" accept="application/pdf" name="adjunto_documentoIdentidad" type="file" data-overwrite-initial="true" required>
                                    @error('adjunto_documentoIdentidad')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="archivo_poder" class="form-label">Poder Especial* </label>
                            <div class="form-group">
                                <div class="file-loading">
                                    <input class=" @error('adjunto_poder') is-invalid @enderror" id="archivo_poder" accept="application/pdf" name="adjunto_poder" type="file" data-overwrite-initial="true" required>
                                    @error('adjunto_poder')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="archivo_descripcion" class="form-label">Descripcion del proyecto* </label>
                            <div class="form-group">
                                <div class="file-loading">
                                    <input class=" @error('adjunto_descripcion') is-invalid @enderror" id="archivo_descripcion" accept="application/pdf" name="adjunto_descripcion" type="file" data-overwrite-initial="true" required>
                                    @error('adjunto_descripcion')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            </div>

                            <div class="col-md-6 pl-1 pr-1 pt-3">
                                <label for="archivo_planos" class="form-label">Planos del proyecto* </label>
                            <div class="form-group">
                                <div class="file-loading">
                                    <input class=" @error('adjunto_planos') is-invalid @enderror" id="archivo_planos" accept="application/pdf" name="adjunto_planos" type="file" data-overwrite-initial="true" required>
                                    @error('adjunto_planos')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <h4 class="headline-m-govco">Aviso de privacidad y autorización tratamiento de datos personales</h4>

                                <a class="btn btn-low px-0" href="https://www.bucaramanga.gov.co/Inicio/autorizacion-de-tratamiento-de-datos-personales/" target="_blank">Autorizo el tratamiento de datos personales</a>
                                <label class="checkbox-govco d-inline">
                                   <input type="checkbox" id="AT00" name="tratamiento_datos" checked value="SI" />
                                   <label for="AT00"> </label>
                                </label><br>

                                <a class="btn btn-low px-0" href="https://www.bucaramanga.gov.co/Inicio/autorizacion-de-tratamiento-de-datos-personales/" target="_blank">Acepto términos y condiciones</a>
                                <label class="checkbox-govco d-inline">
                                   <input type="checkbox" id="AT01" name="acepto_terminos" checked value="SI" />
                                   <label for="AT01"> </label>
                                </label>
                                <p class="text-justify">Confirmo que soy mayor de edad y con plena capacidad para diligenciar el presente formulario.
                                   Así mismo declaro que la información aquí suministrada corresponde a la verdad.
                                   Declaro que he leído, entiendo y acepto las políticas de tratamiento de los datos que suministro,
                                   de conformidad con la Ley 1581 de 2012 y demás normas concordantes
                                   <label class="checkbox-govco d-inline">
                                      <input type="checkbox" id="AT02" name="confirmo_mayorEdad" checked  value="SI"/>
                                      <label for="AT02"> </label>
                                   </label>
                                </p>
                             </div>
                             <div class="col-md-11">
                                <p>Acepto que la información aquí registrada sea compartida con otras entidades y/o
                                   terceros vinculados a la Alcaldía de Bucaramanga</p>
                                <div class="form-check-inline">
                                   <label class="radiolist-govco radiobutton-govco">
                                      <input type="radio" name="compartir_informacion" id="rb_si" value="SI" required/>
                                      <label for="rb_si">SI</label>
                                   </label>
                                </div>
                                <div class="form-check-inline">
                                   <label class="radiolist-govco radiobutton-govco">
                                      <input type="radio" name="compartir_informacion" id="rb_no" value="NO"  required/>
                                      <label for="rb_no">NO</label>
                                   </label>
                                </div>
                             </div>
                             <div class="col-md-12 text-left mt-4" style="padding-left: 0px!important">
                                <button style="font-size:15px;" type="submit" class="btn btn-round btn-middle btn_enviar_solicitud" name="consultar" onclick="return confirm('¿Esta seguro de generar esta solicitud ?')">Enviar Solicitud</button>

                                <button style="font-size:15px;" class="btn btn-round btn-middle btn_carga d-none" type="button" disabled><span class="spinner-grow spinner-grow-sm text-primary" role="status" aria-hidden="true"></span> Enviando...</button>
                             </div>
                        
                        </div>
                    </div>
                    </form>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!---contenido de cajas -->

                    <div class="accordion accordion-govco" id="EjemploAccordion-2">
                        <div class="card mb-0">
                            <div class="card-header row no-gutters" id="headingUno">
                                <button class="btn-link row no-gutters collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                        <span class="title">¿Tienes dudas?</span>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                        <div class="btn-icon-close">
                                            <span class="govco-icon govco-icon-minus"></span>
                                            <span class="govco-icon govco-icon-simpled-arrow"></span>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="headingUno"
                                data-parent="#EjemploAccordion-2">
                                <div class="card-body bg-color-selago">
                                    <div class="container">
                                        <p class="form-inline my-0"><span class="govco-icon govco-icon-email"></span> <a
                                                style="color: #3366CC;" href="mailto:contactenos@bucaramanga.gov.co"
                                                target="_blank"> contactenos@bucaramanga.gov.co</a></p>
                                        <p class="form-inline"><span class="govco-icon govco-icon-call-center"></span><a
                                                style="color: #3366CC;" href="tel:0376337000"> (+57)7 633 70 00</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion accordion-govco" id="acc4">
                        <div class="card">
                            <div class="card-header row no-gutters" id="c4">
                                <button class="btn-link row no-gutters collapsed" type="button" data-toggle="collapse"
                                    data-target="#coll4" aria-expanded="false" aria-controls="coll4" id="btn_colapse">
                                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                        <span class="title">¿Como fue tu experiencia durante el proceso?</span>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                        <div class="btn-icon-close">
                                            <span class="govco-icon govco-icon-minus"></span>
                                            <span class="govco-icon govco-icon-simpled-arrow"></span>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div id="coll4" class="collapse" aria-labelledby="c4" data-parent="#acc4">
                                <div class="card-body bg-color-selago">
                                    <div class="row justify-content-center spacer no-gutters">
                                        <div class="col-3 pl-3 pt-2">
                                            <button type="button" id="Facil" class="btn-symbolic-govco align-column-govco"
                                                value="FACIL">
                                                <span class="govco-icon govco-icon-check-cn size-3x"></span>
                                                <span class="btn-govco-text">Facil</span>
                                            </button>
                                        </div>

                                        <div class="col-3 pl-3 pt-2">
                                            <button type="button" id="Dificil" class="btn-symbolic-govco align-column-govco"
                                                value="DIFICIL">
                                                <span class="govco-icon govco-icon-x-cn size-3x"></span>
                                                <span class="btn-govco-text">Dificil</span>
                                            </button>
                                        </div>
                                    </div>


                                    <div class="container text-center">
                                        <button type="button" class="btn btn-round btn-middle btn-block"
                                            id="btn-sugerencias" data-toggle="tooltip" data-placement="right"
                                            title="Después de escribir tus sugerencias oprime FACIL o DIFICIL para enviarlas"
                                            style="">Escribe
                                            tus sugerencias</button><br>
                                        <div id="Texto_sugerencias" style="display: none;">
                                            <p style="color:#3366CC;"> Gracias por compartir tu experiencia</p>
                                        </div>

                                        <div id="text-button" style="padding-bottom: 10px; display: none;">
                                            <label class="text-left small">Escribe tus comentarios</label>
                                            <textarea class="form-control pb-2" rows="5"
                                                placeholder="Queremos conocer tu experiencia, sugerencias y consejos"
                                                id="text-area" maxlength="300" onkeypress="return Direccion(event)"
                                                onkeyup="aMayusculas(this.value,this.id)"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- tercer acordion --}}

                    <div class="accordion accordion-govco pt-0" id="acc3">
                        <div class="card">
                           <div class="card-header row no-gutters" id="c3">
                              <button class="btn-link row no-gutters collapsed" type="button" data-toggle="collapse" data-target="#coll3" aria-expanded="false" aria-controls="coll3">
                                 <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                    <span class="title">Consulto mi Solicitud</span>
                                 </div>
                                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <div class="btn-icon-close">
                                       <span class="govco-icon govco-icon-minus"></span>
                                       <span class="govco-icon govco-icon-simpled-arrow"></span>
                                    </div>
                                 </div>
                              </button>
                           </div>
                           <div id="coll3" class="collapse" aria-labelledby="c3" data-parent="#acc3">
                              <div class="card-body bg-color-selago">
                                 <div class="container text-center">
                                    <button data-toggle="modal" data-target="#ModalConsulta" type="button" class="btn btn-round btn-middle">CONSULTE AQUÍ
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                    


                </div>
            </div>


        </div>
        <!--- container de contenido -->
    </div>


    {{-- MODAL DIRECCIONES --}}

    <div id="ModalDirecciones" class="modal fade center" role="dialog">
        <div class="modal-dialog modal-lg" style="max-width: 1000px!important;">
  
           <!-- Modal content-->
           <div class="modal-content">
              <div class="modal-header" style="background:#E5EEFB;">
  
                 <h4 class="modal-title">Ingresa tu Dirección</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>              
  
                 <div class="modal-body">
                    <div class="row form-row">
  
                       <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><br>
                          <div class="form-group">
                             <label style="color:#111111;" class="input" for="DD01" style="font-family: 'Barlow', sans-serif;"> Calle - Carrera *</label>
                             <select name="DD01" id="DD01" type="text" class="form-control input-md" required="required" title="Selecciona el tipo de indicación inicial para la dirección que desea ingresar">
                                <option value=""></option>
                                @foreach ($Parametros2 as $parametro2)
                                <option value="{{$parametro2->ParDes}}">{{$parametro2->ParDes}}</option>
                                @endforeach

                               
                             </select>
                          </div>
                       </div>
  
                       <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><br>
                          <div class="form-group">
                             <label style="color:#111111;" class="input" for="DD02" style="font-family: 'Barlow', sans-serif;">N° - Nombre * </label>
                             <input id="DD02" name="DD02" type="text" class="form-control" maxlength="20" required="required" title="En este campo se deberá digitar número o nombre según corresponda a la selección en el campo anterior, te recomendamos observar el campo de visualización que se encuentra al final de este módulo para organizar tu dirección correctamente." onkeypress="return NumDoc(event)" onchange="aMayusculas(this.value,this.id)" style="height: 29px!important;">
                          </div>
                       </div>
  
                       <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><br>
                          <div class="form-group">
                             <label style="color:#111111;" class="input" for="DD03" style="font-family: 'Barlow', sans-serif;">Letra </label>
                             <select id="DD03" name="DD03" type="text" class="form-control input-md" title="Selecciona una letra si tu indicación de dirección en el campo anterior contiene esta opción, si no la posee déjala en blanco">
                                <option value=""></option>
                                @foreach ($Parametros1 as $parametro1)
                                <option value="{{$parametro1->ParNom}}">{{$parametro1->ParNom}}</option>
                                @endforeach
                                
                             </select>
                          </div>
                       </div>
  
                       <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"><br>
                          <div class="form-group">
                             <label style="color:#111111;" class="input" for="DD04" style="font-family: 'Barlow', sans-serif;">Numero* </label>
                             <input id="DD04" name="DD04" type="text" class="form-control" maxlength="4" title="Digita en este campo el primer número de tu dirección" onkeypress="return Numeros(event)" required="required" style="height: 29px!important;">
                          </div>
                       </div>
  
                       <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><br>
                          <div class="form-group">
                             <label style="color:#111111;" class="input" for="DD05" style="font-family: 'Barlow', sans-serif;">Letra </label>
                             <select id="DD05" name="DD05" type="text" class="form-control input-md" title="Selecciona una letra si tu indicación de dirección en el campo anterior contiene esta opción, si no la posee déjala en blanco">
                                <option value=""></option>
                                @foreach ($Parametros1 as $parametro1)
                                <option value="{{$parametro1->ParNom}}">{{$parametro1->ParNom}}</option>
                                @endforeach
                             </select>
                          </div>
                       </div>
  
                       <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12"><br>
                          <div class="form-group">
                             <label style="color:#111111;" class="input" for="DD06" style="font-family: 'Barlow', sans-serif;">Numero* </label>
                             <input id="DD06" name="DD06" type="text" class="form-control" maxlength="4" title="Digita en este campo el primer número de tu dirección" onkeypress="return Numeros(event)" style="height: 29px!important;">
                          </div>
                       </div>
  
                       <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><br>
                          <div class="form-group">
                             <label style="color:#111111;" class="input" for="DD07" style="font-family: 'Barlow', sans-serif;">Letra </label>
                             <select id="DD07" name="DD07" type="text" class="form-control input-md" title="Selecciona una letra si tu indicación de dirección en el campo anterior contiene esta opción, si no la posee déjala en blanco">
                                <option value=""></option>
                                @foreach ($Parametros1 as $parametro1)
                                <option value="{{$parametro1->ParNom}}">{{$parametro1->ParNom}}</option>
                                @endforeach
                                
                             </select>
                          </div>
                       </div>
  
                       <div class="col-lg-6 col-md-2 col-sm-12 col-xs-12 caja_ultima"><br>
                          <div class="form-group">
                             <label style="color:#111111;" class="input" for="DD08" style="font-family: 'Barlow', sans-serif;">Complemento </label>
                             <input id="DD08" name="DD08" type="text" class="form-control" maxlength="80" title="Digita en este el complemento de tu direccion" onkeyup="aMayusculas(this.value,this.id)">
                          </div>
                       </div>
  
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br><br>
                          <div class="form-group">
                             <input style="background-color: #004884; color: #FFFFFF; font-weight: bold; border-radius:8px;" name="Direccion" id="DD00" type="text" class="form-control input-md" data-toggle="tooltip" title="Previsualizador de la dirección introducida" data-delay='{"show":"30", "hide":"30"}' placeholder="Pre visualizador de direcciones" required="required" readonly>
                          </div>
                       </div>
  
                      
                    </div>
                 </div>
  
                 <div class="modal-footer">
                    
                    <button style="font-size:15px;" type="button" class="btn btn-round btn-middle btn-outline-info" id="btnDireccion" value="Boton">Ingresar Dirección</button>
                    <button style="font-size:15px;" type="button" class="btn btn-round btn-middle btn-outline-info" data-dismiss="modal">Cerrar</button>
                 </div>
              </form>
           </div>
        </div>
     </div>

     {{-- MODAL CONSULTAR SOLICITUD --}}
     
     <div id="ModalConsulta" class="modal fade center" role="dialog">
        <div class="modal-dialog modal-lg" style="max-width: 1000px!important;">
           <!-- Modal content-->
           <div class="modal-content">
              <div class="modal-header" style="background:#E5EEFB;">
                 <h4 class="modal-title">Consultar Solicitud</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <form method="post" action="{{route('solicitud.consulta')}}">
                @csrf
                 <div class="modal-body">
                    <div class="row form-row">
                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><br>
                          <div class="form-group">
                             <label style="color:#111111;" class="input" for="DD01" style="font-family: 'Barlow', sans-serif;">Buscar Por </label>
                             <select id="VD01" name="tipo_parametro" class="form-control input-md" title="Seleccione la opción para validar el documento" required="required">
                                <option value="">Seleccione</option>
                                <option value="radicado">Numero de radicado</option>                                
                                <option value="ide_responsable">Documento de identificación Solicitante</option>
  
                               </select>
                            </div>
                       </div>  
                       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><br>
                          <div class="form-group">
                             <label style="color:#111111;" class="input" for="DD01" style="font-family: 'Barlow', sans-serif;">Digite Numero </label>
                            <input type="text" name="parametro" id="VD00" class="form-control input-md" title="Seleccione la opción para validar el documento" required="required" onkeypress="return Matricula(event)" onkeyup="aMayusculas(this.value,this.id)" maxlength="40" minlength="5">
      
                          </div>
                       </div>
                    </div>
                 </div>
  
                 <div class="modal-footer">
                   
                    <button type="submit" class="btn btn-round btn-middle btn-outline-info"  id="Boton">Realizar Búsqueda</button>

                    
                    <button type="button" class="btn btn-round btn-middle btn-outline-info" data-dismiss="modal">Cerrar</button>
                 </div>
              </form>
           </div>
        </div>
     </div>
  


@endsection
