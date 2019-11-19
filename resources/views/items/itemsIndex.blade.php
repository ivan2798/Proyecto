@extends('layouts.index') 
@section('tabla')

<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

<div class="row schedule-item">
  <div class="col-md-2"><i>0</i></div>
  <div class="col-md-10"> 
    <h4>Tipo <span>  Vida<span> </h4>
  </div>
</div>

@if(count($items) == 0)
<div class="alert alert-success"> 
   <span>Listado vacio, hay que generar los seeders </span>
</div> 
@endif




@foreach($items as $item)
<div class="row schedule-item">
  <div class="col-md-2"><i>{{ $item->id}}</i></div>
  <div class="col-md-10">
 
    <h4>{{ $item->tipo}} <span> {{ $item->vida}}</span></h4>
   
  </div>  
  </div>   
@endforeach


</div> 
@endsection
 
 