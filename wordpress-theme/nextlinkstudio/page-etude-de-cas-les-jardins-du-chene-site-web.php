<?php
/**
 * Template Name: Étude de cas — Les jardins du chêne Site Web
 */
get_header();
?>
<style>
/* ── Les jardins du chêne — palette officielle ──────────────────────────────
   #2E4E3A vert foncé · #6D8F6A vert moyen · #A7C1A1 vert clair · #1C2B22 noir vert */

/* HERO */
.vn-hero { padding: 100px 0 72px; background: #f7f9f6; position: relative; overflow: hidden; }
.vn-hero-bg {
  position: absolute; inset: 0; pointer-events: none;
  background:
    linear-gradient(180deg, rgba(46,78,58,0.20) 0%, rgba(46,78,58,0.07) 50%, transparent 90%),
    radial-gradient(ellipse 80% 90% at 50% 0%, rgba(46,78,58,0.28) 0%, transparent 65%),
    radial-gradient(ellipse 40% 50% at 8% 0%, rgba(109,143,106,0.15) 0%, transparent 60%);
}
.vn-hero-bg::after {
  content: '';
  position: absolute; inset: 0;
  background-image:
    linear-gradient(rgba(255,255,255,0.18) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255,255,255,0.18) 1px, transparent 1px);
  background-size: 56px 56px;
  -webkit-mask-image: linear-gradient(180deg, black 0%, black 10%, transparent 68%);
  mask-image: linear-gradient(180deg, black 0%, black 10%, transparent 68%);
}
.vn-hero-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; position: relative; }
.vn-breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 13px; color: rgba(28,43,34,0.40); margin-bottom: 20px; }
.vn-breadcrumb a { color: inherit; text-decoration: none; transition: color 0.2s; }
.vn-breadcrumb a:hover { color: #2E4E3A; }
.vn-badge { display: inline-flex; align-items: center; background: rgba(46,78,58,0.08); color: #2E4E3A; border: 1px solid rgba(46,78,58,0.22); border-radius: 99px; font-size: 11px; font-weight: 700; padding: 4px 12px; text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 20px; }
.vn-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(28px, 4vw, 48px); font-weight: 900; line-height: 1.1; color: #1C2B22; margin-bottom: 16px; }
.vn-title-client { color: #2E4E3A; }
.vn-subtitle { font-size: 15px; color: rgba(28,43,34,0.55); line-height: 1.75; margin-bottom: 28px; max-width: 460px; }
.vn-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 32px; }
.vn-tag { display: inline-flex; align-items: center; gap: 6px; background: transparent; border: 1px solid rgba(28,43,34,0.14); border-radius: 8px; padding: 6px 14px; font-size: 13px; font-weight: 600; color: rgba(28,43,34,0.65); }
.vn-tag svg { color: #2E4E3A; flex-shrink: 0; }
.vn-visual { display: flex; flex-direction: column; align-items: center; }
.vn-phone-wrap { position: relative; width: 100%; max-width: 540px; }
.vn-mockup { width: 100%; display: block; filter: drop-shadow(0 20px 48px rgba(28,43,34,0.12)); }
.vn-annot { align-self: flex-end; margin-top: 0; background: #fff; border: 1px solid rgba(28,43,34,0.09); border-radius: 10px; padding: 9px 14px; font-size: 12px; font-weight: 700; color: #1C2B22; display: flex; align-items: center; gap: 8px; box-shadow: 0 4px 18px rgba(0,0,0,0.09); }
.vn-annot-check { width: 20px; height: 20px; border-radius: 50%; background: rgba(46,78,58,0.12); display: flex; align-items: center; justify-content: center; color: #2E4E3A; flex-shrink: 0; }

/* BARRE DE SPECS */
.vn-specs-bar { background: #f4f7f4; border-top: 1px solid rgba(28,43,34,0.06); border-bottom: 1px solid rgba(28,43,34,0.06); }
.vn-specs-bar-inner { display: grid; grid-template-columns: repeat(4, 1fr); }
.vn-spec { display: flex; align-items: center; gap: 14px; padding: 22px 28px; border-right: 1px solid rgba(28,43,34,0.07); }
.vn-spec:last-child { border-right: none; }
.vn-spec-icon { width: 38px; height: 38px; min-width: 38px; border-radius: 10px; background: rgba(46,78,58,0.08); display: flex; align-items: center; justify-content: center; color: #2E4E3A; flex-shrink: 0; }
.vn-spec-label { font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.7px; color: rgba(28,43,34,0.40); margin-bottom: 3px; }
.vn-spec-value { font-size: 13px; font-weight: 600; color: #1C2B22; line-height: 1.4; }

/* PROBLÈME / SOLUTION */
.vn-probsol { padding: 72px 0; background: #f7f9f6; }
.vn-probsol-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.vn-ps-card { border-radius: 20px; padding: 40px; }
.vn-ps-card--prob { background: #fff; border: 1px solid rgba(28,43,34,0.09); box-shadow: 0 2px 16px rgba(28,43,34,0.04); }
.vn-ps-card--sol { background: #1C2B22; }
.vn-ps-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 14px; display: block; }
.vn-ps-card--prob .vn-ps-label { color: #e05252; }
.vn-ps-card--sol .vn-ps-label { color: #6D8F6A; }
.vn-ps-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(18px,2vw,23px); font-weight: 800; line-height: 1.25; margin-bottom: 28px; }
.vn-ps-card--prob .vn-ps-title { color: #1C2B22; }
.vn-ps-card--sol .vn-ps-title { color: #fff; }
.vn-ps-list { list-style: none; padding: 0; display: flex; flex-direction: column; gap: 10px; }
.vn-ps-list li { display: flex; align-items: center; gap: 12px; font-size: 14px; font-weight: 500; line-height: 1.45; }
.vn-ps-card--prob .vn-ps-list li { color: rgba(28,43,34,0.68); }
.vn-ps-card--sol .vn-ps-list li { color: rgba(255,255,255,0.75); }
.vn-ps-icon { width: 26px; height: 26px; min-width: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.vn-ps-card--prob .vn-ps-icon { background: rgba(224,82,82,0.10); color: #e05252; }
.vn-ps-card--sol .vn-ps-icon { background: rgba(109,143,106,0.20); color: #6D8F6A; }

/* APERÇU */
.vn-apercu { background: #1C2B22; padding: 64px 0 0; overflow: hidden; }
.vn-apercu-header { text-align: center; padding: 0 24px; margin-bottom: 40px; }
.vn-apercu-title { font-size: 11px; font-weight: 700; color: rgba(255,255,255,0.3); text-transform: uppercase; letter-spacing: 1.2px; }
.vn-apercu-browser { max-width: 900px; margin: 0 auto; border-radius: 10px 10px 0 0; overflow: hidden; box-shadow: 0 -12px 70px rgba(0,0,0,0.55), 0 0 0 1px rgba(255,255,255,0.06); }
.vn-apercu-bar { background: #243b2a; padding: 10px 14px; display: flex; align-items: center; }
.vn-apercu-dots { display: flex; gap: 5px; }
.vn-apercu-dots span { width: 9px; height: 9px; border-radius: 50%; background: rgba(255,255,255,0.12); }
.vn-apercu-browser img { display: block; width: 100%; }

/* GALERIE PAGES */
.vn-pages { padding: 80px 0; background: #fff; }
.vn-pages-header { text-align: center; margin-bottom: 52px; }
.vn-section-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #2E4E3A; margin-bottom: 12px; }
.vn-section-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(22px,3vw,34px); font-weight: 800; color: #1C2B22; position: relative; display: inline-block; padding-bottom: 18px; }
.vn-section-title::after { content: ''; position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 36px; height: 3px; background: #2E4E3A; border-radius: 2px; }
.vn-pages-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.vn-page-card { border: 1px solid rgba(28,43,34,0.08); border-radius: 12px; overflow: hidden; background: #f7f9f6; transition: box-shadow 0.25s, transform 0.25s; }
.vn-page-card:hover { box-shadow: 0 8px 32px rgba(46,78,58,0.12); transform: translateY(-3px); }
.vn-page-card-img { width: 100%; height: 175px; object-fit: cover; object-position: top; display: block; }
.vn-page-card-body { padding: 14px 16px; }
.vn-page-card-name { font-size: 14px; font-weight: 800; color: #1C2B22; margin-bottom: 5px; }
.vn-page-card-desc { font-size: 12px; color: rgba(28,43,34,0.50); line-height: 1.55; }

/* LIVRAISON */
.vn-livraison { padding: 72px 0; background: #f7f9f6; border-top: 1px solid rgba(28,43,34,0.06); }
.vn-livraison-header { text-align: center; margin-bottom: 44px; }
.vn-livraison-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 16px; }
.vn-liv-card { background: #fff; border: 1px solid rgba(28,43,34,0.08); border-radius: 16px; padding: 28px 22px; }
.vn-liv-icon { width: 44px; height: 44px; border-radius: 12px; background: rgba(46,78,58,0.08); display: flex; align-items: center; justify-content: center; color: #2E4E3A; margin-bottom: 16px; }
.vn-liv-title { font-size: 14px; font-weight: 700; color: #1C2B22; margin-bottom: 8px; }
.vn-liv-desc { font-size: 13px; color: rgba(28,43,34,0.52); line-height: 1.65; }
.vn-liv-desc strong { color: #2E4E3A; font-weight: 700; }

/* OFFRE CHOISIE */
.vn-offre { padding: 48px 0 80px; background: linear-gradient(180deg, rgba(46,78,58,0.04) 0%, #f7fbf8 40%, #fff 100%); border-top: 1px solid rgba(28,43,34,0.06); }
.vn-offre-badge { display: inline-flex; align-items: center; gap: 6px; background: #fff; border: 1px solid rgba(28,43,34,0.10); border-radius: 99px; padding: 5px 16px; font-size: 11px; font-weight: 700; letter-spacing: 0.8px; text-transform: uppercase; color: rgba(28,43,34,0.40); margin-bottom: 18px; }
.vn-offre-header { text-align: center; margin-bottom: 52px; }
.vn-offre-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(30px, 5vw, 52px); font-weight: 900; line-height: 1.1; color: #1C2B22; margin-bottom: 16px; }
.vn-offre-title-accent { color: #2E4E3A; }
.vn-offre-intro { font-size: 15px; color: rgba(28,43,34,0.50); line-height: 1.75; max-width: 520px; margin: 0 auto; }
.vn-offre-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 880px; margin: 0 auto 28px; }
.vn-offre-box { border-radius: 20px; padding: 36px; }
.vn-offre-box--features { background: #1C2B22; }
.vn-offre-box--delivered { background: #fff; border: 1px solid rgba(28,43,34,0.08); box-shadow: 0 4px 24px rgba(28,43,34,0.06); }
.vn-offre-card-head { display: flex; align-items: flex-start; gap: 14px; margin-bottom: 10px; }
.vn-offre-icon { width: 52px; height: 52px; min-width: 52px; border-radius: 14px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.vn-offre-box--features .vn-offre-icon { background: rgba(109,143,106,0.20); color: #A7C1A1; }
.vn-offre-box--delivered .vn-offre-icon { background: rgba(46,78,58,0.10); color: #2E4E3A; }
.vn-offre-card-label { font-size: 10px; font-weight: 700; letter-spacing: 1.2px; text-transform: uppercase; margin-bottom: 3px; }
.vn-offre-box--features .vn-offre-card-label { color: rgba(255,255,255,0.30); }
.vn-offre-box--delivered .vn-offre-card-label { color: rgba(28,43,34,0.32); }
.vn-offre-card-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 17px; font-weight: 800; }
.vn-offre-box--features .vn-offre-card-title { color: #fff; }
.vn-offre-box--delivered .vn-offre-card-title { color: #2E4E3A; }
.vn-offre-card-divider { width: 32px; height: 3px; border-radius: 2px; margin: 14px 0 22px; }
.vn-offre-box--features .vn-offre-card-divider { background: #6D8F6A; }
.vn-offre-box--delivered .vn-offre-card-divider { background: #2E4E3A; }
.vn-offre-list { list-style: none; padding: 0; margin: 0; }
.vn-offre-list li { display: flex; align-items: center; gap: 12px; font-size: 13.5px; padding: 10px 0; border-bottom: 1px solid; }
.vn-offre-box--features .vn-offre-list li { color: rgba(255,255,255,0.72); border-bottom-color: rgba(255,255,255,0.06); }
.vn-offre-box--delivered .vn-offre-list li { color: rgba(28,43,34,0.65); border-bottom-color: rgba(28,43,34,0.06); }
.vn-offre-list li:last-child { border-bottom: none; padding-bottom: 0; }
.vn-offre-list li:first-child { padding-top: 0; }
.vn-offre-check { width: 20px; height: 20px; min-width: 20px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.vn-offre-box--features .vn-offre-check { background: rgba(109,143,106,0.20); color: #A7C1A1; }
.vn-offre-box--delivered .vn-offre-check { background: rgba(46,78,58,0.12); color: #2E4E3A; }
.vn-offre-option { display: flex; align-items: center; gap: 10px; margin-top: 14px; padding-top: 14px; border-top: 1px solid rgba(109,143,106,0.20); }
.vn-offre-option-badge { font-size: 11px; font-weight: 700; color: #6D8F6A; background: rgba(109,143,106,0.15); padding: 2px 8px; border-radius: 20px; white-space: nowrap; flex-shrink: 0; }
.vn-offre-stats { display: grid; grid-template-columns: repeat(5, 1fr); background: #fff; border: 1px solid rgba(28,43,34,0.08); border-radius: 16px; overflow: hidden; max-width: 880px; margin: 0 auto; box-shadow: 0 2px 16px rgba(28,43,34,0.05); }
.vn-offre-stat { display: flex; align-items: center; gap: 12px; padding: 18px 16px; border-right: 1px solid rgba(28,43,34,0.07); }
.vn-offre-stat:last-child { border-right: none; }
.vn-offre-stat-icon { width: 36px; height: 36px; min-width: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.vn-offre-stat-title { font-size: 13px; font-weight: 700; color: #1C2B22; line-height: 1.3; }
.vn-offre-stat-sub { font-size: 11px; color: rgba(28,43,34,0.42); margin-top: 1px; }
@media (max-width: 760px) { .vn-offre { padding-top: 24px; } .vn-offre-inner { grid-template-columns: 1fr; } .vn-offre-stats { grid-template-columns: repeat(2, 1fr); } .vn-offre-stat { border-bottom: 1px solid rgba(28,43,34,0.07); } }

/* CTA */
.vn-cta { background: #1C2B22; border-top: 1px solid rgba(255,255,255,0.06); padding: 72px 0; text-align: center; }
.vn-cta-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(24px,3.5vw,38px); font-weight: 900; color: #fff; margin-bottom: 14px; }
.vn-cta-sub { font-size: 15px; color: rgba(255,255,255,0.48); margin-bottom: 36px; max-width: 480px; margin-left: auto; margin-right: auto; }
.vn-cta-actions { display: flex; align-items: center; justify-content: center; gap: 14px; flex-wrap: wrap; }

/* RESPONSIVE */
@media (max-width: 960px) {
  .vn-hero-inner { grid-template-columns: 1fr; gap: 24px; }
  .vn-visual { max-width: 100%; margin: 0 auto; }
  .vn-annot { align-self: flex-start; }
  .vn-probsol-grid { grid-template-columns: 1fr; }
  .vn-specs-bar-inner { grid-template-columns: 1fr; }
  .vn-spec { border-right: none; border-bottom: 1px solid rgba(28,43,34,0.07); }
  .vn-spec:last-child { border-bottom: none; }
  .vn-pages-grid { grid-template-columns: repeat(2, 1fr); }
  .vn-livraison-grid { grid-template-columns: 1fr; }
}
@media (max-width: 580px) {
  .vn-pages-grid { grid-template-columns: 1fr; }
}
</style>

<!-- HERO -->
<section class="vn-hero">
  <div class="vn-hero-bg"></div>
  <div class="container">
    <div class="vn-hero-inner">
      <div>
        <div style="display:flex;align-items:center;gap:8px;flex-wrap:wrap;margin-bottom:20px;">
          <div class="vn-badge" style="margin-bottom:0;">Étude de cas</div>
          <div class="vn-badge" style="margin-bottom:0;background:rgba(46,78,58,0.08);color:#2E4E3A;border-color:rgba(46,78,58,0.25);">
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-right:4px;"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
            Offre Présence
          </div>
        </div>
        <h1 class="vn-title">
          La présence digitale<br>de <span class="vn-title-client">Les jardins du chêne</span>
        </h1>
        <p class="vn-subtitle">Création d'un site vitrine moderne et d'une identité visuelle soignée pour un jardinier paysagiste indépendant souhaitant développer sa clientèle en ligne.</p>
        <div class="vn-tags">
          <span class="vn-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
            Site vitrine
          </span>
          <span class="vn-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
            Design &amp; UX
          </span>
          <span class="vn-tag">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            SEO Local
          </span>
        </div>
        <a href="https://www.lesjardinsduchene.fr/?utm_source=nextlinkstudio&utm_medium=portfolio&utm_campaign=bouton_voir_le_site&utm_content=page_etude_de_cas" target="_blank" rel="noopener" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
          Voir le site
        </a>
      </div>
      <div class="vn-visual">
        <div class="vn-phone-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_devices_vert_nature.png" alt="Mockup multi-device Les jardins du chêne" class="vn-mockup">
        </div>
        <div class="vn-annot">
          <span class="vn-annot-check">
            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </span>
          Site responsive 100% optimisé
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SPECS BAR -->
<div class="vn-specs-bar">
  <div class="container">
    <div class="vn-specs-bar-inner">
      <div class="vn-spec">
        <div class="vn-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <div>
          <div class="vn-spec-label">Pages créées</div>
          <div class="vn-spec-value">5 pages clés</div>
        </div>
      </div>
      <div class="vn-spec">
        <div class="vn-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
        <div>
          <div class="vn-spec-label">Technos utilisées</div>
          <div class="vn-spec-value">HTML, CSS, JavaScript</div>
        </div>
      </div>
      <div class="vn-spec">
        <div class="vn-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        </div>
        <div>
          <div class="vn-spec-label">SEO</div>
          <div class="vn-spec-value">Référencement local optimisé</div>
        </div>
      </div>
      <div class="vn-spec">
        <div class="vn-spec-icon">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
        </div>
        <div>
          <div class="vn-spec-label">Responsive</div>
          <div class="vn-spec-value">Mobile, tablette, desktop</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- PROBLÈME / SOLUTION -->
<section class="vn-probsol">
  <div class="container">
    <div class="vn-probsol-grid">

      <!-- LE PROBLÈME -->
      <div class="vn-ps-card vn-ps-card--prob">
        <span class="vn-ps-label">Le Problème</span>
        <h2 class="vn-ps-title">Un paysagiste passionné,<br>invisible sur internet</h2>
        <ul class="vn-ps-list">
          <li>
            <span class="vn-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Aucune visibilité locale sur Google
          </li>
          <li>
            <span class="vn-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Pas d'identité visuelle professionnelle
          </li>
          <li>
            <span class="vn-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Prise de contact uniquement par bouche-à-oreille
          </li>
          <li>
            <span class="vn-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
            Aucun moyen de présenter ses réalisations
          </li>
        </ul>
      </div>

      <!-- NOTRE SOLUTION -->
      <div class="vn-ps-card vn-ps-card--sol">
        <span class="vn-ps-label">Notre Solution</span>
        <h2 class="vn-ps-title">Un site chaleureux qui<br>inspire confiance</h2>
        <ul class="vn-ps-list">
          <li>
            <span class="vn-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Design naturel aux couleurs de la marque
          </li>
          <li>
            <span class="vn-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Galerie de réalisations mise en valeur
          </li>
          <li>
            <span class="vn-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Optimisation SEO locale
          </li>
          <li>
            <span class="vn-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
            Formulaire de devis simplifié
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- OFFRE CHOISIE -->
<section class="vn-offre">
  <div class="container">
    <div class="vn-offre-header">
      <div class="vn-offre-badge">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        Offre choisie
      </div>
      <h2 class="vn-offre-title">L'offre <span class="vn-offre-title-accent">Présence,</span><br>cas concret</h2>
      <p class="vn-offre-intro">Pour lancer Les jardins du chêne, <strong>l'offre Présence</strong> a été choisie — l'essentiel pour établir une vitrine professionnelle et être trouvé sur Google, avec la réservation en ligne ajoutée en option.</p>
    </div>
    <div class="vn-offre-inner">

      <div class="vn-offre-box vn-offre-box--features">
        <div class="vn-offre-card-head">
          <div class="vn-offre-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1"/><line x1="9" y1="12" x2="15" y2="12"/><line x1="9" y1="16" x2="13" y2="16"/></svg>
          </div>
          <div>
            <div class="vn-offre-card-label">Ce qui est inclus</div>
            <div class="vn-offre-card-title">DANS L'OFFRE</div>
          </div>
        </div>
        <div class="vn-offre-card-divider"></div>
        <ul class="vn-offre-list">
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Design sur mesure mobile-first</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Formulaire de contact intégré</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>SEO de base (titres, balises, Google Search Console)</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Mentions légales + conformité RGPD</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Nom de domaine + hébergement 1 an offerts</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Formation prise en main incluse</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>1 mois de support inclus</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Révisions jusqu'à votre satisfaction</li>
        </ul>
        <div class="vn-offre-option">
          <span class="vn-offre-option-badge">Option +90 €</span>
          <span style="color:rgba(255,255,255,0.65);font-size:13px;">Réservation de créneaux en ligne</span>
        </div>
      </div>

      <div class="vn-offre-box vn-offre-box--delivered">
        <div class="vn-offre-card-head">
          <div class="vn-offre-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
          </div>
          <div>
            <div class="vn-offre-card-label">Ce qui a été réalisé</div>
            <div class="vn-offre-card-title">POUR LES JARDINS DU CHÊNE</div>
          </div>
        </div>
        <div class="vn-offre-card-divider"></div>
        <ul class="vn-offre-list">
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Design naturel aux couleurs de la marque</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>5 pages créées, chacune pensée pour convertir</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>SEO on-page : titres, balises, méta descriptions</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Google Search Console configurée et soumise</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Réservation de créneaux en ligne intégrée</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Nom de domaine lesjardinsduchene.fr + hébergement</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Adresses mail professionnelles configurées</li>
          <li><span class="vn-offre-check"><svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>Session de formation + 1 mois de support</li>
        </ul>
      </div>

    </div>

    <!-- STATS BAR -->
    <div class="vn-offre-stats">
      <div class="vn-offre-stat">
        <div class="vn-offre-stat-icon" style="background:rgba(46,78,58,0.10);color:#2E4E3A;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
        <div>
          <div class="vn-offre-stat-title">Livraison rapide</div>
          <div class="vn-offre-stat-sub">Délai maîtrisé</div>
        </div>
      </div>
      <div class="vn-offre-stat">
        <div class="vn-offre-stat-icon" style="background:rgba(46,78,58,0.10);color:#2E4E3A;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <div>
          <div class="vn-offre-stat-title">Zéro surprise</div>
          <div class="vn-offre-stat-sub">Tout est inclus</div>
        </div>
      </div>
      <div class="vn-offre-stat">
        <div class="vn-offre-stat-icon" style="background:rgba(46,78,58,0.10);color:#2E4E3A;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.39 2 2 0 0 1 3.6 1.21h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.91a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16.92z"/></svg>
        </div>
        <div>
          <div class="vn-offre-stat-title">Accompagnement</div>
          <div class="vn-offre-stat-sub">1 mois de support</div>
        </div>
      </div>
      <div class="vn-offre-stat">
        <div class="vn-offre-stat-icon" style="background:rgba(46,78,58,0.10);color:#2E4E3A;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        </div>
        <div>
          <div class="vn-offre-stat-title">Autonomie</div>
          <div class="vn-offre-stat-sub">Formation incluse</div>
        </div>
      </div>
      <div class="vn-offre-stat">
        <div class="vn-offre-stat-icon" style="background:rgba(46,78,58,0.10);color:#2E4E3A;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        </div>
        <div>
          <div class="vn-offre-stat-title">Visibilité Google</div>
          <div class="vn-offre-stat-sub">SEO de base inclus</div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- APERÇU DU SITE -->
<section class="vn-apercu">
  <div class="vn-apercu-header">
    <h2 class="vn-apercu-title">www.lesjardinsduchene.fr</h2>
  </div>
  <div class="vn-apercu-browser">
    <div class="vn-apercu-bar">
      <div class="vn-apercu-dots"><span></span><span></span><span></span></div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/les_jardins_du_chene_full_page.webp" alt="Aperçu du site Les jardins du chêne">
  </div>
</section>

<!-- GALERIE DES PAGES -->
<section class="vn-pages">
  <div class="container">
    <div class="vn-pages-header">
      <div class="vn-section-label">Le site en détail</div>
      <h2 class="vn-section-title">Chaque page pensée pour convertir</h2>
    </div>
    <div class="vn-pages-grid">
      <div class="vn-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/les_jardins_du_chene_full_page.webp" alt="Accueil Les jardins du chêne" class="vn-page-card-img">
        <div class="vn-page-card-body">
          <div class="vn-page-card-name">Accueil</div>
          <div class="vn-page-card-desc">Accroche forte, services mis en avant et appel à l'action clair.</div>
        </div>
      </div>
      <div class="vn-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_realisation.png" alt="Galerie Les jardins du chêne" class="vn-page-card-img">
        <div class="vn-page-card-body">
          <div class="vn-page-card-name">Galerie de réalisations</div>
          <div class="vn-page-card-desc">Photos haute qualité des chantiers réalisés pour convaincre avant le premier contact.</div>
        </div>
      </div>
      <div class="vn-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_2.png" alt="Services Les jardins du chêne" class="vn-page-card-img">
        <div class="vn-page-card-body">
          <div class="vn-page-card-name">Services</div>
          <div class="vn-page-card-desc">Présentation claire des prestations proposées avec tarifs et zones d'intervention.</div>
        </div>
      </div>
      <div class="vn-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_resa.png" alt="Réservation Les jardins du chêne" class="vn-page-card-img">
        <div class="vn-page-card-body">
          <div class="vn-page-card-name">Réservation de créneaux en ligne</div>
          <div class="vn-page-card-desc">Formulaire intelligent qui qualifie chaque demande avec localisation et type de prestation.</div>
        </div>
      </div>
      <div class="vn-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_1.png" alt="SEO Les jardins du chêne" class="vn-page-card-img">
        <div class="vn-page-card-body">
          <div class="vn-page-card-name">À propos</div>
          <div class="vn-page-card-desc">Présentation du paysagiste, de son parcours et de ses valeurs pour instaurer la confiance.</div>
        </div>
      </div>
      <div class="vn-page-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vert_nature_capture_4.png" alt="Contact Les jardins du chêne" class="vn-page-card-img">
        <div class="vn-page-card-body">
          <div class="vn-page-card-name">Contact</div>
          <div class="vn-page-card-desc">Page de contact épurée pour faciliter la prise de rendez-vous.</div>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:40px;">
      <a href="https://www.lesjardinsduchene.fr/?utm_source=nextlinkstudio&utm_medium=portfolio&utm_campaign=bouton_voir_le_site&utm_content=page_etude_de_cas" target="_blank" rel="noopener" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
        Voir le site web
      </a>
    </div>
  </div>
</section>

<!-- LIVRAISON & SUIVI -->
<section class="vn-livraison">
  <div class="container">
    <div class="vn-livraison-header">
      <div class="vn-section-label">Livraison &amp; suivi</div>
      <h2 class="vn-section-title">Un site livré clé en main</h2>
    </div>
    <div class="vn-livraison-grid">
      <div class="vn-liv-card">
        <div class="vn-liv-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
        <div class="vn-liv-title">Déployé sur WordPress</div>
        <div class="vn-liv-desc">Le site est déployé sur <strong>WordPress</strong> — une plateforme <strong>stable et évolutive</strong>, maîtrisée par des millions d'utilisateurs.</div>
      </div>
      <div class="vn-liv-card">
        <div class="vn-liv-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
        <div class="vn-liv-title">Sécurité intégrée</div>
        <div class="vn-liv-desc">Des plugins de sécurité sont configurés pour <strong>protéger le site</strong> contre les <strong>menaces, intrusions et spams</strong>.</div>
      </div>
      <div class="vn-liv-card">
        <div class="vn-liv-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
        </div>
        <div class="vn-liv-title">Statistiques de trafic</div>
        <div class="vn-liv-desc"><strong>Google Site Kit</strong> est installé — <strong>visites, sources de trafic et comportements</strong> accessibles directement depuis WordPress.</div>
      </div>
      <div class="vn-liv-card">
        <div class="vn-liv-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        </div>
        <div class="vn-liv-title">Autonomie totale</div>
        <div class="vn-liv-desc">Le client reçoit ses accès et peut <strong>modifier textes et images</strong> en toute autonomie, <strong>sans compétences techniques</strong>.</div>
      </div>
      <div class="vn-liv-card">
        <div class="vn-liv-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        </div>
        <div class="vn-liv-title">Adresses mail pro</div>
        <div class="vn-liv-desc">Des adresses <strong>liées au nom de domaine</strong> sont créées — <strong>contact@lesjardinsduchene.fr</strong>, <strong>devis@lesjardinsduchene.fr</strong> — pour une <strong>image professionnelle</strong>.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="vn-cta">
  <div class="container">
    <h2 class="vn-cta-title">Un projet similaire ? Parlons-en.</h2>
    <p class="vn-cta-sub">Vous souhaitez développer votre activité avec un site vitrine professionnel ? Discutons de vos objectifs et créons ensemble un site qui convertit.</p>
    <div class="vn-cta-actions">
      <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-lg">Démarrer mon projet →</a>
      <a href="<?php echo nls_page_url('realisations'); ?>" class="btn btn-ghost btn-lg" style="color:#fff;border-color:rgba(255,255,255,0.25);">Voir tous les projets</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
