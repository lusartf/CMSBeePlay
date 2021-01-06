@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>ESTILO LOGIN</strong></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateLogin') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="id" type="hidden" class="form-control" name="id" value="{{ $styleLogin->id }}" onchange="" required>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="imgDelete" type="hidden" class="form-control" name="imgDelete" value="{{ $styleLogin->imgBackground }}" onchange="" required>
                            </div>
                        </div>  

                        <!-- Background -->
                        <div class="form-group row">
                            <label for="fondo" class="col-md-4 col-form-label text-md-right">Background</label>
                            <div class="col-md-6">
                                <input id="fondo" type="file" class="" name="fondo">
                            </div>
                        </div>

                        <!-- Color de Contenedor -->
                        <div class="form-group row">
                            <label for="colorBox" class="col-md-4 col-form-label text-md-right">
                                <strong>Color de Contenedor</strong>
                            </label>
                            <div class="col-md-6">
                                <input id="colorBox" type="color" class="form-control" name="colorBox" value="{{ $styleLogin->colorBox }}" onchange="" required>                                
                            </div>
                        </div>

                        <!-- Color Boton -->
                        <div class="form-group row">
                            <label for="colorButton" class="col-md-4 col-form-label text-md-right">
                                <strong>Color de Boton</strong>
                            </label>
                            <div class="col-md-6">
                                <input id="colorButton" type="color" class="form-control" name="colorButton" value="{{ $styleLogin->colorButton }}" onchange="" required>
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