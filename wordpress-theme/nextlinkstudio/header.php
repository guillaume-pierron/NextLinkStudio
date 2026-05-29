<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Schema.org LocalBusiness -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "NextLink Studio",
    "description": "Agence digitale spécialisée pour artisans et indépendants — création de sites web, identité visuelle, réseaux sociaux et print.",
    "url": "<?php echo home_url(); ?>",
    "email": "guillaume@nextlinkstudio.com",
    "telephone": "+33640466265",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Paris",
      "addressCountry": "FR"
    },
    "areaServed": "France",
    "priceRange": "€€",
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "117"
    }
  }
  </script>
  <?php wp_head(); ?>
  <style>
    /* Force reset any WordPress-injected margin on html/body (e.g. admin bar) */
    html, html.admin-bar { margin-top: 0 !important; padding-top: 0 !important; background: #ffffff; }
    body, body.admin-bar { margin-top: 0 !important; padding-top: 0 !important; padding-bottom: 0 !important; background: #ffffff; }
    .nav-wrapper { top: 0 !important; }
    /* Suppress WordPress 6.x block spacing injected on .wp-site-blocks */
    .wp-site-blocks { padding-block-start: 0 !important; padding-block-end: 0 !important; padding: 0 !important; }
    /* Ensure no gap between last section and footer */
    section:last-of-type { margin-bottom: 0 !important; }
    footer.footer { margin-top: 0 !important; }
  </style>
</head>
<body <?php body_class(); ?>>

  <!-- NAVIGATION -->
  <header class="nav-wrapper">
    <nav class="nav container">
      <a href="<?php echo home_url( '/' ); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="NextLink Studio">
      </a>
      <ul class="nav-links">
        <li class="nav-dropdown">
          <a href="<?php echo nls_page_url( 'expertise' ); ?>" class="nav-has-dropdown<?php echo nls_active_class( 'expertise' ); ?>">Expertise <span class="nav-arrow">▾</span></a>
          <div class="dropdown-menu">
            <div class="dropdown-menu-inner">
              <div class="dm-header">Mes expertises</div>
              <a href="<?php echo nls_page_url( 'site-web' ); ?>" class="dropdown-item di-web">
                <div class="di-icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
                <div class="di-text"><strong>Création de site web</strong><small>Design sur mesure, Livraison rapide</small></div>
                <span class="di-arrow">→</span>
              </a>
              <a href="<?php echo nls_page_url( 'identite-visuelle' ); ?>" class="dropdown-item di-design">
                <div class="di-icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></div>
                <div class="di-text"><strong>Identité visuelle</strong><small>Logo, charte graphique, supports</small></div>
                <span class="di-arrow">→</span>
              </a>
              <a href="<?php echo nls_page_url( 'posts-linkedin' ); ?>" class="dropdown-item di-linkedin">
                <div class="di-icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg></div>
                <div class="di-text"><strong>Réseaux sociaux</strong><small>Contenus et visuels pour vos réseaux</small></div>
                <span class="di-arrow">→</span>
              </a>
              <a href="<?php echo nls_page_url( 'creation-print' ); ?>" class="dropdown-item di-print">
                <div class="di-icon-wrap"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg></div>
                <div class="di-text"><strong>Création print</strong><small>Flyers, kakémonos, cartes de visite</small></div>
                <span class="di-arrow">→</span>
              </a>
              <div class="dm-footer"><a href="<?php echo nls_page_url( 'expertise' ); ?>">Voir toutes mes expertises →</a></div>
            </div>
          </div>
        </li>
        <li><a href="<?php echo nls_page_url( 'realisations' ); ?>"<?php echo nls_active_class( 'realisations' ) ? ' class="active"' : ''; ?>>Mes réalisations</a></li>
        <li><a href="<?php echo nls_page_url( 'tarifs' ); ?>"<?php echo nls_active_class( 'tarifs' ) ? ' class="active"' : ''; ?>>Tarifs</a></li>
        <li><a href="<?php echo nls_page_url( 'a-propos' ); ?>"<?php echo nls_active_class( 'a-propos' ) ? ' class="active"' : ''; ?>>À propos</a></li>
      </ul>
      <a href="<?php echo nls_page_url( 'devis' ); ?>" class="btn btn-primary nav-cta<?php echo nls_active_class( 'devis' ); ?>">Devis gratuit</a>
      <button class="menu-toggle" aria-label="Menu" onclick="toggleMenu()">
        <span></span><span></span><span></span>
      </button>
    </nav>
  </header>
  <div class="nav-mobile" id="navMobile">
    <div class="nav-mobile-inner">
      <div class="nav-mobile-nav">
        <div class="nav-mobile-group">
          <button class="nav-mobile-toggle" onclick="toggleExpertise(this)">
            <span class="nav-mobile-toggle-left"><span class="nm-num">01</span>Expertise</span>
            <span class="nav-mobile-arrow">▾</span>
          </button>
          <div class="nav-mobile-submenu"><div class="nav-mobile-submenu-inner">
            <a href="<?php echo nls_page_url( 'site-web' ); ?>" onclick="toggleMenu()"><span class="nm-service-icon">🌐</span>Création de site web</a>
            <a href="<?php echo nls_page_url( 'identite-visuelle' ); ?>" onclick="toggleMenu()"><span class="nm-service-icon">🎨</span>Identité visuelle</a>
            <a href="<?php echo nls_page_url( 'posts-linkedin' ); ?>" onclick="toggleMenu()"><span class="nm-service-icon">📱</span>Réseaux sociaux</a>
            <a href="<?php echo nls_page_url( 'creation-print' ); ?>" onclick="toggleMenu()"><span class="nm-service-icon">🖨️</span>Création print</a>
          </div></div>
        </div>
        <a href="<?php echo nls_page_url( 'realisations' ); ?>" onclick="toggleMenu()"><span class="nm-num">02</span>Mes réalisations</a>
        <a href="<?php echo nls_page_url( 'tarifs' ); ?>" onclick="toggleMenu()"><span class="nm-num">03</span>Tarifs</a>
        <a href="<?php echo nls_page_url( 'a-propos' ); ?>" onclick="toggleMenu()"><span class="nm-num">04</span>À propos</a>
      </div>
      <div class="nav-mobile-cta">
        <a href="<?php echo nls_page_url( 'devis' ); ?>" class="btn btn-primary" onclick="toggleMenu()">Devis gratuit →</a>
        <p class="nav-mobile-tagline">Votre projet mérite le meilleur.</p>
      </div>
    </div>
  </div>

