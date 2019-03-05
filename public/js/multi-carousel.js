$(document).ready(function(){

    $('#owl-two').owlCarousel({
       items:3,
        margin:30,
        loop:true,
        autoplayTimeout:3000,
        autoplay:true,

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
                items: 3,
                margin: 30,
                nav:true
            }
        }
    });

    // $('.owl-two').owlCarousel({
    //     loop:true,
    //     margin:10,
    //     nav:true,
    //     responsive:{
    //         0:{
    //             items:1
    //         },
    //         600:{
    //             items:1
    //         },
    //         1000:{
    //             items:1
    //         }
    //     }
    // });

    // $('.owl-three').owlCarousel({
    //     loop:true,
    //     margin:10,
    //     nav:true,
    //     responsive:{
    //         0:{
    //             items:1
    //         },
    //         600:{
    //             items:1
    //         },
    //         1000:{
    //             items:1
    //         }
    //     }
    // });
});