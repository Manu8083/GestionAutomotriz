<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gestion Automotriz JP</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/GestionA.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">
<!-- Stylesheet
    ================================================== -->

<link rel="stylesheet" type="text/css"  href="css/stylefront.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script src="js/jquery.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- <div id="preloader">
  <div id="status"> <img src="img/preloader.gif" height="64" width="64" alt=""> </div>
</div> -->
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><i class="fa fa-wrench fa-flip-horizontal"></i> Gestion Automotriz <strong><span class="color">JP</span></strong></a> </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll">Inicio</a></li>
        <!-- <li><a href="#services-section" class="page-scroll">Services</a></li> -->
        <li><a href="#works-section" class="page-scroll">Servicios</a></li>
        <li><a href="#about-section" class="page-scroll">Nosotros</a></li>
        <li><a href="#contact-section" class="page-scroll">Contacto</a></li>
        <li><a href="login.php" class="page-scroll">Admin</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text">
    <h1 class="wow fadeInDown">Gestion Automotriz <strong><span class="color">JP</span></strong></h1>
    <p class="wow fadeInDown">Comprometidos con su tiempo</p>
    <a onclick="Nuevo();" class="btn btn-default btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms">Solicitar Servicio</a> </div>
</header>


<div class="modal" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Nuevo Cliente </h4>
      </div>
      <!-- //formulario -->


      <form role="form" action="" id="FormData" name="frmClientes" onsubmit="Registrar(idP,accion); return false">
          <fieldset>
            <div class="col-lg-12 scroll-form">
              <div class="form-group">
                <label>Nombre</label>
                <input name="nombres" id="nombres" class="form-control" required>
              </div>

              <div class="form-group">
                <label>apellidos</label>
                <input name="apellidos"  class="form-control" required>
              </div>

              <div class="form-group col-lg-6">
                <label>Email</label>
                <input name="email" class="form-control" required>
              </div>

              <div class="form-group col-lg-6">
                <label>Telefonos</label>
                <input name="telefonos" class="form-control" required>
              </div>

              <div class="form-group col-lg-6">
                <label>Marca del vehiculo</label>
                <input name="marca_vehiculo" class="form-control" required>
              </div>

              <div class="form-group col-lg-6">
                <label>Linea</label>
                <input name="modelo" class="form-control" required>
              </div>

              <div class="form-group col-lg-6">
                <label>Año</label>
                <input name="year" class="form-control" required>
              </div>
              <div class="form-group col-lg-6">
                <label>Kilimetraje</label>
                <input name="kilometraje" class="form-control" required>
              </div>
              <div class="form-group">
                <label>comentarios</label>
                <textarea name="comentarios" placeholder="Describa su servicio" rows="8" cols="40" class="form-control" maxlength="250" required></textarea>
            </div>
            <center>
            <input type="radio" name="terminos" value="terminosAceptados" required> Acepto recibir informacion a mi correo electronico o celular.<br>
            <br>
            </center>

              <button type="submit" value="submit" class="btn btn-danger btn-lg">
                <span  aria-hidden="true"></span> Registrar
              </button>


            </div>
        </fieldset>
      </form>


      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-circle" data-dismiss="modal"><i></i>x</button>
      </div>
    </div>
  </div>
</div>



