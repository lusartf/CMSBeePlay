<div id="demo" class="carousel slide" data-ride="carousel" >

    <!-- Indicators -->
    <ul class="carousel-indicators">
        @php
            $x = 1;
            $count = 0;
        @endphp
        @foreach (session('imgBanner') as $item)
            @if ($x == 1)
                <li data-target="#demo" data-slide-to="{{ $count }}" class="active"></li>
                @php
                    $x = 0;
                @endphp
            @else
                <li data-target="#demo" data-slide-to="{{ $count }}"></li>
            @endif
            @php
                $count++;
            @endphp
        @endforeach
    
    </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
        {{--
            <div class="carousel-item active">
                <img src="{{ asset('posters/banner1.png') }}" alt="Los Angeles">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
        --}}
        @php
            $i = 1;    
        @endphp

        @foreach (session('imgBanner') as $item)
            @if ($i == 1)
                <div class="carousel-item active">
                    <img src="{{ asset($item->url) }}" alt="Chicago">
                    <div class="carousel-caption">
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
                @php
                    $i = 0;
                @endphp
            @else
                <div class="carousel-item">
                    <img src="{{ asset($item->url) }}" alt="Chicago">
                    <div class="carousel-caption">
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
            @endif
            
        @endforeach
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  
</div>