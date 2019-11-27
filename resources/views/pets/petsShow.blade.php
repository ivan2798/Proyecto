@extends('layouts.show') 
@section('tabla') 
<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
  <div class="row schedule-item">
              <div class="col-md-2"><i>0</i></div>
              <div class="col-md-6">  
			     
                <h4>Nombre <span>  Tipo<span> </h4>
                <p>Vida</p>
              </div> 
			  <div>  
			  <div class="col-md-4">  
                <p>OPCIONES</p>
              </div> 
			</div>
    </div>   

    @if(session()->has('upp'))
       <div class="alert alert-success"> 
         {{ session()->get('upp')}}
        </div> 
      @endif  
    <div class="row schedule-item">
              <div class="col-md-2"><i>{{ $pets->id}}</i></div>
              <div class="col-md-6">  
                <h4>{{ $pets->nombre}}<span>  {{ $pets->tipo}}<span> </h4> 
                <p> {{$pets->item->vida}}</p>
              </div>  
             
			  <div>  
			  <div class="col-md-4">  
                <a href="{{route('pets.edit',$pets->id)}}" class="btn btn-sm btn-warning">EDITAR</a> 
                <form action="{{route('pets.destroy',$pets->id)}}" method="POST">  
                    @csrf
                    @method('DELETE') 
                    
                    <button type = "submit" class = "btn  btn-danger">ELIMINAR</button>
                </form>
              </div> 
			</div>
            </div>


</div> 
@endsection 
