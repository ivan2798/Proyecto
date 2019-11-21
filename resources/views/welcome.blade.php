@extends('layouts.w') 
@section('tabla') 

                <section id="intro">
                    <div class="intro-container wow fadeIn">
                    <h1 class="mb-4 pb-0"><h1> <span>INICIO</span> <p> RECUERDA REGISTRARTE PARA VER MAS </p></h1>
                    <p class="mb-4 pb-0">10-12 DICIEMBRE, UNOVA</p>
                    <a href="https://www.youtube.com/watch?v=wunJxkwmb8M" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="true"></a>
                    <a href="{{route('jueces')}}" class="about-btn scrollto">JUECES</a> 
                    <a href="{{route('items')}}" class="about-btn scrollto">ITEMS</a>
                    </div>
                </section> 

@endsection
        
