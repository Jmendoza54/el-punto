@extends('../layouts/site')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style-site.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
@endsection

@section('content')

    <div class="bg-main"></div>
        @include('partials.site.menu')
        <div class="main" id="home">
            <div class="img-main"></div>
            <video id="video-main" muted loop autoplay>
                
            </video>
            
            <div class="cont text-center">
                <img src="{{ asset('img/site/logo-main.png') }}" alt="" class="logo">
                <h1 class="title-main text-white">¡venezuela está en la 5ta!</h1>
                <h2 class="sub-title text-yellow">venezuela is on the 5th avenue!</h2>
            </div>
        </div>
    <!-----------------------------Sección Promo----------------------------------->
    <div class="promo" id="promo">
        <div class="cont flex-row">
            <div class="col half order-two">
                <h3 class="kind text-yellow">
                    entradas
                </h3>
                <h2 class="dish-name text-white">
                    el punto sampler
                </h2>
                <p class="text-white bg-red sub-title">
                    ¡lo mejor de venezuela en méxico!
                </p>
                <p class="desc text-white">
                    Ven y prueba junto con tu pareja o amigos el sabor único de el sampler más representativo de nuestra arepera: “El Punto Sampler”.
                </p>
                <p class="included text-yellow">
                    INCLUYE: 8 MINI AREPAS, 3 MINI EMPANADAS (1 CARNE MECHADA, 1 POLLO MECHADO, 1 QUESO), 5 TEQUEÑOS, QUESO DE MANO VENEZOLANO, NATA VENEZOLANA, SALSA “EL PUNTO”.
                </p>
            </div>
            <div class="col half half-sampler">
                <img src="img/site/carne.-mechada.png" class="carne-mechada img-ps">
                <img src="img/site/pollo-mechado.png" class="pollo-mechado img-ps">
                <img src="img/site/queso-2.png" class="queso img-ps">
                <img src="img/site/harina-02.png" class="harina-2 img-ps">
                <img src="img/site/harina.png" class="harina img-ps">
                <img src="{{ asset('img/site/el-punto-sampler.png') }}" alt="" class="img-dish">
            </div>
        </div>
    </div>
    <!-----------------------------Sección El Punto----------------------------------->
    <div class="punto flex-row" id="punto">
        <img src="{{ asset('img/site/tomatoes.png') }}" alt="" class="tomatoes">
        <div class="cont group flex-row">
            <div class="col half">
                <img src="{{ asset('img/site/bandera-venezuela.png') }}" alt="Bandera Venezuela" class="bandera-video">
                <video autoplay muted controls loop style="width:100%">
                    <source src="video/el-punto.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col half">
                <div class="el-punto">
                    <img src="{{ asset('img/site/bandera-venezuela.png') }}" alt="Bandera Venezuela" class="bandera">
                    <h2 class="title">
                        el punto the venezuelan corner
                    </h2>

                    <p>
                        el punto the venezuelan corner es una propuesta gastronómica inspirada en la comida de una cocina típica familiar venezolana: compleja, 
                        variada y con un sinfín de historias y culturas que la enriquecen.
                    </p>

                    <div class="btn-mas bg-red">
                        <a href="{{ route('about.us') }}">leer más...</a>
                    </div>
                    <img src="{{ asset('img/site/mexican-sampler.png') }}" alt="Mexican Sampler" class="sampler">
                </div>
            </div>
        </div>
    </div>

    <!-----------------------------Sección Prensa----------------------------------->
    <div class="prensa flex-col" id="prensa">
        <div class="cont">
            <h2 class="title">prensa</h2>
            <p class="desc">
                ESTE PROYECTO NACIÓ EL 1 DE ENERO DE 2021 EN PLAYA DEL CARMEN Y HEMOS TENIDO APARICIÓN EN DIVERSOS MEDIOS CON GRAN PRESTIGIO EN LA RIVIERA MAYA QUE AVALAN 
                NUESTRO SERVICIO, CALIDAD DE PRODUCTO Y EL AMOR QUE TIENE INYECTADO ESTE CONCEPTO DE AREPERA GASTRO BAR.
            </p>
            <p class="desc">
                TE INVITAMOS A QUE SEAS PARTE DE ESTA EXPERIENCIA CULINARIA Y TE UNAS  LA FAMILIA DE #ELPUNTOLOVERS
            </p>
        </div>
        <div class="bg-middle"></div>
        <div class="cont mt-logos">
            <div class="group logos">
                <div class="col third mt-center cont-prensa">
                    <img src="{{ asset('img/site/neon_playacar_2.png') }}" alt="" class="logo-neon logo-playacar">
                    <p class="text"><span class="text-red">Probando por primera vez el Pepito Venezolano.</span><br>
                        El Punto The Venezuelan Corner, el sitio para probar el tradicional Pepito Venezolano. 
                        </p>
                    <div class="btn-prensa">
                        <a href="https://www.instagram.com/p/CQZFjcKlROf/" target="_blank">leer más...</a>
                    </div>
                </div>
                <div class="col third cont-prensa">
                    <img src="{{ asset('img/site/neon_residente_2.png') }}" alt="" class="logo-neon logo-residente">
                    <p class="text"><span class="text-red">El Punto The Venezuelan Corner, en palabras de su Chef.</span><br>
                        El Punto The Venezuelan Corner es el primer restaurante de gastronomía Venezolana en la Quinta Avenida de Playa del Carmen.
                    </p>
                    <div class="btn-prensa">
                        <a href="https://www.instagram.com/p/COye-GfFcrC/" target="_blank">leer más...</a>
                    </div>
                </div>
                <div class="col third mt-center cont-prensa">
                    <img src="{{ asset('img/site/neon_sigue_2.png') }}" alt="" class="logo-neon logo-sigue">
                    <p class="text"><span class="text-red">Playa del Carmen cuenta con un punto de gastronomía venezolana.</span><br>
                        Un lugar para degustar la comida de Venezuela, conoce el Punto The Venezuelan Corner.
                    </p>
                    <div class="btn-prensa">
                        <a href="https://loquesigue.tv/temas/el-punto-the-venezuelan-corner/" target="_blank">leer más...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog flex-col my-slick" id="blog">
        <div class="bg_black"></div>
        <div class="cont">
            <img src="{{ asset('img/site/blog-title.png') }}" class="img-blog-title" alt="Blog">
            <div class="slick-blog ">
                <div class="cont-blog">
                    <div class="aro flex-col">
                        <div style="background-image:url('{{ asset('img/site/blog-img.png') }}')" class="img-blog"></div>
                    </div>
                    <idv class="info-blog">
                        <h2 class="title text-yellow">
                            Con amor de pana a pana
                        </h2>
                        <p class="desc">
                            Queremos hacer equipo junto con cada uno de ustedes que nos visitan, por lo cual hemos seleccionado nuestra popular arepa mix & match.
                        </p>
                        {{-- <div class="btn-blog-more">
                            <a href="javascript:void(0);" class="text-yellow">leer más...</a>
                        </div> --}}
                    </idv>
                </div>
                <div class="cont-blog">
                    <div class="aro flex-col">
                        <div style="background-image:url('{{ asset('img/site/blog-img-2.jpg') }}')" class="img-blog"></div>
                    </div>
                    <idv class="info-blog">
                        <h2 class="title text-yellow">
                            NOSOTROS…
                        </h2>
                        <p class="desc">
                            Para las personas que deseen probar un sabor casero y autóctono, hay un sin fin de exquisitas comidas dulces y saladas, que se apoderarán de los paladares más exigentes.
                        </p>
                        {{-- <div class="btn-blog-more">
                            <a href="javascript:void(0);" class="text-yellow">leer más...</a>
                        </div> --}}
                    </idv>
                </div>
                <div class="cont-blog">
                    <div class="aro flex-col">
                        <div style="background-image:url('{{ asset('img/site/blog-img-2.jpg') }}')" class="img-blog"></div>
                    </div>
                    <idv class="info-blog">
                        <h2 class="title text-yellow">
                            Una carta de amor a la arepa
                        </h2>
                        <p class="desc">
                            Reconocemos tu belleza, valor, riqueza, tu esfuerzo por siempre sacar lo mejor de mí o de cada persona que te conoce.
                        </p>
                        {{-- <div class="btn-blog-more">
                            <a href="javascript:void(0);" class="text-yellow">leer más...</a>
                        </div> --}}
                    </idv>
                </div>
            </div>
        </div>
    </div>

    @include('partials.site.contact')   
@endsection

@section('js')
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('js/ui-site.js')}}"></script>
    <script src="{{ asset('js/script-site.js')}}"></script>
    <script src="{{ asset('js/parallax.js')}}"></script>
    <script>
        //Carrousel de blog
    $('.slick-blog').slick({
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 10000,
        responsive: [
            {
                breakpoint: 1150,
                settings: {
                    slidesToShow: 1,
                    autoplay: true,
                    autoplaySpeed: 10000,
                }
            },
            {
                breakpoint: 550,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    autoplay: true,
                    autoplaySpeed: 10000,
                }
            }
        ]
    });
    </script>
@endsection