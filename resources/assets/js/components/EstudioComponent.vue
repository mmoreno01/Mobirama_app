<template>
    <section>
        <div id="form-search" class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-heder">
                            <div class="card-body">
                                <form action=""v-on:submit.prevent="searchData">
                                    <div class="input-group">
                                            <input type="text" class="form-control " placeholder="buscar" v-model="search" >
                                            <div class="input-group-append">
                                                <button  type="submit" class="btn btn-primary ">
                                                        <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-md-12 info-card">
                    <div class="card" v-for="item in obt">
                        <div class="card-header">
                            <p class="text-center">Tu Folio es: <span>{{ item.folio }}</span></p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card value-card" v-if="item.contacto === 1">
                                            <img src="imagenes/icon-studio/users.png" class="" alt="...">
                                            <hr>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Contacto con el Cliente</h5>
                                                <i class="fas fa-check-circle text-center"></i>
                                                <p class="card-text text-center">Concluido</p>
                                        </div>
                                    </div>
                                    <div class="card value-card-false" v-else="item.contacto === 0">
                                            <img src="imagenes/icon-studio/usersg.png" class="" alt="...">
                                            <hr>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Contacto con el Cliente</h5>
                                                <i class="fas fa-exclamation-circle text-center"></i>
                                                <p class="card-text text-center">Pendiente</p>
                                                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card value-card" v-if="item.domicilio === 1">
                                            <img src="imagenes/icon-studio/home.png" class="" alt="...">
                                            <hr>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Visita Domicilaria</h5>
                                                <i class="fas fa-check-circle text-center"></i>
                                                <p class="card-text text-center">Concluido</p>
                                            </div>
                                    </div>
                                    <div class="card value-card-false" v-else="item.contacto === 0">
                                            <img src="imagenes/icon-studio/homeg.png" class="" alt="...">
                                            <hr>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Visita Domicilaria</h5>
                                                <i class="fas fa-exclamation-circle text-center"></i>
                                                <p class="card-text text-center">Pendiente</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card value-card"  v-if="item.documento === 1">
                                            <img src="imagenes/icon-studio/logout.png" class="" alt="...">
                                            <hr>
                                            <div class="card-body">
                                                    <h5 class="card-title text-center">Resepcion de documentos</h5>
                                                    <i class="fas fa-check-circle text-center"></i>
                                                    <p class="card-text text-center">Concluido</p>
                                            </div>
                                    </div>
                                    <div class="card value-card-false" v-else="item.documento === 0">
                                            <img src="imagenes/icon-studio/logoutg.png" class="" alt="...">
                                            <hr>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Resepcion de documentos</h5>
                                                <i class="fas fa-exclamation-circle text-center"></i>
                                                <p class="card-text text-center">Pendiente</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card value-card"  v-if="item.finalizo === 1">
                                            <img src="imagenes/icon-studio/features.png" class="" alt="...">
                                            <hr>
                                            <div class="card-body">
                                                    <h5 class="card-title text-center">Proceso Finalizado</h5>
                                                    <i class="fas fa-check-circle text-center"></i>
                                                    <p class="card-text text-center">Concluido</p>
                                            </div>
                                    </div>
                                    <div class="card value-card-false" v-else="item.finalizo === 0">
                                            <img src="imagenes/icon-studio/featuresg.png" class="" alt="...">
                                            <hr>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Proceso Finalizado</h5>
                                                <i class="fas fa-exclamation-circle text-center"></i>
                                                <p class="card-text text-center">Pendiente</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios'
import swal from 'sweetalert'

export default {
    data() {
        return {
            products: [],
            search: '',
            obt:[],
        }
},
created: function(){
    this.consultaFolio();

},
methods: {
        consultaFolio: function(){
                let urlConsulta = 'consulta';
                axios.get(urlConsulta).then(response =>{
                this.products = response.data
                });
            },
            
            searchData: function(){
                if(!this.search){
                    swal({
                        title: "Tienes un Folio?",
                        text: "Por favor ingresa tu folio",
                        icon: "warning",
                        dangerMode: true,
                    })
            
                } else{
                         this.obt = this.products.filter((item) => item.folio.includes(this.search));
                        this.search="";
                }               
            }
        },
    
}
    
</script>