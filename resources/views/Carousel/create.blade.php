@extends('layouts.app2')

{{-- --------------------------------------------------------------------- --}}

@section('name')
    <title>Carousel | Creación - AutoAdmin</title>
@endsection

{{-- --------------------------------------------------------------------- --}}


{{-- --------------------------------------------------------------------- --}}

@section('css')

@endsection

{{-- --------------------------------------------------------------------- --}}

@section('body')
    <section class="content-header">
        <h1>
            Carousel
            <small>Crear</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class=""><a href={{route('Carousel.index')}}>Carousel</a></li>
            <li class="active">Crear</li>
        </ol>
    </section>

    <section class="content">
     <h1> Hola</h1>
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
