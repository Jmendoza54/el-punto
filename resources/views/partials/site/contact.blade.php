<div class="address" id="contact">
    <div class="cont">
        <h2 class="title">dirección y horario</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.8412870298557!2d-87.0683048844979!3d20.63532508621279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e43211a7c476f%3A0x9fa54e1c0e7fb946!2sEl%20Punto%20The%20Venezuelan%20Corner!5e0!3m2!1ses-419!2smx!4v1631726820424!5m2!1ses-419!2smx" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="cont cont-contact">
        <div class="social flex-row">
            <h2 class="title-footer-menu">social networks</h2>
            <div class="icons flex-col">
                <a href="https://www.facebook.com/elpuntovenezuelancorner" target="_blank">
                    <img src="{{ asset('img/site/icon-fb.png') }}" alt="" class="icon-social">
                </a>
                <a href="https://www.instagram.com/elpuntovenezuelancorner/" target="_blank">
                    <img src="{{ asset('img/site/icon-ins.png') }}" alt="" class="icon-social">
                </a>
                <a href="https://www.tripadvisor.com.mx/RSManagementCenter-d23082021-El_Punto_The_Venezuelan_Corner" target="_blank">
                    <img src="{{ asset('img/site/icon-trip.png') }}" alt="" class="icon-social">
                </a>
                <a href="https://www.google.com/maps/place/El+Punto+The+Venezuelan+Corner/@20.6353251,-87.0661162,15z/data=!4m5!3m4!1s0x0:0x9fa54e1c0e7fb946!8m2!3d20.6353251!4d-87.0661162" target="_blank">
                    <img src="{{ asset('img/site/icon-google.png') }}" alt="" class="icon-social">
                </a>
                <a href="https://biz.yelp.com.mx/home/x0xgMWrOThodlTNCCjJwgA/" target="_blank">
                    <img src="{{ asset('img/site/icon-yelp.png') }}" alt="" class="icon-social">
                </a>
            </div>
        </div>

        <div class="menu-footer flex-row">
            <h2 class="title-footer-menu">información</h2>
            <div class="icons flex-col">
                @include('partials.site.menu-footer')
            </div>
        </div>
        <p class="ads">
            <span class="text-yellow">5ta Av,</span> Esquina Calle 38 Nte, 77710, Playa del Carmen, Q.Roo, México
        </p>
        <p class="hours">
            7:00 - 23:00 hrs todos los días <span class="text-red">everyday</span>
        </p>
        <div class="group">
            <div class="col half">
                <div class="bg-red btn-con-cli">
                    <a href="/concierge" target="_blank">concierge registro de cliente</a>
                </div>
            </div>
            <div class="col half">
                <div class="bg-blue btn-con-reg">
                    <a href="/concierge" target="_blank">concierge nuevo? registrate!</a>
                </div>
            </div>
        </div>

        <p class="conci-login">
            revisa tus reservas <a ref="/concierge" target="_blank" class="text-yellow btn-con-login">concierge login</a>
        </p>
    </div>
    <footer>
        <div class="cont">
            <h2 class="derechos">
                todos los derechos reservados el punto &#174;
            </h2>
        </div>
    </footer>
</div>