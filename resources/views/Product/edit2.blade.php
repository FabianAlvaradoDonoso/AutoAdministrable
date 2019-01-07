@extends('layouts.app')

{{-- --------------------------------------------------------------------- --}}

@section('css')

@endsection

{{-- --------------------------------------------------------------------- --}}

@section('body')
    <div class="breadcrumbs bg-dark mt-2 d-flex justify-content-center align-items-xl-center">
        <div class="col d-flex justify-content-center justify-content-lg-start">
            <div class="page-header float-left bg-dark">
                <div class="page-title">
                    <h1 class="text-light">Categoría</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3" >

        <div class="col-lg-12" id="recargar">
            <div class="card">
                <div class="card-header">
                    <strong>Edición de Categoría</strong>
                </div>
                <div class="card-body card-block">
                    <div class="form">
                        <form class="form-validate form-horizontal " role="form" method="POST" action="{{ route('category.update',$category->id) }}" novalidate="novalidate">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="form-row d-lg-flex d-xl-flex align-items-lg-center justify-content-xl-center align-items-xl-center">
                                <div class="col-lg-2 col-xl-2 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center">
                                    <label for="nombre" class="col-form-label">Nombre</label>
                                </div>
                                <div class="col-lg-10 col-xl-10 d-xl-flex align-items-xl-center">
                                    <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control mb-1" value={{$category->name}}>
                                </div>
                                @if ($errors->has('nombre'))
                                    <label for="nombre" class="control-label text-danger">{{$errors->first('nombre')}}</label>
                                @endif
                            </div>
                            <div class="form-row d-lg-flex d-xl-flex align-items-lg-center justify-content-xl-center align-items-xl-center">
                                <div class="col-lg-2 col-xl-2 d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center">
                                    <label for="descripcion" class="col-form-label">Descripción</label>
                                </div>
                                <div class="col-lg-10 col-xl-10 d-xl-flex align-items-xl-center">
                                    <textarea id="descripcion" name="descripcion" placeholder="Descripción" class="form-control">{{$category->description}}</textarea>
                                </div>
                                @if ($errors->has('descripcion'))
                                    <label for="descripcion" class="control-label text-danger">{{$errors->first('descripcion')}}</label>
                                @endif
                            </div>
                            <div class="form-row d-lg-flex d-xl-flex  justify-content-xl-center align-items-xl-center">
                                <div class="col-lg-12 col-xl-12 d-flex d-lg-flex d-xl-flex justify-content-center justify-content-xl-center align-items-xl-center mt-1">
                                    <button class="btn btn-primary mr-1" type="submit">Guardar</button>
                                    <a href="{{ route('category.index') }}"class="btn btn-danger pull-rigth ml-1">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection

{{-- --------------------------------------------------------------------- --}}

@section('scripts')

@endsection
