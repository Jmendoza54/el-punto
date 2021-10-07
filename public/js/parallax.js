$(function () { // wait for document ready
        
    var images = [
        "img/site/neon_residente_0.png",
        "img/site/neon_residente_2.png"
    ];
    var imagesTwo = [
        "img/site/neon_playacar_0.png",
        "img/site/neon_playacar_2.png"
    ];
    var imagesThree = [
        "img/site/neon_sigue_0.png",
        "img/site/neon_sigue_2.png"
    ];

    // TweenMax can tween any property of any object. We use this object to cycle through the array
    var obj = {curImg: 0};

    // create tween
    var tweenImg = TweenMax.to(obj, 0.5,
        {
            curImg: images.length - 1,	// animate propery curImg to number of images
            roundProps: "curImg",				// only integers so it can be used as an array index
            repeat: 3,									// repeat 3 times
            immediateRender: true,			// load first image automatically
            ease: Linear.easeNone,			// show every image the same ammount of time
            onUpdate: function () {
                $(".logo-residente").attr("src", images[obj.curImg]); // set the image source
            }
        }
    );

    var tweenImgPlaya = TweenMax.to(obj, 0.5,
        {
            curImg: imagesTwo.length - 1,	// animate propery curImg to number of images
            roundProps: "curImg",				// only integers so it can be used as an array index
            repeat: 3,									// repeat 3 times
            immediateRender: true,			// load first image automatically
            ease: Linear.easeNone,			// show every image the same ammount of time
            onUpdate: function () {
                $(".logo-playacar").attr("src", imagesTwo[obj.curImg]); // set the image source
            }
        }
    );

    var tweenImgSigue = TweenMax.to(obj, 0.5,
        {
            curImg: imagesThree.length - 1,	// animate propery curImg to number of images
            roundProps: "curImg",				// only integers so it can be used as an array index
            repeat: 3,									// repeat 3 times
            immediateRender: true,			// load first image automatically
            ease: Linear.easeNone,			// show every image the same ammount of time
            onUpdate: function () {
                $(".logo-sigue").attr("src", imagesThree[obj.curImg]); // set the image source
            }
        }
    );




    var controller = new ScrollMagic.Controller();
    var tween = new TimelineMax ()
    .add([
        TweenMax.to("#promo .carne-mechada", 0.5, {top: -70, left: -62}),
        TweenMax.to("#promo .queso", 1, {top: 65, right: -40}),
        TweenMax.to("#promo .harina", 1, {opacity: 1}),
        TweenMax.fromTo($(".pollo-mechado"), 2,{right:-350, bottom: -200},{right:-35, bottom: 10}),
        TweenMax.to("#promo .harina-2", 1, {bottom: -14, right: -29})
    ]);

    // create a scene
    new ScrollMagic.Scene({
            triggerElement: "#promo",
            duration: "400",	// the scene should last for a scroll distance of 100px
            offset: 100	// start this scene after scrolling for 50px
        })
        .setTween(tween)// pins the element for the the scene's duration
        .addTo(controller); // ass

    var tweenTwo = new TimelineMax ()
    .add([
        TweenMax.to("#punto .sampler", 0.5, {right: -65})
    ]);

    // create a scene
    new ScrollMagic.Scene({
            triggerElement: "#punto",
            duration: "400",	// the scene should last for a scroll distance of 100px
            offset: 10	// start this scene after scrolling for 50px
        })
        .setTween(tweenTwo)// pins the element for the the scene's duration
        .addTo(controller); // ass

    // build scene
    new ScrollMagic.Scene({triggerElement: "#prensa", duration: "200%"})
                    .setTween(tweenImg)
                    .addTo(controller);
    new ScrollMagic.Scene({triggerElement: "#prensa", duration: "200%"})
                    .setTween(tweenImgPlaya)
                    .addTo(controller);
    new ScrollMagic.Scene({triggerElement: "#prensa", duration: "200%"})
                    .setTween(tweenImgSigue)
                    .addTo(controller);



});