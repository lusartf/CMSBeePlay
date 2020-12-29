{{--fOOTER--}}
<div  style="background-color: {{ session('footerColor') }}">
    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-copyright" style="color: {{ session('textFooterColor') }};">
                        &copy; Derechos reservados Instel 2020 <a href="https://beenet.com.sv"></a>
                </div>
                <div class="col-md-6 footer" style="padding-left: 100px"><img src="{{ asset(session('footerLogo')) }}" width="160" class="d-inline-block align-top" alt="" loading="lazy"></div>
                <div class="col-md-3 footer-social" style="color: {{ session('textFooterColor') }};">
                    <a href=""><i class="fab fa-facebook-f"></i></a> 
                    <a href=""><i class="fab fa-instagram"></i></a> 
                    <a href=""><i class="fab fa-tv"></i></a> 
                    info@beenetplay.com
                </div>
            </div>
        </div>
    </center>
</div>