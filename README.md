# Fil-rouge

Projet web PHP minimal pour la gestion (utilisateurs, leçons, documents, présences).

## Structure du projet

- `public/` : point d'entrée web (`index.php`), assets statiques (`css`, `js`, `image`, `uploads`).
- `src/` : logique applicative et pages PHP.
- `templates/` : vues HTML/PHP réutilisables.
- `data/` : configuration & connexion à la base de données (`db-connect.php`).

## Prérequis

- PHP 7.4+ (ou supérieur)
- Serveur web (Apache, Nginx, ou PHP built-in server)
- MySQL / MariaDB

## Installation rapide

1. Copier le contenu du projet dans le répertoire web de votre serveur (ou utiliser le serveur PHP intégré) :

   php -S localhost:8000 -t public

2. Créer une base de données MySQL et mettre à jour les paramètres de connexion dans `data/db-connect.php`.
3. S'assurer que `public/uploads/` est inscriptible par le serveur web :

   chmod 775 public/uploads

4. Ouvrir l'application dans votre navigateur à l'URL appropriée (ex. `http://localhost:8000`).

## Utilisation

- Les pages principales se trouvent dans `src/pages/` et les templates dans `templates/`.
- Pour ajouter/modifier des utilisateurs, leçons ou documents, utiliser les formulaires présents dans l'interface.

## Développement

- Respecter la structure MVC légère présente (séparer logique dans `src/` et vues dans `templates/`).
- Tester les modifications en local avec le serveur PHP intégré ou via un conteneur Docker (optionnel).

## Licence

Ce projet est distribué sous la licence MIT — voir le fichier `LICENSE`.

---

Copyright (c) 2025 Alexis Bessac
