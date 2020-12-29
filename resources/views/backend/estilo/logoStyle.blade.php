@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>CARGAR LOGOS</strong></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('style.uploadFile') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="" for=""><strong> Logo NavBar </strong></label>
                            <input type="file" class="form-control-file" name="logoNav" id="logoNav" accept="image/*">
                            @error('logoNav')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="" for=""><strong> Logo Footer </strong></label>
                            <input type="file" class="form-control-file" name="logoFoot" id="logoFoot" accept="image/*">
                            @error('logoFoot')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="" for=""><strong> Logo Login </strong></label>
                            <input type="file" class="form-control-file" name="logoLogin" id="logoLogin" accept="image/*">
                            @error('logoLogin')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Subir Imagen</button>
                    </form>
                </div>
            </div>
        </div>
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
