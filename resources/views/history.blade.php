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
 
 

  <main id="main" class="main-page">
    
  


    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>INVITADOS</h2> 
           @foreach($portafolio as $portafolioItem) 
              <p> {{ $portafolioItem['title'] }} </p>
           @endforeach
        </div>

        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('asset/img/speakers/1.jpg') }}" alt="Speaker 1" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2>Satoshi Tajiri</h2>
              
              <p>Satoshi Tajiri(28 de agosto de 1965) es un diseñador japonés de videojuegos y el creador de la serie Pocket Monsters, conocida en occidente como Pokémon. </p>
 
              <p>"Cuando era pequeño", comenta, "quería ser entomólogo" (profesión basada en el estudio de insectos). Cada nuevo insecto era un misterio. "Y siempre iba en busca de más y más a distintos ríos, pantanos y bosques." </p> 

              
            </div>
          </div>
          
        </div>
      </div> 
	  
	  <div class="container">
        

        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('asset/img/speakers/3.jpg') }}" alt="Speaker 1" class="img-fluid">
          </div>

          <div class="col-md-6">
            <div class="details">
              <h2>Shigeru Miyamoto</h2>
              <p>Shigeru Miyamoto (nacido el 16 de noviembre de 1952) es un diseñador y productor de videojuegos japonés. Él es concido por ser el creador de algunas de las sagas de videojuegos más vendidas, más aclamadas, más duraderas y más influyentes de la historia.</p>
              <p>Miyamoto se unió a Nintendo en 1977, cuando la compañía empezó su incursión a los videojuegos y empezó a abandonar el negocio de las cartas de mesa por el que empezó en 1889.</p> 
              
            </div>
          </div>
          
        </div>
      </div>

    </section>

  </main>


  
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