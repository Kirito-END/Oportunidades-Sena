<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Oportunidades Sena</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <style media="screen">
  .btn-circle {
width: 30px;
height: 30px;
padding: 6px 0px;
border-radius: 15px;
text-align: center;
font-size: 12px;
line-height: 1.42857;
}
#a{
width: 15%;
height: 10%;
margin-top: -2%;
}
#img{
  margin-bottom: -27%;
  margin-left: 25%;
}
</style>

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <nav class="main-nav d-lg-block">
        <ul>
          <li class="active">
            <a class="navbar-brand" id="a" href="{{ url('/') }}">
                <img src="img/logo-sena.png" alt="" width="80%">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
          </li>
          <li>
            <ul class="navbar-nav mr-auto">
              <div class="form-row">
                <form action="#" method="post" class="form-inline my-2 my-lg-0">
                  @csrf
                  <div class="form-group col-md-12">
                    <input type="search" aria-label="Search" name="razon_social" value=""
                    placeholder="Buscar Oportunidad" class="form-control mr-sm-2 p-2">
                    <button type="submit" name="button" class="btn btn-info my-2 my-sm-0 btn-circle">
                      <img src="img/open-iconic-master/png/magnifying-glass-2x.png" alt="">
                    </button>
                  </div>
                </form>
              </div>
              </ul>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                </li>
            @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('index') }}">{{ __('Panel de control') }}</a>
                </li>
            @endguest
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Bienvenido a<br>Oportunidades <span>Sena</span></h2>
          <div>
            {{--<a href="{{route('ver')}}" class="btn-get-started scrollto">Consulta Aqui</a>--}}
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/Imagen1.png" alt="" class="img-fluid" id="img">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Que es el Sena
    ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/sena.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>Que es el Sena?</h2>
              <h3>Cultura de calidad para la sociedad.</h3>
              <p>El Sena (Servicio nacional de Aprendizaje) es un establecimiento publico de orden nacional, con personeria Judirica, patrimnio propio e independiente, y con autonomia administrativa.
</p>
              <p>El sena ofrece formacion gratuita a millonesde colombianos que se benefician con programas tecnicos, tecnologos y complementarios enfocados al desarrollo economico, tecnologico y social del pais.
              <a href="http://www.sena.edu.co/es-co/Paginas/default.aspx">Pagina principal</a></p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Has tus pasantias en el sena.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


    <!--==========================
      Servicios y Oportunidades
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Servicios y Oportunidades</h3>
          <p>Estos son los Servicios y Oportunidades que da el Sena a las empresas</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-book-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Formacion para el Trabajo</a></h4>
              <p class="description">Inicia una formacion en el sena para prepararte para el mundo laboral.
              <a href="http://www.sena.edu.co/es-co/Paginas/default.aspx" align="center">Mas Informacion</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Cursos Cortos Gratuitos</a></h4>
              <p class="description">Has complementarios o tecnicos en el Sena para reforzar o iniciar en un ambiente laboral</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Contratos de Aprendizaje</a></h4>
              <p class="description">Tienes la oportunidad de hacer tu etapa practica en una empresa como si ubieras comenzado a trabajar con la empresa.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Que son las Oportunidades Sena
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">

        <header class="section-header">
          <h3>Que son las Oportunidades Sena</h3>
          <p>Las oportunidades Sena son convenios del sena con empresas externas.</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="img/sena-1.jpg" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>Las oportunidades Sena son propuestas, estimulos, orientaciones, etc que propone una empresa al Sena para
              que sus trabajadores se capaciten, y vallan aprendiendo mas cosas sobres sus trabajos. Tambien es un medio por donde se pueden hacer contratos con el sena y asi conseguir trabajadores eficientes
              para la empresa.{{--<a href="{{route('oportu')}}">Consulta Aqui</a>--}}</p>

              <div class="features wow bounceInUp clearfix">
                <i class="ion-ios-paper-outline" style="color: #f058dc;"></i>
                <h4>Comó proponer un a oportunidad?</h4>
                <p>Tu o tu empresa puede proponer una oportunidad de aprendizaje o de empleo al sena...</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="ion-ios-bookmarks-outline" style="color: #ffb774;"></i>
                <h4>Mira tu oportunidad</h4>
                <p>Tu puedes ver como va y quien esta haciendo el proceso de la oportunidad que solicitaste ante el sena {{--<a href="{{route('oportu')}}">Consulta Aqui</a>--}}</p>
              </div>


            </div>

          </div>

        </div>

      </div>


  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-links">
                    <h4>Contactos</h4>
                    <p>
                      Popayán <br>
                      Cauca, NY 535022<br>
                      Colombia <br>
                      <strong>Celular:</strong> +57 3058172745<br>
                      <strong>Correo:</strong> daalean4@misena.edu.co<br>
                    </p>
                    <p>
                      Popayán <br>
                      Cauca, NY 535022<br>
                      Colombia <br>
                      <strong>Celular:</strong> +57 3199393754<br>
                      <strong>Correo:</strong> jmmariaca@misena.edu.co<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Danos tus opiniones</h4>
              <p>Tu opinion es muy importante para nosotros si tienes alguna peticion, queja o reclamo comunicate con nosotros.</p>
              <form action="" method="post" role="form" class="contactForm">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu Correo" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Enviar Mensaje</button></div>
              </form>
            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Sena</strong>. Todos los derechos reservados
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
