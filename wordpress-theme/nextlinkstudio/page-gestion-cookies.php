<?php
/**
 * Template Name: Gestion des cookies
 */
get_header();
?>

  <section class="legal-page">
    <div class="container legal-container">

      <div class="legal-header">
        <div class="page-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a> / <span>Gestion des cookies</span></div>
        <h1>Gestion des cookies</h1>
        <p class="legal-update">Dernière mise à jour : <?php echo date('d/m/Y'); ?></p>
      </div>

      <div class="legal-content">

        <div class="legal-block">
          <h2>1. Qu'est-ce qu'un cookie ?</h2>
          <p>Un cookie est un petit fichier texte déposé sur votre terminal (ordinateur, tablette, smartphone) lors de la visite d'un site web. Il permet au site de mémoriser des informations sur votre navigation afin d'améliorer votre expérience.</p>
        </div>

        <div class="legal-block">
          <h2>2. Cookies utilisés sur ce site</h2>

          <h3>Cookies essentiels</h3>
          <p>Ces cookies sont nécessaires au bon fonctionnement du site. Ils ne peuvent pas être désactivés.</p>
          <ul>
            <li>Session WordPress (authentification admin)</li>
            <li>Mémorisation des préférences de consentement</li>
          </ul>

          <h3>Cookies analytiques</h3>
          <p>Ces cookies nous permettent de mesurer l'audience du site (pages visitées, durée, origine du trafic) dans le but d'améliorer nos contenus. Ils ne collectent aucune donnée personnelle identifiable.</p>

          <h3>Cookies tiers</h3>
          <p>Certains services intégrés au site (formulaires, cartes, vidéos) peuvent déposer leurs propres cookies. NextLink Studio n'a pas de contrôle direct sur ces cookies.</p>
        </div>

        <div class="legal-block">
          <h2>3. Durée de conservation</h2>
          <p>Les cookies ont une durée de vie limitée, généralement comprise entre la fermeture du navigateur et 13 mois maximum, conformément aux recommandations de la CNIL.</p>
        </div>

        <div class="legal-block">
          <h2>4. Gérer vos préférences</h2>
          <p>Vous pouvez à tout moment modifier vos préférences cookies via les paramètres de votre navigateur :</p>
          <ul>
            <li><strong>Chrome :</strong> Paramètres → Confidentialité et sécurité → Cookies</li>
            <li><strong>Firefox :</strong> Paramètres → Vie privée et sécurité → Cookies</li>
            <li><strong>Safari :</strong> Préférences → Confidentialité → Cookies</li>
            <li><strong>Edge :</strong> Paramètres → Confidentialité → Cookies</li>
          </ul>
          <p>Attention : la désactivation de certains cookies peut affecter le fonctionnement du site.</p>
        </div>

        <div class="legal-block">
          <h2>5. Contact</h2>
          <p>Pour toute question relative à l'utilisation des cookies sur ce site, contactez-nous à : <a href="mailto:guillaume@nextlinkstudio.com">guillaume@nextlinkstudio.com</a></p>
        </div>

      </div>

    </div>
  </section>

<?php get_footer(); ?>
