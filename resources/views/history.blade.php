@extends('layouts.log') 
@section('contactame')
 
  


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




    @endsection 