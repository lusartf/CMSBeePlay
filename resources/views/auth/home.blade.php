@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>INICIO</strong>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if (Auth::user()->hasRole('admin'))
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <a href="{{ route('listUsers') }}" class="btn btn-outline-dark btn-lg btn-block">
                                    <strong>Gestion de Usuarios</strong>
                                </a>
                            </div>
                        </div>
                        <br>
                    @endif
                    
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <a href="{{ route('listStyle') }}" class="btn btn-outline-dark btn-lg btn-block">
                                <strong>Estilo de Sitio</strong>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <a href="{{ route('listPlatform') }}" class="btn btn-outline-dark btn-lg btn-block">
                                <strong>Plataformas</strong>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <a href="{{ route('editLogin') }}" class="btn btn-outline-dark btn-lg btn-block">
                                <strong>Estilo Login</strong>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            {{-- 
                            <a href="{{ route('listBanner') }}" class="btn btn-info btn-lg btn-block">
                                <strong>Banner</strong>
                            </a>
                            --}}
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
