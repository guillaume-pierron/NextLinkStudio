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
          <h1 class="ep-hero-title">Comment j'ai créé<br>l'identité visuelle<br>de <span class="gradient-text">ProfilBoost</span></h1>
          <p class="ep-hero-subtitle">Logo, charte graphique et déclinaisons complètes — une identité professionnelle et mémorable pour une entreprise de création de CV.</p>

          <a href="<?php echo get_permalink( get_page_by_path('charte-graphique-profilboost') ); ?>" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;margin-bottom:24px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            Voir la charte graphique complète
          </a>
          <div class="ep-hero-badges">
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              Logo sur mesure
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              Charte graphique complète
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              Livré en 7 jours
            </span>
            <span class="ep-hero-badge">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              Print &amp; digital inclus
            </span>
          </div>
        </div>

        <div class="ep-hero-visual">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_charte_graphique_profilboost.png" alt="Mockup charte graphique ProfilBoost" class="pb-hero-mockup-img">
        </div>

      </div>
    </div>
  </section>

  <!-- LA CHARTE GRAPHIQUE -->
  <section class="pb-charte">
    <div class="container">
      <div class="pb-charte-inner">

        <div class="ep-projet-text">
          <div class="case-label">La Charte</div>
          <h2 class="case-title">Une marque à l'image<br>d'un service premium</h2>
          <p class="case-body">ProfilBoost accompagne les chercheurs d'emploi avec des CV professionnels et percutants. Pour inspirer confiance dès le premier regard, il leur fallait une identité visuelle qui reflète sérieux et ambition.</p>
          <ul class="ep-checks">
            <li><span class="ep-check-icon">✓</span>Créer un logo distinctif et mémorable</li>
            <li><span class="ep-check-icon">✓</span>Définir une charte graphique cohérente et complète</li>
            <li><span class="ep-check-icon">✓</span>Décliner l'identité sur tous les supports</li>
          </ul>
          <div class="ep-captures-grid">
            <div class="ep-capture"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_1.png" alt="Logo ProfilBoost"></div>
            <div class="ep-capture"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_2.png" alt="Palette de couleurs ProfilBoost"></div>
            <div class="ep-capture"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_3.png" alt="Typographie ProfilBoost"></div>
            <div class="ep-capture"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_capture_4.png" alt="Déclinaisons ProfilBoost"></div>
          </div>
          <p class="case-body" style="margin-top:24px">Chaque choix graphique — couleurs, typographie, forme du logo — a été pensé pour que ProfilBoost s'impose instantanément comme la référence de son secteur.</p>
          <a href="<?php echo get_permalink( get_page_by_path('charte-graphique-profilboost') ); ?>" class="btn btn-primary" style="margin-top:28px;display:inline-flex;align-items:center;gap:8px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
            Voir la charte graphique complète
          </a>
        </div>

        <!-- Image sans chrome navigateur, style éditorial -->
        <div class="pb-charte-visual">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_charte_overview.png" alt="Charte graphique ProfilBoost" class="pb-charte-img">
        </div>

      </div>
    </div>
  </section>

  <!-- PALETTE DE COULEURS -->
  <section class="pb-palette">
    <div class="container">
      <div class="pb-palette-header">
        <div class="case-label">Les couleurs</div>
        <h2 class="case-title">Sobriété<br>et élégance</h2>
        <p class="case-body pb-palette-intro">Les couleurs sélectionnées reflètent à la fois modernité et confiance, tout en ajoutant une touche d'élégance et de professionnalisme, ce qui correspond parfaitement à l'image d'une entreprise spécialisée dans les services de carrière et de développement personnel.</p>
      </div>
      <div class="pb-swatches">
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
          <div class="pb-swatch-color" style="background:#0E131F"></div>
          <div class="pb-swatch-info">
            <span class="pb-swatch-name">Pantone 532 C</span>
            <span class="pb-swatch-hex">#0E131F</span>
            <span class="pb-swatch-role">Noir profond</span>
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
      </div>
    </div>
  </section>

  <!-- LE DÉFI / NOTRE SOLUTION -->
  <section class="ep-defi-solution">
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

  <!-- LES LIVRABLES — cartes numérotées claires, différentes des dark cards ep-features -->
  <section class="pb-livrables">
    <div class="container">
      <div class="pb-livrables-header">
        <div class="case-label">Les livrables</div>
        <h2 class="case-title">Un kit identité complet,<br>clé en main</h2>
      </div>
      <div class="pb-livrables-grid">

        <div class="pb-livrable">
          <div class="pb-livrable-num">01</div>
          <div class="pb-livrable-content">
            <h4 class="pb-livrable-title">Logo &amp; variantes</h4>
            <p class="pb-livrable-desc">Fichiers SVG et PNG haute résolution, prêts pour tous les usages numériques et imprimés.</p>
            <ul class="pb-livrable-list">
              <li>Logo horizontal</li>
              <li>Logo vertical</li>
              <li>Icône seule (favicon)</li>
              <li>Versions fond clair &amp; fond sombre</li>
            </ul>
          </div>
        </div>

        <div class="pb-livrable">
          <div class="pb-livrable-num">02</div>
          <div class="pb-livrable-content">
            <h4 class="pb-livrable-title">Palette de couleurs</h4>
            <p class="pb-livrable-desc">Toutes les couleurs définies avec leurs codes hex, RGB et CMJN pour une cohérence parfaite.</p>
            <ul class="pb-livrable-list">
              <li>Couleurs primaires &amp; secondaires</li>
              <li>Couleur d'accent</li>
              <li>Teintes neutres &amp; fonds</li>
              <li>Codes hex, RGB, CMJN</li>
            </ul>
          </div>
        </div>

        <div class="pb-livrable">
          <div class="pb-livrable-num">03</div>
          <div class="pb-livrable-content">
            <h4 class="pb-livrable-title">Typographie</h4>
            <p class="pb-livrable-desc">Sélection de polices complémentaires avec hiérarchie et règles d'utilisation précises.</p>
            <ul class="pb-livrable-list">
              <li>Police pour les titres</li>
              <li>Police pour le corps de texte</li>
              <li>Hiérarchie typographique</li>
              <li>Tailles et graisses définies</li>
            </ul>
          </div>
        </div>

        <div class="pb-livrable">
          <div class="pb-livrable-num">04</div>
          <div class="pb-livrable-content">
            <h4 class="pb-livrable-title">Guide de marque</h4>
            <p class="pb-livrable-desc">Document complet listant toutes les règles d'utilisation et d'application de la charte.</p>
            <ul class="pb-livrable-list">
              <li>Règles d'utilisation du logo</li>
              <li>Interdits de la marque</li>
              <li>Exemples d'application</li>
              <li>Déclinaisons print &amp; digital</li>
            </ul>
          </div>
        </div>

      </div>
      <div style="text-align:center;margin-top:40px;">
        <a href="<?php echo get_permalink( get_page_by_path('charte-graphique-profilboost') ); ?>" class="btn btn-primary" style="display:inline-flex;align-items:center;gap:8px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          Voir la charte graphique complète
        </a>
      </div>
    </div>
  </section>

  <!-- RÉSULTATS -->
  <section class="ep-results">
    <div class="container">
      <div class="case-label">Les Résultats</div>
      <h2 class="case-title">Un livrable complet,<br>en une semaine</h2>
      <div class="ep-results-grid">
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--wood">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><circle cx="11" cy="11" r="2"/></svg>
          </div>
          <div class="ep-rc-value">Logo</div>
          <div class="ep-rc-label">+ charte graphique complète</div>
        </div>
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--blue">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
          </div>
          <div class="ep-rc-value">7 j.</div>
          <div class="ep-rc-label">délai de livraison respecté</div>
        </div>
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--yellow">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <div class="ep-rc-value">100%</div>
          <div class="ep-rc-label">de satisfaction client</div>
        </div>
        <div class="ep-result-card">
          <div class="ep-rc-icon ep-rc-icon--purple">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          </div>
          <div class="ep-rc-value">×2</div>
          <div class="ep-rc-label">de confiance perçue par les clients</div>
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
