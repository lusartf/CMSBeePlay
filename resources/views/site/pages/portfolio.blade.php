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
                            <a href="{{ url('player/?channel='.$channel -> title) }}" class="btn"  name="url" >
                                {{-- <img src="{{$channel -> icon_url}}" class="img-fluid mx-auto d-block" alt="img1" style="width: 150px; height:150;"> --}}
                                <img src="{{ $channel -> icon_url }}" alt="Girl in a jacket" width="200" height="200">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach 

@endsection