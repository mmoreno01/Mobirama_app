$(document).ready(function() {

    $('#owl-services').owlCarousel({
        items:4,
        margin:30,
        loop:true,
        autoplay:true,
        autoplayHoverPause:true,
        autoplayTimeout:6000,
        auttoplaySpeed:6000,
        responsive: {
            0: {
                items :1,
                nav:true
            },
            576: {
                items: 2,
                margin: 30,
                nav:true
            },
            768: {
                items: 3,
                margin: 30,
                nav:true
            },
            992: {
                items: 4,
                margin: 30,
                nav:true
            }
        }
    });


    $('.active-review-carusel').owlCarousel({
        items:3,
        margin:30,
        loop:true,
        responsive: {
            0: {
                items :1
            },
            576: {
                items: 2,
                margin: 30,
                nav:true
            },
            768: {
                items: 3,
                margin: 30,
                nav:true
            },
            992: {
                items: 4,
                margin: 30,
                nav:true
            }
        }
    });
   
    
});

   
