<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Kit by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  @include('layouts.nav')
  <!-- End Navbar -->

  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="black">
      <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/banner-principal-fondo.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <!-- <img class="n-logo" src="./assets/img/now-logo.png" alt=""> -->
          <!-- <h1 class="h1-seo" style="color: black;">COINDESCOCOL</h1> -->
          <h1 style="color: black;  font-size: 80px;">COINDESOCOL</h1>
          <h4 style="color: black;">CORPORACIÓN INTEGRAL PARA EL DESARROLLO SOCIAL DE COLOMBIA Y DEL ENTORNO
            LATINOAMERICANO</h3>
        </div>
      </div>
    </div>
    <div class="main">
    </div>
    <!-- End .section-navbars  -->
    <div class="section section-tabs">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ml-auto col-xl-10 mr-auto">
            <p class="category">Nuestros Servicios</p>
            <!-- Nav tabs -->
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                      <i class="now-ui-icons objects_umbrella-13"></i> Asesoria Empresarial
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                      <i class="now-ui-icons shopping_cart-simple"></i> Administración Pública
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                      <i class="now-ui-icons shopping_shop"></i> Actividad Empresa
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                      <i class="now-ui-icons ui-2_settings-90"></i> Grupos Profesionales
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <!-- Tab panes -->
                <div class="tab-content ml-5">
                  <div class="tab-pane active" id="home" role="tabpanel">
                    <p>1. Planificacion estrategica y organizacional</p>
                    <p>2. Gestion financiera</p>
                    <p>3. Objetivos y politicas de comercializacion</p>
                    <p>4. Planificación de la producción</p>
                    <p>5. Politicas, practicas</p>
                  </div>
                  <div class="tab-pane" id="profile" role="tabpanel">
                    <p>1. Salud</p>
                    <p>2. Deporte</p>
                    <p>3. Cultura</p>
                    <p>4. Vivienda</p>
                    <p>5. Servicios Sociales</p>
                  </div>
                  <div class="tab-pane" id="messages" role="tabpanel">
                    <p>1. Actividades que se centren principalmente en el desarrollo y la properidad de las empresas y
                      gremios</p>
                    <p>2. Actividades de las cámaras de comercio y asociaciones similares.</p>
                    <p>3. Actividades de representacion ante organismos publicos, relaciones</p>
                    <p>4. Planificación de la producción</p>
                    <p>5. Politicas, practicas</p>
                  </div>
                  <div class="tab-pane" id="settings" role="tabpanel">
                    <p>1. Planificacion estrategica y organizacional</p>
                    <p>2. Gestion financiera</p>
                    <p>3. Objetivos y politicas de comercializacion</p>
                    <p>4. Planificación de la producción</p>
                    <p>5. Politicas, practicas</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- End Section Tabs -->



    <div class="section section-nucleo-icons">
      <div class="container">
        <div class="row align-items-center ">
          <div class="col-lg-7 col-md-12">
            <h2 class="title">Capacitación en gestión de proyectos de alto impacto</h2>
            <h5 class="description">
              Capacitación de Lideres sociales en proyectos productivos de alto impacto social en la region del bajo
              Cauca
            </h5>
            <a href="https://drive.google.com/file/d/1yk1H9k_75N0h7eqBKWxdzYhmglGWEKB5/view" class="btn btn-primary btn-round btn-lg" target="_blank">Ver Documento</a>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="row align-items-center">
              <a href="https://drive.google.com/file/d/1yk1H9k_75N0h7eqBKWxdzYhmglGWEKB5/view">
                <img src="/assets/img/ImgCapacitacion.png" style="width: 90%;" class="rounded img-raised mt-auto">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-12">
            <div class="align-items-center">
              <img src="/assets/img/ImgDonacion.png" class="rounded img-raised">
            </div>
          </div>
          <div class="col-lg-7 col-md-12">
            <h2 class="title">Realiza tu donación para ayudar a la población</h2>
            <h5 class="description">
              Realice sus donaciones para ayudar a comunidades víctimas de la violencia y a los más necesitados, para
              combatir el hambre y la desigualdad, para generar desarrollo económico apoyando al campo y a nuestros
              campesinos y para financiar proyectos productivos que beneficien al país.
            </h5>
            <a href="" class="btn btn-primary btn-round btn-lg" target="_blank">Aportes</a>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
      <div class="container">
        <div class="card">
          <div class="card-header"></div>
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-3 m-2">
                <video controls style="width: 100%;">
                  <source src="assets/img/Planeación Coindesocol Adecuacion de Instalaciones unidad educativa Fusagasugá.mp4" type="video/mp4">
                </video>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Gestión obras de mantenimiento COINDESOCOL en Fusagasugá</h5>
                </div>
              </div>
              <div class="col-3 m-2">
                <video controls style="width: 100%;">
                  <source src="assets/img/Gestión obras de mantenimiento COINDESOCOL_480p.mp4" type="video/mp4">
                </video>
                <!-- <div class="carousel-caption d-none d-md-block">
                  <h5>Nature, United States</h5>
                </div> -->
              </div>
              <div class="col-3 m-2">
                <video controls style="width: 100%;">
                  <source src="assets/img/Planeación Coindesocol por más cupos escolares en fusagasugá.mp4" type="video/mp4">
                </video>
                <!-- <div class="carousel-caption d-none d-md-block">
                  <h5>Nature, United States</h5>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center justify-content-center">
      <div class="col-lg-7 col-md-12">
        <img src="./assets/img/CertificacionComisionInteramericana.jpg" alt="">
      </div>
    </div>
    </div>


    

    <div class="section section-download" id="#download-section" data-background-color="black">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="text-center col-md-12 col-lg-8">
            <h3 class="title">Conoce nuestra Historia</h3>
            <h5 class="description">
              La corporación Coindesocol es una entidad sin ánimo de lucro que se fundó en el año 2020 como una organización que representa los intereses de los colombianos y latinoamericanos ante la necesidad de fomentar la articulación y el diálogo entre los gobiernos, los gremios y el sector privado, también para aportar al crecimiento del sector productivo por medio...
            </h5>
            <div class="col-md-12">
              <a href="/nosotros" class="btn btn-neutral btn-round btn-lg">
                <i class="now-ui-icons arrows-1_minimal-right"></i> Conocer Mas
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer class="footer" data-background-color="black">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="#">
                coindesocol@gmail.com
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                3194089689 - 3202526741 - 3108185942
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Dg 77 b # 116 – 51 Bogotá, Colombia
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="" target="_blank">Invision</a>. Coded by
          <a href="" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>