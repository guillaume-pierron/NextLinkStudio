<?php
/**
 * Template Name: Tarifs
 */
get_header();
?>

  <!-- GRILLE TARIFS -->
  <section class="tarifs-page" id="tarifs-detail">
    <div class="container">
      <!-- TARIFS À LA CARTE -->
      <div class="tc-section">
        <div class="tc-header">
          <div class="section-badge">À la carte</div>
          <h2 class="tc-title">Un seul service ? <span class="gradient-text">C'est possible.</span></h2>
          <p class="tc-sub">Pas besoin d'un pack complet — commandez exactement ce dont vous avez besoin.</p>
        </div>
        <!-- SITE WEB — section dédiée -->
        <div class="tc-sw-section">

          <!-- Header -->
          <div class="tc-sw-header">
            <div class="tc-sw-header-left">
              <div class="tc-icon" style="--tc-color:#7c3aed;--tc-bg:rgba(124,58,237,0.08);">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
              </div>
              <div>
                <div class="tc-name">Site web</div>
                <div class="tc-from">à partir de <strong>490 €</strong></div>
              </div>
            </div>
            <div class="tc-sw-header-actions">
              <a href="<?php echo nls_page_url('devis'); ?>" class="btn btn-primary">Demander un devis →</a>
              <a href="<?php echo nls_page_url('site-web'); ?>" class="tc-cta-secondary" style="color:#7c3aed; text-align:center;">En savoir plus →</a>
            </div>
          </div>

          <!-- 3 offres -->
          <div class="tc-tiers-grid">

            <div class="tc-tier-card">
              <div class="tc-tier-card-name">Site Essentiel</div>
              <div class="tc-tier-card-price">490 €</div>
              <ul class="tc-tier-card-features">
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>Jusqu'à 3 pages</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>Design sur mesure</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Formulaire de contact</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>SEO de base</li>
              </ul>
            </div>

            <div class="tc-tier-card tc-tier-card--featured">
              <div class="tc-tier-card-popular">Populaire ⭐</div>
              <div class="tc-tier-card-name">Site Complet</div>
              <div class="tc-tier-card-price tc-tier-card-price--featured">790 €</div>
              <ul class="tc-tier-card-features">
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>Jusqu'à 5 pages</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>Design sur mesure</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Formulaire de contact</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>SEO renforcé</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>Structure avancée</li>
              </ul>
            </div>

            <div class="tc-tier-card">
              <div class="tc-tier-card-name">Site Pro</div>
              <div class="tc-tier-card-price">1 290 €</div>
              <ul class="tc-tier-card-features">
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>Jusqu'à 8 pages</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>Design sur mesure</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Formulaire de contact</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>SEO renforcé</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>Demande de devis en ligne</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>Réservation de rendez-vous</li>
                <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"/></svg>Automatisations avancées</li>
              </ul>
            </div>

          </div>

        </div>

        <!-- SÉPARATEUR -->
        <div class="tc-sep">
          <span>PRESTATIONS COMPLÉMENTAIRES</span>
        </div>
        <h3 class="tc-sep-title">Complétez <span class="gradient-text">votre communication</span></h3>
        <div class="tc-grid tc-grid--3">

          <!-- IDENTITÉ VISUELLE -->
          <div class="tc-card tc-card--orange">
            <div class="tc-card-head">
              <div class="tc-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="13.5" cy="6.5" r="1.5"/><circle cx="17.5" cy="10.5" r="1.5"/><circle cx="8.5" cy="7.5" r="1.5"/><circle cx="6.5" cy="12.5" r="1.5"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.554C21.965 6.012 17.461 2 12 2z"/></svg>
              </div>
              <div>
                <div class="tc-name">Identité visuelle</div>
                <div class="tc-from">à partir de <strong>299 €</strong></div>
              </div>
            </div>
            <ul class="tc-list">
              <li>
                <div class="tc-list-label">Logo seul <span class="tc-list-sub">3 propositions</span></div>
                <div class="tc-list-price">299 €</div>
              </li>
              <li>
                <div class="tc-list-label">Logo + charte graphique <span class="tc-list-sub">couleurs, typos, règles</span></div>
                <div class="tc-list-price">499 €</div>
              </li>
              <li>
                <div class="tc-list-label">Pack complet <span class="tc-list-sub">logo + charte + supports</span></div>
                <div class="tc-list-price">790 €</div>
              </li>
            </ul>
            <div class="tc-cta-group">
              <a href="<?php echo nls_page_url('devis'); ?>" class="tc-cta">Demander un devis →</a>
              <a href="<?php echo nls_page_url('identite-visuelle'); ?>" class="tc-cta-secondary">En savoir plus →</a>
            </div>
          </div>

          <!-- RÉSEAUX SOCIAUX -->
          <div class="tc-card tc-card--blue">
            <div class="tc-card-head">
              <div class="tc-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              </div>
              <div>
                <div class="tc-name">Réseaux sociaux</div>
                <div class="tc-from">à partir de <strong>49 €</strong></div>
              </div>
            </div>
            <ul class="tc-list">
              <li>
                <div class="tc-list-label">Post à l'unité <span class="tc-list-sub">visuel + texte</span></div>
                <div class="tc-list-price">49 €</div>
              </li>
              <li>
                <div class="tc-list-label">4 posts / mois <span class="tc-list-sub">publication incluse</span></div>
                <div class="tc-list-price">149 €<span class="tc-mo">/mois</span></div>
              </li>
              <li>
                <div class="tc-list-label">8 posts / mois <span class="tc-list-sub">+ rapport mensuel</span></div>
                <div class="tc-list-price">249 €<span class="tc-mo">/mois</span></div>
              </li>
            </ul>
            <div class="tc-cta-group">
              <a href="<?php echo nls_page_url('devis'); ?>" class="tc-cta">Demander un devis →</a>
              <a href="<?php echo nls_page_url('reseaux-sociaux'); ?>" class="tc-cta-secondary">En savoir plus →</a>
            </div>
          </div>

          <!-- PRINT -->
          <div class="tc-card tc-card--green">
            <div class="tc-card-head">
              <div class="tc-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
              </div>
              <div>
                <div class="tc-name">Print</div>
                <div class="tc-from">à partir de <strong>49 €</strong></div>
              </div>
            </div>
            <ul class="tc-list">
              <li>
                <div class="tc-list-label">Flyer A5 recto <span class="tc-list-sub">PDF haute résolution</span></div>
                <div class="tc-list-price">49 €</div>
              </li>
              <li>
                <div class="tc-list-label">Flyer A5 recto/verso</div>
                <div class="tc-list-price">79 €</div>
              </li>
              <li>
                <div class="tc-list-label">Carte de visite <span class="tc-list-sub">design + fichier</span></div>
                <div class="tc-list-price">69 €</div>
              </li>
              <li>
                <div class="tc-list-label">Roll-up / kakémono</div>
                <div class="tc-list-price">149 €</div>
              </li>
            </ul>
            <div class="tc-cta-group">
              <a href="<?php echo nls_page_url('devis'); ?>" class="tc-cta">Demander un devis →</a>
              <a href="<?php echo nls_page_url('print'); ?>" class="tc-cta-secondary">En savoir plus →</a>
            </div>
          </div>

        </div><!-- end tc-grid--3 -->
      </div>

    </div>
  </section>

  <!-- GARANTIES -->
  <section class="trust-section">
    <div class="container">
      <div class="trust-header">
        <h2>Mon engagement <span class="gradient-text">envers vous</span></h2>
        <p>Des garanties claires pour une collaboration en toute confiance.</p>
      </div>
      <div class="trust-grid">

        <div class="trust-card">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Aucun engagement</h3>
          <p>Pas de contrat longue durée imposé.</p>
          <div class="trust-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
        </div>

        <div class="trust-card trust-card--featured">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
          </div>
          <h3>Paiement 100% sécurisé</h3>
          <p>Virement ou carte, en toute sécurité.</p>
          <div class="trust-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
        </div>

        <div class="trust-card">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
          </div>
          <h3>Support réactif</h3>
          <p>Réponse sous 24h, humaine et directe.</p>
          <div class="trust-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
        </div>

        <div class="trust-card">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-3.99"/></svg>
          </div>
          <h3>Modifications incluses</h3>
          <p>Jusqu'à votre entière satisfaction.</p>
          <div class="trust-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg></div>
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
          <div class="faq-answer"><p>Non. Le prix affiché est le prix final. Le seul frais récurrent pour un site web est le <strong>nom de domaine</strong> — environ 20 €/an. Pour les autres prestations (identité visuelle, print, réseaux sociaux), tout est livré en une fois, sans abonnement.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFaq(this)"><span class="faq-toggle-circle"></span><span class="faq-question-text">Est-ce que je peux payer en plusieurs fois ?</span><span class="faq-reponse-tag">Réponse</span><span class="faq-chevron">⌄</span></button>
          <div class="faq-answer"><p>Vous ne payez qu'à la livraison. Aucun règlement avant que le projet soit terminé et que vous soyez satisfait.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-question" onclick="toggleFaq(this)"><span class="faq-toggle-circle"></span><span class="faq-question-text">Combien de temps prend la réalisation d'un projet ?</span><span class="faq-reponse-tag">Réponse</span><span class="faq-chevron">⌄</span></button>
          <div class="faq-answer"><p>Tout dépend de la prestation. Un flyer ou des visuels réseaux sociaux sont livrés en quelques jours. Une identité visuelle prend 1 à 2 semaines. Un site web vitrine nécessite en général 2 à 4 semaines, du premier échange à la mise en ligne.</p></div>
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

