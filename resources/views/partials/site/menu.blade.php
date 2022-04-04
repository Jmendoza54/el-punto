<div class="menu">
    <div class="cont">
        <img src="img/site/logo-menu.png" alt="">

        @include('partials.site.menu-mobile')

        <nav class="general">
            <div class="point"></div>
            <li>
                <a href="{{ route('index') }}" class="active a-point">
                    inicio
                    <point></point>
                </a>
            </li>
            <li>
                <a href="{{ route('index') }}/#punto" class="a-point">
                    elpunto
                    <point></point>
                </a>
            </li>
            <li>
                <a href="{{ route('index') }}/#blog" class="a-point">
                    blog
                    <point></point>
                </a>
            </li>
            <li>
                <a href="{{ route('index') }}/#prensa" class="a-point">
                    prensa
                    <point></point>
                </a>
            </li>
            <li>
                <a href="{{ route('index') }}/#contact" class="a-point">
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