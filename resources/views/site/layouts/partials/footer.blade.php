{{--fOOTER--}}
<div style="background-color: {{ session('footerColor') }}"> 
        <div class="container">
            <div class="row " style="padding-top: 20px;padding-bottom:10px">
                <div class="col-md-4 d-none d-sm-none d-md-block" style="color: {{ session('textFooterColor') }}; padding-top:15px;">
                    <font size=4>&copy; Derechos reservados Instel 2020</font><a href="https://beenet.com.sv"></a>
                </div>
                <div class="col-md-3 d-none d-sm-none d-md-block">
                    <div class="row">
                        <div class="col-md-5 offset-md-5" style="padding-top:15px">
                            <img src="{{ asset(session('footerLogo')) }}" width="160" class="d-inline-block align-top" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-2 d-none d-sm-none d-md-block" style="color: {{ session('textFooterColor') }};">
                    <div style="padding-left: 20px;">
                        <center>
                            @foreach (session('rs') as $rs)
                                <a href="{{$rs->url}}" target="_blank" style="text-decoration: none">
                                    <img src="{{ asset($rs->logo) }}" alt="" width="30" height="30">
                                </a> 
                            @endforeach
                            <font size=4>info@beenetplay.com</font>
                        </center>
                    </div>
                    
                </div>
                <!-- mobile -->
                    <div class="col-sm-3 d-md-none">
                        <div class="row">
                            <div class="col-sm-5 offset-sm-6" style="margin-left:110px;">
                                <img src="{{ asset(session('footerLogo')) }}" width="160" class="d-inline-block align-top" alt="" loading="lazy">
                            </div>
                        </div>
                    </div>
                    {{-- 
                    <div class="col-md-3 offset-md-2 d-md-none" style="color: {{ session('textFooterColor') }}; margin-left:105px">
                        <div style="padding-left: 40px">
                            @foreach (session('rs') as $rs)
                                <a href="{{$rs->url}}" target="_blank" style="text-decoration: none">
                                    <img src="{{ asset($rs->logo) }}" alt="" width="20" height="20">
                                </a> 
                            @endforeach
                        </div>
                        <font size=4>info@beenetplay.com</font>
                    </div>
                    --}}
                    <div class="col-sm-4 d-md-none" style="color: {{ session('textFooterColor') }}; padding-top:10px; margin-left:50px">
                        <font size=4>&copy; Derechos reservados Instel 2020</font><a href="https://beenet.com.sv"></a>
                    </div>
                <!-- ------ ----- ------ ----- -->
            </div>
        </div>
    
</div>