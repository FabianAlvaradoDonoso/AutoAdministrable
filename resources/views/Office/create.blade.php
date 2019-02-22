@extends('layouts.app2')

{{-- --------------------------------------------------------------------- --}}

@section('name')
    <title>Productos | Creación - AutoAdmin</title>
@endsection

{{-- --------------------------------------------------------------------- --}}


{{-- --------------------------------------------------------------------- --}}

@section('css')

@endsection

{{-- --------------------------------------------------------------------- --}}

@section('body')
    <section class="content-header">
        <h1>
            Información Principal
            <small>Nuevo</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class=""><a href="">Productos</a></li>
            <li class="active">Nuevo</li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nueva Sucursal</h3>
            </div>
            <form class="form-validate form-horizontal "  method="POST" action="/offices" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group" id="formPhone">
                        <label for="phone" class="col-sm-2 control-label">Teléfono Fijo</label>
                        <div class="col-sm-10">
                            <input type="texto" class="form-control" id="phone" name="phone" placeholder="+56227654321">
                            @if ($errors->has('phone'))
                                <span class="help-block">{{$errors->first('phone')}}</span>
                            @endif
                        </div>  
                    </div>
                    <div class="form-group" id="formCellPhone">
                        <label for="phone" class="col-sm-2 control-label">Celular</label>
                        <div class="col-sm-10">
                            <input type="texto" class="form-control" id="cellphone" name="cellphone" placeholder="+56987654321">
                            @if ($errors->has('cellphone'))
                                <span class="help-block">{{$errors->first('cellphone')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group" id="formAdress">
                        <label for="phone" class="col-sm-2 control-label">Dirección</label>
                        <div class="col-sm-10">
                            <input type="texto" class="form-control" id="adress" name="adress" placeholder="Av. Siempre viva #1234">
                            @if ($errors->has('adress'))
                                <span class="help-block">{{$errors->first('adress')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group" id="formContactmail">
                        <label for="phone" class="col-sm-2 control-label">Mail de contacto</label>
                        <div class="col-sm-10">
                            <input type="texto" class="form-control" id="contactmail" name="contactmail" placeholder="contact@redpandachile.com">
                            @if ($errors->has('contactmail'))
                                <span class="help-block">{{$errors->first('contactmail')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group" id="formFblink">
                        <label for="phone" class="col-sm-2 control-label">Link página Facebook</label>
                        <div class="col-sm-10">
                            <input type="texto" class="form-control" id="fblink" name="fblink" placeholder="facebook.com/redpandachile">
                            @if ($errors->has('fblink'))
                                <span class="help-block">{{$errors->first('fblink')}}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group" id="formImagen">
                        <label for="imagen" class="col-sm-2 control-label">Logo principal</label>
                        <div class="col-sm-10">
                            <input type="file" src="" alt="" class="form-control"  id="logo" name="logo">
                            @if ($errors->has('logo'))
                                <span class="help-block">{{$errors->first('logo')}}</span>
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
<!--
@section('scripts')

    @if ($errors->has('phone'))
        <script>
            jQuery( "#formPhone" ).addClass( "has-error" );
        </script>
    @endif
    @if ($errors->has('cellphone'))
        <script>
            jQuery( "#formCellphone" ).addClass( "has-error" );
        </script>
    @endif
    @if ($errors->has('adress'))
        <script>
            jQuery( "#formAdress" ).addClass( "has-error" );
        </script>
    @endif
    @if ($errors->has('contactmail'))
        <script>
            jQuery( "#formContactmail" ).addClass( "has-error" );
        </script>
    @endif
    @if ($errors->has('fblink'))
        <script>
            jQuery( "#formFblink" ).addClass( "has-error" );
        </script>
    @endif
    @if ($errors->has('logo'))
        <script>
            jQuery( "#formLogo" ).addClass( "has-error" );
        </script>
    @endif

@endsection
-->