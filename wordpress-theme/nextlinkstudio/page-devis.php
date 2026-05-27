<?php
/**
 * Template Name: Devis
 */
get_header();
?>

  <!-- FORMULAIRE DEVIS -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="contact-grid">
        <div class="dv-left">
          <div class="dv-card">
            <div class="dv-card-dots" aria-hidden="true"></div>
            <div class="dv-hero-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><polyline points="9 15 11 17 15 13"/></svg>
            </div>
            <div class="section-badge" style="margin-bottom: 16px;">Devis personnalisé</div>
            <div class="contact-reassurance">
              <div class="reassurance-item"><span class="ri-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></span><span>Réponse sous 24h garantie</span></div>
              <div class="reassurance-item"><span class="ri-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></span><span>Devis personnalisé et gratuit</span></div>
              <div class="reassurance-item"><span class="ri-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 11H7a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2z"/><path d="M11 11V7a1 1 0 0 1 2 0v4"/></svg></span><span>Sans engagement</span></div>
              <div class="reassurance-item"><span class="ri-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></span><span>Vos données restent confidentielles</span></div>
            </div>
          </div>
          <div class="dv-contact-card">
            <p class="dv-contact-label">Vous préférez me contacter directement ?</p>
            <a href="mailto:guillaume@nextlinkstudio.com" class="dv-contact-link"><span class="ri-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></span>guillaume@nextlinkstudio.com</a>
            <a href="tel:+33640466265" class="dv-contact-link"><span class="ri-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.5a16 16 0 0 0 5.59 5.59l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21 16.92z"/></svg></span>06 40 46 62 65</a>
          </div>
        </div>

        <div class="dv-cf7-wrap">
          <div class="dv-form-header">
            <h2 class="dv-card-title">Parlons de <span class="gradient-text">votre projet</span></h2>
            <p class="dv-card-desc">Parlez-moi de votre projet. Je vous réponds sous 24h, sans engagement.</p>
          </div>
          <?php
          if ( function_exists( 'wpcf7_contact_form' ) ) {
              $forms = WPCF7_ContactForm::find( [ 'title' => 'Devis NextLink Studio' ] );
              if ( ! empty( $forms ) ) {
                  echo do_shortcode( '[contact-form-7 id="' . $forms[0]->id() . '"]' );
              } else {
                  echo '<p style="padding:32px;background:var(--surface,#ede9fe);border-radius:12px;text-align:center;">
                      Créez un formulaire CF7 intitulé exactement <strong>« Devis NextLink Studio »</strong> dans l\'admin WordPress.
                  </p>';
              }
          } else {
              echo '<p style="padding:32px;background:var(--surface,#ede9fe);border-radius:12px;text-align:center;">
                  Installez et activez le plugin <strong>Contact Form 7</strong>.
              </p>';
          }
          ?>
          <div class="form-trust-bar">
            <div class="form-trust-item">
              <span class="form-trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></span>
              <div><strong>Sécurisé</strong><span>Vos données sont protégées</span></div>
            </div>
            <div class="form-trust-item">
              <span class="form-trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
              <div><strong>Sans spam</strong><span>Jamais de spam, promis</span></div>
            </div>
            <div class="form-trust-item">
              <span class="form-trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></span>
              <div><strong>Réponse rapide</strong><span>Je vous recontacte sous 24h</span></div>
            </div>
          </div>
          <p class="form-legal">En soumettant ce formulaire, vous acceptez d'être recontacté par NextLink Studio. Aucune donnée n'est revendue.</p>
        </div>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
