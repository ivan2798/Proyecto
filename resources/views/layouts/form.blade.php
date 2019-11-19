<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>MundialLondres</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('asset/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('asset/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('asset/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('asset/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/lib/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

  <!-- Main Stylesheet File -->
  <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
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

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="{{ asset('asset/img/logo.png') }}" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="{{route('jueces')}}">Jueces</a></li>
          <li><a href="{{ route('jugadores.index')}}">Lista jugadores</a></li>
          <li><a href="{{ route('lideres.index')}}">Lista lideres</a></li>
          <li><a href="{{ route('jugadores.create')}}">Formulario jugadores</a></li>
          <li><a href="{{ route('lideres.create')}}">Formulario lideres</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
   <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Pokemon confirmados</h2>
          <p>TIERS NU,UU,RU,OU</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="{{ asset('asset/img/gallery/1.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('asset/img/gallery/1.jpg') }}" alt=""></a>
        <a href="{{ asset('asset/img/gallery/2.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('asset/img/gallery/2.jpg') }}" alt=""></a>
        <a href="{{ asset('asset/img/gallery/3.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('asset/img/gallery/3.jpg') }}" alt=""></a>
        <a href="{{ asset('asset/img/gallery/4.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('asset/img/gallery/4.jpg') }}" alt=""></a>
        <a href="{{ asset('asset/img/gallery/5.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('asset/img/gallery/5.jpg') }}" alt=""></a>
        <a href="{{ asset('asset/img/gallery/6.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('asset/img/gallery/6.jpg') }}" alt=""></a>
        <a href="{{ asset('asset/img/gallery/7.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('asset/img/gallery/7.jpg') }}" alt=""></a>
        <a href="{{ asset('asset/img/gallery/8.jpg') }}" class="venobox" data-gall="gallery-carousel"><img src="{{ asset('asset/img/gallery/8.jpg') }}" alt=""></a>
      </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    @yield('contactame') 

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>INVITADOS</h2>
          <p>PERSONAS INVITADAS</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{ asset('asset/img/speakers/1.jpg') }}" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3>Satoshi Tajiri</h3>
                <p>Creador de pokemon</p>
                <div class="social">
                  <p>INVITADO</p>
                </div>
              </div>
            </div>
          </div> 
      <div class="col-lg-4 col-md-6">
            
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="{{ asset('asset/img/speakers/3.jpg') }}" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3>Shigeru Miyamot</h3>
                <p>Creador de smash</p>
                <div class="social">
                <p>INVITADO</p>
                </div>
              </div>
            </div>
          </div>      
         
        </div>
      </div>

    </section>
     


<a href="{{ asset('asset/#') }}" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<!-- JavaScript Libraries -->
<script src="{{ asset('asset/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('asset/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('asset/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('asset/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('asset/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('asset/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('asset/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('asset/lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('asset/contactform/contactform.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
  <!-- Template Main Javascript File -->
  <script src="{{ asset('asset/js/main.js') }}"></script> 


  
</body>

</html>
 