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
          <li><a href="{{route('items')}}">Items </a></li>
          <li><a href="{{ route('jugadores.index')}}">L jugadores</a></li>
          <li><a href="{{ route('lideres.index')}}">L lideres</a></li> 
          <li><a href="{{ route('pets.index')}}">L pokemons</a></li>
          <li><a href="{{ route('jugadores.create')}}">F jugadores</a></li>
          <li><a href="{{ route('lideres.create')}}">F lideres</a></li> 
          <li><a href="{{ route('pets.create')}}">F pokemons</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
 
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">TORNEO<br><span>MUNDIAL</span> POKEMON</h1>
      <p class="mb-4 pb-0">10-12 DICIEMBRE, UNOVA</p>
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="{{asset('sust/#about')}}" class="about-btn scrollto">EV</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Sobre el evento</h2>
            <p>Sera el mundial de pokemon competitivo en categoria individual, dobles y por equipo donde
			se buscarara al ganador que obtenga el trofeo por otro año</p>
          </div>
          <div class="col-lg-3">
            <h3>Donde</h3>
            <p>Unova, centro</p>
          </div>
          <div class="col-lg-3">
            <h3>Cuando</h3>
            <p>Lunes a viernes<br>10-12 Diciebre</p>
          </div>
        </div>
      </div>
    </section>

  <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>REGISTRADOS</h2>
          <p>LISTA DE REGISTRADOS</p>
        </div>


        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a href = "{{ route('jugadores.create')}}" class="btn btn-succes"> AGREGAR JUGADOR</a>  
            <a href = "{{ route('lideres.create')}}" class="btn btn-succes">AGREGAR LIDER</a>  
            <a href = "{{ route('pets.create')}}" class="btn btn-succes">AGREGAR POKEMON</a> 
          </li>
        </ul>

        <h3 class="sub-heading">La zona VGC sera de un tiempo limite de 20 minutos, la zona individual tendra 30 minutos 
                               y la zona por equipo un limite de 10 minutos		</h3>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          @yield('tabla')
           
        </div>
     </div>
          <!-- End Schdule Day 1 -->
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

  <!-- Template Main Javascript File -->
  <script src="{{ asset('asset/js/main.js') }}"></script>
</body>

</html>
 