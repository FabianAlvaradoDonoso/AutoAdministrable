@extends('layouts.app2')

{{-- --------------------------------------------------------------------- --}}

@section('name')
    <title>Services | Edición - AutoAdmin</title>
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
            Servicios
            <small>Todos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class=""><a href={{route('Services.index')}}>Servicios</a></li>
            <li class="active">Todos</li>
        </ol>
    </section>

    <section class="content">
    <div class="row" id="colorlib-services">
    @foreach($Services as $Service)
                <div class="col-sm-3 animate-box">
					<div class="services-2">
						<span class="icon">
							<i class="flaticon-hospital"></i>
						</span>
						<div class="desc">
							<h3><a href="#">{{$Service->title}}</a></h3>
							<p>{{$Service->description}}</p>
                        </div>
                        <a class="btn btn-primary btn-block btn-sm">Editar</a>
					</div>
				</div>
     
        @endforeach
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
