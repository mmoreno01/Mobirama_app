$(document).ready(function(){
    //Init ScrollMagic
    var controller = new ScrollMagic.Controller();

    //buil a scene
    var ourScene0 = new ScrollMagic.Scene({
        triggerElement: '#project00'
    })
    .setClassToggle('#project00', 'fade-in')
    .addTo(controller);

    var ourSceneImg = new ScrollMagic.Scene({
        triggerElement: '#projectImg'
    })
    .setClassToggle('#projectImg', 'fade-in-img')
    .addTo(controller);

    var ourScene = new ScrollMagic.Scene({
        triggerElement: '#project01'
    })
    .setClassToggle('#project01', 'fade-in')
    .addTo(controller);

    var ourScene2 = new ScrollMagic.Scene({
        triggerElement: '#project02'
    })
    .setClassToggle('#project02', 'fade-in')
    .addTo(controller);

    var ourScene3 = new ScrollMagic.Scene({
        triggerElement: '#project03'
    })
    .setClassToggle('#project03', 'fade-in')
    .addTo(controller);
});