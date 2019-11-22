@extends('layouts.log') 
@section('contactame')

     <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>CAMPEONATO</h2>
          <p>SMOGHON</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <p>UNOVA, REGION DE TESELIA</p>
            </div>
           
          </div>
        </form>
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
            <a href = "{{ route('jugadores.index')}}" class="btn btn-succes">LISTA JUGADORES</a>
          </li> 
          <li class="nav-item">
            <a href = "{{ route('lideres.index')}}" class="btn btn-succes">LISTA LIDERES</a>
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


 