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

       <!-- Scripts -->
    <link rel="icon" type="image/png" href="/imagenes/home-icons/m-favicon.png">
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> --}}
    <!-- slyles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <!-- icons -->
    <!-- estilo carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- slider revolution -->
    <link rel="stylesheet" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/font-icons.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-icons.css')}}"/>


    <!--slick-slider-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick.css')}}"/>
    <!-- Add the new slick-theme.css if you want the default styling-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick/slick-theme.css')}}"/>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="../../node_modules/vue-spinners/dist/vue-spinners.css"> --}}
    <!--reCAPTCHA-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    {{-- <link rel="stylesheet" href="https://unpkg.com/vue-spinners@1.0.0/dist/vue-spinners.css"> --}}
    <!-- chat home-->
    <script src="//code.tidio.co/cbarboauidoxnughnrijsrkiag8wcloc.js"></script>
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Google Tag Manager  propiq test-->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TTV5MML');</script>
    <!-- End Google Tag Manager -->
    

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PM6VMQQ');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132438488-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-132438488-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

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

   
    <!-- menu principal -->
 <header  id="header" id="home">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
            <img src="/imagenes/home-icons/m-white.png" width="200" height="" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">
                Inicio 
                <span></span>
              </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Conócenos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/nosotros">Nosotros</a>
                  <a class="dropdown-item" href="/filosofia">Filosofía</a>
                  <a class="dropdown-item" href="/valores">Valores</a>
                </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Servicios
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/payroll">Payroll Services</a>
                <a class="dropdown-item" href="/capital_humano">Capital Humano</a>
                <!-- <a class="dropdown-item" href="/fiscal">Fiscal</a> -->
                <a class="dropdown-item" href="/administracion_personal">Administración de personal</a>
                <a class="dropdown-item" href="/contabilidad">Contabilidad Outsourcing</a>             
                <a class="dropdown-item" href="/juridico">Jurídico</a>            
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/alianzas">
                  Alianzas                
                  <span></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.mobirama.com.mx/blog/fiscal%20/noticias/">
                  Noticias
                  <span></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.mobirama.com.mx/blog/">
                  Blog
                  <span></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contacto">
                  Contacto
                  <span></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contacto.bolsaTrabajo">
                  Bolsa de trabajo
                  <span></span>
                </a>
            </li>
          </ul>
         
        </div>
      </nav>
 </header>
<!-- fin del menu principal -->
</head>
<body >
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM6VMQQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript)  propio-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTV5MML"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

<div id="app">

<!-- contenido principa -->
@yield('content')
</div>

<!--content iso-->
<!-- <section id="section-iso">
    <div class="container">
        <div class="row">
            <div class="col-md-6 column-logo">
                <div class="content-logo">
                    <figure>
                        <img src="/imagenes/distintivos/iso9001.png" alt="Mobirama-consultoria-iso9001">
                    </figure>
                </div>
                <div class="content-text">
                    <p>Objetivos de calidad</p>
                </div>
                <div class="mymove">
                    <a href="/politica"><i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 content-column">
                <div class="txt-alcance">
                   <p>Alcance:</p> 
                   <div class="politica owl-carousel owl-theme">
                        <div class="content-frase"><p>Payroll Service</p></div>
                        <div class="content-frase"><p>Contabilidad Outsourcing</p></div>
                        <div class="content-frase"><p>Maquila de Nómina </p></div>
                        <div class="content-frase"><p>Maquila de Seguridad Social</p></div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--fin content iso-->

<footer class="wow fadeInDown"  data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <a href="/"><img src="/imagenes/home-icons/m-whitef.png" alt="Mobirama"></a> 
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
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script>
		$(function() {
			$( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
		});
</script>
 

    <!-- <script src="/js/jquery.js"></script> -->

    <!-- {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}} -->
        <script src="/js/app.js"></script>


    <!--slider circular-->

    <script src="/js/circular/TweenMax.min.js"></script>
    <script src="/js/circular/imagesloaded.pkgd.min.js"></script>
    <script src="/js/circular/CSSPlugin.min.js"></script>
    <script src="/js/circular/TextPlugin.min.js"></script>
    <script src="/js/circular/demo.js"></script>
    <script src="/js/functions.js"></script>
    <!-- <script src="/js/side/jquery-ui.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    

    <!-- slider revolution -->   
    <script src="js/slider/slideRevolution.js"></script> 
    <script src="js/jquery.themepunch.revolution.js"></script>
    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.plugins.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="/js/uikit.min.js"></script>
    <script src="/js/menu-tg.js"></script>

    <!-- carousel service -->
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/carousel.js"></script>
    <script src="/js/multi-carousel.js"></script>
    <!-- animate js -->
    <script src="/js/wow.min.js"></script>

    <!--slick-slider-->
    <script type="text/javascript" src="css/slick/slick.min.js"></script>
    <script src = "https://cdn.tiny.cloud/1/2olcr2hkrdimbnfmn7032kch8zb3dy0cdbg6k53bb2k8q9ks/tinymce/5/tinymce.min.js"> </script>
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script> --}}

    <script>tinymce.init({selector:'#textarea'});</script>


   
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

    // /*Preloader animsition*/
    $(window).on('load', function () {
        $('.page-loader').fadeOut('slow', function () {
            setTimeout(function(){
                // console.log("time");
                $(this).remove();
            }, 3000);
         
        });

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