@extends('layouts.app2')

{{-- --------------------------------------------------------------------- --}}

@section('name')
    <title>Carousel | Edición - AutoAdmin</title>
@endsection

{{-- --------------------------------------------------------------------- --}}


{{-- --------------------------------------------------------------------- --}}

@section('css')
<!-- Animate.css -->
<link rel="stylesheet" href="{{asset('vetportugal/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('vetportugal/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('vetportugal/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('vetportugal/css/magnific-popup.css')}}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('vetportugal/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('vetportugal/css/owl.theme.default.min.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('vetportugal/css/flexslider.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('vetportugal/fonts/flaticon/font/flaticon.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('vetportugal/css/style.css')}}">
@endsection

{{-- --------------------------------------------------------------------- --}}

@section('body')
    <section class="content-header">
        <h1>
            Carousel
            <small>Todos</small>
            <a href="{{route('Carousel.create')}}" class="btn btn-primary btn-sm">Nuevo Contenedor</a>

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class=""><a href={{route('Carousel.index')}}>Carousel</a></li>
            <li class="active">Edición</li>
        </ol>
    </section>

    <section class="content">
        @foreach($Carousels as $Carousel)
        <div class="row">
        <ul class="slides">
                <li style="background-image: url(vetportugal/images/{{$Carousel->imagen}});">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-md-pull-2 slider-text">
                                <div class="slider-text-inner">
                                    
                                    {{$Carousel->title}}</h1>
                        
                                        <h2>{{$Carousel->subtitle}}</h2>
                                        <p><a class="btn btn-primary btn-lg btn-learn" href="{{$Carousel->linkbtn}}">{{$Carousel->btntitle}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>            
            </ul>
            <div class="col-md-12">
            @endforeach
          
            </div>
        </div>
    </section>
@endsection

{{-- --------------------------------------------------------------------- --}}

@section('scripts')


    <!--@if ($errors->has('nombre'))
        <script>
            jQuery( "#formNombre" ).addClass( "has-error" );
        </script>
    @endif
    @if ($errors->has('descripcion'))
        <script>
            jQuery( "#formDescripcion" ).addClass( "has-error" );
        </script>
    @endif-->


@endsection
