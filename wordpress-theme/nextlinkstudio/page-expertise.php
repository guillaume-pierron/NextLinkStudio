<?php
/**
 * Template Name: Expertise
 */
get_header();
?>

  <!-- SERVICES CARDS -->
  <section style="padding: 48px 0 80px; background: var(--bg);">
    <div class="container">
      <div class="rl-page-header">
        <h1 class="rl-page-title">Mon <span class="gradient-text">expertise</span></h1>
      </div>
      <div class="preview-cards">
        <a href="<?php echo nls_page_url('site-web'); ?>" class="preview-card pc-web">
          <div class="preview-card-icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--cc)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
          <h3>Création de site web</h3>
          <p>Design sur mesure, mobile-first, SEO local. Livraison rapide avec devis en ligne et réservation de créneaux intégrés.</p>
          <span class="preview-card-link">Découvrir <span class="pca">→</span></span>
        </a>
        <a href="<?php echo nls_page_url('identite-visuelle'); ?>" class="preview-card pc-design">
          <div class="preview-card-icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--cc)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg></div>
          <h3>Identité visuelle</h3>
          <p>Logo professionnel, charte graphique et supports de communication qui inspirent confiance dès le premier regard.</p>
          <span class="preview-card-link">Découvrir <span class="pca">→</span></span>
        </a>
        <a href="<?php echo nls_page_url('posts-linkedin'); ?>" class="preview-card pc-linkedin">
          <div class="preview-card-icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--cc)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
          <h3>Réseaux sociaux</h3>
          <p>Je rédige et publie des contenus qui valorisent vos chantiers et attirent clients professionnels et partenaires.</p>
          <span class="preview-card-link">Découvrir <span class="pca">→</span></span>
        </a>
        <a href="<?php echo nls_page_url('creation-print'); ?>" class="preview-card pc-print">
          <div class="preview-card-icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--cc)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg></div>
          <h3>Création print</h3>
          <p>Flyers, kakémonos et cartes de visite à vos couleurs. Des supports imprimés percutants pour vous démarquer partout où vous passez.</p>
          <span class="preview-card-link">Découvrir <span class="pca">→</span></span>
        </a>
      </div>
      <div class="text-center" style="margin-top: 56px;">
        <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-lg">Demander un devis gratuit</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
