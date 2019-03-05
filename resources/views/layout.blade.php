<!DOCTYPE html>
<html lang="en">
<head>
    {!! SEOMeta::generate() !!}
	{!! OpenGraph::generate() !!}
	{!! Twitter::generate() !!}
    {!! SEO::generate() !!}
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Descpription-->
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
    <!-- slyles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--reCAPTCHA-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- chat home-->
    <script src="//code.tidio.co/cbarboauidoxnughnrijsrkiag8wcloc.js"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PM6VMQQ');</script>
    <!-- End Google Tag Manager -->
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1211831272298854'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
    <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=1211831272298854&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- #header -->
    <header id="header" id="home">
      <div class="container-fluid main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="/"><img src="imagenes/home-icons/m-white.png" width="150px" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li><a  href="/">Inicio</a></li>
                 <li class="menu-has-children"><a href="">Conócenos</a>
                    <ul>
                        <li><a href="/nosotros">Nosotross</a></li>		
                        <li><a href="/filosofia">Filosofía</a></li>		
                        <li><a href="/valores">Valores</a></li>					                		
                    </ul>
                </li>
                <li class="menu-has-children"><a href="">Servicios</a>
                    <ul>
                        <li><a href="/payroll">Payroll Service</a></li>		
                        <li><a href="/administracion_personal">Administración de Personal</a></li>	
                        <li><a href="/fiscal">Fiscal</a></li>	
                        <li><a href="/maquilaNomina">Maquila de Seguridad</a></li>
                        <li><a href="/contabilidad">Contabilidad Outsourcing</a></li>					                		
                        <li><a href="/juridico">Jurídico</a></li>					                							                		
                    </ul>
			    </li>				
                <li><a href="/alianzas">Alianzas</a></li>
                <li><a href="http://www.mobirama.com.mx/blog/">Blog</a></li>	
                <li><a href="/contacto">Contacto</a></li>
                <li><a href="/contacto.bolsaTrabajo">Bolsa de trabajo</a></li>
                <li><a href="/login"> <i class="fas fa-address-card"></i>Iniciar sesión</a></li>

              </ul>
              <div  id="headSocial">
                  <ul>
                        <li class="icon-social"><a href="https://www.facebook.com/mobiramamx/?modal=admin_todo_tour" target="_blank"><i class="fab fa-facebook-f"></i></a></li> 
                        <li class="icon-social"><a href="https://twitter.com/MobiramaMX" target="_blank"><i class="fab fa-twitter"></i></a> </li> 
                        <li class="icon-social"><a href="https://www.linkedin.com/feed/" target="_blank"><i class="fab fa-linkedin-in"></i></a> </li> 
                  </ul>
            </div>
            </nav> <!--#nav-menu-container -->		    		
          </div>
      </div>
    </header>
    <!-- #header -->

    <!-- menu principal -->
<!-- <header id="header-nav" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
    <a class="navbar-brand" href="/">
        <img src="imagenes/home-icons/m-white.png" width="200" height="" alt="Mobirama">
    </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <div class="navbar-nav mr-auto ml-auto">
                 <div class="col-sm-12 col-md-3 content_item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s"> 
                    <a class="nav-item nav-link mr-4 active" href="/">Inicio</a>
                    <div class="dropdown">
                        <a class="nav-item nav-link mr-4 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Conócenos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/nosotros">Nosotros</a>
                            <a class="dropdown-item" href="/filosofia">Filosofía Empresarial</a>
                            <a class="dropdown-item" href="/valores">Valores Institucionales</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="nav-item nav-link mr-4 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/payroll">Payroll Service</a>
                            <a class="dropdown-item" href="/administracion_personal">Administración de Personal</a>
                            <a class="dropdown-item" href="/fiscal">Fiscal</a>
                            <a class="dropdown-item" href="/maquilaNomina">Maquila de Seguridad Social</a>
                            <a class="dropdown-item" href="/contabilidad">Contabilidad Outsourcing</a>
                            <a class="dropdown-item" href="/juridico">Jurídico</a>
                        </div>
                    </div>
                    <a class="nav-item nav-link mr-4" href="/alianzas">Alianzas</a>
                    <a class="nav-item nav-link mr-4" href="/blog">Blog</a>
                    <a class="nav-item nav-link mr-4" href="/contacto">Contacto</a>
                    <a class="nav-item nav-link mr-4" href="/contacto.bolsaTrabajo">Bolsa de trabajo</a>  
                    <a href="/login" class="nav-item nav-link mr-4">
                      <i class="fas fa-address-card"></i>
                      Iniciar sesión
                    </a>
        </div>
       <div  id="headSocial">
                <a href="https://www.facebook.com/JBGlobalGroup/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="https://twitter.com/JBGlobalGroup" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/join-business-global-group/"target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        </div>
    </div>    
</header> -->
<!-- fin del menu principal -->
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM6VMQQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

            
<!-- contenido principa -->
@yield('content')


<footer class="wow fadeInDown"  data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <a href="/"><img src="imagenes/home-icons/m-whitef.png" alt="Mobirama"></a> 
               <p><a href="avisoPrivacidad">Aviso de privacidad 2019 </a>| Mobirama</p>
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/menu-tg.js"></script>

    <!-- carousel service -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/multi-carousel.js"></script>
    <!-- animate js -->
    <script src="js/wow.min.js"></script>
    <!-- slider revolution -->
    <script src="js/jquery.themepunch.revolution.js"></script>
    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.plugins.min.js"></script>
    <script src="js/slider/slideRevolution.js"></script>
    <!--slick-slider-->
    <script type="text/javascript" src="css/slick/slick.min.js"></script>
   
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
<!-- fin animate -->

<!--Recapcha-->
   <script type="text/javascript">
    var onloadCallback = function() {
        alert("grecaptcha is ready!");
    };
    </script>
<!--Recapcha-->

<!--slider valores-->    
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
<!--slider valores-->    

{{-- scrip of the modal  --}}
<script>
    $(document).ready(function()
    {
       $("#mobiramaModal").modal("show");
    });
 </script>

</body>
</html>