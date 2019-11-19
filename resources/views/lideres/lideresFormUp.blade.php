@extends('layouts.forma') 
@section('contactame')


<section id="contact" class="section-bg wow fadeInUp">

<div class="container">  

   
    @if ($errors->any())
       <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    
   <div class="section-header">
      <h2>Registrarse para ser lider</h2>
      <p>Escoge el elemento que usaras</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>NOMBRE</h3>
          <address>MAXIMO</address> 
          
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>TIPO</h3>
          <address>Fantasma</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Contendiente</h3>
          <address>Gary</address>
        </div>
      </div>    

      </div>
  
 <div class="form"> 
      {!! Form::model($lideres, ['route' => ['lideres.update', $lideres->id], 'method' => 'PATCH']) !!} 
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">   
          {!! Form::text('nombre', null, ['placeholder' => 'nombre','class' => 'form-control']) !!} 
        </div>
        <div class="form-group col-md-6"> 
          {!! Form::text('tipo', null, ['placeholder' => 'tipo','class' => 'form-control']) !!} 
        </div> 
      </div>
      <div class="form-group">
          {!! Form::label('selecciona entrenador') !!}
          {!! Form::select('jugadores[]',$jugadores,null,['multiple' => 'multiple', 'class' => 'form-control jugadores']) !!}
      </div>

      <div class="text-center"><button type="submit">ENVIAR</button></div>  
      {!! Form::close() !!}
      </div>
    </form>
    
  </div>
 


 
 
</div>
</section><!-- #contact -->
@endsection 
