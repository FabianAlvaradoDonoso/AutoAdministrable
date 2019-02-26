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
    <div class="row" id="colorlib-departments">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
					<div class="department-wrap animate-box">
						<div class="grid-1 col-md-6" style="vetportugal('images/{{$Service->imagen}}')"></div>
						<div class="grid-2 col-md-6">
							<div class="desc">
								<h2><a href="departments-single.html"></a></h2>
								<p></p>
							
							</div>
						</div>
					</div>
				</div>
            </div>
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
