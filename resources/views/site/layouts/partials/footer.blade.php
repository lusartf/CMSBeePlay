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
                    <div style="padding-left: 80px ">
                        <a href="https://es-la.facebook.com/beenetsv/"><i class="fab fa-facebook-f"></i></a> 
                        <a href="https://www.instagram.com/beenetsv/?hl=es-la"><i class="fab fa-instagram"></i></a> 
                        <a href="#"><i class="fab fa-tv"></i></a> 
                    </div>
                    <font size=4>info@beenetplay.com</font>
                    
                </div>
            </div>
        </div>
    
    
    {{-- 
    <div class="container">
        <div class="row">
            <div class="col-md-6 footer-copyright">
                 &copy; Derechos reservados Instel 2020 <a href="https://beenet.com.sv"></a>
            </div>
            <div class="col-md-3 footer"><img src="{{ asset('posters/logo_beenetplay.png')}}" width="160" class="d-inline-block align-top" alt="" loading="lazy"></div>
            <div class="col-md-3 footer-social">
                <a href="https://es-la.facebook.com/beenetsv/"><i class="fab fa-facebook-f"></i></a> 
                <a href="https://www.instagram.com/beenetsv/?hl=es-la"><i class="fab fa-instagram"></i></a> 
                <a href="#"><i class="fab fa-tv"></i></a> 
                <!--a href="#"><i class="fab fa-instagram"></i></a> 
                <a href="#"><i class="fab fa-pinterest"></i></a-->
            </div>
        </div>
    </div>
    --}}
</div>