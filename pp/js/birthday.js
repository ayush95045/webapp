$(document).ready(function() {

    $(function () {
        $('.SendEmail').click(function (event) {
            var email = 'ms.asmita.shinde@gmail.com';
            var subject = 'Birthday Project';
            var emailBody = 'Hi Asmita,';

            document.location = "mailto:"+email+"?subject="+subject+"&body="+emailBody;
        });
    });

    var controller = new ScrollMagic();
    //egg in second hole
    var scene = new ScrollScene({
        triggerElement: ".egg",
        duration: 750
    })
      .setPin(".egg").addTo(controller);


    var t = TweenMax.to(document.getElementById('hat'), 2, {
        y: 190,
        repeat: -1,
        yoyo: true,
        ease: SlowMo.easeInOut
    });
   // var text = TweenMax.fromTo(".intro1", 1.5, {x:-200,scale: 4,ease: Linear.easeNone},{x:0,scale: 1,ease: Linear.easeNone});
    var tween = TweenMax.to(".scene-1 .text-bottom", 1, {opacity: 1, ease: Linear.easeNone});

    var scene = new ScrollScene({
        triggerElement: ".egg-stop",
        duration: 100,
        offset: -100
    }).setTween(tween).addTo(controller);

    var scene = new ScrollScene({
        triggerElement: ".egg-stop",
        duration: 700,
        offset: 0,
        triggerHook: 0.2
    }).on('enter', function() {
            $('.egg').addClass('hide');
            $('.egg-2').removeClass('hide');
        }).on('leave', function() {
            $('.egg').removeClass('hide');
            $('.egg-2').addClass('hide');
        }).setPin('.egg-2').addTo(controller);

    tl= new TimelineLite();
    var tween = tl.to(".flour", 1, {rotation: -70, ease: Linear.easeNone})
                  .to(".sugar", 1, {rotation: 70, ease: Linear.easeNone});

    var scene = new ScrollScene({
        triggerElement: ".scene-2",
        duration: 100,
        offset: 200,
        triggerHook: 0.5
    }).on('enter', function() {
            $('.egg-2').addClass('hide');
           $('.egg-trial').removeClass('hide');
            $('.oven-with-pan').removeClass('hide');
        }).on('leave', function() {
           // $('.egg-2').removeClass('hide');
           // $('.egg-trial').addClass('hide');
            $('.oven-with-pan').addClass('hide');
        }).setTween(tween).addTo(controller);



    var mask = $('#egg-mask-rect');
    var tween = TweenMax.to(mask, 1, {attr: {height: 400, y: 0}, ease: Linear.easeNone});
    var scene = new ScrollScene({
        triggerElement: ".scene-2",
        duration: 300,
        offset: 100,
        triggerHook: 0.5
    }).on('start end', function() {
        }).setTween(tween).addTo(controller);

    var tween = TweenMax.to(mask, 1, {attr: {y: 450}, ease: Linear.easeNone});
    var scene = new ScrollScene({
        triggerElement: ".scene-2",
        duration: 450,
        offset: 300
    }).on('start end', function() {
        }).setTween(tween).addTo(controller);


    var pot1 = $('#blenderFill');
    var tween = TweenMax.to(pot1, 1, {attr: {y: 0}, ease: Linear.easeNone});
    var scene = new ScrollScene({
        triggerElement: ".blender",
        duration: 200,
        offset: 0
    }).on('enter', function() {
        $('.grounded').addClass('hide');
    }).setTween(tween).addTo(controller);



    var tween = TweenMax.to(".blender>.handle", 1, {rotation: 360, ease: Linear.easeNone});
    var scene = new ScrollScene({
        triggerElement: ".blender",
        duration: 300,
        triggerHook: 0.2
    }).setTween(tween).addTo(controller);

    var offsets = [30, 40, 40, 10, 10, 40, 50];
    $.each(offsets, function(i, offset) {
        var dur = 320;

        var scene = new ScrollScene({
            triggerElement: ".blender",
            duration: dur,

            triggerHook: 0.2
        }).on('enter', function() {
                $('.grounded').removeClass('hide');

            }).setPin(".batter-" + (i + 1)).addTo(controller);


    });


    var tween = TweenMax.to(".pan-with-batter", 1, {scale: 0.6, y:200, ease: Linear.easeNone});
    var scene = new ScrollScene({
        triggerElement: ".pan-hide",
        duration: 890,
        triggerHook: 0.2
    }).on('enter', function() {
            $('.grounded').addClass('hide');
            $('.pan').addClass('hide');
            $('.pan-with-batter').removeClass('hide');
            $('.cake').addClass('hide');
        }).on('leave', function() {
            $('.pan').removeClass('hide');
            $('.grounded').removeClass('hide');
          // $('.pan-with-batter').addClass('hide');
        }).setTween(tween).setPin(".pan-with-batter").addTo(controller);


    var tween = TweenMax.fromTo(".cake", 1, {opacity:0.2,scale: 0.6, y:0, ease: Linear.easeNone},{opacity:1,scale: 1, y:820, ease: Linear.easeNone});
    var scene = new ScrollScene({
        triggerElement: ".scene-5 .text",
        duration: 520,
        offset: 100
    }).on('enter', function() {
            $('.cake').removeClass('hide');
        }).on('leave', function() {

        }).setTween(tween).setPin(".cake").addTo(controller);

    var tween = TweenMax.to(".candle", 1, {top: -54, ease: Linear.easeNone});
    var scene = new ScrollScene({
        triggerElement: ".scene-6 .text",
        duration: 200,
        offset: 200
    }).on('start', function () {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            if(dd<10) {
                dd='0'+dd
            }
            if(mm<10) {
                mm='0'+mm
            }
            today = mm+'/'+dd;
            $('.hbd').removeClass('hide');
            document.getElementById("date").innerHTML=today;

        }).setTween(tween).addTo(controller);


    var tween = TweenMax.fromTo(".hbd", 1,{opacity:0.2,scale: 1.1, ease: Linear.easeNone},{opacity:1,scale: 1, ease: Linear.easeNone});
    var scene = new ScrollScene({
        triggerElement: ".candle",
        duration: 200,
        offset: 200
    }).setTween(tween).addTo(controller);



});