<?php
/**
 * Template Name: Page d'accueil
 * Homepage — NextLink Studio
 */
get_header();
?>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-parallax-bg" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/header_artisan.webp');"></div>
    <div class="hero-bg"></div>
    <div class="container hero-content">
      <div class="hero-badge">🔧 Spécialiste artisans & indépendants</div>
      <h1 class="hero-title">
        <span class="hero-title-line1">L'agence digitale</span><br />
        <span class="gradient-text hero-title-line2">des indépendants.</span>
      </h1>
      <p class="hero-subtitle">
        Site web, identité visuelle, réseaux sociaux et print — votre présence complète, livrée en 7 jours.
      </p>
      <div class="hero-actions">
        <a href="<?php echo nls_page_url( 'devis' ); ?>" class="btn btn-primary btn-lg">Obtenir mon devis gratuit</a>
        <a href="<?php echo nls_page_url( 'realisations' ); ?>" class="btn btn-ghost btn-lg">Voir mes réalisations →</a>
      </div>
      <p class="hero-price-hint">À partir de <strong>490 €</strong> · <a href="<?php echo nls_page_url( 'tarifs' ); ?>">Voir les tarifs →</a></p>
      <div class="hero-services">
        <a href="<?php echo nls_page_url( 'site-web' ); ?>" class="hero-service-tag">
          <span class="hst-icon">🌐</span>
          <span class="hst-content"><span class="hst-title">Site web</span></span>
        </a>
        <a href="<?php echo nls_page_url( 'identite-visuelle' ); ?>" class="hero-service-tag">
          <span class="hst-icon">🎨</span>
          <span class="hst-content"><span class="hst-title">Identité</span></span>
        </a>
        <a href="<?php echo nls_page_url( 'posts-linkedin' ); ?>" class="hero-service-tag">
          <span class="hst-icon">💬</span>
          <span class="hst-content"><span class="hst-title">Réseaux</span></span>
        </a>
        <a href="<?php echo nls_page_url( 'creation-print' ); ?>" class="hero-service-tag">
          <span class="hst-icon">🖨️</span>
          <span class="hst-content"><span class="hst-title">Print</span></span>
        </a>
      </div>
    </div>
  </section>

  <!-- PROBLÈME -->
  <section class="pain">
    <div class="pain-parallax-bg"></div>
    <div class="container">
      <div class="pain-header">
        <div class="section-badge">⭐ La première impression compte</div>
        <h2>Vos clients vous jugent<br /><span class="gradient-text">avant de vous appeler.</span></h2>
        <p>Un site bancal, un logo amateur — et le client appelle votre concurrent.<br />Pas parce qu'il est meilleur, mais parce qu'il inspire plus confiance.</p>
      </div>
      <div class="pain-cards">
        <div class="pain-card bad">
          <div class="pain-card-header">
            <div class="pain-card-icon">😤</div>
            <div class="pain-card-header-text">
              <span class="pain-card-label">Sans image professionnelle</span>
              <span class="pain-card-subtitle">Ce que vos clients ressentent</span>
            </div>
          </div>
          <div class="pain-card-items">
            <div class="pain-item">
              <span class="pi-icon bad">✕</span>
              <div class="pain-item-text"><strong>Invisible sur Google</strong><span>Vos concurrents prennent toute la visibilité.</span></div>
            </div>
            <div class="pain-item">
              <span class="pi-icon bad">✕</span>
              <div class="pain-item-text"><strong>Logo inexistant ou amateur</strong><span>Manque de crédibilité instantanée.</span></div>
            </div>
            <div class="pain-item">
              <span class="pi-icon bad">✕</span>
              <div class="pain-item-text"><strong>Aucun support pour convaincre</strong><span>Difficile de rassurer et de convertir.</span></div>
            </div>
            <div class="pain-item">
              <span class="pi-icon bad">✕</span>
              <div class="pain-item-text"><strong>Clients perdus avant le premier contact</strong><span>Ils vont chez quelqu'un d'autre, sans même vous connaître.</span></div>
            </div>
          </div>
        </div>
        <div class="pain-vs">VS</div>
        <div class="pain-card good">
          <div class="pain-card-header">
            <div class="pain-card-icon">🚀</div>
            <div class="pain-card-header-text">
              <span class="pain-card-label">Avec NextLink Studio</span>
              <span class="pain-card-subtitle">Ce que vos clients perçoivent</span>
            </div>
            <span class="pain-confidence-badge">🛡 Confiance & Croissance</span>
          </div>
          <div class="pain-card-items">
            <div class="pain-item">
              <span class="pi-icon good">✓</span>
              <div class="pain-item-text"><strong>Trouvé sur Google, reconnu partout</strong><span>Vous êtes visible quand on a besoin de vous.</span></div>
            </div>
            <div class="pain-item">
              <span class="pi-icon good">✓</span>
              <div class="pain-item-text"><strong>Identité visuelle qui inspire confiance</strong><span>Un logo et une image à la hauteur de votre professionnalisme.</span></div>
            </div>
            <div class="pain-item">
              <span class="pi-icon good">✓</span>
              <div class="pain-item-text"><strong>Clients convaincus avant le premier contact</strong><span>Votre site répond aux questions et rassure.</span></div>
            </div>
            <div class="pain-item">
              <span class="pi-icon good">✓</span>
              <div class="pain-item-text"><strong>Présence cohérente sur tous les supports</strong><span>Une image forte, du digital à l'imprimé.</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="pain-result">
        <div class="pain-result-left">
          <div class="pain-result-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
          <div class="pain-result-body">
            <strong>Résultat : plus de confiance, plus de clients.</strong>
            <p>Une image professionnelle n'est pas une dépense, c'est un investissement qui vous positionne comme le choix évident.</p>
          </div>
        </div>
        <div class="pain-result-right">
          <a href="<?php echo nls_page_url( 'devis' ); ?>" class="btn btn-primary">→ Réserver un appel gratuit</a>
          <span class="pain-result-audit">✅ Audit offert de votre image actuelle</span>
        </div>
      </div>
    </div>
  </section>

  <!-- TICKER -->
  <div class="mid-ticker">
    <div class="mid-ticker-track">
      <span>🌐 Site web professionnel</span><span class="mid-ticker-sep">·</span>
      <span>🎨 Identité visuelle sur mesure</span><span class="mid-ticker-sep">·</span>
      <span>📱 Réseaux sociaux gérés pour vous</span><span class="mid-ticker-sep">·</span>
      <span>🖨️ Flyers, cartes de visite, kakémonos</span><span class="mid-ticker-sep">·</span>
      <span>⚡ Livré en 7 jours</span><span class="mid-ticker-sep">·</span>
      <span>📍 SEO local optimisé</span><span class="mid-ticker-sep">·</span>
      <span>✓ Sans engagement</span><span class="mid-ticker-sep">·</span>
      <span>🌐 Site web professionnel</span><span class="mid-ticker-sep">·</span>
      <span>🎨 Identité visuelle sur mesure</span><span class="mid-ticker-sep">·</span>
      <span>📱 Réseaux sociaux gérés pour vous</span><span class="mid-ticker-sep">·</span>
      <span>🖨️ Flyers, cartes de visite, kakémonos</span><span class="mid-ticker-sep">·</span>
      <span>⚡ Livré en 7 jours</span><span class="mid-ticker-sep">·</span>
      <span>📍 SEO local optimisé</span><span class="mid-ticker-sep">·</span>
      <span>✓ Sans engagement</span><span class="mid-ticker-sep">·</span>
    </div>
  </div>

  <!-- SERVICES EN DÉTAIL -->
  <section id="services" class="service-spotlights">

    <!-- Création de site web -->
    <div class="spotlight-block">
      <div class="container">
        <div class="spotlight-row">
          <div class="spotlight-text">
            <span class="spotlight-num">01</span>
            <div class="section-badge">🌐 Création de site web</div>
            <h3>Un site qui vous apporte<br />des clients.<br /><span class="gradient-text spotlight-title-sub">24h/24. 7j/7.</span></h3>
            <p>Design sur mesure, mobile-first, SEO local optimisé. Un site vitrine qui inspire confiance, capte les demandes de devis et développe votre activité 24h/24.</p>
            <div class="spotlight-features">
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                <div class="spotlight-feature-text"><strong>SEO local</strong><span>Visible sur Google dans votre ville</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg></div>
                <div class="spotlight-feature-text"><strong>Devis en ligne</strong><span>Formulaire intelligent intégré</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <div class="spotlight-feature-text"><strong>Réservations</strong><span>Créneaux en ligne automatisés</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
                <div class="spotlight-feature-text"><strong>Rapide & efficace</strong><span>Développement sur mesure, 100% mobile-first</span></div>
              </div>
            </div>
            <div class="spotlight-cta-row">
              <a href="<?php echo nls_page_url( 'site-web' ); ?>" class="btn btn-primary btn-lg">Voir l'offre site web →</a>
            </div>
          </div>
          <div class="spotlight-visual">
            <div class="spotlight-visual-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/websites_images.png" alt="Exemples de sites web créés par NextLink Studio" class="spotlight-img" />
              <div class="spotlight-stats-bar">
                <div class="spotlight-stat">
                  <div class="spotlight-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
                  <div class="spotlight-stat-body"><strong>4,9/5</strong><div class="spotlight-stat-stars">★★★★★</div><span>Avis Google</span></div>
                </div>
                <div class="spotlight-stat-divider"></div>
                <div class="spotlight-stat">
                  <div class="spotlight-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                  <div class="spotlight-stat-body"><strong>Garantie satisfaction</strong><span>Accompagnement inclus</span></div>
                </div>
                <div class="spotlight-stat-divider"></div>
                <div class="spotlight-stat">
                  <div class="spotlight-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                  <div class="spotlight-stat-body"><strong>Livraison en 7 jours</strong><span>Délai respecté</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Identité visuelle -->
    <div class="spotlight-block spotlight-block--iv">
      <div class="container">
        <div class="spotlight-row spotlight-row--reverse">
          <div class="spotlight-text">
            <span class="spotlight-num">02</span>
            <div class="section-badge">🎨 Identité visuelle</div>
            <h3>Un logo qui marque<br /><span class="gradient-text spotlight-title-sub">et donne envie de vous appeler.</span></h3>
            <p>Vos clients jugent votre professionnalisme en quelques secondes. Je conçois une identité complète qui inspire confiance dès le premier regard — sur Google, sur vos cartes de visite, sur votre site.</p>
            <div class="spotlight-features">
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div>
                <div class="spotlight-feature-text"><strong>3 propositions de logo</strong><span>Des concepts uniques, alignés avec votre métier et vos valeurs.</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg></div>
                <div class="spotlight-feature-text"><strong>Charte graphique complète</strong><span>Couleurs, typographies, déclinaisons cohérentes.</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></div>
                <div class="spotlight-feature-text"><strong>Tous les formats livrés</strong><span>SVG, PNG, PDF, AI… prêt pour le web et l'impression.</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
                <div class="spotlight-feature-text"><strong>Utilisable immédiatement</strong><span>Votre identité prête à renforcer votre crédibilité.</span></div>
              </div>
            </div>
          </div>
          <div class="spotlight-visual">
            <div class="spotlight-iv-visual-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_section.png" alt="Exemple d'identité visuelle — NextLink Studio" class="spotlight-img" />
              <div class="spotlight-iv-badge">
                <div class="spotlight-iv-badge-icon">✅</div>
                <div class="spotlight-iv-badge-text">
                  <strong>Clé en main</strong>
                  <span>logo, charte et<br />déclinaisons inclus</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spotlight-iv-bottom">
          <div class="spotlight-iv-bottom-stats">
            <div class="spotlight-iv-stat">
              <div class="spotlight-iv-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
              <div class="spotlight-iv-stat-body">
                <strong>100% sur mesure</strong>
                <span>Aucune base de logo préfabriquée.</span>
              </div>
            </div>
            <div class="spotlight-iv-stat">
              <div class="spotlight-iv-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
              <div class="spotlight-iv-stat-body">
                <strong>Livraison rapide</strong>
                <span>Premiers concepts en 3 à 5 jours. Livraison finale en 7 jours.</span>
              </div>
            </div>
            <div class="spotlight-iv-stat">
              <div class="spotlight-iv-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
              <div class="spotlight-iv-stat-body">
                <strong>Accompagnement inclus</strong>
                <span>Échanges illimités jusqu'à votre entière satisfaction.</span>
              </div>
            </div>
          </div>
          <div class="spotlight-iv-bottom-cta">
            <a href="<?php echo nls_page_url( 'identite-visuelle' ); ?>" class="btn btn-primary btn-lg">Voir l'offre identité visuelle →</a>
            <span class="spotlight-iv-devis">✓ Devis gratuit en moins de 24h</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Réseaux sociaux -->
    <div class="spotlight-block spotlight-block--rs">
      <div class="container">
        <div class="spotlight-row">
          <div class="spotlight-text">
            <span class="spotlight-num">03</span>
            <div class="section-badge">📱 Réseaux sociaux</div>
            <h3>Vos chantiers mis en valeur,<br /><span class="gradient-text spotlight-title-sub">vos clients convaincus</span></h3>
            <p>Je rédige et publie des contenus qui montrent votre savoir-faire — avant/après de chantiers, témoignages clients, astuces métier. Vos futurs clients voient du concret et vous contactent directement.</p>
            <div class="spotlight-features">
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <div class="spotlight-feature-text"><strong>Posts rédigés et planifiés chaque semaine</strong><span>Un contenu régulier et stratégique pour rester visible toute l'année.</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r="1.5"/><circle cx="17.5" cy="10.5" r="1.5"/><circle cx="8.5" cy="7.5" r="1.5"/><circle cx="6.5" cy="12.5" r="1.5"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg></div>
                <div class="spotlight-feature-text"><strong>Visuels aux couleurs de votre charte</strong><span>Des visuels professionnels qui renforcent votre image de marque.</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></div>
                <div class="spotlight-feature-text"><strong>LinkedIn et Instagram selon votre cible</strong><span>Les bons canaux pour toucher vos futurs clients.</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></div>
                <div class="spotlight-feature-text"><strong>Rapport mensuel de performance</strong><span>Suivi des résultats et recommandations pour progresser.</span></div>
              </div>
            </div>
          </div>
          <div class="spotlight-visual">
            <div class="spotlight-visual-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_insta.png" alt="Exemple de posts réseaux sociaux — NextLink Studio" class="spotlight-img" />
              <div class="spotlight-stats-bar">
                <div class="spotlight-stat">
                  <div class="spotlight-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                  <div class="spotlight-stat-body"><strong>4 à 8 posts / mois</strong><span>Contenu régulier et adapté</span></div>
                </div>
                <div class="spotlight-stat-divider"></div>
                <div class="spotlight-stat">
                  <div class="spotlight-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></div>
                  <div class="spotlight-stat-body"><strong>Visibilité locale</strong><span>Présence optimisée</span></div>
                </div>
                <div class="spotlight-stat-divider"></div>
                <div class="spotlight-stat">
                  <div class="spotlight-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg></div>
                  <div class="spotlight-stat-body"><strong>Rapport mensuel</strong><span>Résultats mesurables</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Création print -->
    <div class="spotlight-block spotlight-block--print">
      <div class="container">
        <div class="spotlight-row spotlight-row--reverse">
          <div class="spotlight-text">
            <span class="spotlight-num">04</span>
            <div class="section-badge">🖨️ Création print</div>
            <h3>Des supports qui marquent les esprits et restent entre<br /><span class="gradient-text spotlight-title-sub">les mains de vos clients.</span></h3>
            <p>Une carte de visite laissée sur place, un flyer dans les boîtes aux lettres du quartier, un kakémono sur votre chantier — le print prolonge votre visibilité là où internet ne suffit pas.</p>
            <div class="spotlight-features">
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg></div>
                <div class="spotlight-feature-text"><strong>Cartes de visite, flyers, kakémonos</strong><span>Tous les supports pour être présent partout.</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg></div>
                <div class="spotlight-feature-text"><strong>Cohérents avec votre identité visuelle</strong><span>Des designs professionnels, alignés à votre image.</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></div>
                <div class="spotlight-feature-text"><strong>Fichiers prêts à envoyer à l'imprimeur</strong><span>Formats HD, CMJN, avec fonds perdus.</span></div>
              </div>
              <div class="spotlight-feature">
                <div class="spotlight-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></div>
                <div class="spotlight-feature-text"><strong>Retouches illimitées avant validation</strong><span>Jusqu'à ce que le résultat vous convienne à 100%.</span></div>
              </div>
            </div>
          </div>
          <div class="spotlight-visual">
            <div class="spotlight-iv-visual-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/print_section.png" alt="Exemple de création print — NextLink Studio" class="spotlight-img" />
              <div class="spotlight-iv-badge">
                <div class="spotlight-iv-badge-icon">✨</div>
                <div class="spotlight-iv-badge-text">
                  <strong>Une image pro, partout.</strong>
                  <span>Un rappel constant de votre savoir-faire.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="spotlight-iv-bottom">
          <div class="spotlight-iv-bottom-stats">
            <div class="spotlight-iv-stat">
              <div class="spotlight-iv-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
              <div class="spotlight-iv-stat-body">
                <strong>Livraison rapide</strong>
                <span>Recevez vos supports partout en France.</span>
              </div>
            </div>
            <div class="spotlight-iv-stat">
              <div class="spotlight-iv-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
              <div class="spotlight-iv-stat-body">
                <strong>Impression premium</strong>
                <span>Papiers et finitions de haute qualité.</span>
              </div>
            </div>
            <div class="spotlight-iv-stat">
              <div class="spotlight-iv-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg></div>
              <div class="spotlight-iv-stat-body">
                <strong>Tarifs maîtrisés</strong>
                <span>Le meilleur rapport qualité / prix.</span>
              </div>
            </div>
          </div>
          <div class="spotlight-iv-bottom-cta">
            <a href="<?php echo nls_page_url( 'creation-print' ); ?>" class="btn btn-primary btn-lg">Voir l'offre print →</a>
            <span class="spotlight-iv-devis">✓ Devis gratuit en moins de 24h</span>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- COMMENT ÇA MARCHE -->
  <section class="how" id="comment">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">Simple & sans prise de tête</div>
        <h2>Comment ça se passe,<br /><span class="gradient-text">pour chaque service</span></h2>
      </div>
      <div class="steps">
        <div class="step">
          <div class="step-head"><div class="step-num">01</div><span class="step-timing">Jour 1 · 30 min</span></div>
          <div class="step-icon-badge">📞</div>
          <div class="step-content">
            <h3>On fait le point ensemble</h3>
            <p>Un appel visio de 30 minutes suffit. Je cerne votre activité, votre zone d'intervention et vos clients cibles. Vous recevez un devis clair dans la journée — sans jargon, sans surprise.</p>
            <ul class="step-details">
              <li>✓ Appel visio ou téléphonique</li>
              <li>✓ Devis personnalisé sous 24h</li>
              <li>✓ Aucun engagement à ce stade</li>
            </ul>
          </div>
        </div>
        <div class="step">
          <div class="step-head"><div class="step-num">02</div><span class="step-timing">Jours 2 à 5</span></div>
          <div class="step-icon-badge">✏️</div>
          <div class="step-content">
            <h3>Je crée, vous validez</h3>
            <p>Premiers visuels livrés en 48h. Vous donnez votre retour, j'ajuste — autant de fois que nécessaire, jusqu'à ce que le résultat vous convienne à 100%.</p>
            <ul class="step-details">
              <li>✓ Premiers visuels en 48h</li>
              <li>✓ Retouches illimitées incluses</li>
              <li>✓ Vous validez chaque étape</li>
            </ul>
          </div>
        </div>
        <div class="step">
          <div class="step-head"><div class="step-num">03</div><span class="step-timing">Jour 7 · Livraison ✦</span></div>
          <div class="step-icon-badge">🚀</div>
          <div class="step-content">
            <h3>Mise en ligne & remise des fichiers</h3>
            <p>Votre site est en ligne, votre logo livré en tous formats, vos supports prêts à l'emploi. Je reste disponible 30 jours après la livraison pour toute question ou ajustement.</p>
            <ul class="step-details">
              <li>✓ Site mis en ligne ou fichiers livrés</li>
              <li>✓ Formation à la prise en main</li>
              <li>✓ Support inclus 30 jours après livraison</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="how-cta">
        <a href="<?php echo nls_page_url( 'devis' ); ?>" class="btn btn-primary btn-lg">Commencer maintenant — c'est gratuit</a>
      </div>
    </div>
  </section>

  <!-- RÉSULTATS -->
  <section class="resultats">
    <div class="container">
      <div class="resultats-grid">
        <div class="resultat-item"><span class="resultat-num">+5</span><span class="resultat-label">artisans et indépendants accompagnés</span></div>
        <div class="resultat-item"><span class="resultat-num">1</span><span class="resultat-label">interlocuteur unique du brief à la livraison</span></div>
        <div class="resultat-item"><span class="resultat-num">4.9</span><span class="resultat-label">note de satisfaction sur 5 en moyenne</span></div>
        <div class="resultat-item"><span class="resultat-num">100%</span><span class="resultat-label">des projets livrés dans les délais annoncés</span></div>
      </div>
    </div>
  </section>

  <!-- RÉALISATIONS APERÇU -->
  <section class="realisations-preview">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">⭐ Ils me font confiance</div>
        <h2>Ils ont digitalisé leur activité<br />et <span class="gradient-text">gagnent du temps au quotidien.</span></h2>
        <p class="section-desc">Des projets concrets, livrés dans les délais, avec des résultats mesurables.</p>
      </div>
      <div class="portfolio-grid--triple">
        <a href="<?php echo nls_page_url('etude-de-cas-profilboost-reseaux'); ?>" class="pf-card">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_insta.png" alt="ProfilBoost — posts Instagram">
            <span class="pf-badge pf-badge--purple">Réseaux sociaux</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--purple"></div>
              <div><h4 class="pf-card-title">ProfilBoost</h4><p class="pf-card-desc">Réseaux sociaux</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">+200%</span><span class="pf-stat-label">d'abonnés</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">8 posts</span><span class="pf-stat-label">par mois</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">5/5</span><span class="pf-stat-label">satisfaction client</span></div></div>
            </div>
            <div class="pf-card-cta pf-card-cta--purple">Voir l'étude de cas →</div>
          </div>
        </a>
        <a href="<?php echo nls_page_url('etude-de-cas-profilboost'); ?>" class="pf-card">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/realisation_bois_2.png" alt="ProfilBoost — identité visuelle">
            <span class="pf-badge pf-badge--wood">Identité visuelle</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--wood"></div>
              <div><h4 class="pf-card-title">ProfilBoost</h4><p class="pf-card-desc">Création de CV</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">+60%</span><span class="pf-stat-label">de visibilité</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">7 j.</span><span class="pf-stat-label">délai de livraison</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">5/5</span><span class="pf-stat-label">satisfaction client</span></div></div>
            </div>
            <div class="pf-card-cta pf-card-cta--wood">Voir l'étude de cas →</div>
          </div>
        </a>
        <a href="<?php echo nls_page_url( 'etude-de-cas-vert-nature' ); ?>" class="pf-card">
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
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">+85%</span><span class="pf-stat-label">de trafic web</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 5.59 5.59l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">×3</span><span class="pf-stat-label">appels entrants</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">5/5</span><span class="pf-stat-label">satisfaction client</span></div></div>
            </div>
            <div class="pf-card-cta pf-card-cta--green">Voir l'étude de cas →</div>
          </div>
        </a>
      </div>
      <div class="rp-bottom-bar">
        <div class="rp-tagline"><span class="rp-rocket">🚀</span><span>Des résultats concrets, pas des promesses.</span></div>
      </div>
      <div class="text-center" style="margin-top:24px">
        <a href="<?php echo nls_page_url( 'realisations' ); ?>" class="btn btn-primary btn-lg rp-cta-full">Voir toutes mes réalisations →</a>
      </div>
    </div>
  </section>

  <!-- TÉMOIGNAGES -->
  <section class="testimonials-section">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">💬 Témoignages</div>
        <h2>Ce que disent<br /><span class="gradient-text">mes clients</span></h2>
        <p>Leur satisfaction est ma plus belle récompense.<br />Découvrez leurs retours d'expérience.</p>
      </div>
      <div class="tm-slider-wrap">
        <button class="tm-arrow tm-arrow--prev" onclick="tmNav(-1)" aria-label="Précédent">←</button>
        <div class="tm-grid">
          <div class="tm-card">
            <div class="tm-card-top"><span class="tm-quote">❝</span><span class="tm-verified">⭐ Avis vérifié</span></div>
            <div class="tm-stars">★★★★★</div>
            <p class="tm-text">En quelques semaines, j'avais déjà reçu 15 demandes de devis via mon site. Avant, j'étais invisible sur internet. Franchement, je ne pensais pas que ça me ferait autant grandir. Je ne peux que recommander !</p>
            <div class="tm-author">
              <div class="tm-avatar">CM</div>
              <div class="tm-author-info"><strong>Christophe M.</strong><span>Plombier — Lyon</span></div>
              <span class="tm-check">✓ Vérifié</span>
            </div>
          </div>
          <div class="tm-card tm-featured">
            <div class="tm-card-top"><span class="tm-quote">❝</span><span class="tm-verified">⭐ Avis vérifié</span></div>
            <div class="tm-stars">★★★★★</div>
            <p class="tm-text">Mon logo est exactement ce que je voulais. Moderne, professionnel, et surtout : ça me ressemble. Guillaume a su capter mon univers dès le premier échange. Résultat : mes clients me complimentent sur mon image !</p>
            <div class="tm-author">
              <div class="tm-avatar">SB</div>
              <div class="tm-author-info"><strong>Sophie B.</strong><span>Sophrologue — Bordeaux</span></div>
              <span class="tm-check">✓ Vérifié</span>
            </div>
          </div>
          <div class="tm-card">
            <div class="tm-card-top"><span class="tm-quote">❝</span><span class="tm-verified">⭐ Avis vérifié</span></div>
            <div class="tm-stars">★★★★★</div>
            <p class="tm-text">Rapide, pro, et à l'écoute. Mon site a été livré en 6 jours, exactement comme promis. J'aurais mis des mois à faire ça seul. Aujourd'hui, j'ai un vrai outil de travail qui me ramène des chantiers.</p>
            <div class="tm-author">
              <div class="tm-avatar">TL</div>
              <div class="tm-author-info"><strong>Thomas L.</strong><span>Électricien — Nantes</span></div>
              <span class="tm-check">✓ Vérifié</span>
            </div>
          </div>
        </div>
        <button class="tm-arrow tm-arrow--next" onclick="tmNav(1)" aria-label="Suivant">→</button>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section" id="faq">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">❓ FAQ</div>
        <h2>Questions <span class="gradient-text">fréquentes</span> ✨</h2>
        <p>Toutes les réponses aux <strong>questions</strong> que vous vous posez<br />avant de démarrer votre projet.</p>
      </div>
      <div class="faq-layout">
        <!-- Carte contact -->
        <div class="faq-contact-card">
          <div class="faq-contact-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
          <h4>Vous ne trouvez pas votre <span class="gradient-text">réponse</span> ?</h4>
          <p>Je suis là pour vous aider. Contactez-moi, je vous réponds sous 24h ouvrées.</p>
          <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary faq-contact-btn">✈ Me contacter</a>
          <div class="faq-contact-items">
            <div class="faq-contact-item">
              <span class="faq-contact-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></span>
              <div>
                <strong>Réponse sous 24h</strong>
                <span>du lundi au vendredi</span>
              </div>
            </div>
            <div class="faq-contact-item">
              <span class="faq-contact-item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
              <div>
                <strong>Accompagnement personnalisé</strong>
                <span>avant, pendant et après</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Accordion -->
        <div class="faq-list">
          <div class="faq-item">
            <button class="faq-question open" onclick="toggleFaq(this)">
              <span class="faq-toggle-circle"></span>
              <span class="faq-question-text">Est-ce que je serai propriétaire de mon site et de mon logo ?</span>
              <span class="faq-reponse-tag">Réponse</span>
              <span class="faq-chevron">⌄</span>
            </button>
            <div class="faq-answer open">
              <p>Oui, 100 %. Une fois le projet livré et le paiement finalisé, vous êtes <strong>entièrement propriétaire</strong> de votre site web et de votre logo. Vous avez accès à tous les fichiers source et pouvez les modifier librement.</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              <span class="faq-toggle-circle"></span>
              <span class="faq-question-text">Combien ça coûte ? Y a-t-il des frais cachés ?</span>
              <span class="faq-reponse-tag">Réponse</span>
              <span class="faq-chevron">⌄</span>
            </button>
            <div class="faq-answer">
              <p>Les tarifs démarrent à <strong>490 € pour un site vitrine</strong> et à <strong>290 € pour une identité visuelle</strong>. Tout est inclus. Les seuls frais récurrents sont l'hébergement et le nom de domaine (environ 10-15 €/mois), que vous gérez librement. <a href="<?php echo nls_page_url('tarifs'); ?>">Voir tous les tarifs →</a></p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              <span class="faq-toggle-circle"></span>
              <span class="faq-question-text">Combien de temps ça prend, du premier contact à la livraison ?</span>
              <span class="faq-reponse-tag">Réponse</span>
              <span class="faq-chevron">⌄</span>
            </button>
            <div class="faq-answer">
              <p>En général <strong>7 jours ouvrés</strong> de bout en bout : appel le jour 1, premiers visuels sous 48h, retouches sur 2-3 jours, livraison finale à J+7. Si votre projet est plus complexe, je vous en informe dès le devis.</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              <span class="faq-toggle-circle"></span>
              <span class="faq-question-text">Et si je veux modifier mon site ou mon logo après livraison ?</span>
              <span class="faq-reponse-tag">Réponse</span>
              <span class="faq-chevron">⌄</span>
            </button>
            <div class="faq-answer">
              <p>Je reste disponible <strong>30 jours après livraison</strong> pour tout ajustement sans supplément. Au-delà, les modifications simples sont facturées à partir de 49 €. Je vous forme aussi à la prise en main lors de la livraison.</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              <span class="faq-toggle-circle"></span>
              <span class="faq-question-text">Combien de propositions de logo vais-je recevoir ?</span>
              <span class="faq-reponse-tag">Réponse</span>
              <span class="faq-chevron">⌄</span>
            </button>
            <div class="faq-answer">
              <p>Je vous soumets <strong>3 propositions créatives distinctes</strong>. Vous choisissez la direction, puis j'affine jusqu'à validation complète. Les retouches sont illimitées et incluses dans le tarif.</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              <span class="faq-toggle-circle"></span>
              <span class="faq-question-text">À quelle fréquence publiez-vous sur mes réseaux ?</span>
              <span class="faq-reponse-tag">Réponse</span>
              <span class="faq-chevron">⌄</span>
            </button>
            <div class="faq-answer">
              <p>Entre <strong>4 et 8 posts par mois</strong> selon la formule. Chaque contenu est rédigé, mis en page et planifié à l'avance. Vous validez avant publication ou me déléguez totalement.</p>
            </div>
          </div>
          <div class="faq-item">
            <button class="faq-question" onclick="toggleFaq(this)">
              <span class="faq-toggle-circle"></span>
              <span class="faq-question-text">Quels fichiers me livrez-vous pour mes supports print ?</span>
              <span class="faq-reponse-tag">Réponse</span>
              <span class="faq-chevron">⌄</span>
            </button>
            <div class="faq-answer">
              <p>Un <strong>dossier complet prêt à imprimer</strong> : PDF HD avec fonds perdus, fichiers sources modifiables (Illustrator ou Canva) et tous les formats adaptés à chaque support. Envoi direct à l'imprimeur sans passer par moi.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Stats bar -->
      <div class="faq-stats">
        <div class="faq-stat">
          <span class="faq-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>
          <div class="faq-stat-body">
            <span class="faq-stat-value">+120</span>
            <span class="faq-stat-label">indépendants accompagnés</span>
          </div>
        </div>
        <div class="faq-stat">
          <span class="faq-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></span>
          <div class="faq-stat-body">
            <span class="faq-stat-value">4,9/5</span>
            <span class="faq-stat-label">note moyenne sur 50+ avis</span>
          </div>
        </div>
        <div class="faq-stat">
          <span class="faq-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
          <div class="faq-stat-body">
            <span class="faq-stat-value">98%</span>
            <span class="faq-stat-label">de clients satisfaits</span>
          </div>
        </div>
        <div class="faq-stat">
          <span class="faq-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></span>
          <div class="faq-stat-body">
            <span class="faq-stat-value">7 jours</span>
            <span class="faq-stat-label">délai moyen de livraison</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- LEAD MAGNET -->
  <section class="lead-magnet">
    <div class="container">
      <div class="lead-magnet-inner">
        <div class="lead-magnet-text">
          <p class="lead-magnet-eyebrow">Pas encore prêt ?</p>
          <h3>Téléchargez le kit de démarrage</h3>
          <p>Site web, logo, réseaux et print — les 5 premières choses à mettre en place pour attirer des clients en ligne.</p>
        </div>
        <div class="lead-magnet-form-wrap">
          <form class="lead-magnet-form" onsubmit="handleLeadMagnet(event)">
            <input type="email" placeholder="Votre adresse email" required class="lead-magnet-input" />
            <button type="submit" class="btn btn-primary">Recevoir le guide →</button>
          </form>
          <p class="lead-magnet-success">✓ Guide envoyé ! Vérifiez votre boîte mail.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="cta-final">
    <div class="container cta-final-inner">
      <div class="cta-final-badge">Sans engagement · Réponse sous 24h</div>
      <h2 class="cta-final-title">Prêt à vous lancer ?</h2>
      <p class="cta-final-sub">Décrivez votre projet en 2 minutes. Je reviens vers vous avec une proposition claire, sans jargon et sans surprise.</p>
      <div class="cta-final-actions">
        <a href="<?php echo nls_page_url( 'devis' ); ?>" class="btn btn-primary btn-lg">Obtenir mon devis gratuit →</a>
        <a href="<?php echo nls_page_url( 'tarifs' ); ?>" class="btn btn-ghost btn-lg">Voir les tarifs</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

