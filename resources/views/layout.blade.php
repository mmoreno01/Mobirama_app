<!DOCTYPE html>
<html lang="esS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Descpription-->
    <meta name="description" content="Somos una firma consultora que brinda soluciones bajo los estándares más estrictos de calidad. Nos distingue la excelencia y compromiso con nuestros clientes.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--favicon-->
    <link rel="icon" type="image/png" href="imagenes/home-icons/m-favicon.png">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- estilo carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- slider revolution -->
    <link rel="stylesheet" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <!--slick-slider-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick.css')}}"/>
    <!-- Add the new slick-theme.css if you want the default styling-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick-theme.css')}}"/>
    <!--sweetalert2-->
    <link rel="stylesheet" type="text/css" href="{{asset('sweetalert/sweetalert2.min.css')}}"/>
    <!-- slyles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous')}}">
    <!--reCAPTCHA-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <script src="//code.tidio.co/j8atq5zvyhopcn4ahuxng1y0e5s4zoqq.js"></script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>

    <!-- menu principal -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
    <a class="navbar-brand" href="/home">
        <img src="imagenes/home-icons/m-white.png" width="200" height="" alt="">
    </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="navbar-nav mr-auto ml-auto">
            <div class="row contentPricipal">
                <div class="col-sm-12 col-md-9 content_serv">    
                    <div class="row  sub-menu1 wow slideInLeft" data-wow-duration="1s" data-wow-delay="0.9">
                            <div class="col-4 content_img">
                                <a href="/politica"><i class="fas fa-check"></i></a>
                                <a href="/politica"><p class="title-txt">Politica de Calidad</p></a>
                            </div>
                            <div class="col-4 content_img">
                                <a href="#"><i class="fas fa-clipboard-list"></i></a>
                                <a href="#"><p class="title-txt">Terminos de uso</p></a>
                            </div>
                            <div class="col-4 content_img">
                                <a href="/glosario"><i class="fas fa-book-open"></i></a>
                                <a href="/glosario"><p class="title-txt">Glosario</p></a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 content_item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <a class="nav-item nav-link mr-4 active" href="/home">Inicio</a>
                    <a class="nav-item nav-link mr-4" href="home#content_services">Servicios</a>
                    <a class="nav-item nav-link mr-4" href="/nosotros">Nosotros</a>
                    <a class="nav-item nav-link mr-4" href="/alianzas">Alianzas</a>
                    <a class="nav-item nav-link mr-4" href="/letter">Newsletter</a>
                    <a class="nav-item nav-link mr-4" href="/contacto.bolsaTrabajo">Bolsa de trabajo</a>
                    <a class="nav-item nav-link mr-4" href="/contacto">Contacto</a>  
                    <a href="/" class="nav-item nav-link mr-4">
                      <i class="fas fa-address-card"></i>
                      Iniciar sesión
                    </a>
                </div>
            </div>   
        </div>
       <!-- <div  id="headSocial">
                <a href="https://www.facebook.com/JBGlobalGroup/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="https://twitter.com/JBGlobalGroup" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/join-business-global-group/"target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                
        </div>-->
    </div>    
</header>
<!-- fin del menu principal -->
    <title>Mobirama</title>
</head>
<body>
            
<!-- contenido principa -->
@yield('content')



<footer class="wow fadeInDown"  data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <a href="/home"><img src="imagenes/home-icons/m-whitef.png" alt="Mobirama"></a> 
               <p>Aviso de privacidad 2018 | Mobirama</p>
               <!-- <div class=""> 
                    <img src="imagenes/home-icons/m-w.png" alt="">
                </div>
                <div class=" ">
                    <ul>
                        <li>Aviso de privacidad</li>
                        <li>2018 | Mobirama</li>
                    </ul>
                </div> 
                <!-- <img src="imagenes/home-icons/m-w.png" alt="">
                <p>Aviso de privacidad 2018 <span></span></P>-->

            </div>
            <div class="col-md-6 content-iconsRedes">
                    <div class="icon-social"><a href="https://www.facebook.com/mobiramamx/?modal=admin_todo_tour" target="_blank"><i class="fab fa-facebook-f"></i></a></div> 
                    <div class="icon-social"><a href="https://twitter.com/MobiramaMX" target="_blank"><i class="fab fa-twitter"></i></a> </div> 
                    <div class="icon-social"><a href="https://www.linkedin.com/feed/" target="_blank"><i class="fab fa-linkedin-in"></i></a> </div> 
                    <!-- <div class="icon-social"><a href="http://"><i class="fab fa-youtube"></i></a></div>  -->
                    <p>Trazando el éxito de los negocios</p>
               
            </div>
        </div>
    </div>
</footer>

	<!-- <script src="js/jquery.js"></script>   -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/ScrollMagic/jquery.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <!-- carousel service -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/carouselMenu.js"></script>
    <script src="js/multi-carousel.js"></script>
    <!-- animate js -->
    <script src="js/wow.min.js"></script>
    <!-- slider revolution -->
    <script src="js/jquery.themepunch.revolution.js"></script>
    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.plugins.min.js"></script>
    <script src="js/slider/slideRevolution.js"></script>
    <!-- scrollmagic -->
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/debug.addlndicators.js"></script>
    <script src="js/ScrollMagic/main.js"></script>
    <!--slick-slider-->
    <script type="text/javascript" src="css/slick/slick.min.js"></script>
    <!--sweeralert2-->
    <script  src="sweetalert/sweetalert2.min.js"></script>
    <!-- animate -->
    <script>
        wow = new WOW(
                        {
                        boxClass:     'wow',      // default
                        animateClass: 'animated', // default
                        offset:       0,          // default
                        mobile:       true,       // default
                        live:         true        // default
                        }
                        )
        wow.init();    
    </script> 

   <script type="text/javascript">
    var onloadCallback = function() {
        alert("grecaptcha is ready!");
    };
    </script>
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

     <script type="text/javascript">
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
				
</script>

</body>
</html>