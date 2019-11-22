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
        <a href="{{ action('JuezController@inicio')}}" class="scrollto"><img src="{{ asset('asset/img/logo.png') }}" alt="" title=""></a>
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

        <ul class="navbar-nav ml-auto"> 
        @guest
                      <li class="nav-item dropdown"> 
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     login@ejemplo.com  <span class="caret"></span>
                            </a>  

                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            
                                <a class="dropdown-item"  href="{{ route('login') }}">{{ __('Login') }}</a>
                           
                            @if (Route::has('register'))
                                    <a class="dropdown-item"  href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif  
                            </div>
                        </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


        </ul>


      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
   

    <!--==========================
      Contact Section
    ============================-->
    @yield('contactame') 

    
     


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
  <script type="text/javascript"> 
     $(document).ready(function() {
    $('.jugadores').select2({ 
      placeholder: "selecciona entrenador"
    });
});
  </script>


  <!-- Template Main Javascript File -->
  <script src="{{ asset('asset/js/main.js') }}"></script> 


  
</body>

</html>
 