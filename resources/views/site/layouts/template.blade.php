<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NextTV</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('./css/footer.css')}}">
    

    <!-- Slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <style>
        html {
            min-height: 100%;
            position: relative;
        }
        body {
            margin: 0;
            margin-bottom: 40px;
        }

        .navbar{
            background: black;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            font-size: 20px;   
            color: white    
        }
        
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }        
  
    </style>

    <!-- Ultimate Player -->
    <link rel="stylesheet" type="text/css" href="{{asset('content/global.css')}}">
    <script type="text/javascript" src="{{ asset('java/FWDUVPlayer.js')}}"></script>
    <!-- contructor Player-->
    @yield('construct_player')
    {{-- 
    <script type="text/javascript">

        FWDUVPUtils.onReady(function(){

            new FWDUVPlayer({		
                //main settings
                instanceName:"player1",
                parentId:"myDiv",
                playlistsId:"playlists",
                mainFolderPath:"content",
                skinPath:"modern_skin_dark",
                displayType:"responsive",
                initializeOnlyWhenVisible:"no",
                fillEntireposterScreen:"yes",
                useVectorIcons:"no",
                fillEntireVideoScreen:"no",
                goFullScreenOnButtonPlay:"no",
                playsinline:"yes",
                privateVideoPassword:"428c841430ea18a70f7b06525d4b748a",
                youtubeAPIKey:"",
                useHEXColorsForSkin:"no",
                normalHEXButtonsColor:"#666666",
                googleAnalyticsTrackingCode:"",
                useResumeOnPlay:"no",
                useDeepLinking:"yes",
                showPreloader:"yes",
                preloaderBackgroundColor:"#000000",
                preloaderFillColor:"#FFFFFF",
                addKeyboardSupport:"yes",
                autoScale:"yes",
                showButtonsToolTip:"no", 
                stopVideoWhenPlayComplete:"no",
                playAfterVideoStop:"no",
                autoPlay:"yes",
                loop:"no",
                shuffle:"no",
                showErrorInfo:"yes",
                maxWidth:1180,
                maxHeight:560,
                volume:.8,
                buttonsToolTipHideDelay:1.5,
                backgroundColor:"#000000",
                videoBackgroundColor:"#000000",
                posterBackgroundColor:"#000000",
                buttonsToolTipFontColor:"#5a5a5a",
                //logo settings
                showLogo:"no",
                hideLogoWithController:"yes",
                logoPosition:"topRight",
                logoLink:"http://www.webdesign-flash.ro/",
                logoPath:"",
                logoMargins:10,
                //playlists/categories settings
                showPlaylistsSearchInput:"no",
                usePlaylistsSelectBox:"yes",
                showPlaylistsButtonAndPlaylists:"no",
                showPlaylistsByDefault:"no",
                thumbnailSelectedType:"opacity",
                startAtPlaylist:0,
                buttonsMargins:15,
                thumbnailMaxWidth:350, 
                thumbnailMaxHeight:350,
                horizontalSpaceBetweenThumbnails:40,
                verticalSpaceBetweenThumbnails:40,
                inputBackgroundColor:"#333333",
                inputColor:"#999999",
                //playlist settings
                showPlaylistButtonAndPlaylist:"yes",
                playlistPosition:"right",
                showPlaylistByDefault:"yes",
                showPlaylistName:"yes",
                showSearchInput:"no",
                showLoopButton:"no",
                showShuffleButton:"no",
                showPlaylistOnFullScreen:"yes",
                showNextAndPrevButtons:"no",
                showThumbnail:"yes",
                forceDisableDownloadButtonForFolder:"yes",
                addMouseWheelSupport:"yes", 
                startAtRandomVideo:"no",
                stopAfterLastVideoHasPlayed:"no",
                addScrollOnMouseMove:"no",
                randomizePlaylist:'no',
                folderVideoLabel:"VIDEO ",
                playlistRightWidth:290,
                playlistBottomHeight:380,
                startAtVideo:0,
                maxPlaylistItems:50,
                thumbnailWidth:71,
                thumbnailHeight:71,
                spaceBetweenControllerAndPlaylist:1,
                spaceBetweenThumbnails:1,
                scrollbarOffestWidth:8,
                scollbarSpeedSensitivity:.5,
                playlistBackgroundColor:"#424242",
                playlistNameColor:"#FFFFFF",
                thumbnailNormalBackgroundColor:"#1b1b1b",  
                thumbnailHoverBackgroundColor:"#313131",  //foco
                thumbnailDisabledBackgroundColor:"#272727", 
                searchInputBackgroundColor:"transparent",
                searchInputColor:"#999999",
                youtubeAndFolderVideoTitleColor:"#FFFFFF",
                folderAudioSecondTitleColor:"#999999",
                youtubeOwnerColor:"#888888",
                youtubeDescriptionColor:"#888888",
                mainSelectorBackgroundSelectedColor:"#FFFFFF",
                mainSelectorTextNormalColor:"#FFFFFF",
                mainSelectorTextSelectedColor:"#000000",
                mainButtonBackgroundNormalColor:"#212021",
                mainButtonBackgroundSelectedColor:"#FFFFFF",
                mainButtonTextNormalColor:"#FFFFFF",
                mainButtonTextSelectedColor:"#000000",
                //controller settings
                showController:"yes",
                showControllerWhenVideoIsStopped:"yes",
                showNextAndPrevButtonsInController:"no",
                showRewindButton:"yes",
                showPlaybackRateButton:"no",
                showVolumeButton:"yes",
                showTime:"yes",
                showQualityButton:"yes",
                showInfoButton:"yes",
                showDownloadButton:"no",
                showShareButton:"no",
                showEmbedButton:"no",
                showChromecastButton:"yes",
                showFullScreenButton:"yes",
                disableVideoScrubber:"no",
                showScrubberWhenControllerIsHidden:"yes",
                showMainScrubberToolTipLabel:"yes",
                showDefaultControllerForVimeo:"no",
                repeatBackground:"yes",
                controllerHeight:43,
                controllerHideDelay:3,
                startSpaceBetweenButtons:10,
                spaceBetweenButtons:10,
                scrubbersOffsetWidth:2,
                mainScrubberOffestTop:17,
                timeOffsetLeftWidth:2,
                timeOffsetRightWidth:2,
                timeOffsetTop:-1,
                volumeScrubberHeight:80,
                volumeScrubberOfsetHeight:20,
                timeColor:"#888888",
                youtubeQualityButtonNormalColor:"#888888",
                youtubeQualityButtonSelectedColor:"#FFFFFF",
                scrubbersToolTipLabelBackgroundColor:"#FFFFFF",
                scrubbersToolTipLabelFontColor:"#5a5a5a",
                //advertisement on pause window
                aopwTitle:"Advertisement",
                aopwWidth:400,
                aopwHeight:240,
                aopwBorderSize:6,
                aopwTitleColor:"#FFFFFF",
                //subtitle
                subtitlesOffLabel:"Subtitle off",
                //popup add windows
                showPopupAdsCloseButton:"yes",
                //embed window and info window
                embedAndInfoWindowCloseButtonMargins:15,
                borderColor:"#333333",
                mainLabelsColor:"#FFFFFF",
                secondaryLabelsColor:"#a1a1a1",
                shareAndEmbedTextColor:"#5a5a5a",
                inputBackgroundColor:"#000000",
                inputColor:"#FFFFFF",
                //login
                playIfLoggedIn:"no",
                playIfLoggedInMessage:"Please <a href='https://google.com' target='_blank'>login</a> to play this video.",
                //audio visualizer
                audioVisualizerLinesColor:"#0099FF",
                audioVisualizerCircleColor:"#FFFFFF",
                //lightbox settings
                closeLightBoxWhenPlayComplete:"no",
                lightBoxBackgroundOpacity:.6,
                lightBoxBackgroundColor:"#000000",
                //sticky on scroll
                stickyOnScroll:"no",
                stickyOnScrollShowOpener:"yes",
                stickyOnScrollWidth:"700",
                stickyOnScrollHeight:"394",
                //sticky display settings
                showOpener:"yes",
                showOpenerPlayPauseButton:"yes",
                verticalPosition:"bottom",
                horizontalPosition:"center",
                showPlayerByDefault:"yes",
                animatePlayer:"yes",
                openerAlignment:"right",
                mainBackgroundImagePath:"content/minimal_skin_dark/main-background.png",
                openerEqulizerOffsetTop:-1,
                openerEqulizerOffsetLeft:3,
                offsetX:0,
                offsetY:0,
                //playback rate / speed
                defaultPlaybackRate:1, //0.25, 0.5, 1, 1.25, 1.2, 2
                //cuepoints
                executeCuepointsOnlyOnce:"no",
                //annotations
                showAnnotationsPositionTool:"no",
                //ads
                openNewPageAtTheEndOfTheAds:"no",
                adsButtonsPosition:"left",
                skipToVideoText:"You can skip to video in: ",
                skipToVideoButtonText:"Skip Ad",
                adsTextNormalColor:"#888888",
                adsTextSelectedColor:"#FFFFFF",
                adsBorderNormalColor:"#444444",
                adsBorderSelectedColor:"#FFFFFF",
                //a to b loop
                useAToB:"yes",
                atbTimeBackgroundColor:"transparent",
                atbTimeTextColorNormal:"#888888",
                atbTimeTextColorSelected:"#FFFFFF",
                atbButtonTextNormalColor:"#888888",
                atbButtonTextSelectedColor:"#FFFFFF",
                atbButtonBackgroundNormalColor:"#FFFFFF",
                atbButtonBackgroundSelectedColor:"#000000",
                //thumbnails preview
                thumbnailsPreviewWidth:196,
                thumbnailsPreviewHeight:110,
                thumbnailsPreviewBackgroundColor:"#000000",
                thumbnailsPreviewBorderColor:"#666",
                thumbnailsPreviewLabelBackgroundColor:"#666",
                thumbnailsPreviewLabelFontColor:"#FFF",
                // context menu
                showContextmenu:'no',
                showScriptDeveloper:"no",
                contextMenuBackgroundColor:"#1f1f1f",
                contextMenuBorderColor:"#1f1f1f",
                contextMenuSpacerColor:"#333",
                contextMenuItemNormalColor:"#666666",
                contextMenuItemSelectedColor:"#FFFFFF",
                contextMenuItemDisabledColor:"#333"
            });

            //
            registerAPI();
        });

        //Proceso para obtener la url
        
        //PASO1
        //--------------------------Funcion para extraer la url del canal que se esta reproduciendo -------------------
        //Register API (an setInterval is required because the player is not available until the youtube API is loaded).
        var registerAPIInterval;
        
        function registerAPI(){
            //se limpia el intervalo para registro de la API
            clearInterval(registerAPIInterval);

            //Condiciona si tiene la pantalla de player
            if(window.player1){
                
                player1.addListener(FWDUVPlayer.UPDATE_VIDEO_SOURCE, updateVideoSourceHandler);

            }else{
                registerAPIInterval = setInterval(registerAPI, 100);
            }

        };

        //PASO2
        //Funcion que distribuye cuando se modifica la fuente de vídeo actual de la instancia de Ultimate Video Player.
        function updateVideoSourceHandler(e){
            //guarda en la variable la url del video 
            var prueba= player1.getVideoSource();
            //comprobamos que se almacene correctamente
            console.log(prueba);

            //Se guarda valor en una cookie
            localStorage.setItem("urlCast", prueba);	
        }
    </script>	 
    --}}
</head>


<body style="background-color: {{ session('backgroundColor') }}">    

   

    @yield('content')
    
    <br><br><br><br>
    <footer class="footer">
        @include('site.layouts.partials.footer')
    </footer>
   
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>
    
    <!-- ionic icons -->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js"></script>

    <script type="text/javascript">
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: {{ session('slideItem') }},
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: true
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>

    <script src="js/sweetalert.min.js"></script>

    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
    
</body>
</html>