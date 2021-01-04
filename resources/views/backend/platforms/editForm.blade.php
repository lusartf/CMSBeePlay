@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start">
                                <h4>Crear Plataforma Digital</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    {{-- 
                    <form action="{{ route('add') }}"
                        class="dropzone"
                        id="my-awesome-dropzone">
                    </form>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <a href="{{ route('listPlatform') }}" class="btn btn-outline-dark btn-lg btn-block">
                                 Regresar
                            </a>
                        </div>
                    </div>
                    --}}
                    <form method="POST" action="{{ route('add') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="id" type="hidden" class="" name="id" value="{{ $platform->id }}" required>
                            </div>
                        </div>
                        {{-- 
                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">Logo</label>
                            <div class="col-md-6">
                                <input id="logo" type="file" class="" name="logo" required>
                            </div>
                        </div>
                        --}}
                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">URL</label>
                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control" name="url" value="{{ $platform->link }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">(Opcional) Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $platform->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">(Opcional) Descripcion</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description">
                                    {{ $platform->description }}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection