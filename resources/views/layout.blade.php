<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- slyles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous')}}">
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
                    <div id="menu-first" class="row sub-menu1 wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">
                            

                        <div class=" container loop owl-carousel owl-theme owl-loaded">
                            <div>
                                  <a href="/capitalHumano"><img src="imagenes/services/CapitalHumano.png" alt="Capital Humano"></a>
                                  <a href="/capitalHumano"><P>Capital Humano</P></a>
                            </div>
                            <div >
                                  <a href="/capitalHumano"><img src="imagenes/services/CapitalHumano.png" alt="Capital Humano"></a>
                                  <a href="/capitalHumano"><P>Capital Humano</P></a>
                            </div>
                            <div >
                                <a href="/capitalHumano"><img src="imagenes/services/CapitalHumano.png" alt="Capital Humano"></a>
                                <a href="/capitalHumano"><P>Capital Humano</P></a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row sub-menu2 wow slideInLeft" data-wow-duration="2s" data-wow-delay="1s">
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
                    </div> --}}
                </div>

                <div class="col-sm-12 col-md-3 content_item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <a class="nav-item nav-link mr-4 active" href="/home">Inicio</a>
                    <a class="nav-item nav-link mr-4" href="home#content_services">Servicios</a>
                    <a class="nav-item nav-link mr-4" href="/nosotros">Nosotros</a>
                    <a class="nav-item nav-link mr-4" href="/alianzas">Alianzas</a>
                    <a class="nav-item nav-link mr-4" href="/letter">Newsletter</a>
                    <a class="nav-item nav-link mr-4" href="/contacto">Contacto</a> 
                    <a class="nav-item nav-link mr-4 active" href="/" >Acceder</a> 
                </div>
                <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">iniciar seccion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                   <div class="col-12">
                                       <div class="form-group">
                                           <label for="">Usuario</label>
                                           <input type="text" class="form-control">
                                       </div>
                                       <div class="form-group">
                                           <label for="">Contraseña</label>
                                           <input type="password" class="form-control">
                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Enviar</button>
                        </div>
                            </div>
                    </div>
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



<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <img src="imagenes/home-icons/m-whitef.png" alt="Mobirama">
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