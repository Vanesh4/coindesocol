<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body>
    @include('layouts.nav')

    <div class="wrapper my-4">
        <div class="page-header page-header-small">
            <!-- <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg11.jpg');">
            </div> -->
            <div class="content-center">
                <div class="container">
                    <h1 class="title">Servicios</h1>
                    <div class="text-center">
                        La Corporación ofrece los siguientes servicios:
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-10 ml-auto col-xl-8 mr-auto">
                    <p class="category">ACTIVIDADES DE CONSULTORÍA EN GESTIÓN EMPRESARIAL Y JURÍDICA</p>
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#settings1" role="tab" aria-selected="true">1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#home1" role="tab" aria-selected="false">2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab" aria-selected="false">3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages1" role="tab" aria-selected="false">4</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="settings1" role="tabpanel">
                                    <strong>Asesoría, orientación y asistencia operacional a empresas en:</strong>
                                    <p>1. Planificación estratégica y organizacional</p>
                                    <p>2. Gestión financiera </p>
                                    <p>3. Objetivos y políticas de comercialización </p>
                                    <p>4. Planificación de la producción </p>
                                    <p>5. Políticas, prácticas y planeación.</p>
                                </div>
                                <div class="tab-pane" id="home1" role="tabpanel">
                                    <strong>Los servicios que se prestan pueden abarcar asesoramiento, orientación y asistencia operativa a la administración pública en materia de:</strong>
                                    <p>1. Relaciones públicas y comunicaciones.</p>
                                    <p>2. Actividades de lobby. </p>
                                    <p>3. Diseño de métodos o procedimientos contables</p>
                                    <p>4. Programas de contabilidad de costos</p>
                                    <p>5. Procedimientos de control presupuestario.</p>
                                </div>
                                <div class="tab-pane" id="profile1" role="tabpanel">

                                    <strong>Asesoramiento y Gestión Empresarial en las <strong>zonas francas</strong> o empresas que se dedican a la producción de bienes o servicios destinados prioritariamente a los mercados externos.</strong>
                                </div>
                                <div class="tab-pane" id="messages1" role="tabpanel">
                                    <strong>Servicios de Asistencia y Representación legal con profesionales del Derecho especializados en todas las áreas.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-10 ml-auto col-xl-8 mr-auto">
                    <p class="category">GESTIÓN ADMINISTRATIVA DE SERVICIOS DE SALUD, EDUCACIÓN, CULTURALES Y DE SERVICIOS SOCIALES</p>
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#settings3" role="tab" aria-selected="true">1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#home3" role="tab" aria-selected="false">2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile3" role="tab" aria-selected="false">3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages3" role="tab" aria-selected="false">4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#links3" role="tab" aria-selected="false">5</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="settings3" role="tabpanel">
                                    <strong>Administración pública de programas destinados a aumentar el bienestar social de la comunidad en materia de: </strong>
                                    <p>Salud, Educación, Cultura, Deporte, Servicios recreativos, Medio ambiente, Vivienda y Servicios sociales. </p>
                                </div>
                                <div class="tab-pane" id="home3" role="tabpanel">
                                    <strong>Regulación y orientación de las actividades de organismos que prestan servicios a la comunidad en general.</strong>
                                </div>
                                <div class="tab-pane" id="profile3" role="tabpanel">
                                    <strong>Aplicación de las políticas de investigación y desarrollo orientadas a aumentar el bienestar social de la comunidad y la administración de los fondos pertinentes. </strong>
                                </div>
                                <div class="tab-pane" id="messages3" role="tabpanel">
                                    <strong>GESTIÓN ADMINISTRATIVA EN:</strong>
                                    <p>1. Administración de programas de suministro de agua potable. </p>
                                    <p>2. Administración de servicios de recolección y disposición de residuos. </p>
                                    <p>3. Administración de programas de protección ambiental </p>
                                    <p>4. Administración de programas de vivienda.</p>
                                </div>
                                <div class="tab-pane" id="links3" role="tabpanel">
                                    <strong>ACTIVIDADES DE INSPECCIÓN, VIGILANCIA Y CONTROL A:</strong>
                                    <p>1. Entidades y empresas prestadoras de servicios públicos domiciliarios así como su regulación.</p>
                                    <p>2. Entidades que prestan servicios de salud en relación con el cumplimiento de las disposiciones legales.</p>
                                    <p>3. El ordenamiento ambiental del territorio y la recuperación, conservación, protección, ordenamiento, manejo, uso y aprovechamiento sostenible de los recursos naturales.</p>
                                    <p>4. Las actividades en materia cultural, deportiva y recreativa, de modo que sea coherente con los planes de desarrollo institucionales, con los principios fundamentales y de participación. </p>
                                    <p>5. Actividades y participación en la formulación de las políticas en materia de pensiones y riesgos profesionales.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-10 ml-auto col-xl-6 mr-auto">
                    <p class="category">ACTIVIDADES EMPRESARIALES Y DE EMPLEADORES</p>
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#settings4" role="tab" aria-selected="true">1</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="settings4" role="tabpanel">
                                    <strong>LA CORPORACIÓN PARTICIPA EN LAS SIGUIENTES ACTIVIDADES DE EMPRESAS:</strong>
                                    <p>1. Actividades que se centren principalmente en el desarrollo y la prosperidad de las empresas o gremios.</p>
                                    <p>2. Las actividades de las cámaras de comercio y asociaciones similares. </p>
                                    <p>3. Actividades de representación ante organismos públicos, relaciones públicas y negociaciones laborales de las asociaciones empresariales y de empleadores.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 ml-auto col-xl-6 mr-auto">
                    <p class="category">ACTIVIDADES DE ASOCIACIONES PROFESIONALES</p>
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#settings5" role="tab" aria-selected="true">1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#home5" role="tab" aria-selected="false">2</a>
                                </li>
                               
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="settings5" role="tabpanel">
                                    <strong>Actividades con disciplina científica, práctica profesional o campo técnico, tales como:</strong>
                                    <p>1. Asociaciones de médicos</p>
                                    <p>2. Juristas</p>
                                    <p>3. Contadores</p>
                                    <p>4. Ingenieros y Arquitectos, entre otras. </p>
                                    <p>5. La Academia de Medicina y el Colegio de Abogados. </p>
                                </div>
                                <div class="tab-pane" id="home5" role="tabpanel">
                                    <strong>Actividades en asociaciones con fines culturales, tales como:</strong>
                                    <p>1. Asociaciones de escritores</p>
                                    <p>2. Pintores</p>
                                    <p>3. Artistas de diversos tipos</p>
                                    <p>4. Periodistas</p>
                                    <p>5. Actividades de sociedades Científicas. </p>
                                    <p>6. Actividades para el cumplimiento de normas profesionales, representación ante organismos públicos y relaciones públicas de las asociaciones profesionales.</p>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('layouts.footer')


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