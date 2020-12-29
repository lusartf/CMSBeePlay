@extends('site.layouts.template')

@section('content')
    <br>
    <br>
    <br>
   

    <div id="myDiv"></div>

    <ul id="playlists" style="display:none;">
        <li data-source="playlist1" data-playlist-name="MY HTML PLAYLIST 1" data-thumbnail-path="content/thumbnails/p-html.jpg">
            <p class="fwduvp-categories-title"><span class="fwduvp-header">Title: </span><span class="fwduvp-title">My HTML playlist 1</span></p>
            <p class="fwduvp-categories-type"><span class="fwduvp-header">Type: </span>HTML</p>
            <p class="fwduvp-categories-description"><span class="fwduvp-header">Description: </span>Created using <strong>HTML markup</strong>, all format are supported and it can have mixed video formats.</p>
        </li>
      
      
    </ul>


    <!--  HTML playlist -->
    <ul id="playlist1" style="display:none;">
        
        <li data-thumb-source="{{asset('content/thumbnails/small-fwd.jpg')}}" data-video-source="[{source:'{{asset('content/videos2/fwd-480p.mp4')}}', label:'small version'}, {source:'{{asset('content/videos2/fwd-720p.mp4')}}', label:'hd720'},{source:'{{asset('content/videos2/fwd-1080p.mp4')}}', label:'hd1080'}]" data-start-at-video="2" data-poster-source="{{asset('content/posters/mp4-poster.jpg')}}">  <div data-video-short-description="">
                <div>
                    <p class="fwduvp-thumbnail-title">Multiple Subtitles & Video Quality</p>
                    <p class="fwduvp-thumbnail-description">Each video can have one or more subtitles (txt or srt).</p>
                </div>
            </div>
        </li>
        

    </ul>

     
@endsection