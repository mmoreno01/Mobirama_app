@extends('layout')

@section('content')
<!-- <div class="uk-background-fixed uk-background-cover uk-background-center uk-background-norepeat uk-height-large uk-width-xl" style="background-image: url(imagenes/2.jpg);"></div> -->
<div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="imagenes/2.jpg" uk-img>
  <h1>Mapa del Sitio</h1>
</div>
<section id="ubicacion">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-info">
                   <h5> <span>Join</span> Bussines Global Group</h5>
                   <ul>
                       <li><i class="fas fa-map-marker-alt"></i>Insurgentes Sur 619, Napoles</li>
                       <li><i class="fas fa-phone"></i>555555555555</li>
                       <li><i class="far fa-envelope"></i>atencionaclientes@jbglobalgroup.com.mx</li>
                   </ul>
                </div>
            </div>
            <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3679389293166!2d-99.17413258584338!3d19.3965021869049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff6df3517c87%3A0x3309ba946dbedbab!2sInsurgentes+Sur+619%2C+N%C3%A1poles%2C+03810+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses!2smx!4v1523918535826" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

@endsection