<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Punto | Apply Promo</title>
    <link rel="stylesheet" href="{{asset('css/style-apply.css')}}">
</head>
<body>
    @if ($promo->status == 1)
        @php
            $disabled = 'disabled';
            $flex = 'flex';
        @endphp    
    @else
    @php
        $disabled = '';
        $flex = 'none';
    @endphp 
    @endif
    <div class="main">
        <div class="cont group">
            <div class="form">
                <div>
                    <img src="{{asset('img/Logo.png')}}" alt="Logo El punto" class="logo-form">
                </div>
                <h2 class="title-form">aplicar promoción para el código:<span> {{$promo->code}}</span></h2>
                <form action="" id="form-apply">
                    <div class="group">
                        <div class="col one">
                            @csrf 
                            @method('PATCH')
                            <input type="hidden" name="id" id="id" value="{{$promo->id}}">
                            <input type="text" name="name" id="name" placeholder="NOMBRE*" autocomplete="off" value="{{$promo->name}}" required disabled>
                        </div>
                        <div class="col one">
                            <input type="email" name="email" id="email" placeholder="EMAIL*" autocomplete="off" value="{{$promo->email}}" required disabled>
                        </div>
                        <div class="col one">
                            <input type="text" name="total" id="total" placeholder="TOTAL DE LA CUENTA" autocomplete="off" value="{{$promo->total}}" required {{$disabled}}>
                        </div>
                        <div class="col one">
                            <input type="text" name="subtotal" id="subtotal" placeholder="TOTAL ALIMENTOS" autocomplete="off" value="{{$promo->subtotal}}" required {{$disabled}}>
                        </div>
                        <div class="col one">
                            <input type="text" name="num_orden" id="num_orden" placeholder="NUM DE ORDEN" autocomplete="off" value="{{$promo->num_orden}}" required {{$disabled}}>
                        </div>
                    </div>
                    <button type="submit">aplicar descuento!</button>
                </form>
                @include('partials.spinner')
                <div class="overlay" style="display:{{$flex}}">
                    <div class="modal">
                        <h2 class="title">Se ha aplicado el cupón de descuento.</h2>
                    </div>
                </div>
            </div>
        </div>	
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{asset('js/ui.js')}}"></script>
    <script src="{{asset('js/apply.js')}}"></script>
</body>
</html>