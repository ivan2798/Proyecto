@extends('layouts.index') 
@section('tabla')

<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

<div class="row schedule-item">
  <div class="col-md-2"><i>0</i></div>
  <div class="col-md-6"> 
    <h4>Nombre <span>  Tipo<span> </h4>
    <p>Item</p> 
    
  </div> 
  <div class="col-md-4">  
       <span>Enviar mensaje</span>
    </div>
</div>

@if(count($pets) == 0)
<div class="alert alert-success"> 
   <span>Listado vacio </span>
</div> 
@endif

@if(session()->has('statusp'))
<div class="alert alert-success"> 
   {{ session()->get('statusp')}}
</div> 
@endif 

@if(session()->has('storep'))
<div class="alert alert-success"> 
   {{ session()->get('storep')}}
</div> 
@endif 


@foreach($pets as $pet)
<div class="row schedule-item">
  <div class="col-md-2"><i>{{ $pet->id}}</i></div>
  <div class="col-md-6">
  <div class="speaker">
  <a href="{{route('pets.show',$pet->id)}}" >_VER</a>
    </div>
    <h4>{{ $pet->nombre}} <span> {{ $pet->tipo}}</span></h4> 
    
         <p>  {{ $pet->item->tipo }} </p>
  </div>   
  <div class="col-md-4">   
  <span>  {{ $pet->user->email }} </span>
  <a href="{{ route('pets.enviado', $pet->id) }}" class="btn btn-sm btn-primary">ENVIAR CORREO</a>
    </div>
  </div>   
@endforeach


</div> 
@endsection
 
 