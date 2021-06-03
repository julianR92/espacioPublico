<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- Icono -->
   <link href="{{asset('img/icono.png')}}" rel="icon">
   <link href="{{asset('img/icono.png')}}" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
   <link href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
   <link href="https://cdn.www.gov.co/v2/assets/cdn.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('css/step.css')}}">

    {{-- animate css --}}

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

   {{-- LIBRARY INPUT FILE --}}
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
   <link href="{{asset('library/BoostrapFile/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
   <link href="{{asset('library/BoostrapFile/themes/explorer-fas/theme.css')}}" media="all" rel="stylesheet" type="text/css"/>
   {{-- datatables--}}
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.css">

   <!-- SCRIPTS -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    {{-- DATATABLES --}}
    <!-- js jquery datatable -->
   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
   <script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>
    {{-- LIBRARY INPUT FILE --}}
    <script src="{{asset('library/BoostrapFile/js/plugins/piexif.js')}}" type="text/javascript"></script>
    <script src="{{asset('library/BoostrapFile/js/plugins/sortable.js')}}" type="text/javascript"></script>
    <script src="{{asset('library/BoostrapFile/js/fileinput.js')}}" type="text/javascript"></script>    
    <script src="{{asset('library/BoostrapFile/js/locales/es.js')}}" type="text/javascript"></script>
    <script src="{{asset('library/BoostrapFile/themes/fas/theme.js')}}" type="text/javascript"></script>
    <script src="{{asset('library/BoostrapFile/themes/explorer-fas/theme.js')}}" type="text/javascript"></script>

    <!-- llamados funciiones gov.co -->
    <script type="text/javascript"  src="{{ asset('js/validate.js') }}"></script>
   <script type="text/javascript"  src="https://cdn.www.gov.co/v2/assets/js/utils.js"></script>

   

    <title>{{ config('app.name', 'Intervencion Espacio Publico') }}</title>


</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-govco navbar-expanded">
        <div class="navbar-container container pl-2">
              <div class="navbar-logo float-left">
                 <a class="navbar-brand" href="https://www.gov.co/">
                    <img src="https://cdn.www.gov.co/assets/images/logo.png" height="30" alt="Logo Gov.co" />
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapsible" aria-controls="navbarCollapsible" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>
              </div>
              <div class="collapse navbar-collapse float-right">
                 <div class="nav-primary mx-auto">
                    <ul class="navbar-nav ml-auto nav-items nav-items-desktop">
                    </ul>
                 </div>
                 <div class="nav-link ml-auto mr-2 text-white">
                    <p class="content-link my-0">
                       <a class="btn-low" href="https://www.gov.co/">
                          Ir a Gov.co
                       </a>
                    </p>
                 </div>
              </div>
       </div>
        <div class='nav-secondary show-transition' id="nav-secondary" style="background: #FFF!important">
        <!--<div class="container">
           <div class="collapse navbar-collapse navbar-first-menu">
              <ul class="navbar-nav w-100 d-flex nav-items nav-items-desktop">
                 <li class="nav-item">
                    <a href="https://www.bucaramanga.gov.co/Inicio/" target="_blank" class="nav-link">Pagina Principal</a>
                 </li>
                 <li class="nav-item active">
                    <a href="/ficha-tramites-y-servicios/" class="nav-link">Trámites y servicios</a>
                 </li>           
                 
              </ul>
           </div>
        </div>--->
        </div>
        <div class="navbar-nav navbar-notifications" id="notificationHeader"></div>
     </nav>

     <section class="container">
      <div class="row" style="padding-top: 6%;">
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="container-fluid">
               <img src="{{ asset('img/logo.png') }}" class="img-fluid float-left mt-2" width="80px" height="60px">

            </div>
         </div>
      </div>
   </section>

   
   <main class="py-4">
      @yield('content')
  </main>
  {{-- inlcude sweetalert  --}}
    @include('sweetalert::alert') 
     <footer>
       <div class="container-fluid px-0"> 
      <div class="footer page__footer footer-white footer-blue">
         <div class="container">
            <div class="footer-container" id="footer-container">

               <div class="nav-footer icon-white  nav-pills nav-pills-icons icon-white d-flex justify-content-center bd-highlight">
                  <div class="item-footer border-right col-md-2">
                     <div class="d-flex justify-content-center">
                        <a class="navbar-brand" href="https://www.gov.co/" style="padding:0!important;">
                           <img src="https://cdn.www.gov.co/assets/images/logo.png" height="40" alt="Logo Gov.co" />
                        </a>
                     </div>
                     <div class="d-flex justify-content-center mt-3">
                        <a class="navbar-brand" href="https://www.gov.co/" style="padding:0!important;">
                           <img src="{{ asset('img/logo_colombia.png') }}" height="100px" alt="Logo Gov.co" />
                        </a>
                     </div>
                  </div>
                  <div class="item-footer col-md-5 border-right">
                     <div class="px-3">
                        <p class="font-weight-bold">Alcaldía de Bucaramanga</p>
                        <p>Nit:890 201 222-0</p>
                        <p>Dirección: Fase I: Calle 35 # 10-43.</p>
                        <p>Fase II: Carrera 11 # 34-52.</p>
                        <p>Código Postal: 680006. Código Dane: 68001.</p>
                        <p>Horario de Atención: Lunes a viernes de 6:00 a.m. a 02:00 p.m. jornada contínua</p>
                        <br>
                        <div class="row">
                           <div class="col-md-1">
                              <a href="https://www.facebook.com/alcaldiadebucaramanga/"><i class="fa fa-facebook fa-2x text-white"></i></a>
                           </div>
                           <div class="col-md-1">
                              <a href="https://twitter.com/AlcaldiaBGA"><i class="fa fa-twitter fa-2x text-white"></i></a>
                           </div>
                           <div class="col-md-1">
                              <a href="https://www.youtube.com/user/PrensaBucaramanga"><i class="  fa fa-youtube-play fa-2x text-white"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item-footer col-md-3">
                     <div class="px-3">
                        <p class="font-weight-bold">Contacto</p>
                        <p>Conmutador: (57+7) 633 70 00</p>
                        <p>Atención a la Ciudadanía: (57+7) 652 55 55</p>
                        <p>Fax: (57+7) 652 17 77</p>
                        <p>Centro Integral de la Mujer - Violencia Intrafamiliar: 6351897.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </footer>

    <!--- cdn  GOV.CO --->
    <script type="text/javascript"  src="{{ asset('js/funciones.js') }}"></script>
    
        
</body>
</html>