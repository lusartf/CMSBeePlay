@extends('site.layouts.template')

@section('content')
    @include('site.layouts.partials.carousel')
    <br>
<!-- CANALES -->
    @foreach ($categories as $category)
        {{--Ocultar categoria de favoritos--}}
        @if($category -> name =="Favorites")
            @continue
        @endif
        <br>
        <h2 style="color: {{ session('textCategoryColor') }}" >{{ $category -> name }}</h2>
        <div class="row slider">
            @foreach ($channels as $channel)
                @if ($channel-> genre_id == $category-> id)
                    <div>
                        <a href="{{ url('player/?channel='.$channel -> title) }}" class="btn"  name="url" >
                            {{-- <img src="{{$channel -> icon_url}}" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;"> --}}
                            <img src="{{ $channel -> icon_url }}" alt="Girl in a jacket" width="150" height="150">
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    @endforeach 
<!-- ------- -->

<!-- CARRUSEL PLATAFORMAS DIGITALES-->
    <h2 style="color: {{ session('textCategoryColor') }}">Plataformas Digitales</h2>
    <div class="row slider">
        <div>
            <img src="{{ asset('posters/plataformas/FoxPlay.png') }}" alt="Girl in a jacket" width="150" height="150">
        </div>
        <div>
            <img src="{{ asset('posters/plataformas/YouTube.png') }}" alt="Girl in a jacket" width="150" height="150">
        </div>
        <div>
            <img src="{{ asset('posters/plataformas/HBOGo.png') }}" alt="Girl in a jacket" width="150" height="150">
        </div>
        <div>
            <img src="{{ asset('posters/plataformas/FoxPlay.png') }}" alt="Girl in a jacket" width="150" height="150">
        </div>
        <div>
            <img src="{{ asset('posters/plataformas/YouTube.png') }}" alt="Girl in a jacket" width="150" height="150">
        </div>
        <div>
            <img src="{{ asset('posters/plataformas/HBOGo.png') }}" alt="Girl in a jacket" width="150" height="150">
        </div><div>
            <img src="{{ asset('posters/plataformas/FoxPlay.png') }}" alt="Girl in a jacket" width="150" height="150">
        </div>
        <div>
            <img src="{{ asset('posters/plataformas/YouTube.png') }}" alt="Girl in a jacket" width="150" height="150">
        </div>
        <div>
            <img src="{{ asset('posters/plataformas/HBOGo.png') }}" alt="Girl in a jacket" width="150" height="150">
        </div>
    </div>
<!-- ------- -->

@endsection