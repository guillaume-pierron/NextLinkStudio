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
        <div class="tc-grid">

          <!-- SITE WEB -->
          <div class="tc-card tc-card--purple">
            <div class="tc-card-head">
              <div class="tc-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
              </div>
              <div>
                <div class="tc-name">Site web</div>
                <div class="tc-from">à partir de <strong>500 €</strong></div>
              </div>
            </div>
            <ul class="tc-list">
              <li>
                <div class="tc-list-label">Vitrine simple <span class="tc-list-sub">1–3 pages</span></div>
                <div class="tc-list-price">500 €</div>
              </li>
              <li>
                <div class="tc-list-label">Vitrine complète <span class="tc-list-sub">5 pages + SEO</span></div>
                <div class="tc-list-price">790 €</div>
              </li>
              <li>
                <div class="tc-list-label">Pro <span class="tc-list-sub">8 pages + devis + réservation</span></div>
                <div class="tc-list-price">1 290 €</div>
              </li>
            </ul>
            <a href="<?php echo nls_page_url('devis'); ?>" class="tc-cta">Demander un devis →</a>
          </div>

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
            <a href="<?php echo nls_page_url('devis'); ?>" class="tc-cta">Demander un devis →</a>
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
            <a href="<?php echo nls_page_url('devis'); ?>" class="tc-cta">Demander un devis →</a>
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
            <a href="<?php echo nls_page_url('devis'); ?>" class="tc-cta">Demander un devis →</a>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- GARANTIES -->
  <section class="th-trust-section">
    <div class="container">
      <h2 class="th-trust-title">Mon engagement <span class="gradient-text">envers vous</span></h2>
      <div class="th-trust-bar">
        <div class="th-trust-item">
          <span class="th-trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
          <div><strong>Aucun engagement</strong><span>Pas de contrat longue durée imposé</span></div>
        </div>
        <div class="th-trust-item">
          <span class="th-trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></span>
          <div><strong>Paiement 100% sécurisé</strong><span>Virement ou carte, en toute sécurité</span></div>
        </div>
        <div class="th-trust-item">
          <span class="th-trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg></span>
          <div><strong>Support réactif</strong><span>Réponse sous 24h, humaine et directe</span></div>
        </div>
        <div class="th-trust-item">
          <span class="th-trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-3.99"/></svg></span>
          <div><strong>Satisfait ou remboursé 14j</strong><span>Si le rendu ne vous convient pas</span></div>
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

