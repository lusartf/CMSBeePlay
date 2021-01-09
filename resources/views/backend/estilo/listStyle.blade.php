@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>ESTILO DE SITIO</strong>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <a href="{{ route('style.edit') }}" class="btn btn-outline-dark btn-lg btn-block">
                                <strong>Estilo Base</strong>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <a href="{{ route('style.logoView') }}" class="btn btn-outline-dark btn-lg btn-block">
                                <strong>Logotipos</strong>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <a href="{{ route('listBanner') }}" class="btn btn-outline-dark btn-lg btn-block">
                                <strong>Banner</strong>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <a href="{{ route('listSocial') }}" class="btn btn-outline-dark btn-lg btn-block">
                                <strong>Redes Sociales</strong>
                            </a>
                        </div>
                    </div>
                    <hr>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection