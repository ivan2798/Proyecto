@extends('layouts.log') 
@section('contactame')
 
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">TORNEO<br><span>MUNDIAL</span> POKEMON</h1>
      <p class="mb-4 pb-0">10-12 DICIEMBRE, UNOVA</p>
      <!--<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="{{asset('sust/#about')}}" class="about-btn scrollto">EV</a>-->
    </div>
  </section>

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
    
    @endsection 

  

