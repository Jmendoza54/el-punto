@extends('../layouts/site')

@section('title', 'Prensa')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style-site.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
@endsection
    
@section('content')
    @include('partials.site.menu')

    <div class="prensa prensa-main flex-col my-slick">
        <div class="cont">
            <div class="slick-prensa">
                <div class="elements">
                    <div class="cont group flex-row">
                        <div class="col half">
                            <img src="{{ asset('img/site/neon_playacar_2.png') }}" alt="Logo" class="logo-prensa">
                        </div>
                        <div class="col half">
                            <div class="cont-desc black-box">
                                <span class="text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span> Repellendus veniam quas, voluptate adipisci quia, 
                                iste ullam obcaecati et inventore assumenda consectetur eos laudantium repudiandae, at asperiores laborum excepturi doloremque enim.
                            </div>
                        </div>
                    </div>
                    <div class="cont group">
                        <div class="col one">
                            <div class="black-box m-c">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odio tenetur ipsa soluta facere consectetur, veniam veritatis illum in fuga consequatur 
                                vitae eius incidunt reiciendis perferendis, assumenda dolores sed nesciunt.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elements">
                    <div class="cont group flex-row">
                        <div class="col half">
                            <img src="{{ asset('img/site/neon_everything_2.png') }}" alt="Logo" class="logo-prensa">
                        </div>
                        <div class="col half">
                            <div class="cont-desc black-box">
                                <span class="text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span> Repellendus veniam quas, voluptate adipisci quia, 
                                iste ullam obcaecati et inventore assumenda consectetur eos laudantium repudiandae, at asperiores laborum excepturi doloremque enim.
                            </div>
                        </div>
                    </div>
                    <div class="cont group">
                        <div class="col one">
                            <div class="black-box m-c">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odio tenetur ipsa soluta facere consectetur, veniam veritatis illum in fuga consequatur 
                                vitae eius incidunt reiciendis perferendis, assumenda dolores sed nesciunt.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elements">
                    <div class="cont group flex-row">
                        <div class="col half">
                            <img src="{{ asset('img/site/neon_residente_2.png') }}" alt="Logo" class="logo-prensa">
                        </div>
                        <div class="col half">
                            <div class="cont-desc black-box">
                                <span class="text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span> Repellendus veniam quas, voluptate adipisci quia, 
                                iste ullam obcaecati et inventore assumenda consectetur eos laudantium repudiandae, at asperiores laborum excepturi doloremque enim.
                            </div>
                        </div>
                    </div>
                    <div class="cont group">
                        <div class="col one">
                            <div class="black-box m-c">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odio tenetur ipsa soluta facere consectetur, veniam veritatis illum in fuga consequatur 
                                vitae eius incidunt reiciendis perferendis, assumenda dolores sed nesciunt.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elements">
                    <div class="cont group flex-row">
                        <div class="col half">
                            <img src="{{ asset('img/site/neon_sigue_2.png') }}" alt="Logo" class="logo-prensa">
                        </div>
                        <div class="col half">
                            <div class="cont-desc black-box">
                                <span class="text-red">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span> Repellendus veniam quas, voluptate adipisci quia, 
                                iste ullam obcaecati et inventore assumenda consectetur eos laudantium repudiandae, at asperiores laborum excepturi doloremque enim.
                            </div>
                        </div>
                    </div>
                    <div class="cont group">
                        <div class="col one">
                            <div class="black-box m-c">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odio tenetur ipsa soluta facere consectetur, veniam veritatis illum in fuga consequatur 
                                vitae eius incidunt reiciendis perferendis, assumenda dolores sed nesciunt.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.site.contact')
@endsection

@section('js')
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script>
        //Carrousel de blog
    $('.slick-prensa').slick({
        slidesToShow: 1,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 10000
    });
    </script>
@endsection