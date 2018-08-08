<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- estilo carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- slider revolution -->
    <link rel="stylesheet" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <!-- slyles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="'https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">


	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>

    <!-- menu principal -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
    <a class="navbar-brand" href="/home">
        <img src="imagenes/home-icons/mobirama.jpg" width="30" height="30" alt="">
    </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="navbar-nav mr-auto ml-auto">
            <div class="row contentPricipal">
                <div class="col-md-9 content_serv">
                <div class="row sub-menu1 wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">
                        <div class="col-4 content_img">
                            <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
                            <a href="/politica"><p class="title-txt">Politica de Calidad</p></a>
                            <p>Lorem ipsum dolors! Dolorem ipsum debiti</p>
                        </div>
                        <div class="col-4 content_img">
                            <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
                            <a href="/terminos"><p class="title-txt">Terminos de uso</p></a>
                            <p>Lorem ipsum dolors! Dolorem ipsum debiti</p>
                        </div>
                        <div class="col-4 content_img">
                            <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
                            <a href="http://"><p class="title-txt">Glosario</p></a>
                            <p>Lorem ipsum dolors! Dolorem ipsum debiti</p>
                        </div>
                    </div>
                    <div class="row sub-menu2 wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">
                        <div class="col-4 content_img">
                            <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
                            <a href="http://"><p class="title-txt">Promociones JB Card</p></a>
                            <p>Lorem ipsum dolors! Dolorem ipsum debiti</p>
                        </div>
                        <div class="col-4 content_img">
                            <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
                            <a href="http://"><p class="title-txt">Bolsa de Trabajo</p></a>
                            <p>Lorem ipsum dolors! Dolorem ipsum debiti</p>
                        </div>
                        <div class="col-4 content_img">
                            <img src="imagenes/house-loan-opportunity_page.png.img.320.1519851211549.png" alt="">
                            <a href="http://"><p class="title-txt">Revista Global</p></a>
                            <p>Lorem ipsum dolors! Dolorem ipsum debiti</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 content_item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <a translate="menuServicios" class="nav-item nav-link mr-4 active" href="/home">Inicio</a>
                    <a translate="menuServicios" class="nav-item nav-link mr-4" href="nosotros.html">JBGG</a>
                    <a class="nav-item nav-link mr-4" href="#cont_serv">Servicios</a>
                    <a class="nav-item nav-link mr-4" href="#eventos">Eventos</a>
                    <a class="nav-item nav-link mr-4" href="#alianza">Asociaciones y Alianzas</a>
                    <a class="nav-item nav-link mr-4" href="#contacto">Contacto</a> 
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
    <title>Document</title>
</head>
<body>

<!-- contenido principa -->
@yield('content')



<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            
                <div class="d-inline"> 
                    <img src="imagenes/home-icons/jblogo.png" alt="">
                </div>
                <div class="d-inline ">
                    <ul>
                        <li>Aviso de privacidad</li>
                        <li>2018 l Join Business Global Group</li>
                    </ul>
                </div>
                  
             
            </div>
            <div class="col-md-6 content-iconsRedes">
                    <div class="icon-social"><i class="fab fa-facebook-f"></i></div> 
                    <div class="icon-social"><i class="fab fa-twitter"></i></div> 
                    <div class="icon-social"><i class="fab fa-linkedin-in"></i></div> 
                    <div class="icon-social"><i class="fab fa-youtube"></i></div> 
                    <p>Construyendo redes que conecten el mundo de los negocios</p>
               
            </div>
        </div>
    </div>
</footer>

	<!-- <script src="js/jquery.js"></script>   -->
            <script src="js/ScrollMagic/jquery.min.js"></script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <!-- carousel service -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/carousel.js"></script>
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
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</body>
</html>