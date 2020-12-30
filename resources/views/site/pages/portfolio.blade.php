@extends('site.layouts.template')

@section('content')
    @include('site.layouts.partials.carousel')
    <br>
    
    @foreach ($categories as $category)
        {{--Ocultar categoria de favoritos--}}
        @if($category -> name =="Favorites")
            @continue
        @endif
        <br>
        <h1 style="color: {{ session('textCategoryColor') }}" >{{ $category -> name }}</h1>
        <div class="container">
            <div class="row slider">
                @foreach ($channels as $channel)
                    @if ($channel-> genre_id == $category-> id)
                        <div>
                            <a href="{{-- url('player/?channel='.$channel -> title) --}}" class="btn"  name="url" >
                                {{-- <img src="{{$channel -> icon_url}}" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;"> --}}
                                <img src="{{ $channel -> icon_url }}" alt="Girl in a jacket" width="200" height="200">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach

    {{-- 
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
    --}}
    


@endsection