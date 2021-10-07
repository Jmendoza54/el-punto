<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Punto | Construcción</title>
    <style>
        @font-face {
            font-family: 'Neutra';
            src: url('css/fonts/NeutraCond-MediumAlt.otf') format('opentype');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        body,html{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        .container{
            width: 100%;
            min-height: 100%;
            background-image: url(img/site/bg_address.png);
            background-position: center;
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .logo{
            width: 90%;
            max-width: 500px;
        }
        .title{
            font-family: 'Neutra';
            font-weight: 400;
            color: white;
            font-size: 45px;
            background-color: #f32735;
            padding: 10px 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('img/site/logo-main.png') }}" alt="" class="logo">
        <img src="{{ asset('img/site/arepita_lista.png') }}" alt="" class="arepita">
        <h1 class="title">Estamos trabajando para que puedas hacer uso de esta gran herramienta lo más pronto posible!!!</h1>
    </div>
</body>
</html>