<?php
/**
 * Template Name: Flyer — Les jardins du chêne
 */
get_header();
?>
<style>

.flyer-viewer { padding: 0; background: #fff; }
.flyer-embed-wrap {
  width: 100%;
  padding: 100px 40px 40px;
  background: #707d53;
  box-sizing: border-box;
}
.flyer-embed-wrap img {
  display: block;
  width: 100%;
  max-width: 860px;
  height: auto;
  margin: 0 auto;
}


</style>

<!-- FLYER IMAGE -->
<section class="flyer-viewer">
  <div class="flyer-embed-wrap">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flyer_a5_les_jardins_du_chene.webp" alt="Flyer Les jardins du chêne">
  </div>
</section>


<?php get_footer(); ?>
