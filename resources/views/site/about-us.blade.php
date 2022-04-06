@extends('../layouts/site')

@section('title', 'Prensa')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style-site.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
@endsection
    
@section('content')
    @include('partials.site.menu')
    <div class="about">
        <div class="cont group bg-harina-1">
            <div class="col half">
                <div class="info-cont">
                    <img src="{{ asset('img/site/blog-img-3.png') }}" class="img-ver">
                    <p class="desc text-white desc-punto">
                        <span class="text-up">el punto the venezuelan corner</span> es una propuesta gastronómica inspirada en la comida
                        de una cocina típica familiar venezolana: compleja, variada y con un sinfín de historias y culturas que la enriquecen.
                    </p>
                </div>
            </div>
            <div class="col half">
                <div class="info-cont mt">
                    <img src="{{ asset('img/site/logo-main.png') }}" class="logo">
                    <h1 class="title-main text-white text-center">¡venezuela está en la 5ta!</h1>
                    <h2 class="sub-title text-yellow text-center">venezuela is on the 5th avenue!</h2>
                    <img src="{{ asset('img/site/el-punto-sampler.png') }}" class="sampler">
                </div>
            </div>
        </div>

        <div class="cont group">
            <div class="col half mt-c">
                <img src="{{ asset('img/site/Criollo.png') }}" class="criollo">
            </div>
            <div class="col half">
                <img src="{{ asset('img/site/jitomate_arepa.png') }}" class="arepita_jitomate">
                <p class="desc text-white desc-raices">
                    En ella se exhibe un riquísimo acervo<br>
                     cultural de <span class="text-yellow text-up"> raíces europeas e indígenas</span>,<br>
                    que la convierte en un arte culinario, por su<br>
                    <span class="text-up text-bold">presentación, textura,<br> aroma, color y <br>sabores.</span> 
                </p>
            </div>
        </div>

        <div class="cont group bg-harina-2">
            <div class="col half">
                <div class="each_food">
                    <img src="{{ asset('img/site/each_food.png') }}" class="each_food_bg">
                    <img src="{{ asset('img/site/arepita_moliendo.png') }}" class="arepita_moliendo">
                </div>
                
                <h2 class="title-each-food text-up text-white">
                    cada arepa, 
                    tequeño, 
                    cachapa, 
                    pepito y manjar...</h2>
                <p class="desc text-white">
                    ... de esta cocina lleva consigo una porción de la <span class="text-up text-yellow">historia venezolana</span>
                    y mucho corazón, siendo el ingrediente secreto que ponemos en cada creación, ya que uno de nuestros principales 
                    objetivos es causar en cada bocado una experiencia tradicional culinaria.
                </p>
            </div>
            <div class="col half">
                <img src="{{ asset('img/site/pollo-mechado.png') }}" class="pollo_mechado">
                <img src="{{ asset('img/site/arepita_beans.png') }}" class="arepita_beans">
                <img src="{{ asset('img/site/blog-img.png') }}" class="foto_arepa">
            </div>
        </div>

        <div class="cont cont_map group">
            <div class="col half bg_map_before">
                <div class="bg_map"></div>
            </div>
            <div class="col half">
                <p class="desc desc_map text-white">
                    Este proyecto nació el <span class="text-yellow text-number">1</span> <span class="text-up text-yellow">de enero de</span> <span class="text-yellow text-number">2021</span> 
                    en <span class="text-yellow text-up">playa del carmen</span> con la idea de 
                    cumplir el sueño de muchos venezolanos que 
                    residen fuera del país y al mismo tiempo mostrar 
                    nuestros platillos a las diversas nacionalidades de 
                    la zona para que puedan experimentar nuevos 
                    sabores representados por nuestros platos 
                    culturalmente respresentativos.
                </p>
            </div>
        </div>

        <div class="cont group cont_sabor">
            <div class="col half">
                <div class="cont_third">
                    <img src="{{ asset('img/site/cuchara_arroz.png') }}" class="cuchara_arroz">
                    <img src="{{ asset('img/site/arepita_lista.png') }}" class="arepita_lista">
                    <img src="{{ asset('img/site/carne-mechada.png') }}" class="carne_mechada">
                </div>
                <p class="text-center desc desc_sabor text-white">Para las personas que deseen probar un</p>
                <h2 class="text-white text-center text-up title_sabor">
                    Sabor casero y autóctono
                </h2>

                <div class="bg_sabor_casero">
                    <img src="{{ asset('img/site/queso.png') }}" class="foto_queso">
                </div>

                <p class="desc desc_sabor text-center text-white">
                    hay un sin fin de <span class="text-yellow text-up">exquisitas comidas dulces 
                    y saladas</span>, que se apoderarán de los paladares 
                    más exigentes.
                </p>
            </div>
            <div class="col half">
                <img src="{{ asset('img/site/arepa_love.png') }}" class="foto_arepa_love">
                <img src="{{ asset('img/site/Guacamole.png') }}" class="foto_guacamole">
            </div>
        </div>

        <div class="cont group text-center">
            <div class="one">
                <h2 class="text-white text-up welcome">¡bienvenidos a este viaje por venezuela!</h2>
                {{-- <h2 class="text-yellow text-up text-transform"><span class="left">ven o deleita tu paladar desde casa</span> <span class="right">con nuestro servicio a domicilio.</span></h2> --}}
                <h2 class="text-yellow text-up text-transform">ven o deleita tu paladar desde casa con nuestro servicio a domicilio.</h2>

                <div class="btn_order_now bg-red">
                    <a href="https://elpunto.ola.click/" target="_blank" rel="noopener noreferrer">
                    ordenar ahora</a>
                </div>
            </div>
        </div>

        <div class="bg_subway"></div>
    </div>

    @include('partials.site.contact')
@endsection

@section('js')
<script>
    $(function () {

        const menu = document.querySelector('.menu-activador a');

        menu.addEventListener('click', function (event) {
            event.preventDefault();
            this.classList.toggle('menu-abierto');
        })

        //Mostrar menú mobile
        $('.menu-activador').on('click', function () {
            if ($('.menu-activador a').hasClass('menu-abierto')) {
                $('.mobile').animate({
                    'top': '118px'
                })
            } else {
                $('.mobile').animate({
                    'top': '-350px'
                })
            }
        });
    }); //ready
</script>
@endsection