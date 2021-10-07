<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Punto | Home</title>
    <link rel="stylesheet" href="{{asset('css/style-promo.css')}}">
	<!-- Hotjar Tracking Code for https://elpunto.mx/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2170617,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TMKQPTC');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TMKQPTC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="main">
        <div id="scene" data-relative-input="true" data-limit-x="5" data-limit-y="5" data-hover-only="true">
            <div class="absolute abs-img">
                <div class="point-blue layer scene" data-depth="0.8">
                    <img src="{{asset('img/promo/blue-points.png')}}" alt="">
                </div>
                <div class="point-red layer scene" data-depth="0.8">
                    <img src="{{asset('img/promo/red-points.png')}}" alt="">
                </div>
            </div>
            <div class="absolute abs-form">
                <div class="cont">
                    <div class="group">
                        <div class="col half cont-parallax">
                            <div class="cont-img layer" data-depth="0.8">
                                <img src="{{asset('img/promo/mancha_azul_02.png')}}" alt="" class="blue-2">
                            </div>
                            <div class="cont-img layer" data-depth="0.8">
                                <img src="{{asset('img/promo/mancha_amarilla.png')}}" alt="" class="amarilla">
                            </div>
                            <div class="cont-img layer" data-depth="0.4">
                                <img src="{{asset('img/promo/mancha_azul_03.png')}}" alt="" class="blue-3">
                            </div>
                            <div class="cont-img layer" data-depth="1.0">
                                <img src="{{asset('img/promo/Logo.png')}}" alt="" class="logo">
                            </div>
                            <div class="cont-img layer" data-depth="0.4">
                                <img src="{{asset('img/promo/mancha_roja.png')}}" alt="" class="mancha">
                            </div>
                            <div class="cont-img layer" data-depth="1.0">
                                <img src="{{asset('img/promo/mancha_azul_01.png')}}" alt="" class="blue-1">
                            </div>
                        </div>
                        <div class="col half cont-parallax">
                            <div class="cont-img layer" data-depth="0.5">
                                <img src="{{asset('img/promo/mini_puntos.png')}}" alt="" class="mini">
                            </div>
                            <div class="cont-img layer" data-depth="0.9">
                                <img src="{{asset('img/promo/Amarillo_derecha.png')}}" alt="" class="ama_der">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="input-parallax">
            <div class="group cont">
                <div class="col half">&nbsp</div>
                <div class="col half">
                    <div class="form">
                        <div>
                            <img src="{{asset('img/promo/Logo.png')}}" alt="Logo El punto" class="logo-form">
                        </div>
                        <h2 class="title-form">déjanos tu email y recibe nuestra promoción de <span>20% de descuento</span> en tu primer consumo.</h2>
                        <form action="" id="form-promo">
                            <div class="group">
                                <div class="col one">
                                    @csrf 
                                    <input type="hidden" name="source" id="source" value="{{$source}}">
                                    <input type="hidden" name="percentage" id="percentage" value="20">
                                    <input type="text" name="name" id="name" placeholder="NOMBRE*" autocomplete="off" required>
                                </div>
                                <div class="col one">
                                    <input type="email" name="email" id="email" placeholder="EMAIL*" autocomplete="off" required>
                                </div>
                                <div class="col half">
                                    <input type="text" name="edad" id="edar" placeholder="EDAD" autocomplete="off">
                                </div>
                                <div class="col half">
                                    <input type="text" name="genero" id="genero" placeholder="GÉNERO" autocomplete="off">
                                </div>
                                <div class="col one">
                                    <input type="text" name="nacionalidad" id="nacionalidad" placeholder="NACIONALIDAD" autocomplete="off">
                                </div>
                                <div class="col half">
                                    <input type="text" name="ciudad" id="ciudad" placeholder="CIUDAD" autocomplete="off">
                                </div>
                                <div class="col half">
                                    <input type="text" name="zip_code" id="zip_code" placeholder="CÓDIGO POSTAL" autocomplete="off">
                                </div>
                            </div>
                            <button type="submit">recibir descuento!</button>
                        </form>
                        @include('partials.spinner')
						<div class="overlay">
                            <div class="modal">
                                <h2 class="title">Muchas Gracias, Puedes descargar tu código QR en el enlace siguiente!!!</h2>
                                <a href="" id="url-qr" target="_blank">Descargar código QR</a>
                                <p class="follow">Siguenos en nuestras redes</p>
                                <div class="flex">
                                    <a href="https://www.facebook.com/El-Punto-Venezuelan-Corner-102084408460689/"><img src="{{asset('img/promo/facebook.png')}}" alt="" class="social"></a>
                                    <a href="https://instagram.com/elpuntovenezuelancorner?igshid=84z5vi4qrj7y"><img src="{{asset('img/promo/instagram.png')}}" alt="" class="social"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{asset('js/ui.js')}}"></script>
    <script src="{{asset('js/promo.js')}}"></script>
</body>
</html>