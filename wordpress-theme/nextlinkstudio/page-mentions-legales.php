<?php
/**
 * Template Name: Mentions légales
 */
get_header();
?>

  <section class="legal-page">
    <div class="container legal-container">

      <div class="legal-header">
        <div class="page-breadcrumb"><a href="<?php echo home_url('/'); ?>">Accueil</a> / <span>Mentions légales</span></div>
        <h1>Mentions légales</h1>
        <p class="legal-update">Dernière mise à jour : <?php echo date('d/m/Y'); ?></p>
      </div>

      <div class="legal-content">

        <div class="legal-block">
          <h2>1. Éditeur du site</h2>
          <p>Le site <strong>nextlinkstudio.com</strong> est édité par :</p>
          <ul>
            <li><strong>Nom commercial :</strong> NextLink Studio</li>
            <li><strong>Responsable :</strong> Guillaume Pierron</li>
            <li><strong>Statut :</strong> Auto-entrepreneur</li>
            <li><strong>SIREN :</strong> 932 081 136</li>
            <li><strong>SIRET :</strong> 932 081 136 00016</li>
            <li><strong>Adresse :</strong> Paris — France</li>
            <li><strong>Email :</strong> <a href="mailto:guillaume@nextlinkstudio.com">guillaume@nextlinkstudio.com</a></li>
            <li><strong>Téléphone :</strong> <a href="tel:+33640466265">06 40 46 62 65</a></li>
          </ul>
        </div>

        <div class="legal-block">
          <h2>2. Directeur de la publication</h2>
          <p>Guillaume Pierron — <a href="mailto:guillaume@nextlinkstudio.com">guillaume@nextlinkstudio.com</a></p>
        </div>

        <div class="legal-block">
          <h2>3. Hébergement</h2>
          <p>Ce site est hébergé par :</p>
          <ul>
            <li><strong>Hébergeur :</strong> [Nom de l'hébergeur]</li>
            <li><strong>Adresse :</strong> [Adresse de l'hébergeur]</li>
            <li><strong>Site web :</strong> [URL de l'hébergeur]</li>
          </ul>
        </div>

        <div class="legal-block">
          <h2>4. Propriété intellectuelle</h2>
          <p>L'ensemble des contenus présents sur ce site (textes, images, visuels, logos, structure) est la propriété exclusive de NextLink Studio, sauf mention contraire. Toute reproduction, distribution ou utilisation sans autorisation préalable écrite est interdite.</p>
        </div>

        <div class="legal-block">
          <h2>5. Limitation de responsabilité</h2>
          <p>NextLink Studio s'efforce de maintenir les informations publiées à jour et exactes. Cependant, la responsabilité de l'éditeur ne saurait être engagée en cas d'erreurs ou d'omissions dans le contenu, ni pour tout dommage résultant de l'utilisation du site.</p>
        </div>

        <div class="legal-block">
          <h2>6. Droit applicable</h2>
          <p>Les présentes mentions légales sont soumises au droit français. En cas de litige, les tribunaux compétents sont ceux du ressort de Paris.</p>
        </div>

      </div>

    </div>
  </section>

<?php get_footer(); ?>
