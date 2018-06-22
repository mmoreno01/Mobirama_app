@extends('layout')

@section('content')
<!-- slider principal -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/BCom-3200x912-Muelle.jpg.img.1600.1526909549435.jpg" alt="First slide">
    </div>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/BCom-3200x912-Muelle.jpg.img.1600.1526909549435.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
    </div> -->
  </div>
</div>
<!-- fin del slider -->
<section id="content_services"> 
        <div class=" container owl-carousel">
            <div>
                <i class="fab fa-adn"></i>  
                <!-- <img src="imagenes/carousel/toyota.png" class="w-100" alt=""> -->
                <P>payroll</P>
            </div>
            <div> 
                <i class="fab fa-adn"></i>  
                <!-- <img src="imagenes/carousel/toyota.png" class="w-100" alt=""> -->
                <P>payroll</P>
            </div>
            <div> 
                <i class="fab fa-adn"></i>  
                <!-- <img src="imagenes/carousel/toyota.png" class="w-100" alt=""> -->
                <P>payroll</P>
            </div>
            <div> 
                <i class="fab fa-adn"></i>  
                <!-- <img src="imagenes/carousel/toyota.png" class="w-100" alt=""> -->
                <P>payroll</P>
            </div>
            <div> 
            <i class="fab fa-adn"></i>  
                <!-- <img src="imagenes/carousel/toyota.png" class="w-100" alt=""> -->
                <P>payroll</P>
            </div>
            <div> 
            <i class="fab fa-adn"></i>  
                <!-- <img src="imagenes/carousel/toyota.png" class="w-100" alt=""> -->
                <P>payroll</P>
            </div>
        </div>
</section>



<section id="">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div style="background-image: url("");"></div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="content_textfirst">
                        <div class="content_img">
                            <img src="imagenes/negocio-outstanding-opportunity-micro.png.img.320.1524238583197.png" alt="">
                        </div>
                        <div class="content_textinf"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <h1>hola mundo</h1>
    <ul>
        @foreach($users as $user)
        <li> {{$user}}</li>    
        @endforeach 

    </ul>
    <button class="btn btn-danger">Ver más</button>
@endsection