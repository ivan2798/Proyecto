@extends('layouts.form') 
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
      <h2>Registrarse para pokemon</h2>
      <p>Escoge el elemento que usaras</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>NOMBRE</h3>
          <address>ARCANINE</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Tipo</h3>
          <address>Fuego</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>ITEM</h3>
          <address>FISICO</address>
        </div>
      </div>    

      </div>
  
 <div class="form"> 
    @if(isset($pets))    
      {!! Form::model($pets, ['route' => ['pets.update', $pets->id], 'method' => 'PATCH']) !!}
    @else 
      {!! Form::open(['route' => 'pets.store']) !!}
    @endif 
    
    <div>
      <div class="form-row">
        <div class="form-group col-md-6">  
          {!! Form::label('nombre', 'Nombre') !!} 
          {!! Form::text('nombre', null, ['placeholder' => 'nombre','class' => 'form-control']) !!} 
        </div>
        <div class="form-group col-md-6">  
          {!! Form::label('tipo', 'Tipo') !!}
          {!! Form::text('tipo', null, ['placeholder' => 'tipo','class' => 'form-control']) !!}
        </div>   
        </div> 
        <div class="form-group">
          {!! Form::label('items_id', 'ITEM') !!}
          {!! Form::select('items_id',$items,null,['class' => 'form-control']) !!}
        </div> 
        <button type="submit" class="btn btn-primary">Enviar</button> 
      {!! Form::close() !!}
      </div>
      


     
      
      
    </form>
  
  </div>
 
 
</div>
</section><!-- #contact -->
@endsection 
