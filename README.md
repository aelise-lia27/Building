
# 🏗️ Building - Plateforme de services immobiliers et de construction

**Building** est une plateforme web permettant la **vente de maisons**, la **publication d’annonces immobilières**, et la **location d’équipements de construction**. Ce projet a été conçu avec une architecture **MVC** simple en PHP, intégrant une gestion dynamique des services via un tableau de bord administrateur.

---

## 🚀 Fonctionnalités

- 💼 Publication d'annonces (maisons à coût réduit, maisons de luxe, équipements)
- 📸 Téléversement sécurisé d'images pour chaque annonce
- 🧾 Système de badges optionnels avec couleurs personnalisées
- 📦 Architecture MVC (Modèle - Vue - Contrôleur)
- 🔐 Interface d'administration pour la gestion des publications
- 👥 Système d’inscription et de connexion avec redirection selon le rôle utilisateur (Admin ou Utilisateur)

---

## 🛠️ Technologies utilisées

- **PHP** (backend)
- **MySQL** (base de données)
- **HTML5 / CSS3 / JavaScript** (frontend)
- **Architecture MVC maison** (sans framework)
- **Git / GitHub**

---

## 🗂️ Structure du projet

```
Building/
│
├── index.php                # Routeur principal
├── include/
├── src/
│   ├── controllers/         # Contrôleurs du projet
│   ├── models/              # Accès à la base de données
│   └── views/               # Templates (frontend)
│
├── uploads/                 # Dossier d'images uploadées
└── README.md                # Ce fichier
```

---

## ⚙️ Installation locale

### 1. Cloner le projet

```bash
git clone https://github.com/aelise-lia27/Building.git
cd Building
```

### 2. Configurer la base de données

- Importer le fichier `database.sql` dans votre base MySQL.
- Modifier les identifiants de connexion dans `config/db.php`.

### 3. Démarrer un serveur local

Avec PHP CLI :

```bash
php -S localhost:8000
```

Ou utilisez XAMPP / WAMP selon votre préférence.

### 4. Accéder au site

- **Frontend utilisateur** : [http://localhost:8000](http://localhost:8000)
- **Interface administrateur** : [http://localhost:8000/index.php?action=admin](http://localhost:8000/index.php?action=admin)

---

## 🔐 Identifiants de connexion (démo)

- **Admin Email** : `admin@site.com`  
- **Mot de passe** : `ZXxx0000`

---

## ✅ Fonctionnement de l’inscription/connexion

- Le système utilise **AJAX** pour envoyer les données d'inscription/connexion vers un **contrôleur PHP**.
- Après vérification :
  - Si l’utilisateur est **admin**, il est redirigé vers le **dashboard administrateur**.
  - Si c’est un **utilisateur lambda**, il est redirigé vers son **espace personnel**.

---

## 📬 Contact

Pour toute question ou suggestion, n'hésitez pas à ouvrir une issue ou à me contacter via GitHub.

---

🚧 _Projet en cours d’amélioration — les contributions sont les bienvenues !_
