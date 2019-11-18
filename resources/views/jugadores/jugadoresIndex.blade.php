@extends('layouts.index') 
@section('tabla')

<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

<div class="row schedule-item">
  <div class="col-md-2"><i>0</i></div>
  <div class="col-md-10"> 
    <h4>Nombre <span>  Edad<span> </h4>
    <p>Lider</p>
  </div>
</div>

@if(count($jugadores) == 0)
<div class="alert alert-success"> 
   <span>Listado vacio </span>
</div> 
@endif

@if(session()->has('statusj'))
<div class="alert alert-success"> 
   {{ session()->get('statusj')}}
</div> 
@endif 

@if(session()->has('storej'))
<div class="alert alert-success"> 
   {{ session()->get('storej')}}
</div> 
@endif 


@foreach($jugadores as $jugador)
<div class="row schedule-item">
  <div class="col-md-2"><i>{{ $jugador->id}}</i></div>
  <div class="col-md-10">
  <div class="speaker">
  <a href="{{route('jugadores.show',$jugador->id)}}" >_VER</a>
    </div>
    <h4>{{ $jugador->nombre}} <span> {{ $jugador->edad}}</span></h4>
    <p>{{ $jugador->created_at}} <span>{{ $jugador->updated_at}}</span></p>
  </div>  
  </div>   
@endforeach


</div> 
@endsection
 
 