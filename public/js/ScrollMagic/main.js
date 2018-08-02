$(document).ready(function(){
    //Init ScrollMagic
    var controller = new ScrollMagic.Controller();


    // seccion nosotros
    //  imagen izquierda nosotros
    var SceneImgNos = new ScrollMagic.Scene({
        triggerElement: '#img_nostros'
    })
    .setClassToggle('#img_nostros', 'fade-in-nosotros')
    .addTo(controller);

    var ourScene0 = new ScrollMagic.Scene({
        triggerElement: '#imgSobre'
    })
    .setClassToggle('#imgSobre', 'fade-in')
    .addTo(controller);
    

    var ourSceneImg = new ScrollMagic.Scene({
        triggerElement: '#projectImg',
        triggerHook:0.9,
        reverse: false
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

    // seccion comunicado
        //  imagenes de la seccion
    var SceneComunicado = new ScrollMagic.Scene({
        triggerElement: '#img-comunicado'
    })
    .setClassToggle('#img-comunicado', 'fade-in-imgComunicado')
    .addTo(controller);
    
    var SceneComunicado = new ScrollMagic.Scene({
        triggerElement: '#img-blog'
    })
    .setClassToggle('#img-blog', 'fade-in-imgBlog')
    .addTo(controller);
    
    var SceneComunicado = new ScrollMagic.Scene({
        triggerElement: '#icon-comunicado'
    })
    .setClassToggle('#icon-comunicado', 'fade-in-iconComunicado')
    .addTo(controller);   

    var SceneComunicado = new ScrollMagic.Scene({
        triggerElement: '#content-img'
    })
    .setClassToggle('#content-img', 'fade-in-ContImg')
    .addTo(controller);

//  fin de las imagenes de la seccion

    var SceneComunicado = new ScrollMagic.Scene({
        triggerElement: '#cont-comunicado'
    })
    .setClassToggle('#cont-comunicado', 'fade-in-comunicado')
    .addTo(controller);

    var SceneBlog = new ScrollMagic.Scene({
        triggerElement: '#cont-blog'
    })
    .setClassToggle('#cont-blog', 'fade-in-blog')
    .addTo(controller);

    // seccion de prensa
   
    var SceneContInformes = new ScrollMagic.Scene({
        triggerElement: '#content-informes'
    })
    .setClassToggle('#content-informes', 'fade-in-content')
    .addTo(controller);
    // Fin de seccion de prensa

    //seccion de ubicacion

    var SceneUbicacion = new ScrollMagic.Scene({
        triggerElement: '#content_ubicacion'
    })
    .setClassToggle('#content_ubicacion', 'fade-in-ubicacion')
    .addTo(controller);

    var SceneContacto = new ScrollMagic.Scene({
        triggerElement: '#ruta-contacto'
    })
    .setClassToggle('#ruta-contacto', 'fade-in-contacto')
    .addTo(controller);

    var SceneCotiza = new ScrollMagic.Scene({
        triggerElement: '#ruta-cotizacion'
    })
    .setClassToggle('#ruta-cotizacion', 'fade-in-cotizacion')
    .addTo(controller);
});