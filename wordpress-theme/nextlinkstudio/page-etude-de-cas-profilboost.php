<?php
/**
 * Template Name: Étude de cas — ProfilBoost
 */
get_header();
?>
<style>
/* ── ProfilBoost identité visuelle — couleurs officielles ───────────
   #4CBDFA bleu clair · #058ED9 bleu principal · #394E7F marine · #0E131F noir */

/* Hero background — fond blanc avec dégradé bleu subtil */
.page-hero-bg {
  background:
    linear-gradient(180deg, rgba(5,142,217,0.22) 0%, rgba(5,142,217,0.08) 50%, transparent 90%),
    radial-gradient(ellipse 80% 90% at 50% 0%, rgba(5,142,217,0.30) 0%, transparent 65%),
    radial-gradient(ellipse 40% 50% at 8% 0%, rgba(57,78,127,0.18) 0%, transparent 60%);
}
.ep-hero { background: #fff; }

/* Gradient text → blue */
.gradient-text {
  background: linear-gradient(125deg, #058ED9 0%, #4CBDFA 50%, #058ED9 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* Badge amber → blue */
.case-badge--wood {
  background: rgba(5,142,217,0.10);
  color: #058ED9;
  border-color: rgba(5,142,217,0.28);
}

/* Labels de section → blue */
.case-label { color: #058ED9; }

/* Hero badges icônes → blue */
.ep-hero-badge svg { color: #058ED9; }

/* Icône solution → blue */
.ep-sol-icon {
  background: rgba(5,142,217,0.12);
  color: #058ED9;
}

/* HERO VISUAL + ANNOT */
.ep-hero-visual { flex-direction: column; }
.ep-annot { align-self: flex-end; margin-top: 10px; background: #fff; border: 1px solid rgba(14,19,31,0.09); border-radius: 10px; padding: 9px 14px; font-size: 12px; font-weight: 700; color: #0E131F; display: flex; align-items: center; gap: 8px; box-shadow: 0 4px 18px rgba(0,0,0,0.09); }
.ep-annot-check { width: 20px; height: 20px; border-radius: 50%; background: rgba(5,142,217,0.12); display: flex; align-items: center; justify-content: center; color: #058ED9; flex-shrink: 0; }

/* HERO BADGES */
.ep-hero-badges { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 28px; }
.ep-hero-badge { display: inline-flex; align-items: center; gap: 9px; background: #fff; border: 1px solid rgba(14,19,31,0.09); border-radius: 10px; padding: 9px 16px; font-size: 13px; font-weight: 600; color: #0E131F; box-shadow: 0 1px 6px rgba(14,19,31,0.05); }
.ep-hero-badge svg { color: #058ED9; flex-shrink: 0; }

/* BARRE DE SPECS */
.pb-specs-bar { background: #f4f7fb; border-top: 1px solid rgba(14,19,31,0.06); border-bottom: 1px solid rgba(14,19,31,0.06); }
.pb-specs-bar-inner { display: grid; grid-template-columns: repeat(4, 1fr); }
.pb-spec { display: flex; align-items: center; gap: 14px; padding: 22px 28px; border-right: 1px solid rgba(14,19,31,0.07); }
.pb-spec:last-child { border-right: none; }
.pb-spec-icon { width: 38px; height: 38px; min-width: 38px; border-radius: 10px; background: rgba(5,142,217,0.08); display: flex; align-items: center; justify-content: center; color: #058ED9; flex-shrink: 0; }
.pb-spec-label { font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.7px; color: rgba(14,19,31,0.40); margin-bottom: 3px; }
.pb-spec-value { font-size: 13px; font-weight: 600; color: #0E131F; line-height: 1.4; }
@media (max-width: 960px) {
  .pb-specs-bar-inner { grid-template-columns: 1fr; }
  .pb-spec { border-right: none; border-bottom: 1px solid rgba(14,19,31,0.07); }
  .pb-spec:last-child { border-bottom: none; }
}

/* PROBLÈME / SOLUTION */
.pb-probsol { padding: 72px 0; background: #f8fafc; }
.pb-probsol-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.pb-ps-card { border-radius: 20px; padding: 40px; }
.pb-ps-card--prob { background: #fff; border: 1px solid rgba(14,19,31,0.09); box-shadow: 0 2px 16px rgba(14,19,31,0.04); }
.pb-ps-card--sol { background: #0E131F; }
.pb-ps-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 14px; display: block; }
.pb-ps-card--prob .pb-ps-label { color: #e05252; }
.pb-ps-card--sol .pb-ps-label { color: #4CBDFA; }
.pb-ps-title { font-family: 'Plus Jakarta Sans', sans-serif; font-size: clamp(18px,2vw,23px); font-weight: 800; line-height: 1.25; margin-bottom: 28px; }
.pb-ps-card--prob .pb-ps-title { color: #0E131F; }
.pb-ps-card--sol .pb-ps-title { color: #fff; }
.pb-ps-list { list-style: none; padding: 0; display: flex; flex-direction: column; gap: 10px; }
.pb-ps-list li { display: flex; align-items: center; gap: 12px; font-size: 14px; font-weight: 500; line-height: 1.45; }
.pb-ps-card--prob .pb-ps-list li { color: rgba(14,19,31,0.68); }
.pb-ps-card--sol .pb-ps-list li { color: rgba(255,255,255,0.75); }
.pb-ps-icon { width: 26px; height: 26px; min-width: 26px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.pb-ps-card--prob .pb-ps-icon { background: rgba(224,82,82,0.10); color: #e05252; }
.pb-ps-card--sol .pb-ps-icon { background: rgba(76,189,250,0.14); color: #4CBDFA; }
@media (max-width: 960px) { .pb-probsol-grid { grid-template-columns: 1fr; } }
</style>

  <!-- HERO -->
  <section class="ep-hero">
    <div class="page-hero-bg"></div>
    <div class="container">
      <div class="ep-hero-inner">
        <div class="ep-hero-content">

          <div class="case-badge case-badge--wood">Étude de cas — Identité visuelle</div>
          <h1 class="ep-hero-title">L'identité visuelle<br>de <span class="gradient-text">ProfilBoost</span></h1>
          <p class="ep-hero-subtitle">Logo, charte graphique et déclinaisons complètes — une identité professionnelle et mémorable pour une entreprise de création de CV.</p>
          <div class="ep-hero-badges">
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
              Logo sur mesure
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
              Charte complète
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Livraison rapide
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
              Print &amp; digital
            </span>
          </div>
          <a href="<?php echo get_permalink( get_page_by_path('charte-graphique-profilboost') ); ?>" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;margin-top:24px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            Voir la charte graphique complète
          </a>
        </div>
        <div class="ep-hero-visual">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_charte_graphique_profilboost.webp" alt="Mockup charte graphique ProfilBoost" class="pb-hero-mockup-img">
          <div class="ep-annot">
            <span class="ep-annot-check">
              <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>
            Logo + charte graphique complète
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BARRE DE SPECS -->
  <div class="pb-specs-bar">
    <div class="container">
      <div class="pb-specs-bar-inner">

        <div class="pb-spec">
          <div class="pb-spec-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 12l2.5 2.5L16 9"/></svg>
          </div>
          <div>
            <div class="pb-spec-label">Logo sur mesure</div>
            <div class="pb-spec-value">3 variantes (clair, sombre, icône)</div>
          </div>
        </div>

        <div class="pb-spec">
          <div class="pb-spec-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </div>
          <div>
            <div class="pb-spec-label">Formats livrés</div>
            <div class="pb-spec-value">SVG, PNG &amp; PDF</div>
          </div>
        </div>

        <div class="pb-spec">
          <div class="pb-spec-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="21 8 21 21 3 21 3 8"/><rect x="1" y="3" width="22" height="5"/><line x1="10" y1="12" x2="14" y2="12"/></svg>
          </div>
          <div>
            <div class="pb-spec-label">Éléments livrés</div>
            <div class="pb-spec-value">Logo + palette + typographie</div>
          </div>
        </div>

        <div class="pb-spec">
          <div class="pb-spec-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <div>
            <div class="pb-spec-label">Supports</div>
            <div class="pb-spec-value">Print &amp; digital</div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- PROBLÈME / SOLUTION -->
  <section class="pb-probsol">
    <div class="container">
      <div class="pb-probsol-grid">

        <div class="pb-ps-card pb-ps-card--prob">
          <span class="pb-ps-label">Le Problème</span>
          <h2 class="pb-ps-title">Un service sérieux,<br>sans image de marque</h2>
          <ul class="pb-ps-list">
            <li>
              <span class="pb-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
              Aucun logo professionnel défini
            </li>
            <li>
              <span class="pb-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
              Couleurs et typographies incohérentes
            </li>
            <li>
              <span class="pb-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span>
              Image de marque peu rassurante pour les clients
            </li>
          </ul>
        </div>

        <div class="pb-ps-card pb-ps-card--sol">
          <span class="pb-ps-label">Notre Solution</span>
          <h2 class="pb-ps-title">Une identité forte,<br>cohérente et mémorable</h2>
          <ul class="pb-ps-list">
            <li>
              <span class="pb-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
              Logo moderne aux lignes épurées
            </li>
            <li>
              <span class="pb-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
              Palette de couleurs professionnelle et différenciante
            </li>
            <li>
              <span class="pb-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
              Typographies soigneusement sélectionnées
            </li>
            <li>
              <span class="pb-ps-icon"><svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
              Guide d'utilisation complet livré avec la charte
            </li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- LE LOGO -->
  <section class="iv-logo-section">
    <div class="container">
      <div class="iv-section-header iv-section-header--light">
        <div class="case-label" style="color:rgba(255,255,255,0.5);">Le Logo</div>
        <h2 class="case-title" style="color:#fff;">Un symbole distinctif,<br>décliné sur tous les fonds</h2>
      </div>
      <div class="iv-logo-variants">
        <div class="iv-logo-card iv-logo-card--light">
          <div class="iv-logo-card-label">Fond clair</div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_logo_clair.svg" alt="Logo ProfilBoost sur fond clair">
        </div>
        <div class="iv-logo-card iv-logo-card--dark">
          <div class="iv-logo-card-label">Fond sombre</div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_logo_sombre.svg" alt="Logo ProfilBoost sur fond sombre">
        </div>
        <div class="iv-logo-card iv-logo-card--color">
          <div class="iv-logo-card-label">Icône seule</div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_logo_icone.svg" alt="Icône ProfilBoost">
        </div>
      </div>
      <p class="iv-logo-note">Chaque variante est livrée en SVG et PNG haute résolution — prête pour le web, le print et les réseaux sociaux.</p>
    </div>
  </section>

  <!-- PALETTE DE COULEURS -->
  <section class="pb-palette iv-palette-section">
    <div class="container">
      <div class="iv-section-header">
        <div class="case-label">Les couleurs</div>
        <h2 class="case-title">Sobriété et élégance</h2>
        <p class="case-body iv-section-intro">Des couleurs qui reflètent modernité et confiance — parfaitement adaptées à une entreprise spécialisée dans les services de carrière et le développement personnel.</p>
      </div>
      <div class="pb-swatches iv-swatches">
        <div class="pb-swatch">
          <div class="pb-swatch-color" style="background:#4CBDFA"></div>
          <div class="pb-swatch-info">
            <span class="pb-swatch-name">Pantone 297 C</span>
            <span class="pb-swatch-hex">#4CBDFA</span>
            <span class="pb-swatch-role">Bleu clair</span>
          </div>
        </div>
        <div class="pb-swatch">
          <div class="pb-swatch-color" style="background:#058ED9"></div>
          <div class="pb-swatch-info">
            <span class="pb-swatch-name">Pantone 2995 C</span>
            <span class="pb-swatch-hex">#058ED9</span>
            <span class="pb-swatch-role">Bleu principal</span>
          </div>
        </div>
        <div class="pb-swatch">
          <div class="pb-swatch-color" style="background:#394E7F"></div>
          <div class="pb-swatch-info">
            <span class="pb-swatch-name">Pantone 7685 C</span>
            <span class="pb-swatch-hex">#394E7F</span>
            <span class="pb-swatch-role">Bleu marine</span>
          </div>
        </div>
        <div class="pb-swatch">
          <div class="pb-swatch-color" style="background:#0E131F"></div>
          <div class="pb-swatch-info">
            <span class="pb-swatch-name">Pantone 532 C</span>
            <span class="pb-swatch-hex">#0E131F</span>
            <span class="pb-swatch-role">Noir profond</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TYPOGRAPHIE -->
  <section class="iv-typo-section">
    <div class="container">
      <div class="iv-section-header">
        <div class="case-label">La typographie</div>
        <h2 class="case-title">Une typographie unifiée,<br>du titre au corps de texte</h2>
      </div>
      <div class="iv-typo-specimen">
        <div class="iv-typo-meta">
          <span class="iv-typo-name">Poppins</span>
          <span class="iv-typo-tag">Sans-serif</span>
        </div>
        <div class="iv-typo-alphabet">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</div>
        <div class="iv-typo-numbers">a b c d e f g h i j k l m n o p q r s t u v w x y z &nbsp;&nbsp; 0 1 2 3 4 5 6 7 8 9 &nbsp;&nbsp; ! ? @ &amp; % €</div>
        <div class="iv-typo-weights">
          <span style="font-weight:300">Light</span>
          <span style="font-weight:400">Regular</span>
          <span style="font-weight:500">Medium</span>
          <span style="font-weight:600">SemiBold</span>
          <span style="font-weight:700">Bold</span>
        </div>
        <div class="iv-typo-scale">
          <div class="iv-typo-scale-row">
            <span class="iv-typo-scale-label">Titre H1</span>
            <span class="iv-typo-scale-sample iv-typo-scale--h1">Boostez votre carrière</span>
          </div>
          <div class="iv-typo-scale-row">
            <span class="iv-typo-scale-label">Titre H2</span>
            <span class="iv-typo-scale-sample iv-typo-scale--h2">Un CV qui fait la différence</span>
          </div>
          <div class="iv-typo-scale-row">
            <span class="iv-typo-scale-label">Corps</span>
            <span class="iv-typo-scale-sample iv-typo-scale--body">Nous créons des CV professionnels, percutants et adaptés à votre secteur d'activité pour maximiser vos chances.</span>
          </div>
          <div class="iv-typo-scale-row">
            <span class="iv-typo-scale-label">Légende</span>
            <span class="iv-typo-scale-sample iv-typo-scale--small">Mise en page · Contenu · Relecture · Optimisation</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MOCKUPS EN SITUATION -->
  <section class="iv-mockups-section">
    <div class="container">
      <div class="iv-section-header">
        <div class="case-label">L'identité en situation</div>
        <h2 class="case-title">Une marque cohérente<br>sur chaque support</h2>
        <p class="case-body iv-section-intro">Du print au digital, l'identité ProfilBoost s'adapte à tous les contextes sans jamais perdre en cohérence ni en impact.</p>
      </div>
      <div class="iv-mockup-grid">
        <div class="iv-mockup-item iv-mockup-item--large">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_mockup_carte.jpg" alt="Carte de visite ProfilBoost">
          <span class="iv-mockup-label">Bureau</span>
        </div>
        <div class="iv-mockup-item iv-mockup-item--square">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_mockup_tampon.jpg" alt="Tampon ProfilBoost">
          <span class="iv-mockup-label">Carte de visite</span>
        </div>
        <div class="iv-mockup-item iv-mockup-item--square">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_mockup_social.jpg" alt="Profil réseaux sociaux ProfilBoost">
          <span class="iv-mockup-label">Papier à en-tête</span>
        </div>
        <div class="iv-mockup-item iv-mockup-item--large">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_mockup_lettre.jpg" alt="Papier à en-tête ProfilBoost">
          <span class="iv-mockup-label">Bureau mockup</span>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="page-cta">
    <div class="container">
      <div class="page-cta-inner">
        <h2>Vous avez besoin d'une identité visuelle ?</h2>
        <p>Créons ensemble une marque qui inspire confiance et vous distingue de la concurrence.</p>
        <div class="page-cta-actions">
          <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-lg">Démarrer mon projet →</a>
          <a href="<?php echo nls_page_url('identite-visuelle'); ?>" class="btn btn-ghost btn-lg">Voir le service →</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
