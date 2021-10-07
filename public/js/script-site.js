$(function () {

    const ui = new UISite();

    const menu = document.querySelector('.menu-activador a');
    const links = document.querySelectorAll('.menu a[href*="#"]:not([href="#"]');

    var videoLocation = document.getElementById("video-main");
    var current_mode = screen.orientation;

    //Carga de video si no son telefonos
    window.onload = videoSource(videoLocation, "video/el-punto.mp4");
    function videoSource(element, src) {
        if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && window.innerWidth <= 550 || /Android|iPhone/.test(navigator.userAgent) && current_mode.type === "landscape-primary" && window.innerWidth <= 850){

        }else{
            var source = document.createElement("source");
            source.src = src;
            videoLocation.appendChild(source);
        }
    }

    //Función para scroll de menú
    for (const link of links) {
        link.addEventListener("click", clickHandler);
    }

    menu.addEventListener('click', function (event) {
        event.preventDefault();
        this.classList.toggle('menu-abierto');
    })

    function clickHandler(e) {
        e.preventDefault();
        const href = this.getAttribute("href");
        const offsetTop = document.querySelector(href).offsetTop;

        $("html, body").animate({ scrollTop: offsetTop}, 800);
    }

    //Animación punto menú
    $('div.menu li .a-point').on('click', function (e) {
        e.preventDefault();
        $('nav li .a-point').removeClass('active');
        $(this).addClass('active');
        ui.movePoint();
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