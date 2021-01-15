@extends('site.layouts.template')

@section('content')
@include('site.layouts.partials.navplayer');
    <br>
    <br>
    <br>
    <div class="container">
        <div id="myDiv"></div>
    </div>
    
    <!--  Playlists -->
    <ul id="playlists" style="display:none;">
        <!-- Lista de Reproduccion Actual -->
        <li data-source="reproduciendo" data-playlist-name="Reproduciendo Ahora" data-thumbnail-path="content/thumbnails/p-mixed.jpg">
            <p class="fwduvp-categories-title"><span class="fwduvp-header">Title: </span><span class="fwduvp-title">Reproduciendo</span></p>
        </li>
        <!-- Categorias -->
		@foreach($categories as $category)
            <li data-source="{{$category -> id}}" data-playlist-name="{{$category -> name}}" data-thumbnail-path="content/thumbnails/p-mixed.jpg">
                <p class="fwduvp-categories-title"><span class="fwduvp-header">Title: </span><span class="fwduvp-title">{{$category -> name}}</span></p>
            </li>
        @endforeach
    </ul>

    <!-- Lista Reproduccion Actual -->
    <ul id="reproduciendo" style="display:none;">
        @foreach($channels as $channel)
            @if($channel-> title == $_GET['channel'])		  		
                <li data-thumb-source="{{$channel -> icon_url}}" data-video-source="{{$channel -> stream_url}}" data-poster-source="{{$channel -> icon_url}}" data-downloadable="no">
                <div data-video-short-description="">
                    <div>
                        <p class="fwduvp-thumbnail-title">{{$channel -> title}}</p>
                    </div>
                    <!--
                    <div class="progress">
                        <div id="barProgresive" class="progress-bar progress-bar-striped bg-info inicio animacion" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    -->
                </div>
                </li>
            @endif
        @endforeach
    </ul>
    <!-- Lista Generadas de Objeto -->
    @foreach($categories as $category)
        <ul id="{{$category -> id}}" style="display:none;">
            @foreach($channels as $channel)
                @if($channel-> genre_id == $category-> id)	  		
                    <li data-thumb-source="{{$channel -> icon_url}}" data-video-source="{{$channel -> stream_url}}" data-poster-source="{{$channel -> icon_url}}" data-downloadable="no">
                        <div data-video-short-description="">
                            <div>
                                <p class="fwduvp-thumbnail-title">{{$channel -> title}}</p>
                            </div>
                            <div>
                                <p class="fwduvp-thumbnail-description">
                                    <!--
                                    <div class="progress">
                                        <div id="barProgresive" class="progress-bar progress-bar-striped bg-info inicio animacion" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    -->
                                </p>
                            </div>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    @endforeach
     
@endsection

@section('construct_player')
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
@endsection

@section('js_barprogressive')
    <!-- 
    <script>
        function animar(){
            document.getElementById("barProgresive").classList.toggle("final");
        }

        if(FWDUVPlayer.PLAY){
            //player1.addListener(FWDUVPlayer.PLAY);
            console.log("********* API -- play************ ");
        }
    </script>
    -->
@endsection