<!-- Menu vertical -->
<nav class="navbar navbar-dark fixed-top navbar-expand-md" style="background-color: {{ session('navBarColor') }}">
    <a class="navbar-brand" href="#">
        {{-- <img src="{{ asset('posters/NextTV_logo1.png')}}" width="160" class="d-inline-block align-top" alt="" loading="lazy"> --}}
        <img src="{{ asset(session('navBarLogo'))}}" width="160" class="d-inline-block align-top" alt="" loading="lazy">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border:solid #ff6600;">
        <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" >
        <ul class="navbar-nav ml-auto">
            <li class="nav-item" >
                <a class="nav-link " href="{{url('portfolio')}}" style="color: {{ session('iconNavBarColor') }}"><i class="fas fa-tv"></i> &nbsp;  TV </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('logout')}}" style="color: {{ session('iconNavBarColor') }};"> <i class="fas fa-external-link-alt"></i> &nbsp;  Salir</a>
            </li>
        </ul>
    </div>
</nav>