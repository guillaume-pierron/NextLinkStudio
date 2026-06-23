<?php
/**
 * Template Name: Charte graphique — Les jardins du chêne
 */
get_header();
?>
<style>

.charte-viewer {
  padding: 60px 0 0;
  background: #fff;
  width: 100vw;
  margin-left: calc(50% - 50vw);
  margin-right: calc(50% - 50vw);
  overflow: hidden;
  line-height: 0;
}
.charte-full-wrap {
  width: 100%;
}
/* L'image PNG a des marges transparentes (~9.6% à gauche, ~11.1% à droite).
   On la zoome pour que le contenu réel occupe toute la largeur, les marges
   transparentes débordent et sont rognées par overflow:hidden. */
.charte-viewer .charte-full-wrap img {
  display: block;
  width: 126.12% !important;
  max-width: none !important;
  height: auto;
  margin-left: -12.1%;
  margin-bottom: -7.2%;
}


</style>

<!-- CHARTE GRAPHIQUE IMAGE -->
<section class="charte-viewer">
  <div class="charte-full-wrap">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/charte_logo.png" alt="Charte graphique Les jardins du chêne">
  </div>
</section>


<?php get_footer(); ?>
