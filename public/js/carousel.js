(function($){
    $('.owl-carousel').owlCarousel({
        items:3,
        margin:30,
        autoplay:1000,
        loop:true,
        responsive: {
            0: {
                items :1
            },
            576: {
                items: 2,
                margin: 30
            },
            768: {
                items: 3,
                margin: 30
            },
            992: {
                items: 5,
                margin: 30
            }
        }
    });
})(jQuery);

// $(document).ready(function(){
//     $(".owl-carousel").owlCarousel();
//   });