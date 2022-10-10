<template>
    <header id="accueil">
    <div class="overlay"></div>
    <video playsinline autoplay muted loop >
      <source src="../assets/videos/video.mp4" type="video/mp4" />
    </video>

    <!-- The header content -->
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center herosection">
        <div class="w-100">
          <h1 class="text-white herotitle">Leader en motion design au maroc</h1>
          <p class="text-white herop">
            Agence spécialisée du brand content : animation 2D, motion design, film Web et
            publicitaire, des supports et contenus créatifs.
          </p>
          <button class="btn herobtn">je veux une vidéo</button>
        </div>
      </div>
    </div>
  </header>
</template>
<script>
export default {
    name: 'HeaderSection',
}
</script>