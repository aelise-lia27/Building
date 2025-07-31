<?php
require_once('./src/model/model.php');
function coockieDelete(){
    $database = dbConnect();
    if (isset($_COOKIE['remember_token'])) {
    $token = $_COOKIE['remember_token'];

    // Supprimer toutes les entrées qui correspondent
    $stmt = $database->prepare("DELETE FROM remember_tokens");
    $stmt->execute();

    // Supprimer le cookie
    setcookie('remember_token', '', time() - 3600, '/');
}
}