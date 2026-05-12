<?php
/**
 * Template Name: Réalisations
 */
get_header();
?>

  <!-- PAGE HERO RÉALISATIONS -->
  <section class="rl-hero">
    <div class="rl-dashes" aria-hidden="true">
      <span></span><span></span><span></span><span></span>
    </div>
    <div class="container rl-hero-inner">

      <!-- GAUCHE -->
      <div class="rl-hero-left">
        <div class="page-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a> / <span>Mes réalisations</span></div>
        <div class="rl-badge">
          <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          Des idées. Des solutions. Des résultats.
        </div>
        <h1 class="rl-title">
          Mes<br><span class="gradient-text">réalisations</span>
        </h1>
        <p class="rl-sub">Les projets que j'ai construits, de A à Z. Chaque site, chaque identité, chaque résultat.</p>

        <div class="rl-stats">
          <div class="rl-stat">
            <div class="rl-stat-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
            </div>
            <div class="rl-stat-body"><strong>+140%</strong><span>de visibilité en moyenne</span></div>
          </div>
          <div class="rl-stat">
            <div class="rl-stat-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            </div>
            <div class="rl-stat-body"><strong>98%</strong><span>de clients satisfaits</span></div>
          </div>
          <div class="rl-stat">
            <div class="rl-stat-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <div class="rl-stat-body"><strong>7 jours</strong><span>délai moyen de livraison</span></div>
          </div>
        </div>

        <div class="rl-actions">
          <a href="#realisations" class="btn btn-primary btn-lg">Voir les projets →</a>
          <a href="<?php echo nls_page_url('devis'); ?>" class="rl-link">Discutons de votre projet →</a>
        </div>

      </div>

      <!-- DROITE — cartes mockup flottantes -->
      <div class="rl-hero-right" aria-hidden="true">
        <div class="rl-mockup-stack">
          <div class="rl-mockup-card rl-mockup-card--back">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_macbook_vert_nature.jpg" alt="">
            <span class="rl-mockup-label">Site e-commerce</span>
          </div>
          <div class="rl-mockup-card rl-mockup-card--mid">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/identite_visuelle.png" alt="">
            <span class="rl-mockup-label">Identité visuelle</span>
          </div>
          <div class="rl-mockup-card rl-mockup-card--front">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_macbook_elecprime.jpg" alt="">
            <span class="rl-mockup-label">Site web</span>
          </div>
        </div>
      </div>

    </div>

  </section>

  <!-- GRILLE RÉALISATIONS -->
  <section class="realisations-full" id="realisations">
    <div class="container">
      <div class="portfolio-grid--triple">

        <a href="<?php echo nls_page_url('etude-de-cas-elec-prime'); ?>" class="pf-card">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_macbook_elecprime.png" alt="Élec Prime — site web électricien Île-de-France">
            <span class="pf-badge pf-badge--gold">Site web</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--gold"></div>
              <div><h4 class="pf-card-title">Maison Volt</h4><p class="pf-card-desc">Electricien</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">+140%</span><span class="pf-stat-label">de visibilité</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">3 sem.</span><span class="pf-stat-label">1ers devis reçus</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">4.9/5</span><span class="pf-stat-label">avis Google</span></div></div>
            </div>
            <div class="pf-card-cta pf-card-cta--gold">Voir l'étude de cas →</div>
          </div>
        </a>

        <a href="<?php echo nls_page_url('etude-de-cas-profilboost'); ?>" class="pf-card">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/realisation_bois_2.png" alt="ProfilBoost — identité visuelle création de CV">
            <span class="pf-badge pf-badge--wood">Identité visuelle</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--wood"></div>
              <div><h4 class="pf-card-title">ProfilBoost</h4><p class="pf-card-desc">Création de CV</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><circle cx="11" cy="11" r="2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Logo</span><span class="pf-stat-label">+ charte complète</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">7 j</span><span class="pf-stat-label">de livraison</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">100%</span><span class="pf-stat-label">satisfait</span></div></div>
            </div>
            <div class="pf-card-cta pf-card-cta--wood">Voir l'étude de cas →</div>
          </div>
        </a>

        <a href="<?php echo nls_page_url('etude-de-cas-vert-nature'); ?>" class="pf-card">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_devices_vert_nature.png" alt="Vert-Nature — site web jardinier paysagiste">
            <span class="pf-badge pf-badge--green">Site web</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--green"></div>
              <div><h4 class="pf-card-title">Vert-Nature</h4><p class="pf-card-desc">Jardinier</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">+85%</span><span class="pf-stat-label">de trafic web</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 5.59 5.59l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">×3</span><span class="pf-stat-label">appels entrants</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">5/5</span><span class="pf-stat-label">satisfaction client</span></div></div>
            </div>
            <div class="pf-card-cta pf-card-cta--green">Voir l'étude de cas →</div>
          </div>
        </a>

      </div>

    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="page-cta">
    <div class="container">
      <div class="page-cta-inner">
        <h2>Votre réalisation sera la prochaine.</h2>
        <p>Rejoignez les artisans qui ont fait confiance à NextLink Studio.</p>
        <div class="page-cta-actions">
          <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-lg">Demander mon devis gratuit</a>
          <a href="<?php echo nls_page_url('tarifs'); ?>" class="btn btn-ghost btn-lg">Voir les tarifs →</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

