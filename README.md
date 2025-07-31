# building_site
# 🏗️ Building - Plateforme de services immobiliers et de construction

**Building** est une plateforme web permettant la **vente de maisons**, la **publication d’annonces immobilières**, et la **location d’équipements de construction**. Ce projet a été conçu avec une architecture **MVC** simple en PHP, intégrant une gestion dynamique des services via un tableau de bord administrateur.

## 🚀 Fonctionnalités

- 💼 Publication d'annonces (maisons à coût réduit, maisons de luxe, équipements)
- 📸 Upload d'image sécurisé pour chaque annonce
- 🧾 Système de badge optionnel avec couleur personnalisée
- 📦 Architecture MVC (Modèle - Vue - Contrôleur)
- 🔐 Interface d'administration pour la gestion des publications
- 🌐 Interface utilisateur responsive avec HTML/CSS/JavaScript

## 🛠️ Technologies utilisées

- PHP (backend)
- MySQL (base de données)
- HTML5 / CSS3 / JavaScript (frontend)
- Architecture MVC maison (sans framework)
- Git / GitHub

## 🗂️ Structure du projet

Building/
│
├── index.php # Routeur principal
├── src/
│ ├── controllers/ # Contrôleurs du projet
│ ├── models/ # Accès base de données
│ └── views/ # Templates (frontend)
│
├── uploads/ # Dossier d'images uploadées
├── public/ # Fichiers accessibles publiquement
└── index
└── README.md # Ce fichier




## 📦 Installation locale

1. Cloner le repo :
   ```bash
   git clone https://github.com/aelise-lia27/Building.git
   cd building
Configurer la base de données :

Importer le fichier database.sql

Modifier les infos de connexion dans config/db.php

Démarrer un serveur local (ex: avec XAMPP, WAMP ou PHP CLI) :

php -S localhost:8000

Accéder au site :

Front : http://localhost:8000

Admin : http://localhost:8000/index.php?action=admin