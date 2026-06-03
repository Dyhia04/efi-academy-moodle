# EFI-Academy Moodle — Thème personnalisé

> Reproduction et amélioration de la plateforme de formation en ligne EFI-Academy  
> Stage chez **Logwire Consulting** — Mai–Juillet 2026

##  Objectif du projet

Déploiement, reproduction et refonte graphique d'une plateforme LMS Moodle sur serveur de développement, dans le cadre d'un stage de L3 Informatique à CY Cergy Paris Université.

##  Liens

- **Site de développement** : [efi-moodle.alwaysdata.net](https://efi-moodle.alwaysdata.net)
- **Site de production** : [formation.efi-academy.com](https://formation.efi-academy.com)

## Stack technique

| Composant | Technologie |
|-----------|-------------|
| CMS | Moodle 5.0.2 |
| Serveur | PHP 8.3 |
| Base de données | MariaDB 11.4 |
| Front-end | HTML5, CSS3/SCSS, JavaScript |
| Hébergement | AlwaysData |
| Versioning | Git / GitHub |
| IDE | Visual Studio Code + SFTP |

## Structure du projet

```
efi-academy-moodle/
├── README.md
├── theme/
│   └── efi_boost/
│       ├── config.php          # Configuration du thème enfant
│       ├── version.php         # Métadonnées du plugin
│       ├── lib.php             # Callbacks SCSS
│       ├── scss/
│       │   └── custom.scss     # Styles personnalisés
│       └── lang/
│           ├── fr/
│           │   └── theme_efi_boost.php
│           └── en/
│               └── theme_efi_boost.php
├── scss/
│   ├── variables.scss          # Variables SCSS (couleurs, typo)
│   └── custom.scss             # SCSS personnalisé complet
└── docs/
    └── screenshots/
```

## Personnalisations

### Palette de couleurs

| Variable | Couleur | Usage |
|----------|---------|-------|
| `$primary` | `#1565C0` | Navbar, en-têtes, boutons principaux |
| `$secondary` | `#FF8F00` | Accents, boutons secondaires, liens hover |
| `$body-bg` | `#F8F9FC` | Fond de page |
| `$success` | `#2E7D32` | Messages de succès |
| `$danger` | `#C62828` | Alertes et erreurs |

### Éléments personnalisés

- **Navbar** : dégradé bleu avec ombre portée
- **En-tête de page** : dégradé avec cercles décoratifs
- **Cartes de cours** : coins arrondis, ombre, animation au survol
- **Page de connexion** : illustration + formulaire redesigné
- **Footer** : harmonisé avec la navbar, coins arrondis
- **Responsive** : adaptations pour écrans < 768px

## Catégories de formation

| Catégorie | Cours |
|-----------|-------|
| **Prod** | Serveur Apache, Oracle, Tomcat |
| **DevOps** | Docker, Kubernetes, CI/CD |
| **Test** | Dynatrace, SQL, Script Shell |

## Installation

1. Cloner le dépôt
2. Copier `theme/efi_boost/` dans le répertoire `theme/` de Moodle
3. Aller dans Administration > Notifications pour installer le plugin
4. Activer le thème dans Administration > Apparence > Sélecteur de thème

Ou utiliser les fichiers `scss/` via Administration > Apparence > Boost > Réglages avancés.

## Auteur

**Dyhia MOKRI** — L3 Informatique, CY Cergy Paris Université  
Stage chez Logwire Consulting sous la tutelle de Youcef ZEMIHI

## Licence

Projet réalisé dans le cadre d'un stage universitaire.