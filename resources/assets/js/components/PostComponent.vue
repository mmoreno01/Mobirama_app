<template>
<section id="content-notices"> 
  <div class="container">
        <div class="contitle-services wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
            <h2>Noticias</h2>
        </div>
          <div class="card-columns" id="app">
              <div class="card" v-for="item in filteredItems">
                  <div class="content-img-noticia">
                        <a v-bind:href="item.link"><img class="img-responsive" v-bind:src="item._embedded['wp:featuredmedia'][0].source_url">
                          <div class="bg-overlay"></div>
                          <p class="date-notice-title">{{item.title.rendered}}</p>            
                          <p class="date-notice">{{ item.date | moment}}</p>
                        </a>
                  </div>
              </div>
          </div>
    </div>
  </section>
</template>

<script>
// muestra las post de wordpress
import moment from 'moment'

export default {
  data() {
    return {
      items:[],

    }
  },
      mounted() {
        axios.get('https://www.mobirama.com.mx/blog/?rest_route=/wp/v2/posts&_embed&categories=7')
        .then(response => (this.items = response.data))
          // console.log(items);

    },

    //filtro limita a 6 items
   computed: {
    filteredItems: function () {
    return this.items.slice(0, 6)
  }
},
filters: {
  moment: function (date) {
    return moment(date).subtract(10, 'days').calendar();
  }
} 



}
</script>