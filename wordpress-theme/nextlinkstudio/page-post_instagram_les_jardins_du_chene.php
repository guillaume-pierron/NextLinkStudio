<?php
/**
 * Template Name: Post Instagram — Les jardins du chêne
 */
get_header();
?>
<style>
.insta-viewer { padding: 0; background: #707d53; }
.insta-embed-wrap {
  width: 100%;
  padding: 100px 40px 40px;
  background: #707d53;
  box-sizing: border-box;
}
.insta-embed-wrap img {
  display: block;
  width: 100%;
  max-width: 860px;
  height: auto;
  margin: 0 auto;
}
@media (max-width: 768px) {
  .insta-embed-wrap { padding: 80px 20px 20px; }
}
</style>

<!-- POST INSTAGRAM IMAGE -->
<section class="insta-viewer">
  <div class="insta-embed-wrap">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post_insta_les_jardins_du_chene.webp" alt="Post Instagram Les jardins du chêne">
  </div>
</section>

<?php get_footer(); ?>
