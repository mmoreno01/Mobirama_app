    
    <template>
        <section id="cards-vacante">
            <div class="card" v-for="item in filteredItems">
                  <a v-bind:href="item.link"><img class="img-responsive" v-bind:src="item._embedded['wp:featuredmedia'][0].source_url">
                    <div class="card-body">
                        <h5 class="card-title">{{item.title.rendered}}</h5>            
                    </div>
                  </a>
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
        axios.get('https://www.mobirama.mx/blog/?rest_route=/wp/v2/posts&_embed&categories=9')
        .then(response => (this.items = response.data))
          // console.log(items);

    },

    //filtro limita a 6 items
   computed: {
    filteredItems: function () {
    return this.items.slice(0, 3)
  }
}

}
    </script>