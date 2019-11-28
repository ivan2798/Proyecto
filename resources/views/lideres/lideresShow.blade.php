@extends('layouts.show') 
@section('tabla') 
<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
  <div class="row schedule-item">
              <div class="col-md-2"><i>0</i></div>
              <div class="col-md-6">  
		
                <h4>Nombre <span>  Tipo<span> </h4>
                <p>Jugador</p> 
                <p >ARCHIVOS</p>
              </div> 
			  <div>  
			  <div class="col-md-4">  
                <p>OPCIONES</p>
              </div> 
			</div>
    </div>   

     @if(session()->has('upl'))
       <div class="alert alert-success"> 
         {{ session()->get('upl')}}
        </div> 
      @endif    
    <div class="row schedule-item"> 
     @can('lideresp',$lideres) 
              <div class="col-md-2"><i>{{ $lideres->id}}</i></div>
              <div class="col-md-6">  
                <h4>{{ $lideres->nombre}}<span>  {{ $lideres->tipo}}<span> </h4> 
                <p> 
                 @foreach($lideres->jugadores as $jugador) 
                    <span class="badge badge-primary"> {{ $jugador->nombre }}</span>
                 @endforeach
               </p> 
              </div> 
			  <div>  
			  <div class="col-md-4">  
                <a href="{{route('lideres.edit',$lideres->id)}}" class="btn btn-sm btn-warning">EDITAR</a>  
               
                <form action="{{route('lideres.destroy',$lideres->id)}}" method="POST">  
                    @csrf
                    @method('DELETE') 
                    
                    <button type = "submit" class = "btn  btn-danger">ELIMINAR</button> 

                    
                </form>
              </div> 
			</div> 
      @include('archivos.archivoForm', ['modelo_id' => $lideres->id, 'modelo_type' => 'App\Lider'])
      @include('archivos.archivoIndex', ['archivos' => $lideres->archivos])
            </div>
      @else  
         <div class = "alert-warning" role="alert"> 
          No se puede ver por policies y gates, solo puedes manipular datos si tu nombre(usuario) corresponde al/los  nombre/s(lider), recuerda el tema de los muttators y accesor. 
        </div>  
      @endcan

</div> 
@endsection 
