<?php
require_once('src/controllers/sub-service1.php');
require_once('src/controllers/sub-service2.php');
require_once('src/controllers/instrument.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
    // route vers la page de service
    if ($_GET['action'] === 'service') {
        header('Location: /templates/service.php');
        exit;
    } elseif ($_GET['action'] === 'luxury') {
        luxuryHouse();
        exit;
    } elseif ($_GET['action'] === 'affordable') {
        affordableHouse();
        exit;
    } elseif ($_GET['action'] === 'Instrument') {
        intrument();
        exit;
    }elseif($_GET['action'] === 'Instrument'){
        intrument();
        exit;
    }elseif($_GET['action'] === 'Instrument'){
        intrument();
        exit;
    }elseif($_GET['action'] === 'Instrument'){
        intrument();
        exit;
    }elseif($_GET['action'] === 'Instrument'){
        intrument();
        exit;
    }elseif($_GET['action'] === 'Instrument'){
        intrument();
        exit;
    }
    else {
        echo "Erreur 404 : la page que vous recherchez n'existe pas.";
        exit;
    };
} else {
    header('Location: /templates/homepage.php');
    exit;
}
