

    $('#owl-services').owlCarousel({
        items:4,
        margin:30,
        loop:true,
        autoplay,
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


    $('#owl-menu').owlCarousel({
        items:3,
        margin:30,
        loop:true,
        autoplay,
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
   
    

// $(document).ready(function(){
//     $(".owl-carousel").owlCarousel();
//   });
