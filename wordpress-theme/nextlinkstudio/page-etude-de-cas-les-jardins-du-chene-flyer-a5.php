<?php
/**
 * Template Name: Étude de cas — Les jardins du chêne Flyer A5
 */
get_header();
?>
<style>
/* ── Vert-Nature Flyer — palette ────────────────────────────────
   #2E4E3A vert foncé · #6D8F6A vert moyen · #A7C1A1 vert clair · #1C2B22 noir vert */

/* HERO */
.vnfl-hero { padding: 100px 0 72px; background: #f7f9f6; position: relative; overflow: hidden; }
.vnfl-hero-bg {
  position: absolute; inset: 0; pointer-events: none;
  background:
    linear-gradient(180deg, rgba(46,78,58,0.20) 0%, rgba(46,78,58,0.07) 50%, transparent 90%),
    radial-gradient(ellipse 80% 90% at 50% 0%, rgba(46,78,58,0.28) 0%, transparent 65%),
    radial-gradient(ellipse 40% 50% at 8% 0%, rgba(109,143,106,0.15) 0%, transparent 60%);
}
.vnfl-hero-bg::after {
  content: '';
  position: absolute; inset: 0;
  background-image:
    linear-gradient(rgba(255,255,255,0.18) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,0.18) 1px, transparent 1px);
  background-size: 56px 56px;
  -webkit-mask-image: linear-gradient(180deg, black 0%, black 10%, transparent 68%);
  mask-image: linear-gradient(180deg, black 0%, black 10%, transparent 68%);
}
.vnfl-hero-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; position: relative; }
.vnfl-breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(28,43,34,0.40); margin-bottom: 20px; }
.vnfl-breadcrumb a { color: inherit; text-decoration: none; transition: color 0.2s; }
.vnfl-breadcrumb a:hover { color: #2E4E3A; }
.vnfl-badge { display: inline-flex; align-items: center; background: rgba(46,78,58,0.08); color: #2E4E3A; border: 1px solid rgba(46,78,58,0.22); border-radius: 99px; font-size: 11px; font-weight: 700; padding: 4px 12px; text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 20px; }
.vnfl-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(28px, 4vw, 48px); font-weight: 900; line-height: 1.1; color: #1C2B22; margin-bottom: 16px; }
.vnfl-title-client { color: #2E4E3A; }
.vnfl-subtitle { font-size: 15px; color: rgba(28,43,34,0.55); line-height: 1.75; margin-bottom: 28px; max-width: 460px; }
.vnfl-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 32px; }
.vnfl-tag { display: inline-flex; align-items: center; gap: 6px; background: transparent; border: 1px solid rgba(28,43,34,0.14); border-radius: 8px; padding: 6px 14px; font-size: 13px; font-weight: 600; color: rgba(28,43,34,0.65); }
.vnfl-tag svg { color: #2E4E3A; flex-shrink: 0; }

/* Hero visual */
.vnfl-visual { display: flex; flex-direction: column; align-items: center; }
.vnfl-flyer-wrap { position: relative; width: 100%; max-width: 340px; display: flex; flex-direction: column; align-items: flex-end; }
.vnfl-mockup { width: 100%; display: block; border-radius: 12px; filter: drop-shadow(0 20px 48px rgba(28,43,34,0.18)); }
.vnfl-annot { margin-top: 12px; background: #fff; border: 1px solid rgba(28,43,34,0.09); border-radius: 10px; padding: 9px 14px; font-size: 12px; font-weight: 700; color: #1C2B22; display: flex; align-items: center; gap: 8px; box-shadow: 0 4px 18px rgba(0,0,0,0.09); }
.vnfl-annot-check { width: 20px; height: 20px; border-radius: 50%; background: rgba(46,78,58,0.12); display: flex; align-items: center; justify-content: center; color: #2E4E3A; flex-shrink: 0; }

/* BARRE DE SPECS */
.vnfl-specs-bar { background: #f4f7f4; border-top: 1px solid rgba(28,43,34,0.06); border-bottom: 1px solid rgba(28,43,34,0.06); }
.vnfl-specs-bar-inner { display: grid; grid-template-columns: repeat(4, 1fr); }
.vnfl-spec { display: flex; align-items: center; gap: 14px; padding: 22px 28px; border-right: 1px solid rgba(28,43,34,0.07); }
.vnfl-spec:last-child { border-right: none; }
.vnfl-spec-icon { width: 38px; height: 38px; min-width: 38px; border-radius: 10px; background: rgba(46,78,58,0.08); display: flex; align-items: center; justify-content: center; color: #2E4E3A; flex-shrink: 0; }
.vnfl-spec-label { font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.7px; color: rgba(28,43,34,0.40); margin-bottom: 3px; }
.vnfl-spec-value { font-size: 13px; font-weight: 600; color: #1C2B22; line-height: 1.4; }

/* PROBLÈME / SOLUTION */
.vnfl-probsol { padding: 72px 0; background: #f7f9f6; }
.vnfl-probsol-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.vnfl-ps-card { border-radius: 20px; padding: 40px; }
.vnfl-ps-card--prob { background: #fff; border: 1px solid rgba(28,43,34,0.09); box-shadow: 0 2px 16px rgba(28,43,34,0.04); }
.vnfl-ps-card--sol { background: #1C2B22; }
.vnfl-ps-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 14px; display: block; }
.vnfl-ps-card--prob .vnfl-ps-label { color: #e05252; }
.vnfl-ps-card--sol .vnfl-ps-label { color: #6D8F6A; }
.vnfl-ps-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(18px,2vw,23px); font-weight: 800; line-height: 1.25; margin-bottom: 28px; }
.vnfl-ps-card--prob .vnfl-ps-title { color: #1C2B22; }
.vnfl-ps-card--sol .vnfl-ps-title { color: #fff; }
.vnfl-ps-list { list-style: none; padding: 0; display: flex; flex-direction: column; gap: 10px; }
.vnfl-ps-list li { display: flex; align-items: center; gap: 12px; font-size: 14px; font-weight: 500; line-height: 1.45; }
.vnfl-ps-card--prob .vnfl-ps-list li { color: rgba(28,43,34,0.68); }
.vnfl-ps-card--sol .vnfl-ps-list li { color: rgba(255,255,255,0.75); }
.vnfl-ps-icon { width: 26px; height: 26px; min-width: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.vnfl-ps-card--prob .vnfl-ps-icon { background: rgba(224,82,82,0.10); color: #e05252; }
.vnfl-ps-card--sol .vnfl-ps-icon { background: rgba(109,143,106,0.20); color: #6D8F6A; }

/* STRATÉGIE */
.vnfl-strat { padding: 80px 0; background: #fff; }
.vnfl-strat-header { text-align: center; margin-bottom: 52px; }
.vnfl-strat-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
.vnfl-strat-card { background: #f7f9f6; border: 1px solid rgba(28,43,34,0.08); border-radius: 16px; padding: 32px; }
.vnfl-strat-icon { width: 48px; height: 48px; border-radius: 14px; background: rgba(46,78,58,0.09); display: flex; align-items: center; justify-content: center; color: #2E4E3A; margin-bottom: 20px; }
.vnfl-strat-card h3 { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 16px; font-weight: 800; color: #1C2B22; margin-bottom: 10px; line-height: 1.3; }
.vnfl-strat-card p { font-size: 14px; color: rgba(28,43,34,0.60); line-height: 1.75; }
.vnfl-strat-card p strong { color: #2E4E3A; font-weight: 700; }
@media (max-width: 640px) { .vnfl-strat-grid { grid-template-columns: 1fr; } }

/* APERÇU DU FLYER */
.vnfl-apercu { background: #1C2B22; padding: 64px 0 72px; }
.vnfl-apercu-header { text-align: center; margin-bottom: 40px; }
.vnfl-apercu-label { font-size: 11px; font-weight: 700; color: rgba(255,255,255,0.30); text-transform: uppercase; letter-spacing: 1.2px; }
.vnfl-apercu-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; max-width: 900px; margin: 0 auto; }
.vnfl-apercu-face { display: flex; flex-direction: column; align-items: center; gap: 14px; }
.vnfl-apercu-face img { width: 100%; display: block; border-radius: 12px; box-shadow: 0 20px 60px rgba(0,0,0,0.45), 0 0 0 1px rgba(255,255,255,0.06); }
.vnfl-apercu-face-label { font-size: 12px; font-weight: 700; color: rgba(255,255,255,0.40); text-transform: uppercase; letter-spacing: 0.8px; }
@media (max-width: 640px) { .vnfl-apercu-grid { grid-template-columns: 1fr; max-width: 420px; } }

/* SECTION LABEL & TITLE */
.vnfl-section-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #2E4E3A; margin-bottom: 12px; }
.vnfl-section-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(22px,3vw,34px); font-weight: 800; color: #1C2B22; position: relative; display: inline-block; padding-bottom: 18px; }
.vnfl-section-title::after { content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 36px; height: 3px; background: #2E4E3A; border-radius: 2px; }

/* RÉSULTATS */
.vnfl-results { padding: 72px 0; background: #f7f9f6; }
.vnfl-results-header { text-align: center; margin-bottom: 44px; }
.vnfl-results-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
.vnfl-result-card { background: #fff; border: 1px solid rgba(28,43,34,0.08); border-radius: 16px; padding: 32px 24px; text-align: center; }
.vnfl-rc-icon { width: 44px; height: 44px; border-radius: 12px; background: rgba(46,78,58,0.08); display: flex; align-items: center; justify-content: center; color: #2E4E3A; margin: 0 auto 16px; }
.vnfl-rc-value { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 32px; font-weight: 900; color: #2E4E3A; line-height: 1; margin-bottom: 8px; }
.vnfl-rc-label { font-size: 13px; color: rgba(28,43,34,0.52); line-height: 1.55; }

/* CTA */
.vnfl-cta { background: #1C2B22; border-top: 1px solid rgba(255,255,255,0.06); padding: 72px 0; text-align: center; }
.vnfl-cta-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(24px,3.5vw,38px); font-weight: 900; color: #fff; margin-bottom: 14px; }
.vnfl-cta-sub { font-size: 15px; color: rgba(255,255,255,0.48); margin-bottom: 36px; max-width: 480px; margin-left: auto; margin-right: auto; }
.vnfl-cta-actions { display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap; }

/* RESPONSIVE */
@media (max-width: 960px) {
  .vnfl-hero-inner { grid-template-columns: 1fr; gap: 24px; }
  .vnfl-visual { max-width: 100%; margin: 0 auto; }
  .vnfl-annot { align-self: flex-start; }
  .vnfl-probsol-grid { grid-template-columns: 1fr; }
  .vnfl-specs-bar-inner { grid-template-columns: 1fr 1fr; }
  .vnfl-spec { border-right: none; border-bottom: 1px solid rgba(28,43,34,0.07); }
  .vnfl-spec:nth-child(odd) { border-right: 1px solid rgba(28,43,34,0.07); }
  .vnfl-results-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 580px) {
  .vnfl-results-grid { grid-template-columns: 1fr; }
  .vnfl-specs-bar-inner { grid-template-columns: 1fr; }
  .vnfl-spec:nth-child(odd) { border-right: none; }
}
</style>

<!-- HERO -->
<section class="vnfl-hero">
  <div class="vnfl-hero-bg"></div>
  <div class="container">
    <div class="vnfl-hero-inner">
      <div>
        <div class="vnfl-breadcrumb">
          <a href="<?php echo home_url('/'); ?>">Accueil</a>
          <span>/</span>
          <a href="<?php echo nls_page_url('realisations'); ?>">Projets</a>
          <span>/</span>
          <span>Les jardins du chêne — Flyer</span>
        </div>
        <div class="vnfl-badge">🖨️ Étude de cas — Print &amp; Communication</div>
        <h1 class="vnfl-title">
          Le flyer publicitaire<br>de <span class="vnfl-title-client">Les jardins du chêne</span>
        </h1>
        <p class="vnfl-subtitle">Création d'un flyer imprimé sur mesure pour promouvoir les services de jardinage et paysagisme de Les jardins du chêne — design percutant, message clair et identité visuelle cohérente.</p>
        <div class="vnfl-tags">
          <span class="vnfl-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
            Print / Imprimé
          </span>
          <span class="vnfl-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
            Direction artistique
          </span>
          <span class="vnfl-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
            Identité visuelle
          </span>
        </div>
      </div>

      <div class="vnfl-visual">
        <div class="vnfl-flyer-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_flyer_a5_les_jardins_du_chene.webp" alt="Flyer Les jardins du chêne" class="vnfl-mockup">
          <div class="vnfl-annot">
            <span class="vnfl-annot-check">
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
            Format A5 · Prêt à imprimer
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BARRE DE SPECS -->
<div class="vnfl-specs-bar">
  <div class="container">
    <div class="vnfl-specs-bar-inner">
      <div class="vnfl-spec">
        <div class="vnfl-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
        </div>
        <div>
          <div class="vnfl-spec-label">Format</div>
          <div class="vnfl-spec-value">Flyer A5 recto — print &amp; digital</div>
        </div>
      </div>
      <div class="vnfl-spec">
        <div class="vnfl-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
        </div>
        <div>
          <div class="vnfl-spec-label">Design</div>
          <div class="vnfl-spec-value">Direction artistique sur mesure</div>
        </div>
      </div>
      <div class="vnfl-spec">
        <div class="vnfl-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
        </div>
        <div>
          <div class="vnfl-spec-label">Copywriting</div>
          <div class="vnfl-spec-value">Texte &amp; accroche rédigés</div>
        </div>
      </div>
      <div class="vnfl-spec">
        <div class="vnfl-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <div>
          <div class="vnfl-spec-label">Délai</div>
          <div class="vnfl-spec-value">Livré en 2 jours</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- PROBLÈME / SOLUTION -->
<section class="vnfl-probsol">
  <div class="container">
    <div class="vnfl-probsol-grid">

      <!-- LE PROBLÈME -->
      <div class="vnfl-ps-card vnfl-ps-card--prob">
        <span class="vnfl-ps-label">Le Problème</span>
        <h2 class="vnfl-ps-title">Des services de qualité,<br>sans support pour les promouvoir</h2>
        <ul class="vnfl-ps-list">
          <li>
            <span class="vnfl-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Aucun support imprimé pour la prospection locale
          </li>
          <li>
            <span class="vnfl-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Identité visuelle absente des supports physiques
          </li>
          <li>
            <span class="vnfl-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Informations de contact difficiles à partager
          </li>
          <li>
            <span class="vnfl-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Prestations non listées de façon claire et lisible
          </li>
        </ul>
      </div>

      <!-- NOTRE SOLUTION -->
      <div class="vnfl-ps-card vnfl-ps-card--sol">
        <span class="vnfl-ps-label">Notre Solution</span>
        <h2 class="vnfl-ps-title">Un flyer qui attire l'œil<br>et donne envie d'appeler</h2>
        <ul class="vnfl-ps-list">
          <li>
            <span class="vnfl-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Charte graphique verte et naturelle cohérente
          </li>
          <li>
            <span class="vnfl-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Accroche percutante et services mis en avant
          </li>
          <li>
            <span class="vnfl-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Coordonnées et QR code bien visibles
          </li>
          <li>
            <span class="vnfl-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Fichier livré prêt à imprimer (PDF haute résolution)
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- APERÇU DU FLYER -->
<section class="vnfl-apercu">
  <div class="container">
    <div class="vnfl-apercu-header">
      <div class="vnfl-apercu-label">Aperçu du flyer — Recto &amp; Verso</div>
    </div>
    <div class="vnfl-apercu-grid">
      <div class="vnfl-apercu-face">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flyer_jardinsduchene_recto.webp" alt="Flyer Les jardins du chêne — Recto">
        <span class="vnfl-apercu-face-label">Recto</span>
      </div>
      <div class="vnfl-apercu-face">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flyer_jardinsduchene_verso.webp" alt="Flyer Les jardins du chêne — Verso">
        <span class="vnfl-apercu-face-label">Verso</span>
      </div>
    </div>
  </div>
</section>

<!-- STRATÉGIE -->
<section class="vnfl-strat">
  <div class="container">
    <div class="vnfl-strat-header">
      <div class="vnfl-section-label">La stratégie</div>
      <h2 class="vnfl-section-title">Pourquoi un flyer pour un jardinier ?</h2>
    </div>
    <div class="vnfl-strat-grid">

      <div class="vnfl-strat-card">
        <div class="vnfl-strat-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3>Le bouche-à-oreille local, amplifié</h3>
        <p>Un flyer dans les boîtes aux lettres du quartier ou remis en main propre est le <strong>canal de prospection le plus efficace</strong> pour les artisans locaux. Il touche directement les foyers là où les besoins se trouvent.</p>
      </div>

      <div class="vnfl-strat-card">
        <div class="vnfl-strat-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
        </div>
        <h3>Un design qui inspire confiance</h3>
        <p>Un flyer professionnel aux couleurs de la marque renvoie une image <strong>sérieuse et soignée</strong>. Les jardins du chêne se distingue de la concurrence dès le premier regard, avant même le premier appel.</p>
      </div>

      <div class="vnfl-strat-card">
        <div class="vnfl-strat-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
        </div>
        <h3>Cohérence avec la présence digitale</h3>
        <p>Le flyer reprend exactement les <strong>codes graphiques du site web et des réseaux sociaux</strong> de Les jardins du chêne. Chaque point de contact renforce la mémorisation de la marque et crédibilise l'entreprise.</p>
      </div>

      <div class="vnfl-strat-card">
        <div class="vnfl-strat-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
        </div>
        <h3>Un QR code pour passer au digital</h3>
        <p>Le flyer intègre un <strong>QR code renvoyant vers le site web</strong>, permettant aux prospects de découvrir les réalisations et de demander un devis en quelques secondes depuis leur smartphone.</p>
      </div>

    </div>
  </div>
</section>

<!-- RÉSULTATS -->
<section class="vnfl-results">
  <div class="container">
    <div class="vnfl-results-header">
      <div class="vnfl-section-label">Les résultats</div>
      <h2 class="vnfl-section-title">Un outil de communication complet</h2>
    </div>
    <div class="vnfl-results-grid">
      <div class="vnfl-result-card">
        <div class="vnfl-rc-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
        </div>
        <div class="vnfl-rc-value">A5</div>
        <div class="vnfl-rc-label">Format optimisé pour la distribution et l'affichage</div>
      </div>
      <div class="vnfl-result-card">
        <div class="vnfl-rc-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="12" y1="3" x2="12" y2="21"/></svg>
        </div>
        <div class="vnfl-rc-value">2</div>
        <div class="vnfl-rc-label">Faces designées — recto &amp; verso</div>
      </div>
      <div class="vnfl-result-card">
        <div class="vnfl-rc-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
        </div>
        <div class="vnfl-rc-value">PDF</div>
        <div class="vnfl-rc-label">Fichier haute résolution prêt à imprimer</div>
      </div>
      <div class="vnfl-result-card">
        <div class="vnfl-rc-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
        </div>
        <div class="vnfl-rc-value">1</div>
        <div class="vnfl-rc-label">Identité visuelle cohérente sur tous les supports</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="vnfl-cta">
  <div class="container">
    <h2 class="vnfl-cta-title">Un projet similaire ? Parlons-en.</h2>
    <p class="vnfl-cta-sub">Vous souhaitez un flyer professionnel qui reflète l'image de votre activité et attire de nouveaux clients ? Créons ensemble un support qui convertit.</p>
    <div class="vnfl-cta-actions">
      <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-lg">Démarrer mon projet →</a>
      <a href="<?php echo nls_page_url('realisations'); ?>" class="btn btn-ghost btn-lg" style="color:#fff;border-color:rgba(255,255,255,0.25);">Voir tous les projets</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
