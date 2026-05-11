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
          <h1 class="ep-hero-title">Comment on a bâti<br>la présence digitale<br>de <span class="gradient-text">Vert-Nature</span></h1>
          <p class="ep-hero-subtitle">Site web professionnel et identité visuelle soignée — une transformation complète pour un jardinier paysagiste indépendant.</p>
          <div class="ep-hero-services">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
            Site web · Identité visuelle
          </div>
          <div class="ep-hero-badges">
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              Design sur mesure
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              Identité visuelle
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              100% responsive
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              SEO local optimisé
            </span>
          </div>
        </div>
        <div class="ep-hero-visual">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_devices_vert_nature.png" alt="Mockup multi-device Vert-Nature" class="ep-hero-mockup">
        </div>
      </div>
    </div>
  </section>

  <!-- LE PROJET -->
  <section class="ep-projet">
    <div class="container">
      <div class="ep-projet-inner">
        <div class="ep-projet-text">
          <div class="case-label">Le Projet</div>
          <h2 class="case-title">Un site qui reflète<br>le soin du travail bien fait</h2>
          <p class="case-body">Vert-Nature avait besoin d'une vitrine digitale à la hauteur de son savoir-faire, pour capter des clients locaux et valoriser chaque réalisation.</p>
          <ul class="ep-checks">
            <li>
              <span class="ep-check-icon">✓</span>
              Valoriser les réalisations et le savoir-faire
            </li>
            <li>
              <span class="ep-check-icon">✓</span>
              Générer des demandes de devis locales
            </li>
            <li>
              <span class="ep-check-icon">✓</span>
              Créer une identité visuelle mémorable
            </li>
          </ul>
          <div class="ep-captures-grid">
            <div class="ep-capture"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_1.png" alt="Capture site Vert-Nature"></div>
            <div class="ep-capture"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_2.png" alt="Capture site Vert-Nature"></div>
            <div class="ep-capture"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_3.png" alt="Capture site Vert-Nature"></div>
            <div class="ep-capture"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_4.png" alt="Capture site Vert-Nature"></div>
          </div>
          <p class="case-body" style="margin-top:24px">Chaque section du site a été pensée pour guider le visiteur naturellement vers une prise de contact — du premier regard jusqu'au formulaire de devis.</p>
        </div>
        <div class="ep-projet-visual">
          <div class="case-browser">
            <div class="case-browser-bar">
              <div class="case-browser-dots"><span></span><span></span><span></span></div>
              <div class="case-browser-url">vert-nature.fr</div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_vert_nature.png" alt="Site Vert-Nature — page d'accueil">
          </div>
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

  <!-- FONCTIONNALITÉS CLÉS -->
  <section class="ep-features">
    <div class="container">
      <div class="ep-features-header">
        <div class="case-label">Les fonctionnalités clés</div>
        <h2 class="ep-features-title">Un site conçu pour convertir</h2>
      </div>
      <div class="ep-features-grid">
        <div class="ep-feature-card">
          <div class="ep-fc-icon ep-fc-icon--green">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
          </div>
          <h4 class="ep-fc-title">Galerie de réalisations</h4>
          <p class="ep-fc-desc">Mise en valeur des chantiers réalisés pour inspirer confiance et convaincre avant même le premier contact.</p>
        </div>
        <div class="ep-feature-card">
          <div class="ep-fc-icon ep-fc-icon--purple">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
          </div>
          <h4 class="ep-fc-title">Identité visuelle complète</h4>
          <p class="ep-fc-desc">Logo, charte graphique et déclinaisons cohérentes pour une image professionnelle sur tous les supports.</p>
        </div>
        <div class="ep-feature-card">
          <div class="ep-fc-icon ep-fc-icon--blue">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <h4 class="ep-fc-title">SEO local optimisé</h4>
          <p class="ep-fc-desc">Structure et contenus pensés pour apparaître en tête des résultats Google dans la zone d'intervention.</p>
        </div>
        <div class="ep-feature-card">
          <div class="ep-fc-icon ep-fc-icon--yellow">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </div>
          <h4 class="ep-fc-title">Devis en ligne simplifié</h4>
          <p class="ep-fc-desc">Formulaire de contact intelligent pour recevoir des demandes qualifiées sans effort supplémentaire.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- RÉSULTATS -->
  <section class="ep-results">
    <div class="container">
      <div class="case-label">Les Résultats</div>
      <h2 class="case-title">Des résultats concrets en quelques mois</h2>
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
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
