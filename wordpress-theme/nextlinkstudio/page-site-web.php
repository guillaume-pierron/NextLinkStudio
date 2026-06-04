<?php
/**
 * Template Name: Création de site web
 */
get_header();
?>

  <!-- PAGE HERO -->
  <section class="page-hero page-hero--split">
    <div class="page-hero-bg"></div>
    <div class="container page-hero-content">
      <div class="page-hero-text">
        <div class="sw-hero-badge">🔧 Création de site web</div>
        <h1>Un site web qui<br /><span class="gradient-text">travaille pour vous</span></h1>
        <p>Votre site vitrine est votre meilleur commercial : il répond aux clients, accepte les devis et remplit votre agenda — 24h/24, même quand vous avez les mains occupées.</p>
        <div class="sw-hero-tags">
          <span class="sw-hero-tag"><span class="sw-hero-check">✓</span>SEO local</span>
          <span class="sw-hero-tag"><span class="sw-hero-check">✓</span>Design sur mesure</span>
          <span class="sw-hero-tag"><span class="sw-hero-check">✓</span>Hébergement inclus</span>
          <span class="sw-hero-tag"><span class="sw-hero-check">✓</span>Mis à jour facilement</span>
        </div>
        <div class="sw-hero-actions">
          <a href="<?php echo nls_page_url('realisations'); ?>" class="btn btn-primary btn-lg">Voir des exemples de sites →</a>
          <p class="hero-price-hint">À partir de <strong>490 €</strong> · <a href="<?php echo nls_page_url('tarifs'); ?>">Voir les tarifs →</a></p>
        </div>
      </div>
      <div class="page-hero-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/websites_images.png" alt="Exemples de sites web créés par NextLink Studio" />
      </div>
    </div>
  </section>

  <!-- TICKER -->
  <div class="sw-ticker" aria-hidden="true">
    <div class="sw-ticker-track">
      <span>Référencement Google</span><span class="sw-sep">✦</span>
      <span>Web Design sur mesure</span><span class="sw-sep">✦</span>
      <span>SEO Local</span><span class="sw-sep">✦</span>
      <span>Site Mobile-First</span><span class="sw-sep">✦</span>
      <span>Devis en ligne</span><span class="sw-sep">✦</span>
      <span>Agenda intégré</span><span class="sw-sep">✦</span>
      <span>Hébergement inclus</span><span class="sw-sep">✦</span>
      <span>Livraison rapide</span><span class="sw-sep">✦</span>
      <span>Google Maps optimisé</span><span class="sw-sep">✦</span>
      <span>Site ultra-rapide</span><span class="sw-sep">✦</span>
      <span>Référencement Google</span><span class="sw-sep">✦</span>
      <span>Web Design sur mesure</span><span class="sw-sep">✦</span>
      <span>SEO Local</span><span class="sw-sep">✦</span>
      <span>Site Mobile-First</span><span class="sw-sep">✦</span>
      <span>Devis en ligne</span><span class="sw-sep">✦</span>
      <span>Agenda intégré</span><span class="sw-sep">✦</span>
      <span>Hébergement inclus</span><span class="sw-sep">✦</span>
      <span>Livraison rapide</span><span class="sw-sep">✦</span>
      <span>Google Maps optimisé</span><span class="sw-sep">✦</span>
      <span>Site ultra-rapide</span><span class="sw-sep">✦</span>
    </div>
  </div>

  <!-- CMS & FORMATION -->
  <section class="sw-cms-section">
    <div class="container">
      <div class="sw-cms-header">
        <div class="sw-cms-label">WordPress CMS</div>
        <h2>Votre site,<br><span class="gradient-text">entre vos mains</span></h2>
        <p>Modifiez vos textes et images en toute autonomie, sans toucher à une ligne de code.</p>
      </div>
      <div class="sw-cms-pillars">
        <div class="sw-cms-pillar">
          <div class="sw-cms-pillar-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/></svg>
          </div>
          <strong>Interface intuitive</strong>
          <span>Cliquez, modifiez, publiez — sans compétence technique.</span>
          <div class="sw-cms-pillar-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
        </div>
        <div class="sw-cms-pillar">
          <div class="sw-cms-pillar-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
          </div>
          <strong>Formation incluse</strong>
          <span>Une session personnalisée à la livraison pour être autonome dès le premier jour.</span>
          <div class="sw-cms-pillar-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
        </div>
        <div class="sw-cms-pillar">
          <div class="sw-cms-pillar-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <strong>Support après livraison</strong>
          <span>Je reste disponible par email pour vos questions.</span>
          <div class="sw-cms-pillar-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
        </div>
      </div>
      <div class="sw-cms-mockup-wrap">
        <div class="wp-mockup">
          <div class="wp-adminbar">
            <div class="wp-adminbar-left">
              <div class="wp-logo">W</div>
              <span class="wp-site-name">Mon site — Tableau de bord</span>
            </div>
            <div class="wp-adminbar-right">
              <span>Bonjour, Pierre 👋</span>
            </div>
          </div>
          <div class="wp-body">
            <aside class="wp-sidebar">
              <div class="wp-menu-item wp-menu-active">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg> Tableau de bord
              </div>
              <div class="wp-menu-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg> Pages
              </div>
              <div class="wp-menu-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg> Médias
              </div>
              <div class="wp-menu-item">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg> Réglages
              </div>
            </aside>
            <main class="wp-content">
              <div class="wp-editor-topbar">
                <span class="wp-editor-title">Modifier — Page d'accueil</span>
                <button class="wp-update-btn">Mettre à jour</button>
              </div>
              <div class="wp-editor-area">
                <div class="wp-block wp-block-heading">Plombier professionnel à Paris</div>
                <div class="wp-block wp-block-para">Spécialiste des fuites, installations et rénovations salle de bain. Devis gratuit sous 24h.</div>
                <div class="wp-block wp-block-img">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                  <span>Changer l'image</span>
                </div>
                <div class="wp-block wp-block-btn-preview">
                  <span>Demander un devis →</span>
                </div>
              </div>
            </main>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTENU PRINCIPAL -->
  <section class="expertise-section" id="sites-web">
    <div class="container">
      <div class="sw-features-header">
        <div class="section-badge">Création de site web</div>
        <h2>Tout ce que votre site<br><span class="gradient-text">fait pour vous</span></h2>
        <p>Design sur mesure, mobile-first, SEO local optimisé. Livraison rapide — vous vous concentrez sur votre métier.</p>
      </div>
      <div class="sw-highlights">
        <div class="sw-highlight">
          <div class="sw-highlight-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
          <div><strong>SEO local</strong><span>Visible sur Google dans votre ville</span></div>
        </div>
        <div class="sw-highlight">
          <div class="sw-highlight-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg></div>
          <div><strong>Devis en ligne</strong><span>Demandes qualifiées 24h/24</span></div>
        </div>
        <div class="sw-highlight">
          <div class="sw-highlight-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
          <div><strong>Réservation en ligne</strong><span>Agenda synchronisé automatiquement</span></div>
        </div>
        <div class="sw-highlight">
          <div class="sw-highlight-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg></div>
          <div><strong>Mobile-first</strong><span>Parfait sur téléphone, rapide partout</span></div>
        </div>
      </div>

      <div class="sw-stats-wrap">
        <div class="sw-stats-left">
          <div class="sw-cms-label">Google Site Kit — Inclus</div>
          <h3>Voyez d'où viennent<br><span class="gradient-text">vos clients</span></h3>
          <p>Google Site Kit est installé sur votre site dès la livraison. Depuis votre tableau de bord WordPress, vous suivez en temps réel tout ce qui se passe.</p>
          <div class="sw-stats-points">
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
              <span>Nombre de visiteurs par jour, semaine, mois</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
              <span>Sources de trafic — Google, réseaux, direct</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
              <span>Villes et régions de vos visiteurs</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
              <span>Pages les plus visitées de votre site</span>
            </div>
          </div>
        </div>
        <div class="sw-stats-right">
          <div class="sk-mockup">
            <div class="sk-header">
              <div class="sk-logo">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
              </div>
              <span class="sk-title">Site Kit — Tableau de bord</span>
              <span class="sk-period">30 derniers jours</span>
            </div>
            <div class="sk-stats-row">
              <div class="sk-stat-box">
                <span class="sk-stat-label">Visiteurs</span>
                <span class="sk-stat-val">1 284</span>
                <span class="sk-stat-trend sk-up">↑ +18%</span>
              </div>
              <div class="sk-stat-box">
                <span class="sk-stat-label">Pages vues</span>
                <span class="sk-stat-val">3 947</span>
                <span class="sk-stat-trend sk-up">↑ +12%</span>
              </div>
              <div class="sk-stat-box">
                <span class="sk-stat-label">Taux de clics</span>
                <span class="sk-stat-val">4,2%</span>
                <span class="sk-stat-trend sk-up">↑ +0,8%</span>
              </div>
            </div>
            <div class="sk-chart">
              <div class="sk-chart-label">Visiteurs cette semaine</div>
              <div class="sk-bars">
                <div class="sk-bar-wrap"><div class="sk-bar" style="height:45%"></div><span>L</span></div>
                <div class="sk-bar-wrap"><div class="sk-bar" style="height:60%"></div><span>M</span></div>
                <div class="sk-bar-wrap"><div class="sk-bar" style="height:52%"></div><span>M</span></div>
                <div class="sk-bar-wrap"><div class="sk-bar" style="height:75%"></div><span>J</span></div>
                <div class="sk-bar-wrap"><div class="sk-bar" style="height:90%"></div><span>V</span></div>
                <div class="sk-bar-wrap"><div class="sk-bar sk-bar-muted" style="height:40%"></div><span>S</span></div>
                <div class="sk-bar-wrap"><div class="sk-bar sk-bar-muted" style="height:30%"></div><span>D</span></div>
              </div>
            </div>
            <div class="sk-sources">
              <div class="sk-sources-label">Sources de trafic</div>
              <div class="sk-source-row"><span class="sk-source-name"><span class="sk-dot sk-dot-google"></span>Google</span><div class="sk-source-bar-wrap"><div class="sk-source-bar" style="width:68%"></div></div><span class="sk-source-pct">68%</span></div>
              <div class="sk-source-row"><span class="sk-source-name"><span class="sk-dot sk-dot-direct"></span>Direct</span><div class="sk-source-bar-wrap"><div class="sk-source-bar sk-source-bar-direct" style="width:20%"></div></div><span class="sk-source-pct">20%</span></div>
              <div class="sk-source-row"><span class="sk-source-name"><span class="sk-dot sk-dot-social"></span>Réseaux</span><div class="sk-source-bar-wrap"><div class="sk-source-bar sk-source-bar-social" style="width:12%"></div></div><span class="sk-source-pct">12%</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SÉCURITÉ -->
  <section class="sw-security-section">
    <div class="container">
      <div class="sw-security-wrap">
        <div class="sw-security-left">
          <div class="wf-mockup">
            <div class="wf-header">
              <div class="wf-logo">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <span class="wf-title">Wordfence Security</span>
              <span class="wf-status-badge">● Protégé</span>
            </div>
            <div class="wf-summary">
              <div class="wf-summary-item wf-ok">
                <div class="wf-summary-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
                <div><strong>Pare-feu actif</strong><span>Toutes les menaces connues bloquées</span></div>
              </div>
              <div class="wf-summary-item wf-ok">
                <div class="wf-summary-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
                <div><strong>Scan du site</strong><span>Aucune menace détectée</span></div>
              </div>
              <div class="wf-summary-item wf-ok">
                <div class="wf-summary-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
                <div><strong>Protection connexion</strong><span>Double authentification activée</span></div>
              </div>
            </div>
            <div class="wf-firewall">
              <div class="wf-fw-header">
                <span class="wf-fw-title">Pare-feu — 30 derniers jours</span>
                <span class="wf-fw-count">247 attaques bloquées</span>
              </div>
              <div class="wf-fw-bars">
                <div class="wf-fw-bar-wrap"><div class="wf-fw-bar" style="height:30%"></div></div>
                <div class="wf-fw-bar-wrap"><div class="wf-fw-bar" style="height:55%"></div></div>
                <div class="wf-fw-bar-wrap"><div class="wf-fw-bar" style="height:40%"></div></div>
                <div class="wf-fw-bar-wrap"><div class="wf-fw-bar" style="height:70%"></div></div>
                <div class="wf-fw-bar-wrap"><div class="wf-fw-bar" style="height:45%"></div></div>
                <div class="wf-fw-bar-wrap"><div class="wf-fw-bar" style="height:60%"></div></div>
                <div class="wf-fw-bar-wrap"><div class="wf-fw-bar" style="height:35%"></div></div>
              </div>
            </div>
            <div class="wf-scan-row">
              <div class="wf-scan-item">
                <span class="wf-scan-label">Dernier scan</span>
                <span class="wf-scan-val">Aujourd'hui, 06h00</span>
              </div>
              <div class="wf-scan-item">
                <span class="wf-scan-label">Fichiers analysés</span>
                <span class="wf-scan-val">1 842</span>
              </div>
              <div class="wf-scan-item">
                <span class="wf-scan-label">Menaces trouvées</span>
                <span class="wf-scan-val wf-zero">0</span>
              </div>
            </div>
          </div>
        </div>
        <div class="sw-security-right">
          <div class="sw-cms-label">Sécurité — Inclus</div>
          <h3>Votre site protégé<br><span class="gradient-text">en permanence</span></h3>
          <p>Wordfence est configuré dès la livraison. Votre site est surveillé 24h/24, les attaques sont bloquées automatiquement — sans que vous ayez à intervenir.</p>
          <div class="sw-stats-points">
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
              <span>Pare-feu qui bloque les tentatives d'intrusion</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></div>
              <span>Scan automatique quotidien des fichiers</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
              <span>Protection contre les attaques par force brute</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 5.59 5.59l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg></div>
              <span>Alertes instantanées en cas d'anomalie</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NOM DE DOMAINE & EMAILS -->
  <section class="sw-domain-section">
    <div class="container">
      <div class="sw-domain-wrap">
        <div class="sw-domain-left">
          <div class="sw-cms-label">Nom de domaine — Inclus</div>
          <h3>Une adresse qui vous<br><span class="gradient-text">appartient</span></h3>
          <p>Votre nom de domaine est enregistré à votre nom dès la livraison. Il vous appartient — même si on arrête de travailler ensemble.</p>
          <div class="sw-stats-points">
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
              <span>Votre domaine enregistré à votre nom — vous en êtes propriétaire</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
              <span>Adresses email professionnelles incluses — contact@, devis@, info@…</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
              <span>Certificat SSL inclus — connexion sécurisée HTTPS</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
              <span>Hébergement haute performance inclus la première année</span>
            </div>
          </div>
        </div>
        <div class="sw-domain-right">
          <div class="sw-domain-mockup">
            <div class="sw-domain-mockup-header">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
              <span>Votre domaine</span>
            </div>
            <div class="sw-domain-url-row">
              <div class="sw-domain-lock"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
              <span class="sw-domain-url">votre-entreprise.fr</span>
            </div>
            <div class="sw-domain-emails">
              <div class="sw-domain-emails-title">Adresses email incluses</div>
              <div class="sw-domain-email-item sw-domain-email-primary">
                <div class="sw-domain-email-avatar">C</div>
                <div class="sw-domain-email-info">
                  <span class="sw-domain-email-addr">contact@votre-entreprise.fr</span>
                  <span class="sw-domain-email-desc">Email principal</span>
                </div>
                <div class="sw-domain-email-check"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
              </div>
              <div class="sw-domain-email-item">
                <div class="sw-domain-email-avatar">D</div>
                <div class="sw-domain-email-info">
                  <span class="sw-domain-email-addr">devis@votre-entreprise.fr</span>
                  <span class="sw-domain-email-desc">Demandes de devis</span>
                </div>
                <div class="sw-domain-email-check"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
              </div>
              <div class="sw-domain-email-item">
                <div class="sw-domain-email-avatar">I</div>
                <div class="sw-domain-email-info">
                  <span class="sw-domain-email-addr">info@votre-entreprise.fr</span>
                  <span class="sw-domain-email-desc">Informations générales</span>
                </div>
                <div class="sw-domain-email-check"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
              </div>
              <div class="sw-domain-email-add">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                Ajouter une adresse…
              </div>
            </div>
            <div class="sw-domain-ssl">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
              <span>SSL actif — <strong>Connexion sécurisée</strong></span>
              <span class="sw-domain-ssl-badge">HTTPS</span>
            </div>
          </div>
        </div>
      </div>

      <!-- NOTE COÛT NOM DE DOMAINE -->
      <div style="margin-top:24px; background: rgba(251,191,36,0.07); border: 1px solid rgba(251,191,36,0.28); border-radius: 16px; padding: 24px 28px; display: flex; gap: 18px; align-items: flex-start;">
        <div style="width:42px; height:42px; border-radius:10px; background:rgba(251,191,36,0.14); border:1.5px solid rgba(251,191,36,0.32); display:flex; align-items:center; justify-content:center; flex-shrink:0; color:#d97706;">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
        <div>
          <h4 style="font-size:15px; font-weight:700; color:var(--text); margin:0 0 8px;">Bon à savoir — le coût du nom de domaine</h4>
          <p style="font-size:13.5px; color:var(--text-muted); line-height:1.65; margin:0 0 8px;">Le prix du nom de domaine dépend du nom que vous choisissez. Un <strong style="color:var(--text)">.fr</strong> ou <strong style="color:var(--text)">.com</strong> standard revient généralement entre <strong style="color:var(--text)">8 € et 15 €/an</strong> — une petite ligne budgétaire à prévoir en plus. Certains noms très demandés ou déjà pris peuvent être revendus à des prix bien plus élevés.</p>
          <p style="font-size:13.5px; color:var(--text-muted); line-height:1.65; margin:0;">Bonne nouvelle : il existe presque toujours des alternatives tout aussi professionnelles, disponibles à tarif normal. On cherche ensemble le bon nom pour votre activité.</p>
        </div>
      </div>


    </div>
  </section>

  <!-- RÉSERVATION EN LIGNE -->
  <section class="sw-booking-section">
    <div class="container">
      <div class="sw-booking-wrap">
        <div class="sw-booking-left">
          <div class="sw-booking-mockup">
            <div class="sw-bk-header">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              <span>Réserver un créneau</span>
              <span class="sw-bk-month">Juin 2025</span>
            </div>
            <div class="sw-bk-calendar">
              <div class="sw-bk-weekdays">
                <span>L</span><span>M</span><span>M</span><span>J</span><span>V</span><span>S</span><span>D</span>
              </div>
              <div class="sw-bk-days">
                <span class="sw-bk-day sw-bk-other">26</span>
                <span class="sw-bk-day sw-bk-other">27</span>
                <span class="sw-bk-day sw-bk-other">28</span>
                <span class="sw-bk-day sw-bk-other">29</span>
                <span class="sw-bk-day sw-bk-other">30</span>
                <span class="sw-bk-day sw-bk-off">31</span>
                <span class="sw-bk-day sw-bk-off">1</span>
                <span class="sw-bk-day sw-bk-avail">2</span>
                <span class="sw-bk-day sw-bk-avail">3</span>
                <span class="sw-bk-day sw-bk-avail">4</span>
                <span class="sw-bk-day sw-bk-full">5</span>
                <span class="sw-bk-day sw-bk-avail">6</span>
                <span class="sw-bk-day sw-bk-off">7</span>
                <span class="sw-bk-day sw-bk-off">8</span>
                <span class="sw-bk-day sw-bk-avail">9</span>
                <span class="sw-bk-day sw-bk-full">10</span>
                <span class="sw-bk-day sw-bk-avail">11</span>
                <span class="sw-bk-day sw-bk-full">12</span>
                <span class="sw-bk-day sw-bk-avail">13</span>
                <span class="sw-bk-day sw-bk-off">14</span>
                <span class="sw-bk-day sw-bk-off">15</span>
                <span class="sw-bk-day sw-bk-avail sw-bk-selected">16</span>
                <span class="sw-bk-day sw-bk-avail">17</span>
                <span class="sw-bk-day sw-bk-full">18</span>
                <span class="sw-bk-day sw-bk-avail">19</span>
                <span class="sw-bk-day sw-bk-avail">20</span>
                <span class="sw-bk-day sw-bk-off">21</span>
                <span class="sw-bk-day sw-bk-off">22</span>
              </div>
            </div>
            <div class="sw-bk-legend">
              <span><span class="sw-bk-dot sw-bk-dot-avail"></span>Disponible</span>
              <span><span class="sw-bk-dot sw-bk-dot-full"></span>Complet</span>
            </div>
            <div class="sw-bk-slots">
              <div class="sw-bk-slots-label">Créneaux — Lundi 16 juin</div>
              <div class="sw-bk-slots-grid">
                <div class="sw-bk-slot sw-bk-slot-taken">09h00</div>
                <div class="sw-bk-slot sw-bk-slot-free">10h00</div>
                <div class="sw-bk-slot sw-bk-slot-free sw-bk-slot-pick">14h00</div>
                <div class="sw-bk-slot sw-bk-slot-free">15h00</div>
                <div class="sw-bk-slot sw-bk-slot-taken">16h00</div>
                <div class="sw-bk-slot sw-bk-slot-free">17h00</div>
              </div>
            </div>
            <div class="sw-bk-confirm">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              Lundi 16 juin à 14h00 — <strong>Confirmé</strong>
            </div>
          </div>
        </div>
        <div class="sw-booking-right">
          <div class="sw-cms-label">Réservation en ligne — Optionnel</div>
          <h3>Votre agenda se remplit<br><span class="gradient-text">tout seul</span></h3>
          <p>Vos clients choisissent leur créneau directement sur votre site, en fonction de vos disponibilités réelles — sans appel, sans aller-retour.</p>
          <div class="sw-stats-points">
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
              <span>Calendrier de disponibilités en temps réel sur votre site</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 5.59 5.59l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg></div>
              <span>Confirmation automatique par SMS ou email au client</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
              <span>Rappel automatique envoyé avant le rendez-vous</span>
            </div>
            <div class="sw-stats-point">
              <div class="sw-stats-point-icon"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
              <span>Synchronisation avec Google Calendar ou Apple Calendar</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- RÉALISATIONS -->
  <section class="sw-realisations">
    <div class="container">
      <div class="sw-real-header">
        <div class="section-badge">Réalisations</div>
        <h2>Des sites qui <span class="gradient-text">convertissent</span></h2>
      </div>
      <div class="portfolio-grid--triple" style="grid-template-columns: repeat(2, 1fr); max-width: 780px; margin: 0 auto;">
        <div class="pf-card" data-category="site-web">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_devices_vert_nature_bg.png" alt="Site web Vert Nature">
            <span class="pf-badge pf-badge--green">Site web</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--green"></div>
              <div><h4 class="pf-card-title">Vert-Nature</h4><p class="pf-card-desc">Paysagiste — Région parisienne</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Design</span><span class="pf-stat-label">sur mesure</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">SEO</span><span class="pf-stat-label">optimisé</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Devis</span><span class="pf-stat-label">24h/24</span></div></div>
            </div>
            <div class="pf-card-actions">
              <a href="https://nextlinkstudio.github.io/Vert-nature/" target="_blank" rel="noopener" class="pf-card-site-link">Voir le site web →</a>
              <a href="<?php echo nls_page_url('etude-de-cas-les-jardins-du-chene-site-web'); ?>" class="pf-card-cta pf-card-cta--green">Voir l'étude de cas →</a>
            </div>
          </div>
        </div>
        <div class="pf-card" data-category="site-web">
          <div class="pf-card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profilboost_site_mockup_bg.png" alt="Site web ProfilBoost">
            <span class="pf-badge pf-badge--wood">Site web</span>
          </div>
          <div class="pf-card-body">
            <div class="pf-card-top">
              <div class="pf-card-accent pf-card-accent--wood"></div>
              <div><h4 class="pf-card-title">ProfilBoost</h4><p class="pf-card-desc">Coach LinkedIn — Paris</p></div>
            </div>
            <div class="pf-stats">
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Design</span><span class="pf-stat-label">sur mesure</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">SEO</span><span class="pf-stat-label">optimisé</span></div></div>
              <div class="pf-stat"><div class="pf-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div><div class="pf-stat-text"><span class="pf-stat-value">Devis</span><span class="pf-stat-label">24h/24</span></div></div>
            </div>
            <div class="pf-card-actions">
              <a href="https://nextlinkstudio.github.io/profilboost/" target="_blank" rel="noopener" class="pf-card-site-link">Voir le site web →</a>
              <a href="<?php echo nls_page_url('etude-de-cas-profilboost-site-web'); ?>" class="pf-card-cta pf-card-cta--wood">Voir l'étude de cas →</a>
            </div>
          </div>
        </div>
      </div>
      <div class="sw-real-cta-bar">
        <div class="sw-real-cta-icon">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        </div>
        <div class="sw-real-cta-text">
          <strong>Envie de voir plus de réalisations ?</strong>
          <span>Découvrez tous les projets réalisés pour des artisans et indépendants.</span>
        </div>
        <a href="<?php echo nls_page_url('realisations'); ?>" class="btn btn-primary">Voir tous les projets →</a>
      </div>
    </div>
  </section>

  <!-- OFFRES -->
  <section class="sw-pricing-section">
    <div class="container">

      <div class="sw-pricing-header">
        <div class="section-badge">Tarifs</div>
        <h2>Choisissez <span class="gradient-text">l'offre</span> qui vous correspond</h2>
        <p>Trois formules pensées pour chaque étape de votre développement.</p>
      </div>

      <div class="sw-pricing-grid">

        <!-- Essentiel -->
        <div class="sw-pricing-card">
          <div class="sw-pricing-card-top">
            <div class="sw-pricing-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
            </div>
            <div>
              <div class="sw-pricing-name">Site Essentiel</div>
              <div class="sw-pricing-tagline">Pour démarrer</div>
            </div>
          </div>
          <div class="sw-pricing-divider"></div>
          <div class="sw-pricing-price">490 <span>€</span></div>
          <ul class="sw-pricing-features">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Jusqu'à 3 pages</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Design sur mesure</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Formulaire de contact</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>SEO de base</li>
          </ul>
          <a href="<?php echo nls_page_url('devis'); ?>" class="sw-pricing-btn">Demander un devis →</a>
        </div>

        <!-- Complet (featured) -->
        <div class="sw-pricing-card sw-pricing-card--featured">
          <div class="sw-pricing-popular"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg> Populaire</div>
          <div class="sw-pricing-card-top">
            <div class="sw-pricing-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
            </div>
            <div>
              <div class="sw-pricing-name">Site Complet</div>
              <div class="sw-pricing-tagline">Pour se développer</div>
            </div>
          </div>
          <div class="sw-pricing-divider"></div>
          <div class="sw-pricing-price sw-pricing-price--featured">790 <span>€</span></div>
          <ul class="sw-pricing-features">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Jusqu'à 5 pages</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Design sur mesure</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Formulaire de contact</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>SEO renforcé</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Structure avancée</li>
          </ul>
          <a href="<?php echo nls_page_url('devis'); ?>" class="sw-pricing-btn sw-pricing-btn--featured">Demander un devis →</a>
        </div>

        <!-- Pro -->
        <div class="sw-pricing-card">
          <div class="sw-pricing-card-top">
            <div class="sw-pricing-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/><line x1="12" y1="2" x2="12" y2="4"/><line x1="12" y1="20" x2="12" y2="22"/><line x1="2" y1="12" x2="4" y2="12"/><line x1="20" y1="12" x2="22" y2="12"/></svg>
            </div>
            <div>
              <div class="sw-pricing-name">Site Pro</div>
              <div class="sw-pricing-tagline">Pour générer plus de demandes</div>
            </div>
          </div>
          <div class="sw-pricing-divider"></div>
          <div class="sw-pricing-price">1 290 <span>€</span></div>
          <ul class="sw-pricing-features">
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Jusqu'à 8 pages</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Design sur mesure</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Formulaire de contact</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>SEO renforcé</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Demande de devis en ligne</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Réservation de rendez-vous</li>
            <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>Automatisations avancées</li>
          </ul>
          <a href="<?php echo nls_page_url('devis'); ?>" class="sw-pricing-btn">Demander un devis →</a>
        </div>

      </div>

      <!-- Trust bar -->
      <div class="sw-pricing-trust">
        <div class="sw-pricing-trust-item">
          <div class="sw-pricing-trust-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
          <div><strong>Paiement sécurisé</strong><span>Paiement 100% sécurisé par carte ou virement</span></div>
        </div>
        <div class="sw-pricing-trust-item">
          <div class="sw-pricing-trust-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg></div>
          <div><strong>Support réactif</strong><span>Réponse sous 24h, humaine et directe</span></div>
        </div>
        <div class="sw-pricing-trust-item">
          <div class="sw-pricing-trust-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div>
          <div><strong>Modifications incluses</strong><span>Ajustements illimités jusqu'à votre satisfaction</span></div>
        </div>
        <div class="sw-pricing-trust-item">
          <div class="sw-pricing-trust-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-3.99"/></svg></div>
          <div><strong>Satisfait ou remboursé</strong><span>14 jours pour changer d'avis</span></div>
        </div>
      </div>

    </div>
  </section>

  <!-- CTA -->
  <section class="page-cta">
    <div class="container">
      <div class="page-cta-inner">
        <h2>Un projet ? Parlons-en.</h2>
        <p>Dites-moi en quelques mots ce que vous faites et où vous en êtes — je reviens vers vous sous 24h avec une proposition adaptée.</p>
        <div class="page-cta-actions">
          <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-lg">Demander un devis gratuit →</a>
          <a href="<?php echo nls_page_url('realisations'); ?>" class="btn btn-ghost btn-lg">Voir les réalisations</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
