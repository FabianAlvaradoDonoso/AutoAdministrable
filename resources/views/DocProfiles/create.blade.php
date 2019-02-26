@extends('layouts.app2')

{{-- --------------------------------------------------------------------- --}}

@section('name')
    <title>Doctores | Edición - AutoAdmin</title>
@endsection

{{-- --------------------------------------------------------------------- --}}


{{-- --------------------------------------------------------------------- --}}

@section('css')

@endsection

{{-- --------------------------------------------------------------------- --}}

@section('body')
    <section class="content-header">
        <h1>
            Doctores
            <small>Edición</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class=""><a href={{route('DocProfiles.index')}}>Doctores</a></li>
            <li class="active">Edición</li>
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
