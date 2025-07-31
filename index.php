<?php
session_start();
require_once("include/auth.php");
require_once('src/controllers/service.php');
require_once('src/controllers/review.php');
require_once('src/controllers/contact.php');
require_once('src/controllers/auth.php');
require_once('src/controllers/logout.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
    // route vers la page de service
    switch ($_GET['action']) {
        // Acceuil
        case 'Acceuil':
            require_once('./templates/home.php');
            break;

        // Apropos
        case 'Apropos':
            require_once('./templates/about.php');
            break;

        // Services
        case 'Services':
            require_once('./templates/service.php');
            break;

        case 'CreerUnService':
            createService();
            break;

        case 'ModifierUnService':
            // editService();
            break;

        case 'SupprimerUnService':
            // deleteService();
            break;

        case 'Luxury':
            luxuryHouse();
            break;

        case 'Affordable':
            affordableHouse();
            break;

        case 'Instrument':
            instrument();
            break;

        // Publication
        case 'Publication':
            showReviews();
            break;

        case 'PublierUnAvis':
            publishReview();
            break;

        // Contact
        case 'Contact':
            require_once('./templates/contact.php');
            break;

        case 'EnvoyerUnMessage':
            sendMessage();
            break;

        // Login
        case 'Inscription':
            require_once('./templates/register.php');
            break;

        case 'CreerUnCompte':
            registerUser();
            break;

        case 'Connexion':
            require_once('./templates/login.php');
            break;

        case 'SeConnecter':
            loginUser();
            break;

        case 'Deconnexion':
            logout();
            break;

        case 'DashAdmin':
            require_once('./templates/dashboard-admin.php');
            break;

        case 'Profile':
            require_once('./templates/profil-user.php');
            break;

        default:
            require_once('404.php');
            break;
    }
} else {
    require_once('./templates/home.php');
    exit;
}
