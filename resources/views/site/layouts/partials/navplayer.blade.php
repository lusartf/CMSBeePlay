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
                <a  class="btn " id="btn"  name="url" role="button" style="color: #fa1616; ">
                    <span class="iconify" data-icon="fa-brands:chromecast" data-inline="false" style="width: 20px; height:20px;"></span>
                   
                </a>
            </li>
            <li class="nav-item" >
                <a class="nav-link " href="{{url('portfolio')}}" style="color: {{ session('iconNavBarColor') }}"><i class="fas fa-tv"></i> &nbsp;  TV </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('closeSesion') }}" style="color: {{ session('iconNavBarColor') }};"> <i class="fas fa-external-link-alt"></i> &nbsp;  Salir</a>
            </li>
        </ul>
    </div>
</nav>


<script>

    //PASO 3 Creacion de la funcion Chromecast
    var initializeCastApi = function() {
    console.log('initializeCastApi');

    var sessionRequest = new chrome.cast.SessionRequest(
    // Para aplicaciones de Android:
    //CastMediaControlIntent.DEFAULT_MEDIA_RECEIVER_APPLICATION_ID
    
    //Para aplicaciones de Chrome:
    chrome.cast.media.DEFAULT_MEDIA_RECEIVER_APP_ID);
    var apiConfig = new chrome.cast.ApiConfig(
    sessionRequest, sessionListener, receiverListener);
    chrome.cast.initialize(apiConfig, onInitSuccess, onError);
    };

    if (!chrome.cast || !chrome.cast.isAvailable) {
    setTimeout(initializeCastApi, 1000);
    }

    function onInitSuccess() {
    console.log('onInitSuccess');
    }

    function onError(e) {
    console.log('onError', e);
    }

    function sessionListener(e) {
    console.log('sessionListener', e);

    }

    function receiverListener(availability) {
    console.log('receiverListener', availability);

    if(availability === chrome.cast.ReceiverAvailability.AVAILABLE) {
    $(".button").removeAttr("disabled").text("Start");
    }
    }

    function onSessionRequestSuccess(session) {
    console.log('onSessionRequestSuccess', session);

    //Aqui almacena la url del canal con el formato correcto
    var mediaInfo = new chrome.cast.media.MediaInfo(
    //"https://xcdrsbsv-a.beenet.com.sv/foxsports1_720/foxsports1_720_out/playlist.m3u8",
    //"video/mp4"
        //Se obtiene el valor de la Cookie
        localStorage.getItem("urlCast")
                        
    );
    
    //Carga la data que es enviada  por medio del chromecast
    var request = new chrome.cast.media.LoadRequest(mediaInfo);
    session.loadMedia(request, onMediaLoadSuccess, onError);
    }
    
    

    function onMediaLoadSuccess(e) {
    console.log('onMediaLoadSuccess', e);
    }



    document.getElementById("btn").onclick = function() {

    chrome.cast.requestSession(onSessionRequestSuccess, onError);
    };
</script>