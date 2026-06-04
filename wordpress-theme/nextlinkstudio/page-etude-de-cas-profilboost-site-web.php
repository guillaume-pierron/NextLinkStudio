<?php
/**
 * Template Name: Étude de cas — ProfilBoost Site Web
 */
get_header();
?>
<style>
/* ── ProfilBoost Site Web — palette officielle ──────────────────────────────
   #4CBDFA bleu clair · #058ED9 bleu principal · #394E7F marine · #0E131F noir */

/* HERO */
.pbs-hero { padding: 100px 0 72px; background: #f8fafc; position: relative; overflow: hidden; }
.pbs-hero-bg {
  position: absolute; inset: 0; pointer-events: none;
  background:
    linear-gradient(180deg, rgba(5,142,217,0.20) 0%, rgba(5,142,217,0.07) 50%, transparent 90%),
    radial-gradient(ellipse 80% 90% at 50% 0%, rgba(5,142,217,0.28) 0%, transparent 65%),
    radial-gradient(ellipse 40% 50% at 8% 0%, rgba(57,78,127,0.15) 0%, transparent 60%);
}
.pbs-hero-bg::after {
  content: '';
  position: absolute; inset: 0;
  background-image:
    linear-gradient(rgba(255,255,255,0.18) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,0.18) 1px, transparent 1px);
  background-size: 56px 56px;
  -webkit-mask-image: linear-gradient(180deg, black 0%, black 10%, transparent 68%);
  mask-image: linear-gradient(180deg, black 0%, black 10%, transparent 68%);
}
.pbs-hero-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; position: relative; }
.pbs-breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(14,19,31,0.40); margin-bottom: 20px; }
.pbs-breadcrumb a { color: inherit; text-decoration: none; transition: color 0.2s; }
.pbs-breadcrumb a:hover { color: #058ED9; }
.pbs-badge { display: inline-flex; align-items: center; background: rgba(5,142,217,0.08); color: #058ED9; border: 1px solid rgba(5,142,217,0.22); border-radius: 99px; font-size: 11px; font-weight: 700; padding: 4px 12px; text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 20px; }
.pbs-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(28px, 4vw, 48px); font-weight: 900; line-height: 1.1; color: #0E131F; margin-bottom: 16px; }
.pbs-title-client { color: #058ED9; }
.pbs-subtitle { font-size: 15px; color: rgba(14,19,31,0.55); line-height: 1.75; margin-bottom: 28px; max-width: 460px; }
.pbs-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 32px; }
.pbs-tag { display: inline-flex; align-items: center; gap: 6px; background: transparent; border: 1px solid rgba(14,19,31,0.14); border-radius: 8px; padding: 6px 14px; font-size: 13px; font-weight: 600; color: rgba(14,19,31,0.65); }
.pbs-tag svg { color: #058ED9; flex-shrink: 0; }
.pbs-visual { display: flex; flex-direction: column; align-items: center; }
.pbs-mockup { width: 100%; max-width: 540px; filter: drop-shadow(0 20px 48px rgba(14,19,31,0.12)); }
.pbs-annot { align-self: flex-end; margin-top: 0; background: #fff; border: 1px solid rgba(14,19,31,0.09); border-radius: 10px; padding: 9px 14px; font-size: 12px; font-weight: 700; color: #0E131F; display: flex; align-items: center; gap: 8px; box-shadow: 0 4px 18px rgba(0,0,0,0.09); }
.pbs-annot-check { width: 20px; height: 20px; border-radius: 50%; background: rgba(5,142,217,0.12); display: flex; align-items: center; justify-content: center; color: #058ED9; flex-shrink: 0; }

/* BARRE DE SPECS */
.pbs-specs-bar { background: #f4f7fb; border-top: 1px solid rgba(14,19,31,0.06); border-bottom: 1px solid rgba(14,19,31,0.06); }
.pbs-specs-bar-inner { display: grid; grid-template-columns: repeat(4, 1fr); }
.pbs-spec { display: flex; align-items: center; gap: 14px; padding: 22px 28px; border-right: 1px solid rgba(14,19,31,0.07); }
.pbs-spec:last-child { border-right: none; }
.pbs-spec-icon { width: 38px; height: 38px; min-width: 38px; border-radius: 10px; background: rgba(5,142,217,0.08); display: flex; align-items: center; justify-content: center; color: #058ED9; flex-shrink: 0; }
.pbs-spec-label { font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.7px; color: rgba(14,19,31,0.40); margin-bottom: 3px; }
.pbs-spec-value { font-size: 13px; font-weight: 600; color: #0E131F; line-height: 1.4; }

/* APERÇU */
.pbs-apercu { background: #0E131F; padding: 64px 0 0; overflow: hidden; }
.pbs-apercu-header { text-align: center; padding: 0 24px; margin-bottom: 40px; }
.pbs-apercu-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 11px; font-weight: 700; color: rgba(255,255,255,0.3); text-transform: uppercase; letter-spacing: 1.2px; }
.pbs-apercu-browser { max-width: 900px; margin: 0 auto; border-radius: 10px 10px 0 0; overflow: hidden; box-shadow: 0 -12px 70px rgba(0,0,0,0.55), 0 0 0 1px rgba(255,255,255,0.06); }
.pbs-apercu-bar { background: #1c2235; padding: 10px 14px; display: flex; align-items: center; }
.pbs-apercu-dots { display: flex; gap: 5px; }
.pbs-apercu-dots span { width: 9px; height: 9px; border-radius: 50%; background: rgba(255,255,255,0.12); }
.pbs-apercu-browser img { display: block; width: 100%; }

/* GALERIE PAGES */
.pbs-pages { padding: 80px 0; background: #fff; }
.pbs-pages-header { text-align: center; margin-bottom: 52px; }
.pbs-section-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #058ED9; margin-bottom: 12px; }
.pbs-section-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(22px,3vw,34px); font-weight: 800; color: #0E131F; position: relative; display: inline-block; padding-bottom: 18px; }
.pbs-section-title::after { content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 36px; height: 3px; background: #058ED9; border-radius: 2px; }
.pbs-pages-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.pbs-page-card { border: 1px solid rgba(14,19,31,0.08); border-radius: 12px; overflow: hidden; background: #f8fafc; transition: box-shadow 0.25s, transform 0.25s; }
.pbs-page-card:hover { box-shadow: 0 8px 32px rgba(5,142,217,0.12); transform: translateY(-3px); }
.pbs-page-card-img { width: 100%; height: 175px; object-fit: cover; object-position: top; display: block; }
.pbs-page-card-body { padding: 14px 16px; }
.pbs-page-card-name { font-size: 14px; font-weight: 800; color: #0E131F; margin-bottom: 5px; }
.pbs-page-card-desc { font-size: 12px; color: rgba(14,19,31,0.50); line-height: 1.55; }


/* LIVRAISON */
.pbs-livraison { padding: 72px 0; background: #f8fafc; border-top: 1px solid rgba(14,19,31,0.06); }
.pbs-livraison-header { text-align: center; margin-bottom: 44px; }
.pbs-livraison-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 16px; }
.pbs-liv-card { background: #fff; border: 1px solid rgba(14,19,31,0.08); border-radius: 16px; padding: 28px 22px; }
.pbs-liv-icon { width: 44px; height: 44px; border-radius: 12px; background: rgba(5,142,217,0.08); display: flex; align-items: center; justify-content: center; color: #058ED9; margin-bottom: 16px; flex-shrink: 0; }
.pbs-liv-title { font-size: 14px; font-weight: 700; color: #0E131F; margin-bottom: 8px; }
.pbs-liv-desc { font-size: 13px; color: rgba(14,19,31,0.52); line-height: 1.65; }
.pbs-liv-desc strong { color: #058ED9; font-weight: 700; }

/* CTA */
.pbs-cta { background: #0E131F; border-top: 1px solid rgba(255,255,255,0.06); padding: 72px 0; text-align: center; }
.pbs-cta-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(24px,3.5vw,38px); font-weight: 900; color: #fff; margin-bottom: 14px; }
.pbs-cta-sub { font-size: 15px; color: rgba(255,255,255,0.48); margin-bottom: 36px; max-width: 480px; margin-left: auto; margin-right: auto; }
.pbs-cta-actions { display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap; }

/* PROBLÈME / SOLUTION */
.pbs-probsol { padding: 72px 0; background: #f8fafc; }
.pbs-probsol-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.pbs-ps-card { border-radius: 20px; padding: 40px; }
.pbs-ps-card--prob { background: #fff; border: 1px solid rgba(14,19,31,0.09); box-shadow: 0 2px 16px rgba(14,19,31,0.04); }
.pbs-ps-card--sol { background: #0E131F; }
.pbs-ps-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 14px; display: block; }
.pbs-ps-card--prob .pbs-ps-label { color: #e05252; }
.pbs-ps-card--sol .pbs-ps-label { color: #4CBDFA; }
.pbs-ps-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(18px,2vw,23px); font-weight: 800; line-height: 1.25; margin-bottom: 28px; }
.pbs-ps-card--prob .pbs-ps-title { color: #0E131F; }
.pbs-ps-card--sol .pbs-ps-title { color: #fff; }
.pbs-ps-list { list-style: none; padding: 0; display: flex; flex-direction: column; gap: 10px; }
.pbs-ps-list li { display: flex; align-items: center; gap: 12px; font-size: 14px; font-weight: 500; line-height: 1.45; }
.pbs-ps-card--prob .pbs-ps-list li { color: rgba(14,19,31,0.68); }
.pbs-ps-card--sol .pbs-ps-list li { color: rgba(255,255,255,0.75); }
.pbs-ps-icon { width: 26px; height: 26px; min-width: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.pbs-ps-card--prob .pbs-ps-icon { background: rgba(224,82,82,0.10); color: #e05252; }
.pbs-ps-card--sol .pbs-ps-icon { background: rgba(76,189,250,0.14); color: #4CBDFA; }

/* RESPONSIVE */
@media (max-width: 960px) {
  .pbs-probsol-grid { grid-template-columns: 1fr; }
  .pbs-hero-inner { grid-template-columns: 1fr; gap: 24px; }
  .pbs-visual { max-width: 100%; margin: 0 auto; }
  .pbs-annot { align-self: flex-start; }
  .pbs-specs-bar-inner { grid-template-columns: 1fr; }
  .pbs-spec { border-right: none; border-bottom: 1px solid rgba(14,19,31,0.07); }
  .pbs-spec:last-child { border-bottom: none; }
  .pbs-pages-grid { grid-template-columns: repeat(2, 1fr); }
  .pbs-livraison-grid { grid-template-columns: 1fr; }
.pbs-resultats-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 580px) {
  .pbs-pages-grid { grid-template-columns: 1fr; }
  .pbs-resultats-grid { grid-template-columns: 1fr; }
}
</style>

<!-- HERO -->
<section class="pbs-hero">
  <div class="pbs-hero-bg"></div>
  <div class="container">
    <div class="pbs-hero-inner">
      <div>
        <div class="pbs-breadcrumb">
          <a href="<?php echo home_url('/'); ?>">Accueil</a>
          <span>/</span>
          <a href="<?php echo nls_page_url('realisations'); ?>">Projets</a>
          <span>/</span>
          <span>ProfilBoost</span>
        </div>
        <div class="pbs-badge">Étude de cas</div>
        <h1 class="pbs-title">
          La présence digitale<br>de <span class="pbs-title-client">ProfilBoost</span>
        </h1>
        <p class="pbs-subtitle">Création d'un site vitrine moderne et orienté conversion pour valoriser une offre de création de CV et lettres de motivation sur-mesure.</p>
        <div class="pbs-tags">
          <span class="pbs-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
            Site vitrine
          </span>
          <span class="pbs-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
            Design &amp; UX
          </span>
          <span class="pbs-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            SEO Local
          </span>
        </div>
        <a href="https://www.profilboost.fr/" target="_blank" rel="noopener" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
          Voir le site
        </a>
      </div>
      <div class="pbs-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_site_mockup.png" alt="Mockup ProfilBoost multi-device" class="pbs-mockup">
        <div class="pbs-annot">
          <span class="pbs-annot-check">
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          Site responsive 100% optimisé
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SPECS BAR -->
<div class="pbs-specs-bar">
  <div class="container">
    <div class="pbs-specs-bar-inner">
      <div class="pbs-spec">
        <div class="pbs-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <div>
          <div class="pbs-spec-label">Pages créées</div>
          <div class="pbs-spec-value">6 pages clés</div>
        </div>
      </div>
      <div class="pbs-spec">
        <div class="pbs-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <div>
          <div class="pbs-spec-label">Technos utilisées</div>
          <div class="pbs-spec-value">HTML, CSS, JavaScript</div>
        </div>
      </div>
      <div class="pbs-spec">
        <div class="pbs-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
        </div>
        <div>
          <div class="pbs-spec-label">Performance</div>
          <div class="pbs-spec-value">Optimisé SEO &amp; chargement rapide</div>
        </div>
      </div>
      <div class="pbs-spec">
        <div class="pbs-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
        </div>
        <div>
          <div class="pbs-spec-label">Responsive</div>
          <div class="pbs-spec-value">Mobile, tablette, desktop</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- PROBLÈME / SOLUTION -->
<section class="pbs-probsol">
  <div class="container">
    <div class="pbs-probsol-grid">

      <!-- LE PROBLÈME -->
      <div class="pbs-ps-card pbs-ps-card--prob">
        <span class="pbs-ps-label">Le Problème</span>
        <h2 class="pbs-ps-title">Un service de qualité,<br>sans vitrine digitale</h2>
        <ul class="pbs-ps-list">
          <li>
            <span class="pbs-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Aucune visibilité sur Google
          </li>
          <li>
            <span class="pbs-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Parcours client long et incertain
          </li>
          <li>
            <span class="pbs-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Manque de temps pour se démarquer
          </li>
          <li>
            <span class="pbs-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Pas de tunnel de commande en ligne
          </li>
        </ul>
      </div>

      <!-- NOTRE SOLUTION -->
      <div class="pbs-ps-card pbs-ps-card--sol">
        <span class="pbs-ps-label">Notre Solution</span>
        <h2 class="pbs-ps-title">Un site conçu pour<br>convaincre et convertir</h2>
        <ul class="pbs-ps-list">
          <li>
            <span class="pbs-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Design élégant, avec la charte ProfilBoost
          </li>
          <li>
            <span class="pbs-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Tunnel de conversion simplifié
          </li>
          <li>
            <span class="pbs-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Optimisation SEO et vitesse de chargement
          </li>
          <li>
            <span class="pbs-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Site 100% responsive et sécurisé
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- APERÇU DU SITE -->
<section class="pbs-apercu">
  <div class="pbs-apercu-header">
    <h2 class="pbs-apercu-title">Aperçu du site</h2>
  </div>
  <div class="pbs-apercu-browser">
    <div class="pbs-apercu-bar">
      <div class="pbs-apercu-dots"><span></span><span></span><span></span></div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_site_hero.png" alt="Aperçu du site ProfilBoost">
  </div>
</section>


<!-- GALERIE DES PAGES -->
<section class="pbs-pages">
  <div class="container">
    <div class="pbs-pages-header">
      <div class="pbs-section-label">Le site en détail</div>
      <h2 class="pbs-section-title">Chaque page pensée pour convertir</h2>
    </div>
    <div class="pbs-pages-grid">
      <div class="pbs-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_accueil.png" alt="Accueil ProfilBoost" class="pbs-page-card-img">
        <div class="pbs-page-card-body">
          <div class="pbs-page-card-name">Accueil</div>
          <div class="pbs-page-card-desc">Accroche forte, bénéfices clairs et preuves sociales.</div>
        </div>
      </div>
      <div class="pbs-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_formule.png" alt="Formule ProfilBoost" class="pbs-page-card-img">
        <div class="pbs-page-card-body">
          <div class="pbs-page-card-name">Formule</div>
          <div class="pbs-page-card-desc">Présentation de l'offre de manière structurée et rassurante.</div>
        </div>
      </div>
      <div class="pbs-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_apropos.png" alt="À propos ProfilBoost" class="pbs-page-card-img">
        <div class="pbs-page-card-body">
          <div class="pbs-page-card-name">À propos</div>
          <div class="pbs-page-card-desc">Mise en avant des avantages concrets pour l'utilisateur.</div>
        </div>
      </div>
      <div class="pbs-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_cv.png" alt="Création de CV ProfilBoost" class="pbs-page-card-img">
        <div class="pbs-page-card-body">
          <div class="pbs-page-card-name">Création de CV &amp; Lettre de Motivation</div>
          <div class="pbs-page-card-desc">Détail de l'offre avec exemples et explications.</div>
        </div>
      </div>
      <div class="pbs-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_linkedin.png" alt="Optimisation LinkedIn ProfilBoost" class="pbs-page-card-img">
        <div class="pbs-page-card-body">
          <div class="pbs-page-card-name">Optimisation du Profil LinkedIn</div>
          <div class="pbs-page-card-desc">Service complémentaire à forte valeur ajoutée.</div>
        </div>
      </div>
      <div class="pbs-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_coaching.png" alt="Coaching ProfilBoost" class="pbs-page-card-img">
        <div class="pbs-page-card-body">
          <div class="pbs-page-card-name">Coaching &amp; Préparation entretien</div>
          <div class="pbs-page-card-desc">Accompagnement personnalisé pour décrocher le poste visé.</div>
        </div>
      </div>
      <div class="pbs-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_ressources.png" alt="Ressources ProfilBoost" class="pbs-page-card-img">
        <div class="pbs-page-card-body">
          <div class="pbs-page-card-name">Conseils, guides &amp; astuces carrière</div>
          <div class="pbs-page-card-desc">Ressources gratuites pour maximiser ses chances sur le marché du travail.</div>
        </div>
      </div>
      <div class="pbs-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_contact.png" alt="Contact ProfilBoost" class="pbs-page-card-img">
        <div class="pbs-page-card-body">
          <div class="pbs-page-card-name">Contact</div>
          <div class="pbs-page-card-desc">Page de contact pour prendre rendez-vous ou poser une question.</div>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:40px;">
      <a href="https://www.profilboost.fr/" target="_blank" rel="noopener" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
        Voir le site web
      </a>
    </div>
  </div>
</section>

<!-- LIVRAISON & SUIVI -->
<section class="pbs-livraison">
  <div class="container">
    <div class="pbs-livraison-header">
      <div class="pbs-section-label">Livraison &amp; suivi</div>
      <h2 class="pbs-section-title">Un site livré clé en main</h2>
    </div>
    <div class="pbs-livraison-grid">
      <div class="pbs-liv-card">
        <div class="pbs-liv-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
        <div class="pbs-liv-title">Hébergé sur WordPress</div>
        <div class="pbs-liv-desc">Le site est déployé sur <strong>WordPress</strong> — une plateforme <strong>stable et évolutive</strong>, maîtrisée par des millions d'utilisateurs.</div>
      </div>
      <div class="pbs-liv-card">
        <div class="pbs-liv-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
        <div class="pbs-liv-title">Sécurité intégrée</div>
        <div class="pbs-liv-desc">Des plugins de sécurité sont configurés pour <strong>protéger le site</strong> contre les <strong>menaces, intrusions et spams</strong>.</div>
      </div>
      <div class="pbs-liv-card">
        <div class="pbs-liv-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
        </div>
        <div class="pbs-liv-title">Statistiques de trafic</div>
        <div class="pbs-liv-desc"><strong>Google Site Kit</strong> est installé — <strong>visites, sources de trafic et comportements</strong> accessibles directement depuis WordPress.</div>
      </div>
      <div class="pbs-liv-card">
        <div class="pbs-liv-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        </div>
        <div class="pbs-liv-title">Autonomie totale</div>
        <div class="pbs-liv-desc">Le client reçoit ses accès et peut <strong>modifier textes et images</strong> en toute autonomie, <strong>sans compétences techniques</strong>.</div>
      </div>
      <div class="pbs-liv-card">
        <div class="pbs-liv-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        </div>
        <div class="pbs-liv-title">Adresses mail pro</div>
        <div class="pbs-liv-desc">Des adresses <strong>liées au nom de domaine</strong> sont créées — <strong>contact@profilboost.fr</strong>, <strong>compta@profilboost.fr</strong> — pour une <strong>image professionnelle</strong>.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="pbs-cta">
  <div class="container">
    <h2 class="pbs-cta-title">Un projet similaire ? Parlons-en.</h2>
    <p class="pbs-cta-sub">Vous avez un projet de site vitrine ou souhaitez améliorer votre présence en ligne ? Discutons de vos objectifs et créons ensemble un site qui convertit.</p>
    <div class="pbs-cta-actions">
      <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-lg">Démarrer mon projet →</a>
      <a href="<?php echo nls_page_url('realisations'); ?>" class="btn btn-ghost btn-lg" style="color:#fff;border-color:rgba(255,255,255,0.25);">Voir tous les projets</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
