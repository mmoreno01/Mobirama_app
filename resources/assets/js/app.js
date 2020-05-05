
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// import VueRouter from 'vue-router';

// Vue.use(VueRouter)



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('post-component', require('./components/PostComponent.vue'));
Vue.component('slider-component', require('./components/SliderComponent.vue'));
Vue.component('services-component', require('./components/ServicesComponent.vue'));
Vue.component('services-circular', require('./components/ServicesCircular.vue'));
Vue.component('blog-component', require('./components/BlogComponent.vue'));
Vue.component('alianzas-component', require('./components/AlianzasComponent.vue'));
Vue.component('vacantenoticias-component', require('./components/VacanteNoticias.vue'));
Vue.component('formvacante-component', require('./components/FormVacante.vue'));
Vue.component('envivo-component', require('./components/EnvivoComponent.vue'));
Vue.component('encuesta-component', require('./components/EncuestaComponent.vue'));
Vue.component('estudio-component', require('./components/EstudioComponent.vue'));
Vue.component('webiniar-component', require('./components/WebiniarComponent.vue'));






// 

import moment from 'moment'
import VueSpinners from 'vue-spinners'
Vue.use(VueSpinners)

// const routes = [
//     {path: 'webinars', component: WebiniarComponent }
// ];

    const app = new Vue({
        el: '#app',
       

     
    })
    

