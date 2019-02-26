@extends('layouts.app2')

{{-- --------------------------------------------------------------------- --}}

@section('name')
    <title>Services | Edición - AutoAdmin</title>
@endsection

{{-- --------------------------------------------------------------------- --}}


{{-- --------------------------------------------------------------------- --}}

@section('css')

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

{{-- --------------------------------------------------------------------- --}}

@section('body')
<section class="content-header">
        <h1>
           Servicios
            <small>Nuevo</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class=""><a href="">Servicios</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nuevo Servicio</h3>
            </div>          
            <form class="form-validate form-horizontal "  method="POST" action="/Services" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group" id="formName">
                        <label for="phone" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="texto" class="form-control" id="name" name="name" placeholder="Nombre">
                            @if ($errors->has('name'))
                                <span class="help-block">{{$errors->first('name')}}</span>
                            @endif
                        </div>  
                    </div>
                    <div class="form-group" id="formDescription">
                        <label for="phone" class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-10">
                            <input type="texto" class="form-control" id="description" name="description" placeholder="Detalles del servicio.">
                            @if ($errors->has('description'))
                                <span class="help-block">{{$errors->first('description')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group" id="formFav">
                        <label for="phone" class="col-sm-2 control-label">Mostrar en primera página</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" data-toggle="toggle" id="destacado" name="destacado">                                
                            </label>
                        </div>
                    </div>    
                    <div class="form-group" id="formIcon">
                        <label for="icon" class="col-sm-2 control-label">Icono.. en proceso</label>

                    </div>   

                    <div class="form-group" id="formImagen">
                        <label for="imagen" class="col-sm-2 control-label">Imagen</label>
                        <div class="col-sm-10">
                            <input type="file" src="" alt="" class="form-control"  id="imagen" name="imagen">
                            @if ($errors->has('imagen'))
                                <span class="help-block">{{$errors->first('imagen')}}</span>
                            @endif
                        </div>
                    </div>
                    
                   
                    <!--<div class="form-group" id="formDestacado">
                        <label for="destacado" class="col-sm-2 control-label">Otro</label>
                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="destacado" name="destacado" @if (Request::old('destacado')) checked @endif>
                                    Destacado
                                </label>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="row">
                <div class="col-md-3 text-center">
                    <img class="img-fluid img-thumbnail" id="blah" src="#" alt="" width="150" height="150">
                </div>
            </div>
                <div class="box-footer">
                    <div class="pull-right">
                        <a href=""class="btn btn-danger">Cancelar</a>
                        <button class="btn btn-primary ml-3" type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

{{-- --------------------------------------------------------------------- --}}

@section('scripts')


<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

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
    <script>

                function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
                }

                $("#imagen").change(function() {
                readURL(this);
                });
    </script>


@endsection
