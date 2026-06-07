<?php
/**
 * Template Name: Réalisations
 */
get_header();
?>

  <!-- GRILLE RÉALISATIONS -->
  <section class="realisations-full" id="realisations">
    <div class="container">
      <div class="rl-page-header">
        <h1 class="rl-page-title">Mes <span class="gradient-text">réalisations</span></h1>
      </div>
      <!-- FILTRES -->
      <div class="pf-filters">
        <button class="pf-filter active" data-filter="all">Tous</button>
        <button class="pf-filter" data-filter="site-web">Site web</button>
        <button class="pf-filter" data-filter="identite-visuelle">Identité visuelle</button>
        <button class="pf-filter" data-filter="reseaux-sociaux">Réseaux sociaux</button>
        <button class="pf-filter" data-filter="print">Print</button>
      </div>

      <div class="portfolio-grid--triple" id="pf-grid">

        <div class="pf-card" data-category="site-web">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_site_mockup_bg.png" alt="ProfilBoost — site web">
            <span class="pf-badge pf-badge--wood">Site web</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--wood"></div>
              <div><h4 class="pf-card-title">www.profilboost.fr</h4><p class="pf-card-desc">Experts en optimisation professionnelle</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Design</span><span class="pf-stat-label">sur mesure</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">SEO</span><span class="pf-stat-label">optimisé</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Devis</span><span class="pf-stat-label">24h/24</span></div></div>
            </div>
            <div class="pf-card-actions">
              <a href="https://www.profilboost.fr/?utm_source=nextlinkstudio&utm_medium=portfolio&utm_campaign=bouton_voir_le_site&utm_content=page_realisations" target="_blank" rel="noopener" class="pf-card-site-link">Voir le site web →</a>
              <a href="<?php echo nls_page_url('etude-de-cas-profilboost-site-web'); ?>" class="pf-card-cta pf-card-cta--wood">Voir l'étude de cas →</a>
            </div>
          </div>
        </div>

        <div class="pf-card" data-category="reseaux-sociaux">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Instagram_les_jardins_du_chene_post.webp" alt="Vert-Nature — carrousel Instagram">
            <span class="pf-badge pf-badge--green">Réseaux sociaux</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--green"></div>
              <div><h4 class="pf-card-title">Les jardins du chêne</h4><p class="pf-card-desc">Carrousel Instagram</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="8" height="8" rx="1"/><rect x="13" y="3" width="8" height="8" rx="1"/><rect x="3" y="13" width="8" height="8" rx="1"/><rect x="13" y="13" width="8" height="8" rx="1"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Slides</span><span class="pf-stat-label">prenium</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Contenu</span><span class="pf-stat-label">cohérent</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Design</span><span class="pf-stat-label">personnalisé</span></div></div>
            </div>
            <div class="pf-card-actions">
              <a href="<?php echo nls_page_url('post-instagram-les-jardins-du-chene'); ?>" class="pf-card-site-link">Voir le post →</a>
              <a href="<?php echo nls_page_url('etude-de-cas-les-jardins-du-chene-post-instagram'); ?>" class="pf-card-cta pf-card-cta--green">Voir l'étude de cas →</a>
            </div>
          </div>
        </div>

        <div class="pf-card" data-category="identite-visuelle">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_charte_graphique_profilboost_bg.png" alt="ProfilBoost — identité visuelle création de CV">
            <span class="pf-badge pf-badge--wood">Identité visuelle</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--wood"></div>
              <div><h4 class="pf-card-title">ProfilBoost</h4><p class="pf-card-desc">Création de CV</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><circle cx="11" cy="11" r="2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Logo</span><span class="pf-stat-label">personnalisé</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Charte</span><span class="pf-stat-label">complète</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Supports</span><span class="pf-stat-label">inclus</span></div></div>
            </div>
            <div class="pf-card-actions">
              <a href="<?php echo nls_page_url('charte-graphique-profilboost'); ?>" class="pf-card-site-link">Voir la charte graphique →</a>
              <a href="<?php echo nls_page_url('etude-de-cas-profilboost-identite-visuelle'); ?>" class="pf-card-cta pf-card-cta--wood">Voir l'étude de cas →</a>
            </div>
          </div>
        </div>

        <div class="pf-card" data-category="site-web">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_devices_vert_nature_bg.png" alt="Vert-Nature — site web jardinier paysagiste">
            <span class="pf-badge pf-badge--green">Site web</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--green"></div>
              <div><h4 class="pf-card-title">www.lesjardinsduchene.fr</h4><p class="pf-card-desc">Paysagiste — Région lyonnaise</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Design</span><span class="pf-stat-label">sur mesure</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 5.59 5.59l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">SEO</span><span class="pf-stat-label">optimisé</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Devis</span><span class="pf-stat-label">24h/24</span></div></div>
            </div>
            <div class="pf-card-actions">
              <a href="https://www.lesjardinsduchene.fr/?utm_source=nextlinkstudio&utm_medium=portfolio&utm_campaign=bouton_voir_le_site&utm_content=page_realisations" target="_blank" rel="noopener" class="pf-card-site-link">Voir le site web →</a>
              <a href="<?php echo nls_page_url('etude-de-cas-les-jardins-du-chene-site-web'); ?>" class="pf-card-cta pf-card-cta--green">Voir l'étude de cas →</a>
            </div>
          </div>
        </div>

        <div class="pf-card" data-category="print">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_flyer_a5_les_jardins_du_chene.webp" alt="Vert-Nature — flyer publicitaire">
            <span class="pf-badge pf-badge--green">Print</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--green"></div>
              <div><h4 class="pf-card-title">Les jardins du chêne</h4><p class="pf-card-desc">Flyer publicitaire</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Format</span><span class="pf-stat-label">A5</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Fichier</span><span class="pf-stat-label">Prêt</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Design</span><span class="pf-stat-label">pro</span></div></div>
            </div>
            <div class="pf-card-actions">
              <a href="<?php echo nls_page_url('flyer-les-jardins-du-chene'); ?>" class="pf-card-site-link">Voir le flyer →</a>
              <a href="<?php echo nls_page_url('etude-de-cas-les-jardins-du-chene-flyer-a5'); ?>" class="pf-card-cta pf-card-cta--green">Voir l'étude de cas →</a>
            </div>
          </div>
        </div>

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

<script>
(function () {
  var filters = document.querySelectorAll('.pf-filter');
  var cards   = document.querySelectorAll('#pf-grid .pf-card');
  filters.forEach(function (btn) {
    btn.addEventListener('click', function () {
      filters.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');
      var f = btn.dataset.filter;
      cards.forEach(function (card) {
        if (f === 'all' || card.dataset.category === f) {
          card.classList.remove('pf-card--hidden');
        } else {
          card.classList.add('pf-card--hidden');
        }
      });
    });
  });
})();
</script>

<?php get_footer(); ?>