<div id="works-section" class="text-center">
  <div class="container"> <!-- Container -->
    <div class="section-title wow fadeInDown">
      <h2><strong>Nuestros Servicios</strong></h2>
      <hr>
      <div class="clearfix"></div>
      <p>Pensando en nuestros clientes ofrecemos esta clase de servicios para facilitarle cualquier tramite o diligencia que por falta de tiempo no pueda realizar,acompañándolo así en la toma de buenas decisiones para usted y su familia.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <!-- <ol class="type">
            <li><a href="#" data-filter="*" class="active">Todos</a></li>
            <li><a href="#" data-filter=".Prioritarios">Prioritarios</a></li>
            <li><a href="#" data-filter=".Preventivos">Preventivos</a></li>
            <li><a href="#" data-filter=".Otros">Otros</a></li>
          </ol> -->
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-4 Preventivos">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="200ms">
            <div class="hover-bg"> <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Cambio de Aceite y Mantenimiento Preventivo a Domicilio.</h4>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/01.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-4 Prioritarios">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="400ms">
            <div class="hover-bg"> <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Mecánica Especializada.</h4>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/02.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-4 Prioritarios">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="600ms">
            <div class="hover-bg"> <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Lujos y Accesorios</h4>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/lujos.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-4 Preventivos">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="800ms">
            <div class="hover-bg"> <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Lamina y Pintura</h4>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/04.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-4 Otros">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="1000ms">
            <div class="hover-bg"> <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Peritaje a Domicilio</h4>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/05.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-4 Otros">
          <div class="portfolio-item wow fadeInUp" data-wow-delay="1200ms">
            <div class="hover-bg"> <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
              <div class="hover-text">
                <h4>Asesoría en Compra y Venta <br> De Vehículos</h4>
                <div class="clearfix"></div>
                <i class="fa fa-plus"></i> </div>
              <img src="img/portfolio/06.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title text-center wow fadeInDown">
      <h2><strong>Nosotros</strong></h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="col-md-6 wow fadeInLeft">

            <center>
              <div class="thumbnail"> <img src="img/GestionLogo.jpg" alt="..." class="img-circle team-img">
                <div class="caption">
                  <p>Somos una empresa con mas de <b>10 años</b> de experiencia en el sector automotriz, contamos con personal altamente calificado y equipos especializado para brindar siempre un mejor servicio o asesoria segun la necesidad de nuestros clientes.</p>
                      <a href="https://www.facebook.com/GestionAutomotrizJP1" target="_blank"><i class="fa fa-facebook-square fa-2x"></i> </a>

                </div>
              </div>
          </center>


    </div>
      <div class="col-md-6 wow fadeInRight">
          <h4><strong>Mision</strong></h4>
          <p>Gestión automotriz es una empresa comprometida en brindar soluciones efectivas y
                de calidad a sus clientes, pensando siempre en el acompañamiento y respuesta rápida
                en los temas relacionados con sus vehículos , ofreciendo así servicios innovadores que
                garantizan al cliente mejor aprovechamiento de su tiempo.</p>
          <div class="space"></div>
          <h4><strong>Vision</strong></h4>
          <p>Ser una empresa líder a nivel nacional, manteniendo excelentes niveles de calidad y
            servicio para nuestros clientes.</p>
          <div class="space"></div><div class="list-style">
            <div class="row">
              <div class="col-lg-6 col-sm-6 col-xs-12">
                <ul>
                <li>Responsabilidad y cumplimiento</li>
                <li>Asesoria automotriz</li>
                <li>Personal Capacitado</li>
                </ul>
              </div>
              <div class="col-lg-6 col-sm-6 col-xs-12">
                <ul>
                    <li>Nos Acomodamos a su tiempo </li>
                    <li>Precios Cómodos</li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>


<div id="contact-section" class="text-center">
  <div class="container">
    <div class="section-title wow fadeInDown">
      <h2><strong>Contacto</strong></h2>
      <hr>
      <p>Dejanos tu mensaje, entraremos en contacto lo mas pronto posible.</p>
    </div>
    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="200ms">
      <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
        <p class="font-contact">Tu lugar de preferencia</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p class="font-contact">servicio@gestionautomotriz.co</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-whatsapp fa-2x"></i>
        <p class="font-contact">315 614 2071 - 313 818 8501</p>
        <p></p>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="400ms">
	<h3>Tu Mensaje</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Nombre" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input type="text" id="modelo" class="form-control" placeholder="Modelo del vehiculo" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mensaje" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Enviar Mensaje</button>
      </form>
      <div class="social">
        <ul>
          <li><a href="https://www.facebook.com/GestionAutomotrizJP1"><i class="fa fa-facebook"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
      <p>Copyright © GestionAutomotriz.co - 2016</a></p>
  </div>
