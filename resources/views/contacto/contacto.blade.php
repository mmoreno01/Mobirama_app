@extends('layout')

@section('content')
<div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="imagenes/2.jpg" uk-img>
  <h1>Contacto</h1>
</div>
<section id="contacto">
        <div class="container">      
                <div class="row">
                        <div class="col-md-6  content-form">
                                <form  method="POST" action=".php/datos_form.php" name="forma">
               
                                        <div class="form-group">
                                                <input class="form-control" type="text" name="name" ng-model="name" placeholder="Nombre" required>
                                                <!-- <div ng-show="forma.name.$dirty">
                                                        <p class="help-block text-danger" ng-show="forma.name.$error.required">El campo nombre es obligatorio</p> -->
                                                <!-- </div> -->
                                        </div>
                                        <div class="form-group">
                                                <input type="email" class="form-control" name="mail" ng-model="mail" placeholder="Correo" required>
                                                <!-- <div ng-show="forma.mail.$dirty && forma.mail.$invalid"> 
                                                        <p class="help-block text-danger" ng-show="forma.mail.$error.required">El campo email es obligatorio</p> 
                                                        <p class="help-block text-danger">email invalido</p> 
                                                </div> -->
                                        </div>
                                        <div class="form-group">
                                                <input type="text" class="form-control"  name="phone" ng-model="phone"  placeholder="Telefono" required>
                                                <!-- <div ng-show="forma.phone.$dirty">
                                                        <p class="help-block text-danger" ng-show="forma.phone.$error.required">El campo telefono es obligatorio</p>
                                                </div> -->
                                        </div>
                                        <div class="form-group">
                                                <select class="form-control"  name="service" id="" ng-model="service" placeholder="Servicios">
                                                        <option value="contabilidad">CONTABILIDAD</option>
                                                        <option value="fiscal">FISCAL</option>
                                                        <option value="payroll">PAYROLL SERVICE</option>
                                                        <option value="division financiera">DIVISIÓN FINANCIERA</option>
                                                        <option value="capital humano">CAPITAL HUMANO</option>
                                                        <option value="estacion de servicio">ESTACION DE SERVICIO</option>
                                                        <option value="sofom">SOFOM</option>
                                                        <option value="maquila de nomina">MAQUILA DE NOMINA</option>
                                                        <option value="auditoria">AUDITORIA</option>
                                                </select>
                                                        <!-- <div ng-show="forma.service.$dirty">
                                                        <p class="help-block text-danger" ng-show="forma.service.$error.required">El campo servicios es obligatorio</p>
                                                        </div> -->
                                        </div>
                                        <div class="form-group">
                                                <textarea  class="form-control" name="mensaje" ng-model="mensaje" id="" cols="30" rows="3" placeholder="Escribe un mensaje aquí"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                                <button  type="submit" class="btn btn-primary" ng-disabled="forma.$invalid">Enviar</button>
                                        </div>
                                </form>
                        </div> 
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
                </div>
        </div> 
</section>
@endsection
