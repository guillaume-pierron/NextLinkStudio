<?php
/**
 * Template Name: Étude de cas — Vert-Nature
 */
get_header();
?>

  <!-- HERO -->
  <section class="ep-hero">
    <div class="page-hero-bg"></div>
    <div class="container">
      <div class="ep-hero-inner">
        <div class="ep-hero-content">
          <div class="ep-breadcrumb">
            <a href="<?php echo home_url('/'); ?>">Accueil</a>
            <span>/</span>
            <a href="<?php echo nls_page_url('realisations'); ?>">Mes réalisations</a>
            <span>/</span>
            <span>Vert-Nature</span>
          </div>
          <div class="case-badge case-badge--green">🌿 Étude de cas — Paysagisme</div>
          <h1 class="ep-hero-title">La présence digitale<br>de <span class="gradient-text">Vert-Nature</span></h1>
          <p class="ep-hero-subtitle">Site web professionnel et identité visuelle soignée — une transformation complète pour un jardinier paysagiste indépendant.</p>
          <div class="ep-hero-services">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
            Site web · Identité visuelle
          </div>
          <div class="ep-hero-badges">
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Design sur mesure</span>
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Identité visuelle</span>
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>100% responsive</span>
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>SEO local</span>
          </div>
          <a href="https://nextlinkstudio.github.io/Vert-nature/" target="_blank" rel="noopener" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;margin-top:24px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            Voir le site
          </a>
        </div>
        <div class="ep-hero-visual">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_devices_vert_nature.png" alt="Mockup multi-device Vert-Nature" class="ep-hero-mockup">
        </div>
      </div>
    </div>
  </section>

  <!-- SHOWCASE PLEIN LARGEUR -->
  <section class="sw-showcase sw-showcase--green">
    <div class="sw-showcase-label">vert-nature.fr</div>
    <div class="sw-showcase-browser">
      <div class="case-browser">
        <div class="case-browser-bar">
          <div class="case-browser-dots"><span></span><span></span><span></span></div>
          <div class="case-browser-url">vert-nature.fr</div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_vert_nature.png" alt="Site Vert-Nature — page d'accueil">
      </div>
    </div>
  </section>

  <!-- GALERIE DES PAGES -->
  <section class="sw-gallery">
    <div class="container">
      <div class="iv-section-header">
        <div class="case-label">Le site en détail</div>
        <h2 class="case-title">Chaque page pensée<br>pour convertir</h2>
      </div>
      <div class="sw-gallery-grid">
        <div class="sw-gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_1.png" alt="Galerie réalisations Vert-Nature">
          <span class="sw-gallery-caption">Galerie de réalisations</span>
        </div>
        <div class="sw-gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_2.png" alt="Page services Vert-Nature">
          <span class="sw-gallery-caption">Page services</span>
        </div>
        <div class="sw-gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_3.png" alt="Formulaire devis Vert-Nature">
          <span class="sw-gallery-caption">Formulaire de devis</span>
        </div>
        <div class="sw-gallery-item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_4.png" alt="Vue mobile Vert-Nature">
          <span class="sw-gallery-caption">Version mobile</span>
        </div>
      </div>
    </div>
  </section>

  <!-- LE DÉFI / NOTRE SOLUTION -->
  <section class="ep-defi-solution">
    <div class="container">
      <div class="ep-ds-inner">
        <div class="ep-ds-col">
          <div class="case-label">Le Défi</div>
          <h3 class="ep-ds-title">Un paysagiste passionné,<br>invisible sur internet</h3>
          <p class="case-body">Vert-Nature est un jardinier paysagiste indépendant dont le talent se lit dans chaque jardin réalisé. Mais sans présence en ligne, toute l'activité reposait sur le bouche-à-oreille — efficace, mais insuffisant pour développer durablement le carnet de commandes.</p>
          <ul class="ep-warn-list">
            <li><span class="ep-warn-icon">⚠</span>Aucune visibilité locale sur Google</li>
            <li><span class="ep-warn-icon">⚠</span>Pas d'identité visuelle professionnelle</li>
            <li><span class="ep-warn-icon">⚠</span>Prise de contact uniquement par bouche-à-oreille</li>
          </ul>
        </div>
        <div class="ep-ds-arrow">
          <div class="ep-ds-arrow-circle">→</div>
        </div>
        <div class="ep-ds-col">
          <div class="case-label">Notre Solution</div>
          <h3 class="ep-ds-title">Un site chaleureux qui<br>inspire confiance</h3>
          <p class="case-body">On a opté pour un design naturel et aéré, avec des tons verts et organiques qui évoquent immédiatement l'univers du jardin.</p>
          <ul class="ep-sol-list">
            <li><span class="ep-sol-icon">✓</span>Design naturel aux couleurs de la marque</li>
            <li><span class="ep-sol-icon">✓</span>Galerie de réalisations mise en valeur</li>
            <li><span class="ep-sol-icon">✓</span>Optimisation SEO locale</li>
            <li><span class="ep-sol-icon">✓</span>Formulaire de contact simplifié</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- FONCTIONNALITÉS ANNOTÉES -->
  <section class="sw-annot-section">
    <div class="container">
      <div class="iv-section-header">
        <div class="case-label">Les fonctionnalités clés</div>
        <h2 class="case-title">Des détails qui font<br>la différence</h2>
      </div>

      <div class="sw-annot-list">

        <div class="sw-annot-item">
          <div class="sw-annot-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_feat_galerie.png" alt="Galerie réalisations Vert-Nature">
          </div>
          <div class="sw-annot-text">
            <div class="sw-annot-num">01</div>
            <h3 class="sw-annot-title">Galerie de réalisations</h3>
            <p class="sw-annot-desc">Mise en valeur des chantiers réalisés avec photos haute qualité. Chaque projet raconte une histoire et convainc le visiteur avant même le premier contact.</p>
          </div>
        </div>

        <div class="sw-annot-item sw-annot-item--reverse">
          <div class="sw-annot-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_feat_devis.png" alt="Formulaire devis Vert-Nature">
          </div>
          <div class="sw-annot-text">
            <div class="sw-annot-num">02</div>
            <h3 class="sw-annot-title">Devis en ligne simplifié</h3>
            <p class="sw-annot-desc">Un formulaire intelligent qui qualifie chaque demande dès la saisie. Chaque prospect arrive avec sa localisation, le type de prestation et sa disponibilité.</p>
          </div>
        </div>

        <div class="sw-annot-item">
          <div class="sw-annot-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_feat_seo.png" alt="SEO local Vert-Nature">
          </div>
          <div class="sw-annot-text">
            <div class="sw-annot-num">03</div>
            <h3 class="sw-annot-title">SEO local optimisé</h3>
            <p class="sw-annot-desc">Structure sémantique et contenus ciblés sur la zone d'intervention. Résultat : Vert-Nature apparaît en tête des résultats Google pour les recherches locales en paysagisme.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- RÉSULTATS -->
  <section class="ep-results ep-results--dark">
    <div class="container">
      <div class="case-label">Les Résultats</div>
      <h2 class="case-title">Des résultats concrets<br>en quelques mois</h2>
      <div class="ep-results-grid">
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--green">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          </div>
          <div class="ep-rc-value">+85%</div>
          <div class="ep-rc-label">de trafic web en 3 mois</div>
        </div>
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--blue">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 5.59 5.59l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg>
          </div>
          <div class="ep-rc-value">×3</div>
          <div class="ep-rc-label">appels entrants reçus</div>
        </div>
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--yellow">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <div class="ep-rc-value">5/5</div>
          <div class="ep-rc-label">satisfaction client</div>
        </div>
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--purple">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <div class="ep-rc-value">7 j.</div>
          <div class="ep-rc-label">délai de livraison respecté</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="page-cta">
    <div class="container">
      <div class="page-cta-inner">
        <h2>Un projet similaire ? Parlons-en.</h2>
        <p>Discutons de vos objectifs et créons ensemble un site qui fait la différence.</p>
        <div class="page-cta-actions">
          <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-lg">Démarrer mon projet →</a>
          <a href="<?php echo nls_page_url('site-web'); ?>" class="btn btn-ghost btn-lg">Voir le service →</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
