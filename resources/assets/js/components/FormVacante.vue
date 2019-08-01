<template>
        <form  @submit.prevent="savePostulation" action="" id="app">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input  type="text" class="form-control"  placeholder="Nombres" v-model="nombre">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input  type="text" class="form-control" placeholder="Apellidos" v-model="apellido">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Correo" v-model="correo">
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Teléfono" v-model="telefono" >
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Área de Interes</label>
                            <select name="" id="" class="form-control">
                                <option value="text">TI</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Vacantes</label>
                            <select name="" id="" class="form-control">
                                <option value="text">vaadsfasf</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 p-3">
                            <input type="file" id="file" ref="myFiles"  @change="previewFiles" multiple>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</template>

<script>
export default {
    data(){
        return{
            nombre: null,
            apellido: null,
            correo: null,
            telefono: null,
            file: null

        }
        
    },
    methods: {
        savePostulation: function(){
            console.log(this.nombre);
            console.log(this.apellido);
            console.log(this.correo);
            console.log(this.telefono);
           
        },
          previewFiles() {
          this.files = this.$refs.myFiles.files
           console.log(this.files);
        }
    },
}
</script>