<template>
    <div id="TÉMOIGNAGES" class="carousel slide" data-ride="carousel">
    <div class="container">
      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <div class="gaptitletestimonial"></div>
        <p class="testimonialstitle">TÉMOIGNAGES</p>
      </div>
    </div>
    <div class="justify-content-center text-center titlecarousel containertitle">
        <div class="col-md-6" data-aos="fade-up">
          <h2 class="section-heading text-white">ILS NOUS FONT CONFIANCE</h2>
          <p class="section-p text-white">
            Satisfaire nos clients, c'est notre plus grande passion.
          </p>
        </div>
      </div>
           <ol class="carousel-indicators">
             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
             <li data-target="#myCarousel" data-slide-to="1"></li>
             <li data-target="#myCarousel" data-slide-to="2"></li>
           </ol>
           <div class="carousel-inner containercarousel">
             <div class="carousel-item active">
               <div class="container">
                 <div class="carousel-caption text-center">
                 <div class="quote">
                   <img class="responsive img-responsive quoteimg" src="../assets/images/quote-left.png" /> <p class="text-white textquote">Une équipe ultra professionnelle, créative et réactive. Un réel plaisir de travailler avec des personnes aussi talentueuses. Je recommande a 100% !</p>
                   <img class="responsive img-responsive quoteimg" src="../assets/images/quote-right.png" /></div>
                   <p class="personne">Khadija Benmkaddem</p>
                   <p class="societe">Listy.ma</p>
                 </div>
               </div>
              </div>
             <div class="carousel-item">
               <div class="container">
                 <div class="carousel-caption">
                    <div class="quote">
                   <img class="responsive img-responsive quoteimg" src="../assets/images/quote-left.png" /> <p class="text-white textquote">Tout simplement La meilleure agence de motion design au Maroc ! </p>
                   <img class="responsive img-responsive quoteimg" src="../assets/images/quote-right.png" /></div>
                   <p class="personne">Julien Santenac</p>
                   <p class="societe">BoostPlus</p>
                 </div>
               </div>
             </div>
             <div class="carousel-item">
               <div class="container">
                 <div class="carousel-caption text-center">
                   <div class="quote">
                   <img class="responsive img-responsive quoteimg" src="../assets/images/quote-left.png" /> <p class="text-white textquote">Une équipe ultra professionnelle, créative et réactive. Un réel plaisir de travailler avec des personnes aussi talentueuses.</p>
                   <img class="responsive img-responsive quoteimg" src="../assets/images/quote-right.png" /></div>
                   <p class="personne">Khadija Benmkaddem</p>
                   <p class="societe">Listy.ma</p>
                 </div>
               </div>
             </div>
           </div>
           <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
             <span class="sr-only">Previous</span>
           </a>
           <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
             <span class="sr-only">Next</span>
           </a>
         </div>
</template>
<script>
export default{
    name: 'TestimonialsSection'
}
</script>
<style>
.ptestimonial{
    color : #0a9aff;
}
.personne{
    color: black;
    font-weight: 520;
}
.testimonialstitle{
    color: black;
    font-weight: 560;
}
</style>
