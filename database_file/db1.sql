CREATE DATABASE building_db;

USE building_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    mot_de_passe VARCHAR(255),
    role ENUM('admin', 'visiteur') DEFAULT 'visiteur',
    date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_service VARCHAR(100),
    description TEXT,
    image_url VARCHAR(255),
    date_ajout DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE publications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    contenu TEXT,
    date_publication DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NULL,
    nom VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    date_envoi DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);
