<template>
    <section id="content-blog" class="content-section">
        <div class="container">
            <div class="contitle-services wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
                <h2><a href="https://www.mobirama.mx/blog/">Blog</a></h2>
            </div>
            <div class="card-columns" id="app">
                <div class="card card-h" v-for="item in filterItems">
                     <a v-bind:href="item.link"><div class="card-body">
                        <img class="card-img-top"
                            v-bind:src="item.jetpack_featured_media_url">
                        <h4 class="card-title">{{ item.title.rendered }}</h4>
                        <p class="card-text" v-html="item.excerpt.rendered"></p>
                    </div></a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                items: [],
            }
        },
        mounted() {
            axios.get('https://www.mobirama.mx/blog/?rest_route=/wp/v2/posts&_embed&categories=1')
                .then(response => (this.items = response.data));
        },
        //filtro limita a 3 posts
        computed: {
            filterItems: function () {
                return this.items.slice(0, 3)
            }
        },
    }
</script>