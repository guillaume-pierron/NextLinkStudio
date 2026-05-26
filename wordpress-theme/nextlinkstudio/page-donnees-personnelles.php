<?php
/**
 * Template Name: Données personnelles
 */
get_header();
?>

  <section class="legal-page">
    <div class="container legal-container">

      <div class="legal-header">
        <div class="page-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a> / <span>Données personnelles</span></div>
        <h1>Données personnelles</h1>
        <p class="legal-update">Dernière mise à jour : <?php echo date('d/m/Y'); ?></p>
      </div>

      <div class="legal-content">

        <div class="legal-block">
          <h2>1. Responsable du traitement</h2>
          <p>Les données personnelles collectées sur ce site sont traitées par :</p>
          <ul>
            <li><strong>Responsable :</strong> Guillaume Pierron</li>
            <li><strong>Structure :</strong> NextLink Studio</li>
            <li><strong>SIRET :</strong> 932 081 136 00016</li>
            <li><strong>Email :</strong> <a href="mailto:guillaume@nextlinkstudio.com">guillaume@nextlinkstudio.com</a></li>
          </ul>
        </div>

        <div class="legal-block">
          <h2>2. Données collectées</h2>
          <p>Lors de l'utilisation du formulaire de contact ou de demande de devis, les données suivantes peuvent être collectées :</p>
          <ul>
            <li>Prénom et nom</li>
            <li>Nom de l'entreprise</li>
            <li>Adresse email</li>
            <li>Numéro de téléphone</li>
            <li>Métier / secteur d'activité</li>
            <li>Message libre</li>
          </ul>
          <p>Ces données sont collectées uniquement dans le but de vous recontacter dans le cadre de votre demande.</p>
        </div>

        <div class="legal-block">
          <h2>3. Base légale</h2>
          <p>Le traitement de vos données repose sur votre <strong>consentement explicite</strong> lors de la soumission du formulaire, conformément à l'article 6(1)(a) du RGPD.</p>
        </div>

        <div class="legal-block">
          <h2>4. Durée de conservation</h2>
          <p>Vos données sont conservées pendant une durée maximale de <strong>3 ans</strong> à compter de votre dernière interaction, puis supprimées ou archivées conformément aux obligations légales.</p>
        </div>

        <div class="legal-block">
          <h2>5. Destinataires des données</h2>
          <p>Vos données sont destinées exclusivement à Guillaume Pierron / NextLink Studio. Elles ne sont ni vendues, ni cédées, ni transmises à des tiers à des fins commerciales.</p>
        </div>

        <div class="legal-block">
          <h2>6. Vos droits</h2>
          <p>Conformément au RGPD, vous disposez des droits suivants sur vos données :</p>
          <ul>
            <li><strong>Droit d'accès</strong> — obtenir une copie de vos données</li>
            <li><strong>Droit de rectification</strong> — corriger des données inexactes</li>
            <li><strong>Droit à l'effacement</strong> — demander la suppression de vos données</li>
            <li><strong>Droit à la portabilité</strong> — recevoir vos données dans un format structuré</li>
            <li><strong>Droit d'opposition</strong> — vous opposer à un traitement</li>
          </ul>
          <p>Pour exercer ces droits, contactez-nous à : <a href="mailto:guillaume@nextlinkstudio.com">guillaume@nextlinkstudio.com</a></p>
        </div>

        <div class="legal-block">
          <h2>7. Réclamation</h2>
          <p>Si vous estimez que vos droits ne sont pas respectés, vous pouvez adresser une réclamation à la <strong>CNIL</strong> (Commission Nationale de l'Informatique et des Libertés) sur <a href="https://www.cnil.fr" target="_blank" rel="noopener">www.cnil.fr</a>.</p>
        </div>

      </div>

    </div>
  </section>

<?php get_footer(); ?>
