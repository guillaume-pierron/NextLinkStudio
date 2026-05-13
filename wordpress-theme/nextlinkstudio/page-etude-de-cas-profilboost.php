<?php
/**
 * Template Name: Étude de cas — ProfilBoost
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
            <span>ProfilBoost</span>
          </div>
          <div class="case-badge case-badge--wood">🎨 Étude de cas — Identité visuelle</div>
          <h1 class="ep-hero-title">L'identité visuelle<br>de <span class="gradient-text">ProfilBoost</span></h1>
          <p class="ep-hero-subtitle">Logo, charte graphique et déclinaisons complètes — une identité professionnelle et mémorable pour une entreprise de création de CV.</p>
          <div class="ep-hero-badges">
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Logo sur mesure</span>
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Charte complète</span>
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Livré en 7 jours</span>
            <span class="ep-hero-badge"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>Print &amp; digital</span>
          </div>
          <a href="<?php echo get_permalink( get_page_by_path('charte-graphique-profilboost') ); ?>" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;margin-top:24px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            Voir la charte graphique complète
          </a>
        </div>
        <div class="ep-hero-visual">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_charte_graphique_profilboost.png" alt="Mockup charte graphique ProfilBoost" class="pb-hero-mockup-img">
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

  <!-- LE DÉFI / NOTRE SOLUTION -->
  <section class="ep-defi-solution ep-defi-solution--blue">
    <div class="container">
      <div class="ep-ds-inner">
        <div class="ep-ds-col">
          <div class="case-label">Le Défi</div>
          <h3 class="ep-ds-title">Un service sérieux,<br>sans image de marque</h3>
          <p class="case-body">ProfilBoost proposait un service de qualité mais communiquait sans identité visuelle définie — pas de logo fixé, couleurs incohérentes, aucune charte. Difficile d'inspirer confiance à des clients qui cherchent justement à se démarquer professionnellement.</p>
          <ul class="ep-warn-list">
            <li><span class="ep-warn-icon">⚠</span>Aucun logo professionnel défini</li>
            <li><span class="ep-warn-icon">⚠</span>Couleurs et typographies incohérentes</li>
            <li><span class="ep-warn-icon">⚠</span>Image de marque peu rassurante pour les clients</li>
          </ul>
        </div>
        <div class="ep-ds-arrow">
          <div class="ep-ds-arrow-circle">→</div>
        </div>
        <div class="ep-ds-col">
          <div class="case-label">Notre Solution</div>
          <h3 class="ep-ds-title">Une identité forte,<br>cohérente et mémorable</h3>
          <p class="case-body">J'ai conçu une identité visuelle complète qui reflète à la fois le professionnalisme de ProfilBoost et la dynamique de progression qu'ils incarnent pour leurs clients.</p>
          <ul class="ep-sol-list">
            <li><span class="ep-sol-icon">✓</span>Logo moderne aux lignes épurées</li>
            <li><span class="ep-sol-icon">✓</span>Palette de couleurs professionnelle et différenciante</li>
            <li><span class="ep-sol-icon">✓</span>Typographies soigneusement sélectionnées</li>
            <li><span class="ep-sol-icon">✓</span>Guide d'utilisation complet livré avec la charte</li>
          </ul>
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
