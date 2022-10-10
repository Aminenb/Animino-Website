<template>
    <section id="realisations" class="realisations">
    <div class="container">
      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <div class="traitvertical"></div>
        <p>NOS RÉALISATIONS</p>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-12 col-sm-12 col-xs-12 " data-aos="fade-up">
          <h2 class="section-heading">Quelques projets et réalisations</h2>
          <p class="section-p2 justify-content-center text-center">
            Parce qu'une image vaut mille mots, retrouvez un échantillon de nos plus
            belles créations et le meilleur de notre savoir-faire
          </p>
        </div>
      </div>

      <div class="row realisationscontainer">
        <div class="col-lg-4 col-md-12 portfolio-item filter-app" v-for="realisation in realisations" :key="realisation.id">
          <div class="portfolio-wrap">
            <a
              href="https://www.oblivius.ma/uploads/realisations/miniature%20showreel.png"
              data-gallery="portfolio-gallery-app"
              class="glightbox"
              ><img :src="realisation.url" class="img-fluid rounded" alt=""
            /></a>
            <div class="portfolio-info">
              <p class="realisationtitle"><a href="portfolio-details.html" title="More Details">{{ realisation.name }}</a></p>
              <p class="realisationp">{{  realisation.content }}</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Portfolio Container -->
    </div>

  </section>
</template>
<script>
export default {
    name: 'RealisationsSection',
    data(){
        return{
            realisations : {}
        }
    },

    created(){
        axios.get('/projects2')
        .then((response)=> {
            this.realisations = response.data;
        })
        .catch((error)=> console.log('There was an error: '));

    },

    mounted(){
        console.log("mounted");
    }
}
</script>




