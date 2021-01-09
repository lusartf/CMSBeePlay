{{--fOOTER--}}
<div style="background-color: {{ session('footerColor') }}"> 
        <div class="container">
            <div class="row" style="padding-top: 20px;padding-bottom:10px">
                <div class="col-md-4 " style="color: {{ session('textFooterColor') }}; padding-top:15px;">
                    <font size=4>&copy; Derechos reservados Instel 2020</font><a href="https://beenet.com.sv"></a>
                </div>
                <div class="col-md-3 ">
                    <div class="row">
                        <div class="col-md-5 offset-md-5" style="padding-top:15px">
                            <img src="{{ asset(session('footerLogo')) }}" width="160" class="d-inline-block align-top" alt="" loading="lazy">
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-2 offset-md-3 " style="color: {{ session('textFooterColor') }};">
                    <div style="padding-left: 20px">
                        @foreach (session('rs') as $rs)
                            <a href="{{$rs->url}}" target="_blank" style="text-decoration: none">
                                <img src="{{ asset($rs->logo) }}" alt="" width="30" height="30">
                            </a> 
                        @endforeach
                    </div>
                    <font size=4>info@beenetplay.com</font>
                    
                </div>
            </div>
        </div>
    
</div>