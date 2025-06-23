-- Création de la base de données
CREATE DATABASE building;

-- Utilisation de la base
USE building;

-- Table des utilisateurs (users)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,                 -- Identifiant unique auto-incrémenté
    firstname VARCHAR(100),                            -- Prénom de l'utilisateur
    lastname VARCHAR(100),                             -- Nom de famille de l'utilisateur
    email VARCHAR(100) UNIQUE,                         -- Adresse email unique
    password VARCHAR(255),                             -- Mot de passe (haché)
    role ENUM('admin', 'visitor') DEFAULT 'visitor',   -- Rôle : admin ou visiteur (par défaut)
    terms TINYINT(1) NOT NULL,                         -- A accepté les conditions ? (1 = oui, 0 = non)
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP      -- Date d'inscription automatique
);

-- Table des services (gérés par l'admin)
CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,                 -- ID du service
    service_name VARCHAR(100),                         -- Nom du service (ex : Vente de maison)
    description TEXT,                                  -- Description détaillée
    image_url VARCHAR(255),                            -- Chemin ou URL de l'image
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP      -- Date d'ajout
);

-- Table des publications (avis ou commentaires des visiteurs)
CREATE TABLE publications (
    id INT AUTO_INCREMENT PRIMARY KEY,                    -- Identifiant unique
    title VARCHAR(255) NOT NULL,                          -- Titre de la publication
    content TEXT NOT NULL,                                -- Contenu détaillé
    date_publication DATETIME DEFAULT CURRENT_TIMESTAMP,  -- Date de publication
    date_modification DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Date de dernière modification automatique
    active TINYINT(1) DEFAULT 1,                          -- Statut actif (1=actif, 0=inactif)
    poster VARCHAR(100),                                  -- Nom ou pseudo de la personne qui poste
    id_users INT,                                         -- Clé étrangère vers la table users
    FOREIGN KEY (id_users) REFERENCES users(id) ON DELETE CASCADE
);


-- Table des messages (contact envoyés depuis le formulaire)
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,                 -- ID du message
    user_id INT NULL,                                  -- Clé étrangère (facultative) vers l'utilisateur connecté
    firstname VARCHAR(100),                            -- Prénom du visiteur
    email VARCHAR(100),                                -- Email du visiteur
    message TEXT,                                      -- Contenu du message
    sent_at DATETIME DEFAULT CURRENT_TIMESTAMP,        -- Date d'envoi du message
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL -- Si l'utilisateur est supprimé, user_id devient NULL
);
