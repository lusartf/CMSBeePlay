@extends('site.layouts.template')

@section('content')
    @include('site.layouts.partials.carousel')

    <br>
    <h1 style="color: {{ session('textCategoryColor') }}" >Locales</h1>
    <div class="container">
        <div class="row slider">
            <div><img src="{{ asset('posters/banner1.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner2.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner3.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner4.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner6.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner7.jpg') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner8.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
        </div>
    </div>

    <br>
    <h1 style="color: {{ session('textCategoryColor') }}">Noticias</h1>
    <div class="container">
        <div class="row slider">
            <div><img src="{{ asset('posters/banner1.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner2.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner3.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner4.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner6.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner7.jpg') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner8.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner6.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner7.jpg') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner8.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
        </div>
    </div>

    <br>
    <h1 style="color: {{ session('textCategoryColor') }}" >Religioso</h1>
    <div class="container">
        <div class="row slider">
            <div><img src="{{ asset('posters/banner1.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner2.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
            <div><img src="{{ asset('posters/banner3.png') }}" alt="Girl in a jacket" width="200" height="200"></div>
        </div>
    </div>
    


@endsection