$(document).ready(function() {

 
  // carousel webiniars
  $('.webiniars').owlCarousel({
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
            items: 3,
            margin: 30,
            nav:true
        }
    }
});
  
  // carousel alianzas
  $('.alianzas').owlCarousel({
    margin:30,
    loop:true,
    autoplay:true,
    autoplayHoverPause:true,
    autoplayTimeout:6000,
    auttoplaySpeed:6000,
    responsive: {
        0: {
            items :1,
        },
        576: {
            items: 2,
            margin: 30,
        },
        768: {
            items: 3,
            margin: 30,
        },
        992: {
            items: 5,
            margin: 30,
        }
    }
});

$('.politica').owlCarousel({
  margin:30,
  loop:true,
  autoplay:true,
  mouseDrag: false,
  touchDrag: false,
  autoplayHoverPause:true,
  autoplayTimeout:3000,
  auttoplaySpeed:3000,
  animateIn: 'fadeIn',
  animateOut: 'fadeOut',
  responsive: {
      0: {
          items :1,
      },
      576: {
          items: 1,
      },
      768: {
          items: 1,
      },
      992: {
          items: 1,
      }
  }
});


// carousel servicios
    // $('.owl-carousel').owlCarousel({
    //     margin:30,
    //     loop:true,
    //     autoplay:true,
    //     autoplayHoverPause:true,
    //     autoplayTimeout:6000,
    //     auttoplaySpeed:6000,
    //     responsive: {
    //         0: {
    //             items :1,
    //             nav:true
    //         },
    //         576: {
    //             items: 2,
    //             margin: 30,
    //             nav:true
    //         },
    //         768: {
    //             items: 3,
    //             margin: 30,
    //             nav:true
    //         },
    //         992: {
    //             items: 3,
    //             margin: 30,
    //             nav:true
    //         }
    //     }
    // });

  //casusel algunos servicios
      $('.one-time').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        autoplay: true,
        autoplayTimeout:6000,
       auttoplaySpeed:6000,
        adaptiveHeight: true
      });
			
  //carosuel valores
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
      
      });

      $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay:true,
        asNavFor: '.slider-for',
        centerMode: true,
        focusOnSelect: true,
        
         responsive: [{
      
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
              infinite: true
            }
      
          }, {
      
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              dots: true
            }
      
          }, {
      
            breakpoint: 576,
          
       settings: {
              slidesToShow: 1,
              dots: false
            }
          }]
      });	
      
    
    
    
       
});

   
