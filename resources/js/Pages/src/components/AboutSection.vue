<template>
    <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-1"></div>
        <div
          class="col-lg-5 col-xs-12 d-flex flex-column justify-content-center"
        >
          <div class="content">
            <div class="abouttitle">
              <div class="trait"></div>
              <h3 class="texttitleabout text-dark fw-light">à propos</h3>
            </div>
            <h2 style="color: black">AGENCE DE <br />COMMUNICATION DIGITALE</h2>
            <p class="text-dark">
              Notre mission est d’imaginer un univers graphique en mouvement qui raconte
              une histoire unique : celle de votre projet.<br />
              <br />Nous vous accompagnons dans l’écriture de votre film pour raconter
              votre histoire de la meilleure façon possible. Nous assurons également la
              direction artistique, la voix off, l’animation, et le bruitage.
            </p>
            <div class="text-lg-start btnvouloirvideo">
              <a href="#" class="">
                <button class="btn aboutbtn">Je veux une vidéo</button>
              </a>
            </div>
          </div>
        </div>
        <div class="about-video col-lg-6 col-sm-12 col-xs-12 d-flex flex-column justify-content-center">
          <iframe
            src="https://player.vimeo.com/video/225766667?h=122a93d690"
            frameborder="0"
            allow="autoplay; fullscreen; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
    <div class="traitvertical"></div>
  </section>
</template>
<script>
export default {
    name: 'AboutSection',
}
</script>
