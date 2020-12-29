@extends('layouts.app')

@section('content')

{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>ESTILO BASE</strong></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('style.update') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="backgroundColor" class="col-md-4 col-form-label text-md-right">Color de Fondo</label>

                            <div class="col-md-6">
                                <input id="backgroundColor" type="text" class="form-control" name="backgroundColor" value="{{$style->backgroundColor}}" required autofocus>
                                {{-- 
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                --}}
                                {{-- 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="navBarColor" class="col-md-4 col-form-label text-md-right">Color de NavBar</label>

                            <div class="col-md-6">
                                <input id="navBarColor" type="text" class="form-control" name="navBarColor" value="{{$style->navBarColor}}" required>
                                {{-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                --}}
                                {{--
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="iconNavBarColor" class="col-md-4 col-form-label text-md-right">Color Iconos Nav</label>

                            <div class="col-md-6">
                                <input id="iconNavBarColor" type="text" class="form-control" name="iconNavBarColor" value="{{$style->iconNavBarColor}}" required>
                                {{-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                --}}
                                {{--
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="footerColor" class="col-md-4 col-form-label text-md-right">Color de Footer</label>

                            <div class="col-md-6">
                                <input id="footerColor" type="text" class="form-control" name="footerColor" value="{{$style->footerColor}}" required>
                                {{-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                --}}
                                {{--
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="textFooterColor" class="col-md-4 col-form-label text-md-right">Color de Texto Footer</label>

                            <div class="col-md-6">
                                <input id="textFooterColor" type="text" class="form-control" name="textFooterColor" value="{{$style->textFooterColor}}" required>
                                {{-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                --}}
                                {{--
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="textCategoryColor" class="col-md-4 col-form-label text-md-right">Color nombre de Categoria</label>

                            <div class="col-md-6">
                                <input id="textCategoryColor" type="text" class="form-control" name="textCategoryColor" value="{{$style->textCategoryColor}}" required>
                                {{-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                --}}
                                {{-- 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="navBarLogo" class="col-md-4 col-form-label text-md-right">URL Logo NavBar</label>

                            <div class="col-md-6">
                                <input id="navBarLogo" type="text" class="form-control" name="navBarLogo" value="{{$style->navBarLogo}}" required>
                                {{-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                --}}
                                {{-- 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="footerLogo" class="col-md-4 col-form-label text-md-right">URL Logo Footer</label>

                            <div class="col-md-6">
                                <input id="footerLogo" type="text" class="form-control" name="footerLogo" value="{{$style->footerLogo}}" required>
                                {{-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                --}}
                                {{--
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="loginLogo" class="col-md-4 col-form-label text-md-right">URL Logo Login</label>

                            <div class="col-md-6">
                                <input id="loginLogo" type="text" class="form-control" name="loginLogo" value="{{$style->loginLogo}}" required>
                                {{-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                --}}
                                {{--
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slideItem" class="col-md-4 col-form-label text-md-right">No de Item Slide</label>

                            <div class="col-md-6">
                                <input id="slideItem" type="text" class="form-control" name="slideItem" value="{{$style->slideItem}}" required>
                                {{-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                --}}
                                {{--
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Aplicar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--}}

<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>ESTILO BASE</strong></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('style.update') }}">
                        @csrf

                        <!-- Background -->
                        <div class="form-group row">
                            <label for="backgroundColor" class="col-md-4 col-form-label text-md-right">Color de Fondo</label>

                            <div class="col-md-6">
                                <input id="backgroundColor" type="color" class="form-control" name="backgroundColor" value="{{$style->backgroundColor}}" onchange="cambioFondo(this)" required autofocus>
                            </div>
                        </div>

                        <!-- Navbar Color -->
                        <div class="form-group row">
                            <label for="navBarColor" class="col-md-4 col-form-label text-md-right">Color de NavBar</label>
                            <div class="col-md-6">
                                <input id="navBarColor" type="color" class="form-control" name="navBarColor" value="{{$style->navBarColor}}" onchange="cambioNavColor(this)" required>                                
                            </div>
                        </div>

                        <!-- Color elementos Navbar -->
                        <div class="form-group row">
                            <label for="iconNavBarColor" class="col-md-4 col-form-label text-md-right">Color Elementos Navbar</label>
                            <div class="col-md-6">
                                <input id="iconNavBarColor" type="color" class="form-control" name="iconNavBarColor" value="{{$style->iconNavBarColor}}" onchange="cambioItemNav(this)" required>
                            </div>
                        </div>

                        <!-- Color Footer -->
                        <div class="form-group row">
                            <label for="footerColor" class="col-md-4 col-form-label text-md-right">Color de Footer</label>
                            <div class="col-md-6">
                                <input id="footerColor" type="color" class="form-control" name="footerColor" value="{{$style->footerColor}}" onchange="cambioFootColor(this)" required>
                                
                            </div>
                        </div>

                        <!-- Color Texto Footer -->
                        <div class="form-group row">
                            <label for="textFooterColor" class="col-md-4 col-form-label text-md-right">Color de Texto Footer</label>
                            <div class="col-md-6">
                                <input id="textFooterColor" type="color" class="form-control" name="textFooterColor" value="{{$style->textFooterColor}}" onchange="cambioTextFoot(this)" required>                                
                            </div>
                        </div>

                        <!-- Color Texto Categoria -->
                        <div class="form-group row">
                            <label for="textCategoryColor" class="col-md-4 col-form-label text-md-right">Color texto Categoria</label>
                            <div class="col-md-6">
                                <input id="textCategoryColor" type="color" class="form-control" name="textCategoryColor" value="{{$style->textCategoryColor}}" onchange="cambioTextCategory(this)" required>                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="navBarLogo" class="col-md-4 col-form-label text-md-right">URL Logo NavBar</label>
                            <div class="col-md-6">
                                <input id="navBarLogo" type="text" class="form-control" name="navBarLogo" value="{{$style->navBarLogo}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="footerLogo" class="col-md-4 col-form-label text-md-right">URL Logo Footer</label>
                            <div class="col-md-6">
                                <input id="footerLogo" type="text" class="form-control" name="footerLogo" value="{{$style->footerLogo}}" required>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="loginLogo" class="col-md-4 col-form-label text-md-right">URL Logo Login</label>
                            <div class="col-md-6">
                                <input id="loginLogo" type="text" class="form-control" name="loginLogo" value="{{$style->loginLogo}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slideItem" class="col-md-4 col-form-label text-md-right">No de Item Slide</label>
                            <div class="col-md-6">
                                <input id="slideItem" type="text" class="form-control" name="slideItem" value="{{$style->slideItem}}" required>
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Aplicar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
    </div>
</div>

<script type="text/javascript">
        
    function cambioFondo(x){
        //console.log(x.value);
        var fondo = document.getElementById("background-preview");
        fondo.style.backgroundColor = x.value;
    }

    function cambioNavColor(x){
        var navColor = document.getElementById("navColor-preview");
        navColor.style.backgroundColor = x.value;
    }

    function cambioItemNav(x){
        //console.log(x.value);
        var itemNav = document.getElementById("itemNav-preview");
        itemNav.style.color = x.value;
    }

    function cambioFootColor(x){
        var footColor = document.getElementById("footerColor-preview");
        footColor.style.backgroundColor = x.value;
    }

    function cambioTextFoot(x){
        var textFooter = document.getElementById("textFoot-preview");
        textFooter.style.color = x.value;
    }

    function cambioTextCategory(x){
        var textCategory = document.getElementById("category-preview");
        textCategory.style.color = x.value;
    }

    
</script>
@endsection
