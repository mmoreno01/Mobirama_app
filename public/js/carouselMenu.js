$('.loop').owlCarousel({
    center: true,
    items:3,
    loop:false,
    margin:10,
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
