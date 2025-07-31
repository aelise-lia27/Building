<?php
session_start();

require_once(__DIR__ .'/../config/dbconnect.php'); 

// Supprimer le token en base
if (isset($_COOKIE['remember_token'])) {
    $token = $_COOKIE['remember_token'];

    // Supprimer toutes les entrées qui correspondent
    $stmt = $mysqlClient->prepare("DELETE FROM remember_tokens");
    $stmt->execute();

    // Supprimer le cookie
    setcookie('remember_token', '', time() - 3600, '/');
}
session_unset();
session_destroy();
header('Location: /index.php');
exit;