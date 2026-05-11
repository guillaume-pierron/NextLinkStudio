# NextLink Studio — Installation WordPress (Local WP)

## Prérequis
- [Local WP](https://localwp.com/) installé
- Plugin **Contact Form 7** à installer depuis l'admin WordPress

---

## Étape 1 — Créer un site dans Local WP

1. Ouvrez Local WP → clic **"+"** (nouveau site)
2. Choisissez un nom, ex: `nextlinkstudio`
3. Sélectionnez la version PHP recommandée (8.x)
4. Cliquez **Create Site**

---

## Étape 2 — Copier le thème

Copiez le dossier `nextlinkstudio/` dans le répertoire des thèmes WordPress :

```
[Chemin Local WP]\nextlinkstudio\app\public\wp-content\themes\nextlinkstudio\
```

Le chemin Local WP est généralement :
- **Windows** : `C:\Users\[Votre nom]\Local Sites\nextlinkstudio\app\public\wp-content\themes\`
- **Mac** : `~/Local Sites/nextlinkstudio/app/public/wp-content/themes/`

---

## Étape 3 — Activer le thème

1. Dans l'admin WordPress → **Apparence → Thèmes**
2. Cliquez sur **Activer** sous "NextLink Studio"

---

## Étape 4 — Créer les pages WordPress

Dans **Pages → Ajouter**, créez une page pour chaque URL. Assignez le bon **modèle de page** dans l'encart "Attributs de page" :

| Titre de la page    | Slug              | Modèle de page              |
|---------------------|-------------------|-----------------------------|
| Accueil             | *(page d'accueil)*| *(page d'accueil WordPress)* |
| Création de site web | `site-web`       | Création de site web         |
| Identité visuelle   | `identite-visuelle` | Identité visuelle           |
| Réseaux sociaux     | `posts-linkedin`  | Réseaux sociaux              |
| Création print      | `creation-print`  | Création print               |
| Expertise           | `expertise`       | Expertise                    |
| Mes réalisations    | `realisations`    | Réalisations                 |
| Tarifs              | `tarifs`          | Tarifs                       |
| À propos            | `a-propos`        | À propos                     |
| Devis gratuit       | `devis`           | Devis                        |

> **Important :** Les slugs doivent correspondre exactement à ceux du tableau.

---

## Étape 5 — Configurer la page d'accueil

1. **Réglages → Lecture**
2. "La page d'accueil affiche" → **Une page statique**
3. "Page d'accueil" → sélectionnez la page **Accueil**

---

## Étape 6 — Installer Contact Form 7

1. **Extensions → Ajouter** → cherchez "Contact Form 7"
2. Installez et activez
3. Créez un formulaire : **Contact → Ajouter**
4. Notez l'**ID** du formulaire (visible dans la liste Contact)
5. Ouvrez `wp-content/themes/nextlinkstudio/page-devis.php`
6. Remplacez `VOTRE_ID_CF7` par l'ID réel :
   ```php
   echo do_shortcode( '[contact-form-7 id="123" title="Devis NextLink Studio"]' );
   ```

---

## Étape 7 — Configurer les emails CF7

Dans Contact Form 7, configurez l'email de destination :
- **Vers** : `hello@nextlinkstudio.fr`
- **Sujet** : Nouvelle demande de devis — [your-subject]

---

## Vérification

- [ ] La page d'accueil s'affiche correctement
- [ ] Le menu de navigation fonctionne
- [ ] Toutes les pages sont accessibles
- [ ] Le formulaire de devis envoie bien un email
- [ ] Le site est responsive sur mobile

---

## Structure des fichiers thème

```
nextlinkstudio/
├── style.css              # En-tête du thème WordPress
├── functions.php          # Configuration du thème
├── header.php             # Navigation (commune à toutes les pages)
├── footer.php             # Footer (commun à toutes les pages)
├── index.php              # Template de secours
├── page.php               # Template de page par défaut
├── front-page.php         # Page d'accueil
├── page-site-web.php      # Template "Création de site web"
├── page-identite-visuelle.php
├── page-expertise.php
├── page-posts-linkedin.php
├── page-creation-print.php
├── page-realisations.php
├── page-tarifs.php
├── page-a-propos.php
├── page-devis.php         # Formulaire CF7
└── assets/
    ├── css/
    │   └── theme.css      # Tous les styles (copie de style.css)
    ├── js/
    │   └── app.js         # JavaScript (menu, animations, etc.)
    └── images/            # Toutes les images du site
```
