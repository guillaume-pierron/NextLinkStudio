<?php
/**
 * Template Name: Étude de cas — Élec Prime
 */
get_header();
?>

  <!-- HERO -->
  <section class="ep-hero">
    <div class="container">
      <div class="ep-hero-inner">
        <div class="ep-hero-content">
          <div class="ep-breadcrumb">
            <a href="<?php echo home_url('/'); ?>">Accueil</a>
            <span>/</span>
            <a href="<?php echo nls_page_url('realisations'); ?>">Mes réalisations</a>
            <span>/</span>
            <span>Élec Prime</span>
          </div>
          <div class="case-badge">⚡ Étude de cas — Électricité</div>
          <h1 class="ep-hero-title">Comment on a bâti<br>la présence digitale<br>d'<span class="gradient-text">Élec Prime</span></h1>
          <p class="ep-hero-subtitle">Site web premium, identité visuelle forte et système de réservation en ligne — une transformation complète pour un électricien indépendant en Île-de-France.</p>
          <div class="ep-hero-badges">
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              Design premium
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              Réservation en ligne
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              100% responsive
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              Sécurité &amp; rapide
            </span>
          </div>
        </div>
        <div class="ep-hero-visual">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elecprime_mockup.png" alt="Mockup multi-device Élec Prime" class="ep-hero-mockup">
        </div>
      </div>
    </div>
  </section>

  <!-- INFO BAR -->
  <div class="ep-info-bar">
    <div class="container">
      <div class="ep-info-inner">
        <div class="ep-info-item">
          <div class="ep-info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <div class="ep-info-label">Client</div>
          <div class="ep-info-value">Julien Martin</div>
        </div>
        <div class="ep-info-sep"></div>
        <div class="ep-info-item">
          <div class="ep-info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <div class="ep-info-label">Secteur</div>
          <div class="ep-info-value">Électricité</div>
        </div>
        <div class="ep-info-sep"></div>
        <div class="ep-info-item">
          <div class="ep-info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div class="ep-info-label">Zone</div>
          <div class="ep-info-value">Île-de-France</div>
        </div>
        <div class="ep-info-sep"></div>
        <div class="ep-info-item">
          <div class="ep-info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
          </div>
          <div class="ep-info-label">Services</div>
          <div class="ep-info-value">Site web · Logo · Réservation en ligne</div>
        </div>
        <div class="ep-info-sep"></div>
        <div class="ep-info-item">
          <div class="ep-info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <div class="ep-info-label">Durée</div>
          <div class="ep-info-value">7 jours</div>
        </div>
      </div>
    </div>
  </div>

  <!-- LE PROJET -->
  <section class="ep-projet">
    <div class="container">
      <div class="ep-projet-inner">
        <div class="ep-projet-text">
          <div class="case-label">Le Projet</div>
          <h2 class="case-title">Un site à la hauteur<br>de leur expertise</h2>
          <p class="case-body">Élec Prime avait besoin d'un site moderne, rapide et rassurant pour développer sa notoriété locale et simplifier la prise de rendez-vous.</p>
          <ul class="ep-checks">
            <li>
              <span class="ep-check-icon">✓</span>
              Mettre en avant l'expertise et la fiabilité
            </li>
            <li>
              <span class="ep-check-icon">✓</span>
              Générer des demandes de devis qualifiées
            </li>
            <li>
              <span class="ep-check-icon">✓</span>
              Offrir une expérience fluide sur tous les écrans
            </li>
          </ul>
        </div>
        <div class="ep-projet-visual">
          <div class="case-browser">
            <div class="case-browser-bar">
              <div class="case-browser-dots"><span></span><span></span><span></span></div>
              <div class="case-browser-url">elecprime.fr</div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elec_prime_hero.png" alt="Site Élec Prime — page d'accueil">
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
          <h3 class="ep-ds-title">Un excellent électricien,<br>invisible en ligne</h3>
          <p class="case-body">Julien Martin exerce depuis plus de 12 ans comme électricien en Île-de-France. Sans présence digitale ni système de réservation, il perdait du temps à gérer les appels et les plannings, et était peu visible auprès des nouveaux clients.</p>
          <ul class="ep-warn-list">
            <li><span class="ep-warn-icon">⚠</span>Aucune visibilité locale sur Google</li>
            <li><span class="ep-warn-icon">⚠</span>Prise de rendez-vous uniquement par téléphone</li>
            <li><span class="ep-warn-icon">⚠</span>Image de marque peu valorisée</li>
          </ul>
        </div>
        <div class="ep-ds-arrow">
          <div class="ep-ds-arrow-circle">→</div>
        </div>
        <div class="ep-ds-col">
          <div class="case-label">Notre Solution</div>
          <h3 class="ep-ds-title">Un site premium pensé<br>pour performer</h3>
          <p class="case-body">Nous avons conçu un site vitrine sur mesure, rapide, rassurant et optimisé pour convertir les visiteurs en clients.</p>
          <ul class="ep-sol-list">
            <li><span class="ep-sol-icon">✓</span>Design premium et identité visuelle forte</li>
            <li><span class="ep-sol-icon">✓</span>Réservation en ligne simple et rapide</li>
            <li><span class="ep-sol-icon">✓</span>Optimisation SEO locale</li>
            <li><span class="ep-sol-icon">✓</span>Site 100% responsive et sécurisé</li>
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
          <div class="ep-fc-icon ep-fc-icon--blue">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <h4 class="ep-fc-title">Réservation en ligne</h4>
          <p class="ep-fc-desc">Système de prise de rendez-vous intégré avec gestion automatique des disponibilités.</p>
          <div class="ep-fc-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/capture_1.png" alt="Réservation en ligne Élec Prime">
          </div>
        </div>
        <div class="ep-feature-card">
          <div class="ep-fc-icon ep-fc-icon--purple">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <h4 class="ep-fc-title">Devis en 3 étapes</h4>
          <p class="ep-fc-desc">Formulaire intelligent pour obtenir un devis gratuit en quelques clics.</p>
          <div class="ep-fc-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/capture_2.png" alt="Devis en ligne Élec Prime">
          </div>
        </div>
        <div class="ep-feature-card">
          <div class="ep-fc-icon ep-fc-icon--green">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <h4 class="ep-fc-title">SEO local optimisé</h4>
          <p class="ep-fc-desc">Structure et contenus pensés pour améliorer la visibilité à Île-de-France.</p>
          <div class="ep-fc-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/capture_3.png" alt="SEO local Élec Prime">
          </div>
        </div>
        <div class="ep-feature-card">
          <div class="ep-fc-icon ep-fc-icon--yellow">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <h4 class="ep-fc-title">Rapide &amp; sécurisé</h4>
          <p class="ep-fc-desc">Performances optimisées pour une expérience fluide et sécurisée.</p>
          <div class="ep-fc-gauge">
            <div class="ep-gauge-wrap">
              <svg viewBox="0 0 100 60" xmlns="http://www.w3.org/2000/svg" class="ep-gauge-svg">
                <path d="M 10 55 A 45 45 0 0 1 90 55" fill="none" stroke="#1e293b" stroke-width="8" stroke-linecap="round"/>
                <path d="M 10 55 A 45 45 0 0 1 90 55" fill="none" stroke="#22c55e" stroke-width="8" stroke-linecap="round" stroke-dasharray="138 5"/>
              </svg>
              <div class="ep-gauge-number">98</div>
            </div>
            <div class="ep-gauge-label">Performance</div>
          </div>
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
          <div class="ep-rc-value">+120%</div>
          <div class="ep-rc-label">de demandes en ligne en 3 mois</div>
        </div>
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--blue">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <div class="ep-rc-value">-60%</div>
          <div class="ep-rc-label">de temps de gestion des rendez-vous</div>
        </div>
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--yellow">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <div class="ep-rc-value">4,9/5</div>
          <div class="ep-rc-label">note moyenne des clients</div>
        </div>
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--purple">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <div class="ep-rc-value">+80%</div>
          <div class="ep-rc-label">de trafic organique en 5 mois</div>
        </div>
      </div>
    </div>
  </section>

  <!-- TÉMOIGNAGE -->
  <section class="ep-testimonial">
    <div class="container">
      <div class="ep-tm-inner">
        <div class="ep-tm-avatar">JM</div>
        <div class="ep-tm-content">
          <p class="ep-tm-quote">"Le site nous apporte une vraie crédibilité et surtout des clients régulièrement. La réservation en ligne nous fait gagner un temps précieux au quotidien."</p>
          <div class="ep-tm-author">
            <strong>Julien Martin</strong>
            <span>Fondateur, Élec Prime</span>
            <span class="ep-tm-stars">★★★★★</span>
          </div>
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
