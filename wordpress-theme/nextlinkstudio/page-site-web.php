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
        <div class="page-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a> / <a href="<?php echo nls_page_url('expertise'); ?>">Expertise</a> / <span>Création de site web</span></div>
        <div class="sw-hero-badge">🔧 Création de site web</div>
        <h1>Un site web qui<br /><span class="gradient-text">travaille pour vous</span></h1>
        <p>Votre site vitrine est votre meilleur commercial : il répond aux clients à 3h du matin, accepte les demandes de devis pendant que vous posez des carreaux, et réserve vos créneaux pendant que vous câblez une prise.</p>
        <div class="sw-hero-tags">
          <span class="sw-hero-tag"><span class="sw-hero-check">✓</span>Livré en 7 jours</span>
          <span class="sw-hero-tag"><span class="sw-hero-check">✓</span>Design sur mesure</span>
          <span class="sw-hero-tag"><span class="sw-hero-check">✓</span>Hébergement inclus</span>
          <span class="sw-hero-tag"><span class="sw-hero-check">✓</span>Mis à jour facilement</span>
        </div>
        <div class="sw-hero-actions">
          <a href="<?php echo nls_page_url('realisations'); ?>" class="btn btn-primary btn-lg">Voir des exemples de sites →</a>
          <a href="<?php echo nls_page_url('etude-de-cas-elec-prime'); ?>" class="sw-hero-link">Voir l'étude de cas →</a>
        </div>
      </div>
      <div class="page-hero-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/websites_images.png" alt="Exemples de sites web créés par NextLink Studio" />
      </div>
    </div>
  </section>

  <!-- STATS BAR -->
  <div class="sw-stats-bar">
    <div class="container">
      <div class="sw-stats">
        <div class="sw-stat">
          <div class="sw-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <div class="sw-stat-text"><span class="sw-stat-value">250+</span><span class="sw-stat-label">artisans accompagnés</span></div>
        </div>
        <div class="sw-stat">
          <div class="sw-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
          <div class="sw-stat-text"><span class="sw-stat-value">7 jours</span><span class="sw-stat-label">délai moyen de livraison</span></div>
        </div>
        <div class="sw-stat">
          <div class="sw-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <div class="sw-stat-text"><span class="sw-stat-value">98%</span><span class="sw-stat-label">de clients satisfaits</span></div>
        </div>
        <div class="sw-stat">
          <div class="sw-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg></div>
          <div class="sw-stat-text"><span class="sw-stat-value">Support réactif</span><span class="sw-stat-label">avant, pendant, après</span></div>
        </div>
      </div>
    </div>
  </div>

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
      <span>Livré en 7 jours</span><span class="sw-sep">✦</span>
      <span>Google Maps optimisé</span><span class="sw-sep">✦</span>
      <span>Site ultra-rapide</span><span class="sw-sep">✦</span>
      <span>Référencement Google</span><span class="sw-sep">✦</span>
      <span>Web Design sur mesure</span><span class="sw-sep">✦</span>
      <span>SEO Local</span><span class="sw-sep">✦</span>
      <span>Site Mobile-First</span><span class="sw-sep">✦</span>
      <span>Devis en ligne</span><span class="sw-sep">✦</span>
      <span>Agenda intégré</span><span class="sw-sep">✦</span>
      <span>Hébergement inclus</span><span class="sw-sep">✦</span>
      <span>Livré en 7 jours</span><span class="sw-sep">✦</span>
      <span>Google Maps optimisé</span><span class="sw-sep">✦</span>
      <span>Site ultra-rapide</span><span class="sw-sep">✦</span>
    </div>
  </div>

  <!-- CONTENU PRINCIPAL -->
  <section class="expertise-section" id="sites-web">
    <div class="container">
      <div class="expertise-grid">
        <div class="expertise-text">
          <div class="section-badge">Création de site web</div>
          <h2>Un site qui<br /><span class="gradient-text">travaille pour vous</span></h2>
          <p class="expertise-intro">Design sur mesure, mobile-first, SEO local optimisé. Je livre votre site en 7 jours avec devis en ligne et réservation de créneaux intégrés — vous vous concentrez sur votre métier.</p>
          <div class="expertise-features">
            <div class="ef-item">
              <div class="ef-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></div>
              <div>
                <strong>SEO local optimisé</strong>
                <p>Je cible votre ville et votre métier précisément pour apparaître quand un client cherche "plombier Lyon 3e" ou "électricien Bordeaux".</p>
              </div>
            </div>
            <div class="ef-item">
              <div class="ef-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg></div>
              <div>
                <strong>Formulaire de devis intelligent</strong>
                <p>Le client décrit son besoin en 2 minutes. Vous recevez une demande qualifiée par email ou SMS — plus de devis dans le vide.</p>
              </div>
            </div>
            <div class="ef-item">
              <div class="ef-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
              <div>
                <strong>Réservation de créneaux en ligne</strong>
                <p>Vos clients bookent directement dans votre agenda. Rappels automatiques, zéro double réservation, zéro appel manqué.</p>
              </div>
            </div>
            <div class="ef-item">
              <div class="ef-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg></div>
              <div>
                <strong>Mobile-first, ultra-rapide</strong>
                <p>70 % de vos visiteurs sont sur téléphone. Je le sais, c'est ma priorité — design impeccable et chargement en moins d'une seconde.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="expertise-visual">
          <div class="mockup-phone-wrap">
            <div class="mockup-phone-glow"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_phone.png" alt="Mockup site web sur mobile" class="mockup-phone-img" />
          </div>
        </div>
      </div>

      <div class="deliverables">
        <h3>Ce qui est inclus dans votre site</h3>
        <div class="deliverables-grid">
          <div class="deliverable-item"><div class="di-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div><div><strong>Page d'accueil</strong><small>Accroche, services, zone d'intervention</small></div></div>
          <div class="deliverable-item"><div class="di-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg></div><div><strong>Page services</strong><small>Détail de toutes vos prestations</small></div></div>
          <div class="deliverable-item"><div class="di-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div><div><strong>Page à propos</strong><small>Votre histoire, vos certifications, vos valeurs</small></div></div>
          <div class="deliverable-item"><div class="di-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg></div><div><strong>Formulaire de devis</strong><small>Demandes qualifiées directement dans votre boîte mail</small></div></div>
          <div class="deliverable-item"><div class="di-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div><div><strong>Agenda en ligne</strong><small>Réservation de créneaux synchronisée</small></div></div>
          <div class="deliverable-item"><div class="di-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><div><strong>Avis clients</strong><small>Intégration Google Reviews pour rassurer</small></div></div>
          <div class="deliverable-item"><div class="di-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><strong>Zone d'intervention</strong><small>Carte et liste des villes couvertes</small></div></div>
          <div class="deliverable-item"><div class="di-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 5.59 5.59l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg></div><div><strong>Page contact</strong><small>Coordonnées, horaires, accès rapide</small></div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- TABLEAU DE BORD RÉSERVATIONS & DEVIS -->
  <section class="mockup-feature-section">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">Fonctionnalité clé</div>
        <h2>Votre tableau de bord<br /><span class="gradient-text">réservations &amp; devis</span></h2>
        <p>Vos clients réservent en ligne, vous recevez une notification. Fini les appels interminables pour caler un rendez-vous.</p>
      </div>
      <div class="booking-mockup-wrap">
        <div class="booking-mockup">
          <div class="bm-header">
            <div class="bm-dots"><span></span><span></span><span></span></div>
            <div class="bm-url">tableau-de-bord.votre-site.fr</div>
          </div>
          <div class="bm-body">
            <aside class="bm-sidebar">
              <div class="bm-nav-item bm-active">📅 Réservations</div>
              <div class="bm-nav-item">📋 Devis</div>
              <div class="bm-nav-item">💬 Messages</div>
              <div class="bm-nav-item">📊 Statistiques</div>
            </aside>
            <main class="bm-main">
              <div class="bm-main-header">
                <h4>Nouvelles demandes</h4>
                <span class="bm-badge-count">3 en attente</span>
              </div>
              <div class="bm-list">
                <div class="bm-item bm-item-new">
                  <div class="bm-item-avatar">MD</div>
                  <div class="bm-item-info"><strong>Martin D.</strong><span>Plomberie — Fuite salle de bain</span></div>
                  <span class="bm-pill bm-pill-new">Nouveau</span>
                </div>
                <div class="bm-item">
                  <div class="bm-item-avatar">CB</div>
                  <div class="bm-item-info"><strong>Claire B.</strong><span>Électricité — Installation cuisine</span></div>
                  <span class="bm-pill bm-pill-pending">En attente</span>
                </div>
                <div class="bm-item">
                  <div class="bm-item-avatar">RL</div>
                  <div class="bm-item-info"><strong>Robert L.</strong><span>Rénovation — Salle de bain complète</span></div>
                  <span class="bm-pill bm-pill-ok">Confirmé ✓</span>
                </div>
              </div>
              <div class="bm-notif">
                <span class="bm-notif-icon">🔔</span>
                <div><strong>Nouvelle réservation !</strong><span>Sophie T. — Vendredi 12h–14h</span></div>
              </div>
            </main>
          </div>
        </div>
      </div>
      <div class="expertise-cta-block" style="margin-top:56px">
        <p>Votre site vitrine à partir de <strong>790€</strong> — livré en 7 jours.</p>
        <a href="<?php echo nls_page_url('tarifs'); ?>" class="btn btn-outline">Voir les tarifs</a>
        <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary">Demander un devis gratuit</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
