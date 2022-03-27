<template>
<vueper-slides
  :infinite="false"
  disable-arrows-on-edges
  bullets-outside>
  <vueper-slide
    v-for="(post, i) in posts"
    :key="i">
    <template #content>
         <div class="cont-blog">
        <div class="aro flex-col">
            <div
                :style="{backgroundImage:`url(${post._embedded['wp:featuredmedia'][0].source_url})`}"
                class="img-blog"
            ></div>
        </div>
        <div class="info-blog">
            <h2 class="title text-yellow">{{post.title.rendered}}</h2>
            <p class="desc">
                {{post.excerpt.rendered}}
            </p>
            <div class="btn-blog-more">
                <a :href="post.link" class="text-yellow"
                    >leer más...</a
                >
            </div>
        </div>
    </div>
    </template>
  </vueper-slide>
</vueper-slides>
   
   

</template>

<script>
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'

export default {
  components: { VueperSlides, VueperSlide },
  data() {
    return {
      posts: {}
    }
  },
  beforeMount(){
    this.getData();
  },
  methods: {
    async getData(){
      const res = await fetch('https://elpunto.mx/blog/wp-json/wp/v2/posts?per_page=5&_embed=wp:featuredmedia&_fields=_links.wp:featuredmedia,_embedded,title,excerpt,link');
      const data = await res.json();
      this.posts = data;
    }
  }
}
</script>

<style>
    .vueperslides__parallax-wrapper{
        padding: 0!important;
        min-height: 575px;
    }
</style>