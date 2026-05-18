<?php
/**
 * Template Name: Étude de cas — Vert-Nature Instagram Carrousel
 */
get_header();
?>
<style>
/* ── Vert-Nature Instagram — palette ────────────────────────────────
   #2E4E3A vert foncé · #6D8F6A vert moyen · #A7C1A1 vert clair · #1C2B22 noir vert */

/* HERO */
.vnig-hero { padding: 100px 0 72px; background: #f7f9f6; position: relative; overflow: hidden; }
.vnig-hero-bg {
  position: absolute; inset: 0; pointer-events: none;
  background:
    linear-gradient(180deg, rgba(46,78,58,0.20) 0%, rgba(46,78,58,0.07) 50%, transparent 90%),
    radial-gradient(ellipse 80% 90% at 50% 0%, rgba(46,78,58,0.28) 0%, transparent 65%),
    radial-gradient(ellipse 40% 50% at 8% 0%, rgba(109,143,106,0.15) 0%, transparent 60%);
}
.vnig-hero-bg::after {
  content: '';
  position: absolute; inset: 0;
  background-image:
    linear-gradient(rgba(255,255,255,0.18) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,0.18) 1px, transparent 1px);
  background-size: 56px 56px;
  -webkit-mask-image: linear-gradient(180deg, black 0%, black 10%, transparent 68%);
  mask-image: linear-gradient(180deg, black 0%, black 10%, transparent 68%);
}
.vnig-hero-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; position: relative; }
.vnig-breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(28,43,34,0.40); margin-bottom: 20px; }
.vnig-breadcrumb a { color: inherit; text-decoration: none; transition: color 0.2s; }
.vnig-breadcrumb a:hover { color: #2E4E3A; }
.vnig-badge { display: inline-flex; align-items: center; background: rgba(46,78,58,0.08); color: #2E4E3A; border: 1px solid rgba(46,78,58,0.22); border-radius: 99px; font-size: 11px; font-weight: 700; padding: 4px 12px; text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 20px; }
.vnig-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(28px, 4vw, 48px); font-weight: 900; line-height: 1.1; color: #1C2B22; margin-bottom: 16px; }
.vnig-title-client { color: #2E4E3A; }
.vnig-subtitle { font-size: 15px; color: rgba(28,43,34,0.55); line-height: 1.75; margin-bottom: 28px; max-width: 460px; }
.vnig-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 32px; }
.vnig-tag { display: inline-flex; align-items: center; gap: 6px; background: transparent; border: 1px solid rgba(28,43,34,0.14); border-radius: 8px; padding: 6px 14px; font-size: 13px; font-weight: 600; color: rgba(28,43,34,0.65); }
.vnig-tag svg { color: #2E4E3A; flex-shrink: 0; }

/* Hero visual */
.vnig-visual { display: flex; flex-direction: column; align-items: center; }
.vnig-phone-wrap { position: relative; width: 100%; max-width: 480px; }
.vnig-mockup { width: 100%; display: block; border-radius: 12px; filter: drop-shadow(0 20px 48px rgba(28,43,34,0.14)); }
.vnig-annot { align-self: flex-end; margin-top: 12px; background: #fff; border: 1px solid rgba(28,43,34,0.09); border-radius: 10px; padding: 9px 14px; font-size: 12px; font-weight: 700; color: #1C2B22; display: flex; align-items: center; gap: 8px; box-shadow: 0 4px 18px rgba(0,0,0,0.09); }
.vnig-annot-check { width: 20px; height: 20px; border-radius: 50%; background: rgba(46,78,58,0.12); display: flex; align-items: center; justify-content: center; color: #2E4E3A; flex-shrink: 0; }

/* BARRE DE SPECS */
.vnig-specs-bar { background: #f4f7f4; border-top: 1px solid rgba(28,43,34,0.06); border-bottom: 1px solid rgba(28,43,34,0.06); }
.vnig-specs-bar-inner { display: grid; grid-template-columns: repeat(4, 1fr); }
.vnig-spec { display: flex; align-items: center; gap: 14px; padding: 22px 28px; border-right: 1px solid rgba(28,43,34,0.07); }
.vnig-spec:last-child { border-right: none; }
.vnig-spec-icon { width: 38px; height: 38px; min-width: 38px; border-radius: 10px; background: rgba(46,78,58,0.08); display: flex; align-items: center; justify-content: center; color: #2E4E3A; flex-shrink: 0; }
.vnig-spec-label { font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.7px; color: rgba(28,43,34,0.40); margin-bottom: 3px; }
.vnig-spec-value { font-size: 13px; font-weight: 600; color: #1C2B22; line-height: 1.4; }

/* PROBLÈME / SOLUTION */
.vnig-probsol { padding: 72px 0; background: #f7f9f6; }
.vnig-probsol-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.vnig-ps-card { border-radius: 20px; padding: 40px; }
.vnig-ps-card--prob { background: #fff; border: 1px solid rgba(28,43,34,0.09); box-shadow: 0 2px 16px rgba(28,43,34,0.04); }
.vnig-ps-card--sol { background: #1C2B22; }
.vnig-ps-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 14px; display: block; }
.vnig-ps-card--prob .vnig-ps-label { color: #e05252; }
.vnig-ps-card--sol .vnig-ps-label { color: #6D8F6A; }
.vnig-ps-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(18px,2vw,23px); font-weight: 800; line-height: 1.25; margin-bottom: 28px; }
.vnig-ps-card--prob .vnig-ps-title { color: #1C2B22; }
.vnig-ps-card--sol .vnig-ps-title { color: #fff; }
.vnig-ps-list { list-style: none; padding: 0; display: flex; flex-direction: column; gap: 10px; }
.vnig-ps-list li { display: flex; align-items: center; gap: 12px; font-size: 14px; font-weight: 500; line-height: 1.45; }
.vnig-ps-card--prob .vnig-ps-list li { color: rgba(28,43,34,0.68); }
.vnig-ps-card--sol .vnig-ps-list li { color: rgba(255,255,255,0.75); }
.vnig-ps-icon { width: 26px; height: 26px; min-width: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.vnig-ps-card--prob .vnig-ps-icon { background: rgba(224,82,82,0.10); color: #e05252; }
.vnig-ps-card--sol .vnig-ps-icon { background: rgba(109,143,106,0.20); color: #6D8F6A; }

/* STRATÉGIE */
.vnig-strat { padding: 80px 0; background: #fff; }
.vnig-strat-header { text-align: center; margin-bottom: 52px; }
.vnig-strat-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
.vnig-strat-card { background: #f7f9f6; border: 1px solid rgba(28,43,34,0.08); border-radius: 16px; padding: 32px; }
.vnig-strat-icon { width: 48px; height: 48px; border-radius: 14px; background: rgba(46,78,58,0.09); display: flex; align-items: center; justify-content: center; color: #2E4E3A; margin-bottom: 20px; }
.vnig-strat-card h3 { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 16px; font-weight: 800; color: #1C2B22; margin-bottom: 10px; line-height: 1.3; }
.vnig-strat-card p { font-size: 14px; color: rgba(28,43,34,0.60); line-height: 1.75; }
.vnig-strat-card p strong { color: #2E4E3A; font-weight: 700; }
@media (max-width: 640px) { .vnig-strat-grid { grid-template-columns: 1fr; } }

/* APERÇU — publication Instagram */
.vnig-apercu { background: #1C2B22; padding: 64px 0 72px; }
.vnig-apercu-header { text-align: center; margin-bottom: 40px; }
.vnig-apercu-label { font-size: 11px; font-weight: 700; color: rgba(255,255,255,0.30); text-transform: uppercase; letter-spacing: 1.2px; }
.vnig-post-wrap { max-width: 800px; margin: 0 auto; }
.vnig-post-topbar { display: flex; align-items: center; gap: 10px; padding: 12px 14px; border-bottom: 1px solid rgba(0,0,0,0.06); }
.vnig-post-avatar { width: 32px; height: 32px; border-radius: 50%; background: #A7C1A1; display: flex; align-items: center; justify-content: center; font-size: 14px; overflow: hidden; }
.vnig-post-avatar img { width: 100%; height: 100%; object-fit: cover; }
.vnig-post-username { font-size: 13px; font-weight: 700; color: #1C2B22; }
.vnig-post-handle { font-size: 11px; color: rgba(28,43,34,0.40); }
.vnig-post-image { line-height: 0; }
.vnig-post-image img { width: 100%; display: block; }
.vnig-post-actions { padding: 10px 14px 4px; display: flex; gap: 14px; }
.vnig-post-actions svg { color: #1C2B22; opacity: 0.7; }
.vnig-post-caption { padding: 4px 14px 14px; font-size: 12px; color: rgba(28,43,34,0.65); line-height: 1.6; }

/* GALERIE DES SLIDES */
.vnig-slides { padding: 80px 0; background: #1C2B22; }
.vnig-slides-header { text-align: center; margin-bottom: 52px; }
.vnig-section-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #2E4E3A; margin-bottom: 12px; }
.vnig-section-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(22px,3vw,34px); font-weight: 800; color: #1C2B22; position: relative; display: inline-block; padding-bottom: 18px; }
.vnig-section-title::after { content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 36px; height: 3px; background: #2E4E3A; border-radius: 2px; }
.vnig-slides .vnig-section-label { color: #6D8F6A; }
.vnig-slides .vnig-section-title { color: #fff; }
.vnig-slides .vnig-section-title::after { background: #6D8F6A; }
.vnig-slides .vnig-slide-card { background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.10); }
.vnig-slides .vnig-slide-num { color: rgba(255,255,255,0.35); }
.vnig-slides-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 16px; }
.vnig-slide-card { border: 1px solid rgba(28,43,34,0.08); border-radius: 12px; overflow: hidden; background: #f7f9f6; transition: box-shadow 0.25s, transform 0.25s; cursor: pointer; display: block; text-decoration: none; color: inherit; }
.vnig-slide-card:hover { box-shadow: 0 8px 32px rgba(46,78,58,0.12); transform: translateY(-3px); }
.vnig-slide-card img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; }
.vnig-slide-num { padding: 10px 14px; font-size: 12px; font-weight: 700; color: rgba(28,43,34,0.40); text-align: center; }

/* RÉSULTATS */
.vnig-results { padding: 72px 0; background: #fff; }
.vnig-results-header { text-align: center; margin-bottom: 44px; }
.vnig-results-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
.vnig-result-card { background: #fff; border: 1px solid rgba(28,43,34,0.08); border-radius: 16px; padding: 32px 24px; text-align: center; }
.vnig-rc-icon { width: 44px; height: 44px; border-radius: 12px; background: rgba(46,78,58,0.08); display: flex; align-items: center; justify-content: center; color: #2E4E3A; margin: 0 auto 16px; }
.vnig-rc-value { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 32px; font-weight: 900; color: #2E4E3A; line-height: 1; margin-bottom: 8px; }
.vnig-rc-label { font-size: 13px; color: rgba(28,43,34,0.52); line-height: 1.55; }

/* CTA */
.vnig-cta { background: #1C2B22; border-top: 1px solid rgba(255,255,255,0.06); padding: 72px 0; text-align: center; }
.vnig-cta-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(24px,3.5vw,38px); font-weight: 900; color: #fff; margin-bottom: 14px; }
.vnig-cta-sub { font-size: 15px; color: rgba(255,255,255,0.48); margin-bottom: 36px; max-width: 480px; margin-left: auto; margin-right: auto; }
.vnig-cta-actions { display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap; }

/* RESPONSIVE */
@media (max-width: 960px) {
  .vnig-hero-inner { grid-template-columns: 1fr; gap: 24px; }
  .vnig-visual { max-width: 100%; margin: 0 auto; }
  .vnig-annot { align-self: flex-start; }
  .vnig-probsol-grid { grid-template-columns: 1fr; }
  .vnig-specs-bar-inner { grid-template-columns: 1fr 1fr; }
  .vnig-spec { border-right: none; border-bottom: 1px solid rgba(28,43,34,0.07); }
  .vnig-spec:nth-child(odd) { border-right: 1px solid rgba(28,43,34,0.07); }
  .vnig-slides-grid { grid-template-columns: repeat(3, 1fr); }
  .vnig-results-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 580px) {
  .vnig-slides-grid { grid-template-columns: repeat(2, 1fr); }
  .vnig-results-grid { grid-template-columns: 1fr; }
  .vnig-specs-bar-inner { grid-template-columns: 1fr; }
  .vnig-spec:nth-child(odd) { border-right: none; }
}
</style>

<!-- HERO -->
<section class="vnig-hero">
  <div class="vnig-hero-bg"></div>
  <div class="container">
    <div class="vnig-hero-inner">
      <div>
        <div class="vnig-breadcrumb">
          <a href="<?php echo home_url('/'); ?>">Accueil</a>
          <span>/</span>
          <a href="<?php echo nls_page_url('realisations'); ?>">Projets</a>
          <span>/</span>
          <span>Vert-Nature — Instagram</span>
        </div>
        <div class="vnig-badge">📱 Étude de cas — Réseaux sociaux</div>
        <h1 class="vnig-title">
          Le carrousel Instagram<br>de <span class="vnig-title-client">Vert-Nature</span>
        </h1>
        <p class="vnig-subtitle">Création d'une publication carrousel Instagram sur mesure pour valoriser le savoir-faire d'un jardinier paysagiste — visuels cohérents, textes percutants et appel à l'action efficace.</p>
        <div class="vnig-tags">
          <span class="vnig-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
            Instagram
          </span>
          <span class="vnig-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="8" height="8" rx="1"/><rect x="13" y="3" width="8" height="8" rx="1"/><rect x="3" y="13" width="8" height="8" rx="1"/><rect x="13" y="13" width="8" height="8" rx="1"/></svg>
            Carrousel 5 slides
          </span>
          <span class="vnig-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
            Direction artistique
          </span>
        </div>
      </div>

      <div class="vnig-visual">
        <div class="vnig-phone-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Instagram_vertnature_mockup.png" alt="Publication Instagram Vert-Nature" class="vnig-mockup">
        </div>
        <div class="vnig-annot">
          <span class="vnig-annot-check">
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          Carrousel 5 slides · Format 1:1
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BARRE DE SPECS -->
<div class="vnig-specs-bar">
  <div class="container">
    <div class="vnig-specs-bar-inner">
      <div class="vnig-spec">
        <div class="vnig-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="8" height="8" rx="1"/><rect x="13" y="3" width="8" height="8" rx="1"/><rect x="3" y="13" width="8" height="8" rx="1"/><rect x="13" y="13" width="8" height="8" rx="1"/></svg>
        </div>
        <div>
          <div class="vnig-spec-label">Format</div>
          <div class="vnig-spec-value">Carrousel 5 slides — 1:1</div>
        </div>
      </div>
      <div class="vnig-spec">
        <div class="vnig-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
        </div>
        <div>
          <div class="vnig-spec-label">Design</div>
          <div class="vnig-spec-value">Direction artistique sur mesure</div>
        </div>
      </div>
      <div class="vnig-spec">
        <div class="vnig-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
        </div>
        <div>
          <div class="vnig-spec-label">Copywriting</div>
          <div class="vnig-spec-value">Textes &amp; légende rédigés</div>
        </div>
      </div>
      <div class="vnig-spec">
        <div class="vnig-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <div>
          <div class="vnig-spec-label">Délai</div>
          <div class="vnig-spec-value">Livré en 3 jours</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- PROBLÈME / SOLUTION -->
<section class="vnig-probsol">
  <div class="container">
    <div class="vnig-probsol-grid">

      <!-- LE PROBLÈME -->
      <div class="vnig-ps-card vnig-ps-card--prob">
        <span class="vnig-ps-label">Le Problème</span>
        <h2 class="vnig-ps-title">Un savoir-faire exceptionnel,<br>pas visible sur Instagram</h2>
        <ul class="vnig-ps-list">
          <li>
            <span class="vnig-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Publications sans cohérence visuelle
          </li>
          <li>
            <span class="vnig-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Engagement trop faible sur le compte
          </li>
          <li>
            <span class="vnig-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Qualité du travail non reflétée en ligne
          </li>
          <li>
            <span class="vnig-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Aucun appel à l'action clair dans les posts
          </li>
        </ul>
      </div>

      <!-- NOTRE SOLUTION -->
      <div class="vnig-ps-card vnig-ps-card--sol">
        <span class="vnig-ps-label">Notre Solution</span>
        <h2 class="vnig-ps-title">Un carrousel qui raconte<br>une histoire visuelle</h2>
        <ul class="vnig-ps-list">
          <li>
            <span class="vnig-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Charte graphique verte et naturelle cohérente
          </li>
          <li>
            <span class="vnig-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Accroche forte sur la première slide
          </li>
          <li>
            <span class="vnig-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Prestations présentées slide par slide
          </li>
          <li>
            <span class="vnig-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Slide finale avec CTA et contact direct
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- APERÇU — publication Instagram -->
<section class="vnig-apercu">
  <div class="container">
    <div class="vnig-apercu-header">
      <div class="vnig-apercu-label">Aperçu de la publication</div>
    </div>
    <div class="vnig-post-wrap">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post_insta_vertnature.jpg" alt="Publication Instagram Vert-Nature" style="width:100%;display:block;border-radius:12px;">
    </div>
  </div>
</section>

<!-- STRATÉGIE -->
<section class="vnig-strat">
  <div class="container">
    <div class="vnig-strat-header">
      <div class="vnig-section-label">La stratégie</div>
      <h2 class="vnig-section-title">Pourquoi un carrousel de conseils ?</h2>
    </div>
    <div class="vnig-strat-grid">

      <div class="vnig-strat-card">
        <div class="vnig-strat-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
        </div>
        <h3>Le format carrousel génère plus d'engagement</h3>
        <p>Sur Instagram, les carrousels obtiennent en moyenne <strong>3× plus d'interactions</strong> qu'une image seule. Chaque swipe maintient l'attention et pousse l'algorithme à diffuser la publication plus largement.</p>
      </div>

      <div class="vnig-strat-card">
        <div class="vnig-strat-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
        </div>
        <h3>Donner des conseils crée de la confiance</h3>
        <p>Un contenu utile positionne Vert-Nature comme <strong>expert de son domaine</strong>. En partageant des astuces jardinage, la marque apporte de la valeur avant même le premier contact — ce qui convertit mieux qu'un post purement promotionnel.</p>
      </div>

      <div class="vnig-strat-card">
        <div class="vnig-strat-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3>Toucher une audience qualifiée</h3>
        <p>Les personnes qui sauvegardent ou partagent un conseil jardinage sont précisément les <strong>futurs clients</strong> de Vert-Nature. Ce format attire naturellement une audience ciblée, sans dépenser en publicité.</p>
      </div>

      <div class="vnig-strat-card">
        <div class="vnig-strat-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
        </div>
        <h3>La dernière slide convertit</h3>
        <p>Après avoir capté l'intérêt avec des conseils, la slide finale présente une <strong>offre claire avec un appel à l'action</strong> — le lecteur est déjà convaincu par l'expertise, il ne lui reste qu'à passer à l'action.</p>
      </div>

    </div>
  </div>
</section>

<!-- GALERIE DES SLIDES -->
<section class="vnig-slides">
  <div class="container">
    <div class="vnig-slides-header">
      <div class="vnig-section-label">Le carrousel en détail</div>
      <h2 class="vnig-section-title">5 slides, un message clair</h2>
    </div>
    <div class="vnig-slides-grid">
      <a class="vnig-slide-card" href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/assets/images/carrousel_vertnature_1.png" data-lightbox-alt="Carrousel Vert-Nature — Slide 1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrousel_vertnature_1.png" alt="Carrousel Vert-Nature — Slide 1">
        <div class="vnig-slide-num">Slide 1 — Accroche</div>
      </a>
      <a class="vnig-slide-card" href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/assets/images/carrousel_vertnature_2.png" data-lightbox-alt="Carrousel Vert-Nature — Slide 2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrousel_vertnature_2.png" alt="Carrousel Vert-Nature — Slide 2">
        <div class="vnig-slide-num">Slide 2 — Conseil n°1</div>
      </a>
      <a class="vnig-slide-card" href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/assets/images/carrousel_vertnature_3.png" data-lightbox-alt="Carrousel Vert-Nature — Slide 3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrousel_vertnature_3.png" alt="Carrousel Vert-Nature — Slide 3">
        <div class="vnig-slide-num">Slide 3 — Conseil n°2</div>
      </a>
      <a class="vnig-slide-card" href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/assets/images/carrousel_vertnature_4.png" data-lightbox-alt="Carrousel Vert-Nature — Slide 4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrousel_vertnature_4.png" alt="Carrousel Vert-Nature — Slide 4">
        <div class="vnig-slide-num">Slide 4 — Conseil n°3</div>
      </a>
      <a class="vnig-slide-card" href="#" data-lightbox="<?php echo get_template_directory_uri(); ?>/assets/images/carrousel_vertnature_5.png" data-lightbox-alt="Carrousel Vert-Nature — Slide 5">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrousel_vertnature_5.png" alt="Carrousel Vert-Nature — Slide 5">
        <div class="vnig-slide-num">Slide 5 — Appel à l'action</div>
      </a>
    </div>
  </div>
</section>

<!-- RÉSULTATS -->
<section class="vnig-results">
  <div class="container">
    <div class="vnig-results-header">
      <div class="vnig-section-label">Les résultats</div>
      <h2 class="vnig-section-title">Un contenu qui engage et convertit</h2>
    </div>
    <div class="vnig-results-grid">
      <div class="vnig-result-card">
        <div class="vnig-rc-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="8" height="8" rx="1"/><rect x="13" y="3" width="8" height="8" rx="1"/><rect x="3" y="13" width="8" height="8" rx="1"/><rect x="13" y="13" width="8" height="8" rx="1"/></svg>
        </div>
        <div class="vnig-rc-value">5</div>
        <div class="vnig-rc-label">Slides conçues et rédigées sur mesure</div>
      </div>
      <div class="vnig-result-card">
        <div class="vnig-rc-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <div class="vnig-rc-value">3j</div>
        <div class="vnig-rc-label">Délai de livraison de la publication</div>
      </div>
      <div class="vnig-result-card">
        <div class="vnig-rc-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
        </div>
        <div class="vnig-rc-value">+</div>
        <div class="vnig-rc-label">Engagement et visibilité renforcés</div>
      </div>
      <div class="vnig-result-card">
        <div class="vnig-rc-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
        </div>
        <div class="vnig-rc-value">1</div>
        <div class="vnig-rc-label">Identité visuelle cohérente et reconnaissable</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="vnig-cta">
  <div class="container">
    <h2 class="vnig-cta-title">Un projet similaire ? Parlons-en.</h2>
    <p class="vnig-cta-sub">Vous souhaitez un contenu Instagram professionnel qui reflète vraiment la qualité de votre travail ? Créons ensemble une publication qui convertit.</p>
    <div class="vnig-cta-actions">
      <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-lg">Démarrer mon projet →</a>
      <a href="<?php echo nls_page_url('realisations'); ?>" class="btn btn-ghost btn-lg" style="color:#fff;border-color:rgba(255,255,255,0.25);">Voir tous les projets</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