</div>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Cambio de Aceite y Mantenimiento Preventivo a Domicilio.</h2>
            <img class="img-responsive img-centered" src="img/portfolio/01.jpg" alt="">
            <p style="font-size:15px; text-align: justify;">Sabemos que la falta de tiempo es causa de no realizar los mantenimientos para su
                vehículo en el momento y kilometraje indicado, por eso ofrecemos un servicio
                diferente y de calidad para cumplir con los temas básicos de mantenimiento que su
                automóvil requiere y así no poner en riesgo el buen uso del mismo y la seguridad de
                los pasajeros.
                <br>
                <br>
                Tan solo con una llamada puede solicitar un técnico especializado quien lo atenderá
                para realizar cambio de aceite, revisión de frenos, revisiones eléctricas y ajustes
                básicos en el lugar de su elección sea casa, oficina o negocio, sin necesidad de perder
                tiempo, pasar por incomodidades o simplemente sacrificar su descanso.
            </p>
            <li class="list-inline" style="text-align: left;">
              <ul>- Cambio de Aceite y Filtros</ul>
              <ul>- Revisión de Kilometraje y Mantenimiento</ul>
              <ul>- Revisión y Ajuste de Frenos</ul>
              <ul>- Revisión y Ajuste de Suspensión</ul>
              <ul>- Revisión Parámetros de Sincronización</ul>
              <ul>- Revisión de Líquidos en General</ul>
              <ul>- Revisión y Mantenimiento Eléctrico</ul>
              <ul>- Servicio de Escáner</ul>
              <ul>- Remplazo Filtro Aire Acondicionado</ul>
              <ul>- Revisión y Carga de Aire Acondicionado</ul>
              <ul>- Baterías</ul>
              <ul><strong>Estos servicios y mas, En el lugar de su elección.</strong></ul>
          </li>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Mecánica Especializada.</h2>
            <img class="img-responsive img-centered" src="img/portfolio/02.jpg" alt="">
            <p style="font-size:15px; text-align: justify;">Contamos con técnicos especializados en todas las marcas capaces de realizar
                cualquier clase de diagnostico y reparación para su vehículo, dando los mejores
                precios del mercado, con la mejor calidad y garantía sobre la mano de obra y
                repuestos. Nuestros conductores elegidos se encargaran de recoger su vehículo y
                regresarlo al lugar de su elección dándole a usted la oportunidad de no perder su
                valiosos tiempo. Para la tranquilidad de nuestros clientes permitimos que monitoreen
                los trabajos realizados a su vehículo desde nuestra pagina web.</p>
            <li class="list-inline" style="text-align: left;">
              <ul>- Sincronización de Motor</ul>
              <ul>- Remplazo Correas de Repartición</ul>
              <ul>- Remplazo de Embrague</ul>
              <ul>- Remplazo y Ajustes de Suspensión</ul>
              <ul>- Remplazo y Ajuste de Frenos</ul>
              <ul>- Reparación de Motor</ul>
              <ul><strong>Y muchos servicios mas, en manos de técnicos especializados con los mejores precios.</strong></ul>
          </li>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Lujos y Accesorios</h2>
            <img class="img-responsive img-centered" src="img/portfolio/03.jpg" alt="">
            <p style="font-size:15px; text-align: justify;">
                Ofrecemos toda clase de accesorios y seguros para su vehículo, como lo es desde unos
                pernos de seguridad para los rines hasta un radio de ultima generación, lo cual según
                su necesidad se instalara en el sitio de su elección sea casa, oficina o negocio,
                contamos con técnicos especializados quienes garantizaran un excelente trabajo de
                calidad, todo esto pensando en el tiempo de nuestros clientes.
            </p>
            <li class="list-inline" style="text-align: left;">
              <ul>- Pernos y Tuercas de Seguridad</ul>
              <ul>- Películas de Seguridad</ul>
              <ul>- Seguros Para Espejos</ul>
              <ul>- Seguros de Lunas</ul>
              <ul>- Seguros de Emblemas</ul>
              <ul>- Alarma y Bloqueo</ul>
              <ul>- Eleva vidrios</ul>
              <ul>- Modulo Eleva vidrios</ul>
              <ul>- Sensores de Reversa</ul>
              <ul>- Radios de Pantalla y Sonido Profesional</ul>
              <ul><strong>Todo esto y mucho mas instalado por técnicos especializados en el lugar de su elección.</strong></ul>
          </li>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Lamina y Pintura</h2>
            <img class="img-responsive img-centered" src="img/portfolio/04.jpg" alt="">
            <p style="font-size:15px; text-align: justify;">Contamos con técnicos especializados en el área de las colisiones los cuales nos
                permiten asegurarle la calidad y rapidez sobre servicios relacionados, y brindando así
                una gran satisfacción del cliente, de igual manera nuestros conductores elegidos se
                encargaran de recoger su vehículo y regresarlo al lugar de su elección dándole a usted
                la oportunidad de no perder su valiosos tiempo. Para la tranquilidad de nuestros
                clientes permitimos que monitoreen los trabajos realizados a su vehículo desde
                nuestra pagina web.</p>
            <li class="list-inline" style="text-align: left;">
              <ul>- Pintura Exprés</ul>
              <ul>- Retoques Puntuales</ul>
              <ul>- Pintura Exterior</ul>
              <ul>- Pintura General</ul>
              <ul>- Reparación de golpes</ul>
              <ul>- Ajuste de Piezas</ul>
              <ul>- Reparación de Colisiones Fuertes</ul>
              <ul>- Modulo Eleva vidrios</ul>
              <ul>- Sensores de Reversa</ul>
              <ul>- Radios de Pantalla y Sonido Profesional</ul>
              <ul><strong>Estos trabajos en manos de técnicos especializados, Garantizando así calidad en el menor tiempo posible.</strong></ul>
          </li>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Peritaje a Domicilio</h2>
            <img class="img-responsive img-centered" src="img/portfolio/05.jpg" alt="">
            <p style="font-size:15px; text-align: justify;">Sabemos que al comprar un vehículo usado se siete bastante curiosidad por saber el
                estado general del mismo, y así estar tranquilos al momento de la negociación. Por
                esto tenemos personal experto en conocer el estado de un automotor, el cual se
                movilizara hasta el lugar que usted elija e indicara las condiciones generales para que
                usted pueda tomar la mejor decisión, sin necesidad de pagar precios exagerados ni
                someterse a largas filas por escuchar un diagnostico.</p>
            <li class="list-inline" style="text-align: left;">
              <ul>- Revisión Estructural del Vehículo</ul>
              <ul>- Revisión Estado Motor del Vehículo</ul>
            <ul>- Revisión Puntual de Daños</ul>
              <ul>- Diagnostico General del Automotor</ul>
              <ul><strong>Este servicio el cual también se presta a domicilio, lo ayudara en la toma de una buena
              decisión al momento de adquirir o negociar un vehículo, dando una clara información
              del estado del mismo.</strong></ul>
          </li>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl"> </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2>Asesoría en Compra y Venta De Vehículos</h2>
            <img class="img-responsive img-centered" src="img/portfolio/06.jpg" alt="">
            <p style="font-size:15px; text-align: justify;">Para todas las personas interesadas en adquirir vehículo nuevo o usado le brindamos
                asesoría y acompañamiento para la toma de una buena decisión, desde la gestión de
                crédito hasta la ubicación de un vehículo con las características de su elección, sin
                necesidad que pierda tiempo en tramites engorrosos.</p>
                <li class="list-inline" style="text-align: left;">
                  <ul>- Gestión de Crédito Para Vehículo Hasta del 100%</ul>
                  <ul>- Acompañamiento en Compra de vehículo Usado</ul>
                <ul>- Venta de Vehículos Nuevos o Usados según su elección</ul>
                  <ul>- Gestionamos la Venta de su Vehículo Usado</ul>
                  <ul><strong>Pensando en nuestros clientes ofrecemos esta clase de servicios para facilitarle
                  cualquier tramite o diligencia que por falta de tiempo no pueda realizar,
                  acompañándolo así en la toma de buenas decisiones para usted y su familia</strong></ul>
              </li>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/codigo.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<!-- <script type="text/javascript" src="js/jqBootstrapValidation.js"></script> -->
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>


<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
