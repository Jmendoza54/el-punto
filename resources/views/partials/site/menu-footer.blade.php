@if (Route::currentRouteName() == 'index')
            
    @php
        $link = '';
    @endphp
@else
    @php
        $link = url('').'/';
    @endphp
@endif
<nav>
    <div class="point"></div>
    <li>
        <a href="{{ $link }}#home" class="">
            inicio
        </a>
    </li>
    <li>
        <a href="{{ $link }}#punto" class="">
            elpunto
        </a>
    </li>
    <li>
        <a href="https://elpunto.ola.click" target="_blank">
            Menú
        </a>
    </li>
    <li>
        <a href="{{ $link }}#blog" class="">
            Blog
        </a>
    </li>
    <li>
        <a href="{{ route('concierge') }}" class="">
            concierge
        </a>
    </li>
    {{--
    <li>
        <a href="" class="">
            privacy policy
        </a>
    </li> --}}
</nav>