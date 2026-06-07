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
        Site web, identité visuelle, réseaux sociaux et print — plus de visibilité, de crédibilité et d'opportunités.
      </p>
      <div class="hero-actions">
        <a href="<?php echo nls_page_url( 'devis' ); ?>" class="btn btn-primary btn-lg">Obtenir mon devis gratuit</a>
        <a href="<?php echo nls_page_url( 'realisations' ); ?>" class="btn btn-ghost btn-lg">Voir mes réalisations →</a>
      </div>
      <p class="hero-price-hint">Site web à partir de <strong>490 €</strong> · <a href="<?php echo nls_page_url( 'tarifs' ); ?>">Voir les tarifs →</a></p>
      <div class="hero-services">
        <a href="<?php echo nls_page_url( 'site-web' ); ?>" class="hero-service-tag">
          <span class="hst-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></span>
          <span class="hst-content"><span class="hst-title">Site web</span></span>
        </a>
        <a href="<?php echo nls_page_url( 'identite-visuelle' ); ?>" class="hero-service-tag">
          <span class="hst-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></span>
          <span class="hst-content"><span class="hst-title">Identité</span></span>
        </a>
        <a href="<?php echo nls_page_url( 'reseaux-sociaux' ); ?>" class="hero-service-tag">
          <span class="hst-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></span>
          <span class="hst-content"><span class="hst-title">Réseaux</span></span>
        </a>
        <a href="<?php echo nls_page_url( 'print' ); ?>" class="hero-service-tag">
          <span class="hst-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg></span>
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
      <span>⚡ Livraison rapide</span><span class="mid-ticker-sep">·</span>
      <span>📍 SEO local optimisé</span><span class="mid-ticker-sep">·</span>
      <span>✓ Sans engagement</span><span class="mid-ticker-sep">·</span>
      <span>🌐 Site web professionnel</span><span class="mid-ticker-sep">·</span>
      <span>🎨 Identité visuelle sur mesure</span><span class="mid-ticker-sep">·</span>
      <span>📱 Réseaux sociaux gérés pour vous</span><span class="mid-ticker-sep">·</span>
      <span>🖨️ Flyers, cartes de visite, kakémonos</span><span class="mid-ticker-sep">·</span>
      <span>⚡ Livraison rapide</span><span class="mid-ticker-sep">·</span>
      <span>📍 SEO local optimisé</span><span class="mid-ticker-sep">·</span>
      <span>✓ Sans engagement</span><span class="mid-ticker-sep">·</span>
    </div>
  </div>

  <!-- SERVICES -->
  <section id="services" class="services-grid-section">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">Mes services</div>
        <h2>Tout ce qu'il faut pour<br /><span class="gradient-text">exister en ligne</span></h2>
        <p class="section-desc">4 services complémentaires pour construire une présence professionnelle complète.</p>
      </div>
      <div class="sgs-grid">
        <a href="<?php echo nls_page_url( 'site-web' ); ?>" class="sgs-card sgs-card--purple">
          <div class="sgs-card-main">
            <div class="sgs-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            </div>
            <div class="sgs-card-content">
              <span class="sgs-num">01</span><div class="sgs-title-row"><h3>Création de site web</h3></div>
              <p>Design sur mesure, mobile-first, SEO local optimisé. Votre site accepte les devis et réserve vos créneaux 24h/24, pour ne manquer aucune opportunité.</p>
              <ul class="sgs-tags">
                <li>SEO local</li>
                <li>Devis en ligne</li>
                <li>Livraison rapide</li>
              </ul>
            </div>
          </div>
          <span class="sgs-cta">Voir l'offre →</span>
        </a>
        <a href="<?php echo nls_page_url( 'identite-visuelle' ); ?>" class="sgs-card sgs-card--orange">
          <div class="sgs-card-main">
            <div class="sgs-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r="1.5"/><circle cx="17.5" cy="10.5" r="1.5"/><circle cx="8.5" cy="7.5" r="1.5"/><circle cx="6.5" cy="12.5" r="1.5"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg>
            </div>
            <div class="sgs-card-content">
              <span class="sgs-num">02</span><div class="sgs-title-row"><h3>Identité visuelle</h3></div>
              <p>Logo, charte graphique et supports livrés en 3 propositions uniques. Une image à la hauteur de votre professionnalisme, dès le premier regard.</p>
              <ul class="sgs-tags">
                <li>Logo personnalisé</li>
                <li>Charte graphique complète</li>
                <li>Supports prêts à l'emploi</li>
              </ul>
            </div>
          </div>
          <span class="sgs-cta">Voir l'offre →</span>
        </a>
        <a href="<?php echo nls_page_url( 'reseaux-sociaux' ); ?>" class="sgs-card sgs-card--blue">
          <div class="sgs-card-main">
            <div class="sgs-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/><line x1="9" y1="10" x2="9.01" y2="10"/><line x1="12" y1="10" x2="12.01" y2="10"/><line x1="15" y1="10" x2="15.01" y2="10"/></svg>
            </div>
            <div class="sgs-card-content">
              <span class="sgs-num">03</span><div class="sgs-title-row"><h3>Réseaux sociaux</h3></div>
              <p>Posts rédigés, mis en page et publiés chaque semaine sur LinkedIn et Instagram. Vous travaillez, je gère votre présence en ligne.</p>
              <ul class="sgs-tags">
                <li>4–8 posts/mois</li>
                <li>Visuels inclus</li>
                <li>Rapport mensuel</li>
              </ul>
            </div>
          </div>
          <span class="sgs-cta">Voir l'offre →</span>
        </a>
        <a href="<?php echo nls_page_url( 'print' ); ?>" class="sgs-card sgs-card--green">
          <div class="sgs-card-main">
            <div class="sgs-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
            </div>
            <div class="sgs-card-content">
              <span class="sgs-num">04</span><div class="sgs-title-row"><h3>Création print</h3></div>
              <p>Flyers, cartes de visite, kakémonos — cohérents avec votre identité visuelle et prêts à envoyer à l'imprimeur.</p>
              <ul class="sgs-tags">
                <li>Fichiers HD</li>
                <li>Retouches illimitées</li>
                <li>Livraison rapide</li>
              </ul>
            </div>
          </div>
          <span class="sgs-cta">Voir l'offre →</span>
        </a>
      </div>
      <div class="sgs-bottom">
        <div class="sgs-bottom-cta">
          <div class="sgs-bottom-left">
            <div class="sgs-bottom-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 17l-6.2 4.3 2.4-7.4L2 9.4h7.6z"/></svg>
            </div>
            <div class="sgs-bottom-text">
              <strong>Un projet ? Parlons-en.</strong>
              <span>Je vous accompagne de A à Z pour booster votre visibilité.</span>
            </div>
          </div>
          <a href="<?php echo nls_page_url( 'expertise' ); ?>" class="btn btn-primary">Voir toutes mes expertises →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- COMMENT ÇA MARCHE -->
  <section class="how" id="comment">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">Notre processus</div>
        <h2>Comment ça se passe,<br /><span class="gradient-text">pour chaque service</span></h2>
        <p class="how-subtitle">Un accompagnement simple, clair et efficace à chaque étape.</p>
      </div>
      <div class="how-split">
        <div class="how-steps-v2">
          <div class="how-card">
            <div class="how-card-left">
              <div class="how-card-num">01</div>
              <div class="how-card-icon how-card-icon--desk">📞</div>
            </div>
            <div class="how-card-divider"></div>
            <div class="how-card-body">
              <div class="how-card-title-row">
                <span class="how-card-icon how-card-icon--mob" style="color:#fbbf24;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.62 3.38 2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 5.59 5.59l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg></span>
                <h3>On fait le point ensemble</h3>
              </div>
              <p>Un appel de 30 minutes suffit. Je cerne votre activité, vos clients cibles et vos objectifs. Vous recevez un devis clair dans la journée — sans jargon.</p>
              <div class="how-card-tags">
                <span class="how-card-tag"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="16 10 11 15 8 12"/></svg> Appel visio ou téléphonique</span>
                <span class="how-card-tag"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="16 10 11 15 8 12"/></svg> Conseils personnalisés</span>
                <span class="how-card-tag"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="16 10 11 15 8 12"/></svg> Devis transparent</span>
              </div>
            </div>
          </div>
          <div class="how-card">
            <div class="how-card-left">
              <div class="how-card-num">02</div>
              <div class="how-card-icon how-card-icon--desk">✏️</div>
            </div>
            <div class="how-card-divider"></div>
            <div class="how-card-body">
              <div class="how-card-title-row">
                <span class="how-card-icon how-card-icon--mob">✏️</span>
                <h3>Je crée, vous validez</h3>
              </div>
              <p>Premiers visuels livrés en 48h. Vous donnez votre retour, j'ajuste — autant de fois que nécessaire jusqu'à ce que le résultat vous convienne à 100%.</p>
              <div class="how-card-tags">
                <span class="how-card-tag"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="16 10 11 15 8 12"/></svg> Concept sur mesure</span>
                <span class="how-card-tag"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="16 10 11 15 8 12"/></svg> Retouches illimitées</span>
                <span class="how-card-tag"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="16 10 11 15 8 12"/></svg> Vous validez chaque étape</span>
              </div>
            </div>
          </div>
          <div class="how-card">
            <div class="how-card-left">
              <div class="how-card-num">03</div>
              <div class="how-card-icon how-card-icon--desk">🚀</div>
            </div>
            <div class="how-card-divider"></div>
            <div class="how-card-body">
              <div class="how-card-title-row">
                <span class="how-card-icon how-card-icon--mob">🚀</span>
                <h3>Livraison & suivi inclus</h3>
              </div>
              <p>Votre site est en ligne, vos fichiers livrés en tous formats. Je reste disponible 30 jours après la livraison pour toute question ou ajustement.</p>
              <div class="how-card-tags">
                <span class="how-card-tag"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="16 10 11 15 8 12"/></svg> Site mis en ligne</span>
                <span class="how-card-tag"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="16 10 11 15 8 12"/></svg> Formation à la prise en main</span>
                <span class="how-card-tag"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="16 10 11 15 8 12"/></svg> Support 30 jours offert</span>
              </div>
            </div>
          </div>
        </div>
        <div class="how-img-col">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/acccompagnement.webp" alt="Artisan au travail" loading="lazy" />
          <div class="how-img-badge">
            <div class="how-img-badge-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div>
              <strong>Accompagnement de A à Z</strong>
              <span>Du brief à la mise en ligne, je gère tout. Vous, vous vous concentrez sur votre métier.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="how-cta">
        <a href="<?php echo nls_page_url( 'devis' ); ?>" class="btn btn-primary btn-lg">Demander un devis gratuit →</a>
        <p class="how-cta-sub"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Aucun engagement — réponse sous 24h</p>
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
        <div class="pf-card">
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
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Design</span><span class="pf-stat-label">sur mesure</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">SEO</span><span class="pf-stat-label">optimisé</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Devis</span><span class="pf-stat-label">24h/24</span></div></div>
            </div>
            <div class="pf-card-actions">
              <a href="https://www.profilboost.fr/?utm_source=nextlinkstudio&utm_medium=portfolio&utm_campaign=bouton_voir_le_site&utm_content=page_accueil" target="_blank" rel="noopener" class="pf-card-site-link">Voir le site web →</a>
              <a href="<?php echo nls_page_url('etude-de-cas-profilboost-site-web'); ?>" class="pf-card-cta pf-card-cta--wood">Voir l'étude de cas →</a>
            </div>
          </div>
        </div>
        <div class="pf-card">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Instagram_les_jardins_du_chene_post.webp" alt="Les jardins du chêne — carrousel Instagram">
            <span class="pf-badge pf-badge--green">Réseaux sociaux</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--green"></div>
              <div><h4 class="pf-card-title">Les jardins du chêne</h4><p class="pf-card-desc">Carrousel Instagram</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="8" height="8" rx="1"/><rect x="13" y="3" width="8" height="8" rx="1"/><rect x="3" y="13" width="8" height="8" rx="1"/><rect x="13" y="13" width="8" height="8" rx="1"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Slides</span><span class="pf-stat-label">prenium</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Contenu</span><span class="pf-stat-label">cohérent</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Design</span><span class="pf-stat-label">personnalisé</span></div></div>
            </div>
            <div class="pf-card-actions">
              <a href="<?php echo nls_page_url('post-instagram-les-jardins-du-chene'); ?>" class="pf-card-site-link">Voir le post →</a>
              <a href="<?php echo nls_page_url('etude-de-cas-les-jardins-du-chene-post-instagram'); ?>" class="pf-card-cta pf-card-cta--green">Voir l'étude de cas →</a>
            </div>
          </div>
        </div>
        <div class="pf-card">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_charte_graphique_profilboost_bg.png" alt="ProfilBoost — identité visuelle">
            <span class="pf-badge pf-badge--wood">Identité visuelle</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--wood"></div>
              <div><h4 class="pf-card-title">ProfilBoost</h4><p class="pf-card-desc">Création de CV</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Logo</span><span class="pf-stat-label">personnalisé</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Charte</span><span class="pf-stat-label">complète</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Supports</span><span class="pf-stat-label">inclus</span></div></div>
            </div>
            <div class="pf-card-actions">
              <a href="<?php echo nls_page_url('charte-graphique-profilboost'); ?>" class="pf-card-site-link">Voir la charte graphique →</a>
              <a href="<?php echo nls_page_url('etude-de-cas-profilboost-identite-visuelle'); ?>" class="pf-card-cta pf-card-cta--wood">Voir l'étude de cas →</a>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center" style="margin-top:48px">
        <a href="<?php echo nls_page_url( 'realisations' ); ?>" class="btn btn-primary btn-lg rp-cta-full">Voir toutes mes réalisations →</a>
      </div>
    </div>
  </section>

  <!-- TÉMOIGNAGES — à remettre quand les vrais avis seront disponibles
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
  -->

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
              <p>Les tarifs démarrent à <strong>490 € pour un site vitrine</strong> et à <strong>290 € pour une identité visuelle</strong>. Tout est inclus. Le seul frais récurrent est le <strong>nom de domaine</strong> (environ 20 €/an), que vous gérez librement. <a href="<?php echo nls_page_url('tarifs'); ?>">Voir tous les tarifs →</a></p>
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
              <p>Le délai dépend du service et du nombre d'allers-retours. En règle générale : <strong>2 à 4 jours</strong> pour un support print, <strong>1 à 2 semaines</strong> pour une identité visuelle, <strong>2 à 4 semaines</strong> pour un site web selon sa complexité. Plus vous êtes disponible pour valider les étapes, plus ça avance vite. Je vous communique une estimation précise dès le premier appel.</p>
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
    </div>
  </section>

  <!-- LEAD MAGNET -->
  <!--
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
  -->

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

