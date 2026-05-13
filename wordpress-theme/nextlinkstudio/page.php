<?php
/**
 * Default page template — renders the WP page content.
 */
get_header();
?>
  <main class="container" style="padding-top: 120px; padding-bottom: 80px; min-height: 60vh;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <div class="page-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; endif; ?>
  </main>
<?php get_footer(); ?>

