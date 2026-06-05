<?php
/**
 * Template Name: À propos
 */
get_header();
?>

  <!-- PAGE HERO — À PROPOS -->
  <section class="ap-hero">
    <div class="container ap-hero-inner">
      <div class="ap-hero-left">
        <h1 class="ap-hero-title">
          <span class="ap-hero-title-top">À propos de</span>
          <span class="gradient-text ap-hero-title-name">NextLink Studio</span>
          <span class="ap-hero-underline"></span>
        </h1>
        <p class="ap-hero-sub">Je construis des présences digitales pour les artisans et indépendants qui <strong>méritent d'être vus</strong>.</p>
        <div class="ap-hero-features">
          <div class="ap-hero-feature">
            <div class="ap-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></div>
            <div class="ap-feature-body"><strong>Approche humaine</strong><p>Écoute, conseils et accompagnement personnalisé.</p></div>
          </div>
          <div class="ap-hero-feature">
            <div class="ap-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div>
            <div class="ap-feature-body"><strong>Résultats concrets</strong><p>Des sites performants, pensés pour attirer et convertir.</p></div>
          </div>
          <div class="ap-hero-feature">
            <div class="ap-feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
            <div class="ap-feature-body"><strong>Transparence totale</strong><p>Tarifs clairs, délais annoncés et communication fluide.</p></div>
          </div>
        </div>
        <div class="ap-hero-actions">
          <a href="#about-section" class="btn btn-primary">→ Découvrir mon approche</a>
          <a href="<?php echo nls_page_url('realisations'); ?>" class="sw-hero-link">Voir mes réalisations →</a>
        </div>
      </div>
      <div class="ap-hero-right">
        <div class="ap-hero-visual">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mockup_logo_fav.webp" alt="NextLink Studio — création digitale" class="ap-hero-img" />
        </div>
        <div class="ap-hero-stats-card">
          <div class="ap-hero-stat"><span class="ap-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></span><strong>7 jours</strong><span>délai moyen de livraison</span></div>
          <div class="ap-hero-stat"><span class="ap-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span><strong>98%</strong><span>de clients satisfaits</span></div>
          <div class="ap-hero-stat"><span class="ap-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></span><strong>Suivi réactif</strong><span>avant, pendant et après</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT PRINCIPAL -->
  <section class="about-section" id="about-section">
    <div class="container">
      <div class="ab-grid">
        <div class="ab-photo-col">
          <div class="ab-photo-card">
            <div class="ab-photo-dots"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guillaume.png" alt="Guillaume — NextLink Studio" class="ab-photo" />
          </div>
          <div class="ab-founder-badge">
            <div class="ab-founder-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div>
            <div class="ab-founder-text"><strong>Fondateur de</strong><span>NextLink Studio</span><span>depuis 2024</span></div>
          </div>
        </div>
        <div class="ab-text-col">
          <div class="section-badge">À propos</div>
          <h2 class="ab-heading">
            <span class="ab-heading-top">Moi c'est</span>
            <span class="gradient-text ab-heading-name">Guillaume.</span>
          </h2>
          <blockquote class="ab-lead-quote">
            Designer web et spécialiste marketing digital —<br />
            <strong>j'aide les artisans à ne plus perdre de chantiers par manque de visibilité.</strong>
          </blockquote>
          <div class="ab-paragraphs">
            <p>Avant de fonder NextLink Studio, j'ai passé plus de 5 ans en entreprise : d'abord comme designer web et infographiste, puis comme chef de projet marketing digital.</p>
            <p>Cette double expérience, c'est ce qui change tout : je ne pense pas qu'au design. Je pense à ce que chaque choix visuel produit comme résultat — est-ce que ça attire des clients ? Est-ce que ça inspire confiance ? Est-ce que ça convertit ?</p>
            <p>Depuis 2024, j'applique ce que j'ai appris en entreprise au service des artisans. Chaque projet est traité en direct, sans intermédiaire.</p>
          </div>
          <div class="ab-stats">
            <div class="ab-stat"><div class="ab-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></div><strong>+5 ans</strong><span>en design &amp; marketing digital</span></div>
            <div class="ab-stat"><div class="ab-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div><strong>Expertise</strong><span>Web, marketing, print &amp; réseaux sociaux</span></div>
            <div class="ab-stat"><div class="ab-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><strong>5 projets</strong><span>livrés avec succès</span></div>
            <div class="ab-stat"><div class="ab-stat-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><strong>Accompagnement</strong><span>personnalisé, réactif et sans intermédiaire</span></div>
          </div>
          <div class="ab-skills">
            <span class="ab-skill"><span class="ab-skill-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></span> Intégration HTML / CSS</span>
            <span class="ab-skill"><span class="ab-skill-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></span> Design graphique</span>
            <span class="ab-skill"><span class="ab-skill-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></span> Chef de projet marketing digital</span>
            <span class="ab-skill"><span class="ab-skill-icon"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></span> Stratégie réseaux sociaux</span>
          </div>
          <div class="ab-actions">
            <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary">→ Me contacter</a>
            <a href="<?php echo nls_page_url('realisations'); ?>" class="sw-hero-link">Voir mes réalisations →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CITATION -->
  <section class="about-quote-section">
    <div class="container">
      <blockquote class="about-quote">
        <span class="about-quote-mark">❝</span>
        <p>Je ne crée pas pour faire joli. Je crée pour que vous soyez vu, reconnu et choisi — que ce soit en ligne, sur les réseaux ou dans la rue.</p>
        <cite>Guillaume, fondateur de NextLink Studio</cite>
      </blockquote>
    </div>
  </section>

  <!-- VALEURS -->
  <section class="av-section">
    <div class="container">
      <div class="av-header">
        <div class="section-badge">✦ Ma façon de travailler</div>
        <h2 class="av-title">Trois principes qui <span class="gradient-text">guident chaque projet</span></h2>
        <p class="av-subtitle">Une méthode simple, pensée pour vous faire gagner du temps, éviter les imprévus et atteindre vos objectifs.</p>
      </div>
      <div class="av-grid">
        <div class="av-card">
          <div class="av-card-icon-wrap"><div class="av-card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div></div>
          <span class="av-card-num">01</span>
          <h3 class="av-card-title">Rapidité</h3>
          <div class="av-card-line"></div>
          <p>Des délais courts et tenus. Pas de semaines d'attente, pas de relances — vous recevez votre livrable dans les temps, sans perdre d'élan.</p>
          <div class="av-card-tag">⏱ Des délais courts, tenus.</div>
        </div>
        <div class="av-card">
          <div class="av-card-icon-wrap"><div class="av-card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div></div>
          <span class="av-card-num">02</span>
          <h3 class="av-card-title">Clarté</h3>
          <div class="av-card-line"></div>
          <p>Zéro jargon, zéro mauvaise surprise. Un devis clair, un tarif fixe, des livrables précis. Vous savez exactement ce que vous obtenez, pour combien, et quand.</p>
          <div class="av-card-tag">📄 Transparence à chaque étape.</div>
        </div>
        <div class="av-card">
          <div class="av-card-icon-wrap"><div class="av-card-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></div></div>
          <span class="av-card-num">03</span>
          <h3 class="av-card-title">Résultats</h3>
          <div class="av-card-line"></div>
          <p>Je ne crée pas de beaux objets pour le plaisir. Je crée des outils qui génèrent des contacts, des appels et des chantiers.</p>
          <div class="av-card-tag">📈 Des outils qui ont un impact.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="cta-final">
    <div class="container cta-final-inner">
      <div class="cta-final-badge">Sans engagement · Réponse sous 24h</div>
      <h2 class="cta-final-title">Prêt à travailler ensemble ?</h2>
      <p class="cta-final-sub">Démarrons avec un appel gratuit de 30 minutes pour parler de votre projet.</p>
      <div class="cta-final-actions">
        <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-lg">Obtenir mon devis gratuit →</a>
        <a href="<?php echo nls_page_url('realisations'); ?>" class="btn btn-ghost btn-lg">Voir mes réalisations</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

