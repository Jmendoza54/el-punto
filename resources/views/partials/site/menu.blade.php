<div class="menu">
    <div class="cont">
        <img src="img/site/logo-menu.png" alt="">
        @if (Route::currentRouteName() == 'index')
            
            @php
                $link = '';
            @endphp
        @else
            @php
                $link = url('').'/';
            @endphp
        @endif

        @include('partials.site.menu-mobile', ['link' => $link])

        <nav class="general">
            <div class="point"></div>
            <li>
                <a href="{{ $link }}#home" class="active a-point">
                    inicio
                    <point></point>
                </a>
            </li>
            <li>
                <a href="{{ $link }}#punto" class="a-point">
                    elpunto
                    <point></point>
                </a>
            </li>
            <li>
                <a href="{{ $link }}#blog" class="a-point">
                    blog
                    <point></point>
                </a>
            </li>
            <li>
                <a href="{{ $link }}#prensa" class="a-point">
                    prensa
                    <point></point>
                </a>
            </li>
            <li>
                <a href="{{ $link }}#contact" class="a-point">
                    contacto
                    <point></point>
                </a>
            </li>
            <li id="menu-order-now">
                <a href="https://elpunto.ola.click" target="_blank">
                    <span class="bold">menú</span>
                    ordena ahora
                </a>
            </li>
        </nav>
    </div>
</div>