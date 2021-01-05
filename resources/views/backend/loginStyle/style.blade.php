@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>ESTILO LOGIN</strong></div>

                <div class="card-body">
                    <form method="POST" action="{{-- route('style.update') --}}" enctype="multipart/form-data">
                        @csrf

                        <!-- Background -->
                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">Background</label>
                            <div class="col-md-6">
                                <input id="logo" type="file" class="" name="logo" required>
                            </div>
                        </div>

                        <!-- Color de Contenedor -->
                        <div class="form-group row">
                            <label for="navBarColor" class="col-md-4 col-form-label text-md-right">
                                <strong>Color de Contenedor</strong>
                            </label>
                            <div class="col-md-6">
                                <input id="navBarColor" type="color" class="form-control" name="navBarColor" value="{{-- $style->navBarColor --}}" onchange="" required>                                
                            </div>
                        </div>

                        <!-- Color Boton -->
                        <div class="form-group row">
                            <label for="iconNavBarColor" class="col-md-4 col-form-label text-md-right">
                                <strong>Color de Boton</strong>
                            </label>
                            <div class="col-md-6">
                                <input id="iconNavBarColor" type="color" class="form-control" name="iconNavBarColor" value="{{-- $style->iconNavBarColor --}}" onchange="" required>
                            </div>
                        </div>                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-dark btn-block">
                                    Aplicar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- PREVIEW -->
        {{-- 
        <div class="col-md-4">
            <h4>PREVIEW</h4>
            <div class="card text-center">
                <div id="navColor-preview" class="card-header">
                    <h6 id="itemNav-preview"><strong>NAVBAR</strong></h6>
                </div>
                <div id="background-preview" class="card-body">
                    <h6 class="card-title">Background</h6>
                    <div id="category-preview" >
                        <p class="text-left">Category</p>
                        <p class="text-left">Category</p>
                        <p class="text-left">Category</p>
                    </div>
                </div>
                <div id="footerColor-preview" class="card-footer">
                    <h6 id="textFoot-preview"><strong>FOOTER</strong></h6>
                </div>
            </div>
        </div>
        --}}
    </div>
</div>    

@endsection