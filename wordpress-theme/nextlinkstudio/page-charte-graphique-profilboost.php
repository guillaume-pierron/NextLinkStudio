<?php
/**
 * Template Name: Charte graphique — ProfilBoost
 */
get_header();

$img_url = get_template_directory_uri() . '/assets/images/Plan%20de%20travail%201.png';
?>

<div class="pb-charte-page">

  <div class="pb-charte-viewer-wrap">
    <?php if ( $img_url ) : ?>
      <img
        src="<?php echo esc_url( $img_url ); ?>"
        alt="Charte graphique ProfilBoost"
        class="pb-charte-full-img"
      >
    <?php else : ?>
      <div class="pb-charte-placeholder">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
        <p>Aucun visuel configuré.<br>Ajoutez le champ personnalisé <code>charte_pdf_url</code> sur cette page.</p>
      </div>
    <?php endif; ?>
  </div>

  <div class="pb-charte-page-footer">
    <div class="container">
      <?php if ( $img_url ) : ?>
      <a href="<?php echo esc_url( $img_url ); ?>" download class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        Télécharger la charte graphique
      </a>
      <?php endif; ?>
      <a href="<?php echo get_permalink( get_page_by_path('etude-de-cas-profilboost') ); ?>" class="btn btn-ghost">
        ← Retour à l'étude de cas
      </a>
    </div>
  </div>

</div>

<?php get_footer(); ?>
