@extends('layouts.app')

@section('css')
    <!-- Dropzone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start">
                                <h4>Cargar Imagenes</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('upload') }}"
                        class="dropzone"
                        id="my-awesome-dropzone"></form>
                    <hr>
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <a href="{{ route('listBanner') }}" class="btn btn-outline-dark btn-lg btn-block">
                                 Regresar a Galeria
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <!-- Dropzone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>

    <script>
        Dropzone.options.myAwesomeDropzone = {
            headers:{
                'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },
            dictDefaultMessage:"Arrastre Imagenes al Recuadro",
            acceptedFiles:"image/*",
            maxFilesize:2
        };
    </script>
@endsection
