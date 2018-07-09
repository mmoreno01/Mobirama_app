@extends('layout')

@section('content')
<!--contenido de texto principal-->
<div id="tittle-cotiza" class="text-center my-5"><h1>Solicitud de <span> Cotización</span></h1></div>
<section id="content-textAyuda">
        <div class="container-fluid">
                <div class="row">
                        <div class="col cont-ayuda">
                                <h3>¿Cómo podemos ayudar a su organización?</h3>
                                <p>Gracias por su interés en los servicios de Join Business Global Group.
                                Si su empresa requiere alguno de nuestros servicios, complete el siguiente formulario para hacerle llegar una propuesta basada en las necesidades específicas de su empresa. 
                                Por favor, tome unos minutos para proporcionarnos la siguiente información.</p>
                        </div>
                </div>
        </div>
</section>


<!--Seccion de formulario de cotizacion-->

<section id="form-cotiza">
    
    <form  name="forma" class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 content-date">
                <div><h1>Datos  Personales</h1></div>
               
                    <div class="form-group">
                            <input type="text" name="name" ng-model="name" class="form-control" placeholder="Nombre" required>
                        <div ng-show="forma.name.$dirty">
                                <p class="help-block text-danger" ng-show="forma.name.$error.required"> El campo es obligatorio</p>                    
                        </div>
                </div>
                    <div class="form-group">
                            <input type="text" name="Apaterno" ng-model="Apaterno" class="form-control" placeholder="Apellido Paterno"required>
                            <div ng-show="forma.Apaterno.$dirty">
                                <p class="help-block text-danger" ng-show="forma.Apaterno.$error.required">El campo  es obligatorio</p>
                            </div>
                    </div>
                    <div class="form-group">
                            <input type="text" name="Amaterno" ng-model="Amaterno" class="form-control" placeholder="Apellido Materno" required>
                            <div ng-show="forma.Amaterno.$dirty">
                                <p class="help-block text-danger" ng-show="forma.Amaterno.$error.required">El campo  es obligatorio</p>
                            </div>
                    </div>
                    <div class="form-group">
                            <input type="text" name="cargo" ng-model="cargo" class="form-control" placeholder="Cargo/Puesto" required>
                            <div ng-show="forma.cargo.$dirty">
                                <p class="help-block text-danger" ng-show="forma.cargo.$error.required">El campo  es obligatorio</p>
                            </div>
                    </div>
                    <div class="form-group">
                            <input type="email" name="mail" ng-model="mail" class="form-control" placeholder="Correo" required>
                            <div ng-show="forma.mail.$dirty && forma.mail.$invalid">
                                <p class="help-block text-danger" ng-show="forma.mail.$error.required">El campo  es obligatorio</p>
                                <p class="help-block text-danger">email invalido</p>
                            </div>
                    </div>
                   
                    <div class="form-group">
                            <input type="number" name="phone" ng-model="phone" class="form-control" placeholder="Telefono" required>
                            <div ng-show="forma.phone.$dirty">
                                <p class="help-block text-danger" ng-show="forma.phone.$error.required">El campo  es obligatorio</p>
                            </div>
                    </div>
                    <div class="form-group">
                            <input type="text" name="cpostal" ng-model="cpostal" class="form-control" placeholder="Codigo Postal" required>
                            <div ng-show="forma.cpostal.$dirty">
                                <p class="help-block text-danger" ng-show="forma.cpostal.$error.required">El campo  es obligatorio</p>
                            </div>
                    </div>
                    <div class="form-group">
                            <input type="email" name="ciudad" ng-model="ciudad" class="form-control" placeholder="ciudad" required>
                            <div ng-show="forma.ciudad.$dirty">
                                <p class="help-block text-danger" ng-show="forma.ciudad.$error.required">El campo  es obligatorio</p>
                            </div>
                    </div>

                <div class="form-group">
                        <select class="form-control" name="pais" id="exampleFormControlSelect1" ng-model="pais" required>
                              <option value="">País</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                        </select>
                </div>
                <div ng-show="forma.pais.$dirty">
                        <p class="help-block text-danger" ng-show="forma.pais.$error.required">El campo  es obligatorio</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 content-dateEmpresa">
                    <div><h1>Datos de la Empresa</h1></div>
                    <div class="form-group">
                            <input type="text" name="empresa" ng-model="empresa" class="form-control" placeholder="Nombre de la Empresa" required>
                            <div ng-show="forma.empresa.$dirty">
                                    <p class="help-block text-danger" ng-show="forma.empresa.$error.required">El campo es obligatorio</p>
                            </div>
                    </div>
                <div class="form-group">
                        <select class="form-control" name="ind" ng-model="ind" id="exampleFormControlSelect1" required>
                                <option value="">Industria</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option value="">Industria</option>
                        </select>
                        <div ng-show="forma.ind.$dirty">
                                <p class="help-block text-danger" ng-show="forma.ind.$error.required">El campo es obligatorio</p>
                        </div>
                </div>
                
                <div class="form-group">
                        <select class="form-control" name="empleados" ng-model="empleados" id="exampleFormControlSelect1">
                                <option>Tamaño de la Empresa (Número de Empleados)</option>
                                <option>2001 – 500</option>
                                <option>501 – 1,000</option>
                                <option>1,001 – 5,000</option>
                        </select>
                        <div ng-show="forma.empleados.$dirty">
                                <p class="help-block text-danger" ng-show="forma.empleados.$error.required">El campo es obligatorio</p>
                        </div>
                </div>
                <div class="form-group">
                        <select class="form-control" name="ingreso" ng-model="ingreso" id="exampleFormControlSelect1">
                                <option>Ingresos Anuales</option>
                                <option>Menos de US$ 1 millón </option>
                                <option>US$ 1 millón - $ 5 millón</option>
                                <option>US$ 5 millón - $ 10 millón </option>
                                <option>US$ 10 millón - $ 99 millón</option>
                                <option value="">US$ 100 millón - $ 500 millón  </option>
                        </select>
                        <div ng-show="forma.ingreso.$dirty">
                                <p class="help-block text-danger" ng-show="forma.ingreso.$error.required">El campo es obligatorio</p>
                        </div>
                </div>
                <div class="form-group">
                        <select class="form-control" name="service" ng-model="service" id="exampleFormControlSelect1">
                                <option>Seleccione el Servicio JBGG que le interesa</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                        </select>
                        <div ng-show="forma.service.$dirty">
                                <p class="help-block text-danger" ng-show="forma.service.$error.required">El campo es obligatorio</p>
                        </div>
                </div>
                <h3>Detalles de la Solicitud</h3>
                <p>Por favor, cargue los documentos que detallen su solicitud o escriba un breve mensaje con comentarios o instrucciones adicionales.
                                Puede cargar un máximo de 15 MB en total. Los formatos aceptados son: documentos de Microsoft® Office, PDF y ZIP. (En caso de que se dé la opción de subir documentos)</p>
                        <div class="form-group">
                                <input id="file" class="form-control" type="file" name="adjunto" accept=".pdf,.jpg,.png">
                        </div>
                        <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe un mensaje aqui"></textarea>
                        </div>
                        <div class="form-group">
                                <button class="btn btn-cotizador" ng-disabled="forma.$invalid">Enviar</button>
                        </div>

            </div>
           
        </div>
</form>
</section>

<!--Seccion de formulario de cotizacion-->
@endsection