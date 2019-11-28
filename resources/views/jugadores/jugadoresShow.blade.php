@extends('layouts.show') 
@section('tabla') 
<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
  <div class="row schedule-item">
              <div class="col-md-2"><i>N</i></div>
              <div class="col-md-6">  
			      
                <h4>Nombre <span>  Edad<span> </h4>
                <p>Fecha de creacion/modificacion</p> 
                <p >ARCHIVOS</p>
              </div> 
			  <div>  
			  <div class="col-md-4">  
                <p>OPCIONES</p>
              </div> 
			</div>
    </div>   
    
   
        

    @if(session()->has('upj'))
       <div class="alert alert-success"> 
         {{ session()->get('upj')}}
        </div> 
      @endif  
    <div class="row schedule-item"> 
  
     @can('jugadorp',$jugadores) 
     <div class="col-md-2"><i>{{ $jugadores->id}}</i></div>
              <div class="col-md-6">  
                <h4>{{ $jugadores->nombre}}<span>  {{ $jugadores->edad}}<span> </h4>
                <p>{{ $jugadores->created_at}} <span>{{ $jugadores->updated_at}}</span></p>
              </div> 
			  <div>  
			  <div class="col-md-4">  
                <a href="{{route('jugadores.edit',$jugadores->id)}}" class="btn btn-sm btn-warning">EDITAR</a> 
                <form action="{{route('jugadores.destroy',$jugadores->id)}}" method="POST">  
                    @csrf
                    @method('DELETE') 
                    
                    <button type = "submit" class = "btn  btn-danger">ELIMINAR LOGICO</button>
                </form>
              </div> 
			</div> 
      @include('archivos.archivoForm', ['modelo_id' => $jugadores->id, 'modelo_type' => 'App\Jugador'])
      @include('archivos.archivoIndex', ['archivos' => $jugadores->archivos])
            </div>

     @else  
         <div class = "alert-warning" role="alert"> 
          No se puede ver por policies y gates, solo puedes manipular datos si tu id(usuario) corresponde al id_user(jugador)  
        </div>  
      @endcan
     
              

</div> 
@endsection 
