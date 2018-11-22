
$('.loop').owlCarousel({
    items:3,
    loop:false,
    margin:30,
    responsive: {
        0: {
            items :1
        },
        320:{
            items: 2,
            margin: 30,
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
