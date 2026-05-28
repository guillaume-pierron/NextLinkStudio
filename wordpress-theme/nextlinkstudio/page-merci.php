<?php
/**
 * Template Name: Merci
 */
get_header();
?>

  <section class="merci-section">
    <div class="container">
      <div class="merci-card">

        <div class="merci-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
        </div>

        <div class="section-badge" style="margin-bottom: 20px;">Demande reçue</div>
        <h1 class="merci-title">Message <span class="gradient-text">envoyé !</span></h1>
        <p class="merci-sub">Merci pour votre demande. Je reviens vers vous sous 24h — en attendant, n'hésitez pas à consulter mes réalisations pour vous inspirer.</p>

        <div class="merci-actions">
          <a href="<?php echo nls_page_url('realisations'); ?>" class="btn btn-primary">Voir mes réalisations →</a>
          <a href="<?php echo home_url('/'); ?>" class="btn btn-ghost">Retour à l'accueil</a>
        </div>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
