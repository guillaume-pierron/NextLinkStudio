<?php
/**
 * Template Name: Expertise
 */
get_header();
?>

  <!-- PAGE HERO EXPERTISE -->
  <section class="ex-hero">
    <div class="container ex-hero-inner">

      <!-- GAUCHE -->
      <div class="ex-hero-left">
        <div class="page-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a> / <span>Expertise</span></div>
        <h1 class="ex-title">Mon <span class="gradient-text">expertise</span></h1>
        <p class="ex-sub">Quatre piliers pour votre visibilité en ligne — pensés pour les artisans qui <strong style="color: var(--purple-vivid);">n'ont pas de temps à perdre.</strong></p>

        <div class="ex-services">
          <a href="<?php echo nls_page_url('site-web'); ?>" class="ex-service">
            <div class="ex-service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
            </div>
            <span>Création de<br><strong>site web</strong></span>
          </a>
          <a href="<?php echo nls_page_url('identite-visuelle'); ?>" class="ex-service">
            <div class="ex-service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>
            </div>
            <span>Identité<br><strong>visuelle</strong></span>
          </a>
          <a href="<?php echo nls_page_url('posts-linkedin'); ?>" class="ex-service">
            <div class="ex-service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </div>
            <span>Réseaux<br><strong>sociaux</strong></span>
          </a>
          <a href="<?php echo nls_page_url('creation-print'); ?>" class="ex-service">
            <div class="ex-service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
            </div>
            <span>Création<br><strong>print</strong></span>
          </a>
        </div>

        <div class="ex-actions">
          <a href="#expertise-detail" class="btn btn-primary btn-lg">Découvrir mon approche →</a>
          <a href="<?php echo nls_page_url('realisations'); ?>" class="ex-link">Voir des exemples →</a>
        </div>

        <div class="ex-trust">
          <div class="ex-trust-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            Gain de temps
          </div>
          <div class="ex-trust-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            Résultats concrets
          </div>
          <div class="ex-trust-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Accompagnement personnalisé
          </div>
          <div class="ex-trust-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            Artisans &amp; indépendants
          </div>
        </div>
      </div>

      <!-- DROITE — visuels empilés -->
      <div class="ex-hero-right" aria-hidden="true">
        <div class="ex-dashes ex-dashes--tr">
          <svg width="44" height="32" viewBox="0 0 44 32" fill="none"><line x1="0" y1="32" x2="14" y2="0" stroke="#8b5cf6" stroke-width="2.5" stroke-linecap="round" opacity=".5"/><line x1="16" y1="32" x2="30" y2="0" stroke="#8b5cf6" stroke-width="2.5" stroke-linecap="round" opacity=".35"/><line x1="30" y1="32" x2="44" y2="0" stroke="#8b5cf6" stroke-width="2.5" stroke-linecap="round" opacity=".2"/></svg>
        </div>
        <div class="ex-dashes ex-dashes--ml">
          <svg width="44" height="32" viewBox="0 0 44 32" fill="none"><line x1="0" y1="32" x2="14" y2="0" stroke="#8b5cf6" stroke-width="2.5" stroke-linecap="round" opacity=".5"/><line x1="16" y1="32" x2="30" y2="0" stroke="#8b5cf6" stroke-width="2.5" stroke-linecap="round" opacity=".35"/><line x1="30" y1="32" x2="44" y2="0" stroke="#8b5cf6" stroke-width="2.5" stroke-linecap="round" opacity=".2"/></svg>
        </div>

        <div class="ex-mockup-main">
          <span class="ex-mockup-tag">Site web</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/websites_images.png" alt="Exemple site web artisan">
        </div>

        <div class="ex-mockup-row">
          <div class="ex-mockup-sm">
            <span class="ex-mockup-tag">Identité visuelle</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/identite_visuelle.png" alt="Exemple identité visuelle">
          </div>
          <div class="ex-mockup-sm">
            <span class="ex-mockup-tag">Réseaux sociaux</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carroussel_insta.png" alt="Exemple réseaux sociaux">
          </div>
          <div class="ex-mockup-sm">
            <span class="ex-mockup-tag">Print</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/creation_print.png" alt="Exemple création print">
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- SERVICES CARDS -->
  <section style="padding: 32px 0 80px; background: var(--bg);">
    <div class="container">
      <div class="preview-cards">
        <a href="<?php echo nls_page_url('site-web'); ?>" class="preview-card pc-web">
          <div class="preview-card-icon-wrap"><span>🌐</span></div>
          <h3>Création de site web</h3>
          <p>Design sur mesure, mobile-first, SEO local. Livré en 7 jours avec devis en ligne et réservation de créneaux intégrés.</p>
          <span class="preview-card-link">Découvrir <span class="pca">→</span></span>
        </a>
        <a href="<?php echo nls_page_url('identite-visuelle'); ?>" class="preview-card pc-design">
          <div class="preview-card-icon-wrap"><span>🎨</span></div>
          <h3>Identité visuelle</h3>
          <p>Logo professionnel, charte graphique et supports de communication qui inspirent confiance dès le premier regard.</p>
          <span class="preview-card-link">Découvrir <span class="pca">→</span></span>
        </a>
        <a href="<?php echo nls_page_url('posts-linkedin'); ?>" class="preview-card pc-linkedin">
          <div class="preview-card-icon-wrap"><span>📱</span></div>
          <h3>Réseaux sociaux</h3>
          <p>Je rédige et publie des contenus qui valorisent vos chantiers et attirent clients professionnels et partenaires.</p>
          <span class="preview-card-link">Découvrir <span class="pca">→</span></span>
        </a>
        <a href="<?php echo nls_page_url('creation-print'); ?>" class="preview-card pc-print">
          <div class="preview-card-icon-wrap"><span>🖨️</span></div>
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
