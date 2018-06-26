<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- estilo carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- slyles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



    <!-- menu principal -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top animated fadeInDown">
    <a class="navbar-brand" href="#">
        <img src="imagenes/home-icons/jblogo.png" width="30" height="30" alt="">
    </a>      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse  " id="navbarTogglerDemo02">
        <div class="navbar-nav mr-auto ml-auto text-center ">
                <a translate="menuServicios" class="nav-item nav-link mr-4 active" href="index.html">Inicio</a>
                <a translate="menuServicios" class="nav-item nav-link mr-4" href="nosotros.html">JBGG</a>
                <a class="nav-item nav-link mr-4" href="#cont_serv">Servicios</a>
                <div class="dropdown">
                        <button class="btn btn-menu dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Noticias
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <a href="nacionales.html"><button class="dropdown-item" type="button">Nacionales</button></a>
                          <a href="internacionales.html"><button class="dropdown-item" type="button">Internacionales</button></a>
                          <a href="http://www.jbglobalgroup.com/" target="_blank"><button class="dropdown-item" type="button">Revista Global</button></a>
                        </div>
                </div>
                <!--<a class="nav-item nav-link mr-4" href="#cards">Noticias</a>-->
                <a class="nav-item nav-link mr-4" href="#eventos">Eventos</a>
                <div class="dropdown">
                        <button class="btn btn-menu dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Bolsa de Trabajos
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">Consultar Vacantes</button>
                          <button class="dropdown-item" type="button">Sube tu CV</button>
                        </div>
                </div>
                <!--<a class="nav-item nav-link mr-4" href="#banner">Bolsa de Trabajos</a>-->
                <a class="nav-item nav-link mr-4" href="#alianza">Asociaciones y Alianzas</a>
                <div class="dropdown">
                        <button class="btn btn-menu dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Certificaciones                        
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                         <a href="politica.html"><button class="dropdown-item" type="button">ISO 9001-2015</button></a> 
                          <button class="dropdown-item" type="button">Próximamente ISO 27000</button>
                        </div>
                </div>
                <!--<a class="nav-item nav-link mr-4" href="#contacto">Certificaciones</a>-->
                <a class="nav-item nav-link mr-4" href="#contacto">Contacto</a>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
               <div class="col-12">
                   <img src="imagenes/home-icons/jblogo.png" alt="">
                   <p>Aviso de privacidad</p>
                   <span>® 2018 l Join Business Global Group ®</span>
               </div>
            </div>
            <div class="col-md-6">
                    <div class="icon-social"><i class="fab fa-facebook-f"></i></div> 
                    <div class="icon-social"><i class="fab fa-twitter"></i></div> 
                    <div class="icon-social"><i class="fab fa-linkedin-in"></i></div> 
                    <div class="icon-social"><i class="fab fa-youtube"></i></div> 
                    <p>Construyendo redes que conecten el mundo de los negocios</p>
               
            </div>
        </div>
    </div>
</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- carousel service -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/carousel.js"></script>
</body>
</html>