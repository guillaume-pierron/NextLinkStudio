<?php
/**
 * Template Name: Étude de cas — Maison Volt
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
            <span>Maison Volt</span>
          </div>
          <div class="case-badge">⚡ Étude de cas — Électricité</div>
          <h1 class="ep-hero-title">La présence digitale<br>de <span class="gradient-text">Maison Volt</span></h1>
          <p class="ep-hero-subtitle">Site web premium, identité visuelle forte et système de réservation en ligne — une transformation complète pour un électricien indépendant en Île-de-France.</p>
          <div class="ep-hero-services">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
            Site web · Logo · Réservation en ligne
          </div>
          <div class="ep-hero-badges">
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Design premium</span>
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Réservation en ligne</span>
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>100% responsive</span>
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>SEO local</span>
          </div>
        </div>
        <div class="ep-hero-visual">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elecprime_mockup.png" alt="Mockup multi-device Maison Volt" class="ep-hero-mockup">
        </div>
      </div>
    </div>
  </section>

  <!-- SHOWCASE PLEIN LARGEUR -->
  <section class="sw-showcase sw-showcase--gold">
    <div class="sw-showcase-label">maisonvolt.fr</div>
    <div class="sw-showcase-browser">
      <div class="case-browser">
        <div class="case-browser-bar">
          <div class="case-browser-dots"><span></span><span></span><span></span></div>
          <div class="case-browser-url">maisonvolt.fr</div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elec_prime_hero.png" alt="Site Maison Volt — page d'accueil">
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
        <div class="sw-gallery-item sw-gallery-item--zoomable" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/capture_1.png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/capture_1.png" alt="Page services Maison Volt">
          <span class="sw-gallery-caption">Page services</span>
          <span class="sw-gallery-zoom"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></span>
        </div>
        <div class="sw-gallery-item sw-gallery-item--zoomable" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/capture_2.png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/capture_2.png" alt="Formulaire devis Maison Volt">
          <span class="sw-gallery-caption">Formulaire de devis</span>
          <span class="sw-gallery-zoom"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></span>
        </div>
        <div class="sw-gallery-item sw-gallery-item--zoomable" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/capture_3.png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/capture_3.png" alt="Réservation en ligne Maison Volt">
          <span class="sw-gallery-caption">Réservation en ligne</span>
          <span class="sw-gallery-zoom"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></span>
        </div>
        <div class="sw-gallery-item sw-gallery-item--zoomable" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/capture_4.png">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/capture_4.png" alt="Vue mobile Maison Volt">
          <span class="sw-gallery-caption">Version mobile</span>
          <span class="sw-gallery-zoom"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg></span>
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elec_prime_feat_reservation.png" alt="Réservation en ligne Maison Volt">
          </div>
          <div class="sw-annot-text">
            <div class="sw-annot-num">01</div>
            <h3 class="sw-annot-title">Réservation en ligne</h3>
            <p class="sw-annot-desc">Un système de prise de rendez-vous intégré avec gestion automatique des disponibilités. Le client choisit son créneau, Julien reçoit une notification — sans décrocher le téléphone.</p>
          </div>
        </div>

        <div class="sw-annot-item sw-annot-item--reverse">
          <div class="sw-annot-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elec_prime_feat_devis.png" alt="Formulaire devis Maison Volt">
          </div>
          <div class="sw-annot-text">
            <div class="sw-annot-num">02</div>
            <h3 class="sw-annot-title">Devis en 3 étapes</h3>
            <p class="sw-annot-desc">Un formulaire intelligent qui guide le visiteur en quelques clics. Chaque demande arrive avec toutes les informations nécessaires pour chiffrer rapidement.</p>
          </div>
        </div>

        <div class="sw-annot-item">
          <div class="sw-annot-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elec_prime_feat_seo.png" alt="SEO local Maison Volt">
          </div>
          <div class="sw-annot-text">
            <div class="sw-annot-num">03</div>
            <h3 class="sw-annot-title">SEO local optimisé</h3>
            <p class="sw-annot-desc">Structure sémantique, balises optimisées et contenus ciblés sur les zones d'intervention. Résultat : Maison Volt remonte en tête des recherches locales en quelques semaines.</p>
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
          <div class="ep-rc-value">+120%</div>
          <div class="ep-rc-label">de demandes en ligne en 3 mois</div>
        </div>
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--blue">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <div class="ep-rc-value">-60%</div>
          <div class="ep-rc-label">de temps de gestion des RDV</div>
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

<!-- LIGHTBOX -->
<div id="sw-lightbox" class="sw-lightbox" role="dialog" aria-modal="true">
  <button class="sw-lightbox-close" aria-label="Fermer">&times;</button>
  <div class="sw-lightbox-inner">
    <img src="" alt="" id="sw-lightbox-img">
  </div>
</div>

<script>
(function () {
  var lightbox = document.getElementById('sw-lightbox');
  var lbImg    = document.getElementById('sw-lightbox-img');

  document.querySelectorAll('.sw-gallery-item--zoomable').forEach(function (item) {
    item.addEventListener('click', function () {
      lbImg.src = item.dataset.src;
      lightbox.classList.add('sw-lightbox--open');
      document.body.style.overflow = 'hidden';
    });
  });

  function closeLightbox() {
    lightbox.classList.remove('sw-lightbox--open');
    document.body.style.overflow = '';
    lbImg.src = '';
  }

  lightbox.querySelector('.sw-lightbox-close').addEventListener('click', closeLightbox);
  lightbox.addEventListener('click', function (e) {
    if (e.target === lightbox || e.target === lightbox.querySelector('.sw-lightbox-inner')) closeLightbox();
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeLightbox();
  });
})();
</script>

<?php get_footer(); ?>
