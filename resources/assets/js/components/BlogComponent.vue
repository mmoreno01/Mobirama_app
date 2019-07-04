<template>
    <section id="content-blog" class="content-section">
        <div class="container">
            <div class="contitle-services wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
                <h2><a href="https://www.mobirama.com.mx/blog/">Blog</a></h2>
            </div>                
                <div class="card-columns">
                    <div class="card" v-for="post in filteredposts">
                        <a v-bind:href="post.link"><img class="card-img-top" v-bind:src="post._embedded['wp:featuredmedia'][0].source_url"></a>
                    <div class="card-body">
                        <h4 class="card-title">{{ post.title.rendered }}</h4>
                        <p class="card-text"  v-html="post.excerpt.rendered"></p>
                        <a v-bind:href="post.link" >Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
    return {
      posts:[],

    }
  },
      mounted() {
        axios.get('https://www.mobirama.com.mx/blog/?rest_route=/wp/v2/posts&_embed&categories=1')
        .then(response => (this.posts = response.data))
          console.log(this.data);

    },
      //filtro limita a 3 posts
   computed: {
    filteredposts: function () {
    return this.posts.slice(0, 3)
  }
},
}
</script>