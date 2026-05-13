<?php
/**
 * Template Name: Tarifs
 */
get_header();
?>

  <!-- PAGE HERO TARIFS -->
  <section class="th-hero">
    <div class="container th-hero-inner">

      <!-- GAUCHE -->
      <div class="th-hero-left">
        <div class="page-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a> / <span>Tarifs</span></div>
        <h1 class="th-title">
          Des tarifs<br>
          <span class="gradient-text">clairs &amp; honnêtes</span>
        </h1>
        <div class="th-title-accent"></div>
        <p class="th-sub">Pas d'abonnement caché, pas de frais supplémentaires.<br>Vous savez exactement ce que vous payez avant de signer.</p>

        <div class="th-trust">
          <div class="th-trust-item">
            <span class="th-trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
            Aucun<br><strong>engagement</strong>
          </div>
          <div class="th-trust-item">
            <span class="th-trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></span>
            Paiement<br><strong>100% sécurisé</strong>
          </div>
          <div class="th-trust-item">
            <span class="th-trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg></span>
            Support<br><strong>réactif</strong>
          </div>
          <div class="th-trust-item">
            <span class="th-trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-3.99"/></svg></span>
            Satisfait ou<br><strong>remboursé 14j</strong>
          </div>
        </div>

        <div class="th-actions">
          <a href="#tarifs-detail" class="btn btn-primary btn-lg">Découvrir mon approche →</a>
          <a href="<?php echo nls_page_url('realisations'); ?>" class="th-link">Voir des exemples →</a>
        </div>
      </div>

      <!-- DROITE — carte formules flottante -->
      <div class="th-hero-right" aria-hidden="true">
        <div class="th-blob th-blob--1"></div>
        <div class="th-blob th-blob--2"></div>

        <div class="th-pricing-card">
          <p class="th-pricing-card-title">Trois formules adaptées <span class="gradient-text">à chaque besoin</span></p>
          <div class="th-pricing-rows">
            <div class="th-pricing-row">
              <div class="th-pricing-row-icon th-icon--blue">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
              </div>
              <div class="th-pricing-row-body">
                <strong>Essentiel</strong>
                <span>L'essentiel pour bien démarrer.</span>
              </div>
              <div class="th-pricing-row-price">790 €</div>
            </div>
            <div class="th-pricing-row th-pricing-row--featured">
              <div class="th-pricing-row-icon th-icon--purple">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
              </div>
              <div class="th-pricing-row-body">
                <strong>Pro</strong>
                <span>Pour aller plus loin, plus vite.</span>
              </div>
              <div class="th-pricing-row-price th-price--purple">1 290 €</div>
            </div>
            <div class="th-pricing-row">
              <div class="th-pricing-row-icon th-icon--gold">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 4l3 12h14l3-12-6 7-4-7-4 7-6-7z"/><path d="M5 20h14"/></svg>
              </div>
              <div class="th-pricing-row-body">
                <strong>Prestige</strong>
                <span>Pour des projets sans limites.</span>
              </div>
              <div class="th-pricing-row-price">1 890 €</div>
            </div>
          </div>
          <a href="#tarifs-detail" class="th-pricing-card-link">Comparaison détaillée ↓</a>
        </div>

        <div class="th-badge-float">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><polyline points="9 15 11 17 15 13"/></svg>
        </div>
      </div>

    </div>
  </section>

  <!-- GRILLE TARIFS -->
  <section class="tarifs-page" id="tarifs-detail">
    <div class="container">
      <div class="pricing-grid-page">

        <div class="pricing-card-page">
          <div class="pcp-header">
            <div class="pcp-icon">🌐</div>
            <div class="pcp-name">Essentiel</div>
            <div class="pcp-price"><span>790</span>€</div>
            <div class="pcp-billing">paiement unique</div>
            <p class="pcp-pitch">Le démarrage idéal pour les artisans qui veulent une présence professionnelle en ligne rapidement.</p>
          </div>
          <div class="pcp-body">
            <div class="pcp-section-title">Site web</div>
            <ul class="pcp-features">
              <li class="yes">Site vitrine 5 pages</li>
              <li class="yes">Design professionnel sur mesure</li>
              <li class="yes">Optimisation SEO local</li>
              <li class="yes">Adapté mobile &amp; tablette</li>
              <li class="yes">Formulaire de contact</li>
              <li class="yes">Hébergement 1 an offert</li>
              <li class="yes">Nom de domaine inclus</li>
              <li class="no">Devis en ligne</li>
              <li class="no">Réservation de créneaux</li>
            </ul>
            <div class="pcp-section-title">Identité visuelle</div>
            <ul class="pcp-features">
              <li class="no">Logo</li>
              <li class="no">Charte graphique</li>
              <li class="no">Supports de communication</li>
            </ul>
            <div class="pcp-section-title">LinkedIn</div>
            <ul class="pcp-features">
              <li class="no">Réseaux sociaux</li>
            </ul>
          </div>
          <div class="pcp-footer">
            <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-outline btn-full">Choisir Essentiel</a>
          </div>
        </div>

        <div class="pricing-card-page featured">
          <div class="pcp-popular">⭐ Le plus choisi</div>
          <div class="pcp-header">
            <div class="pcp-icon">🚀</div>
            <div class="pcp-name">Pro</div>
            <div class="pcp-price"><span>1 290</span>€</div>
            <div class="pcp-billing">paiement unique</div>
            <p class="pcp-pitch">L'offre complète pour les artisans qui veulent travailler moins le téléphone et plus sur le chantier.</p>
          </div>
          <div class="pcp-body">
            <div class="pcp-section-title">Site web</div>
            <ul class="pcp-features">
              <li class="yes">Site vitrine <strong>8 pages</strong></li>
              <li class="yes">Design premium sur mesure</li>
              <li class="yes">SEO local avancé</li>
              <li class="yes">Adapté mobile &amp; tablette</li>
              <li class="yes">Formulaire de contact</li>
              <li class="yes">Hébergement 1 an offert</li>
              <li class="yes">Nom de domaine inclus</li>
              <li class="yes"><strong>Devis en ligne intégré</strong></li>
              <li class="yes"><strong>Réservation de créneaux</strong></li>
            </ul>
            <div class="pcp-section-title">Identité visuelle</div>
            <ul class="pcp-features">
              <li class="yes"><strong>Logo offert</strong></li>
              <li class="yes">Charte graphique</li>
              <li class="no">Supports de communication</li>
            </ul>
            <div class="pcp-section-title">LinkedIn</div>
            <ul class="pcp-features">
              <li class="no">Réseaux sociaux</li>
            </ul>
          </div>
          <div class="pcp-footer">
            <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-full">Choisir Pro</a>
          </div>
        </div>

        <div class="pricing-card-page">
          <div class="pcp-header">
            <div class="pcp-icon">👑</div>
            <div class="pcp-name">Prestige</div>
            <div class="pcp-price"><span>1 890</span>€</div>
            <div class="pcp-billing">+ 149€/mois (LinkedIn)</div>
            <p class="pcp-pitch">Pour les artisans qui visent haut : image impeccable, présence maximale, croissance continue.</p>
          </div>
          <div class="pcp-body">
            <div class="pcp-section-title">Site web</div>
            <ul class="pcp-features">
              <li class="yes">Site <strong>illimité en pages</strong></li>
              <li class="yes">Design premium sur mesure</li>
              <li class="yes">SEO local avancé</li>
              <li class="yes">Adapté mobile &amp; tablette</li>
              <li class="yes">Formulaire de contact</li>
              <li class="yes"><strong>Hébergement offert à vie</strong></li>
              <li class="yes">Nom de domaine inclus</li>
              <li class="yes">Devis en ligne intégré</li>
              <li class="yes">Réservation de créneaux</li>
            </ul>
            <div class="pcp-section-title">Identité visuelle</div>
            <ul class="pcp-features">
              <li class="yes">Logo offert</li>
              <li class="yes">Charte graphique complète</li>
              <li class="yes">Supports de communication</li>
            </ul>
            <div class="pcp-section-title">LinkedIn</div>
            <ul class="pcp-features">
              <li class="yes"><strong>8 posts/mois</strong></li>
              <li class="yes">Rédaction + visuels</li>
              <li class="yes">Rapport mensuel</li>
            </ul>
          </div>
          <div class="pcp-footer">
            <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-outline btn-full">Choisir Prestige</a>
          </div>
        </div>

      </div>

      <!-- OPTIONS À LA CARTE -->
      <div class="options-carte">
        <h3>Options à la carte</h3>
        <p>Vous voulez ajouter un service à votre offre ? C'est possible.</p>
        <div class="options-grid">
          <div class="option-item">
            <span class="option-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></span>
            <div><strong>Logo seul</strong><span>290€</span></div>
          </div>
          <div class="option-item">
            <span class="option-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg></span>
            <div><strong>Réseaux sociaux (4/mois)</strong><span>99€/mois</span></div>
          </div>
          <div class="option-item">
            <span class="option-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg></span>
            <div><strong>Réseaux sociaux (8/mois)</strong><span>149€/mois</span></div>
          </div>
          <div class="option-item">
            <span class="option-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></span>
            <div><strong>Réservation créneaux seule</strong><span>+150€</span></div>
          </div>
          <div class="option-item">
            <span class="option-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg></span>
            <div><strong>Devis en ligne seul</strong><span>+120€</span></div>
          </div>
          <div class="option-item">
            <span class="option-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg></span>
            <div><strong>Supports print (cartes, flyers)</strong><span>à partir de 90€</span></div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- FAQ TARIFS -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header">
        <div class="section-badge">FAQ</div>
        <h2>Questions <span class="gradient-text">fréquentes</span></h2>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFaq(this)"><span class="faq-toggle-circle"></span><span class="faq-question-text">Y a-t-il des frais cachés après la livraison ?</span><span class="faq-reponse-tag">Réponse</span><span class="faq-chevron">⌄</span></button>
          <div class="faq-answer"><p>Non. Le prix affiché est le prix final. L'hébergement est offert la première année (Essentiel &amp; Pro) ou à vie (Prestige). Au renouvellement, l'hébergement coûte environ 8€/mois.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFaq(this)"><span class="faq-toggle-circle"></span><span class="faq-question-text">Est-ce que je peux payer en plusieurs fois ?</span><span class="faq-reponse-tag">Réponse</span><span class="faq-chevron">⌄</span></button>
          <div class="faq-answer"><p>Oui, je propose un paiement en 2 ou 3 fois sans frais. 50% à la commande, le reste à la livraison.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFaq(this)"><span class="faq-toggle-circle"></span><span class="faq-question-text">Combien de temps prend la création du site ?</span><span class="faq-reponse-tag">Réponse</span><span class="faq-chevron">⌄</span></button>
          <div class="faq-answer"><p>7 jours ouvrés en moyenne, du premier appel à la mise en ligne.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA FINAL -->
  <section class="cta-final">
    <div class="container cta-final-inner">
      <div class="cta-final-badge">Sans engagement · Réponse sous 24h</div>
      <h2 class="cta-final-title">Prêt à vous lancer ?</h2>
      <p class="cta-final-sub">Choisissez votre offre et démarrons ensemble dès aujourd'hui.</p>
      <div class="cta-final-actions">
        <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary btn-lg">Obtenir mon devis gratuit →</a>
        <a href="<?php echo nls_page_url('realisations'); ?>" class="btn btn-ghost btn-lg">Voir mes réalisations</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

