<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connexion à la base
require_once(__DIR__ .'/../config/dbconnect.php'); 

// Vérifier données reçues
if (!isset($_POST['nom'], $_POST['email'], $_POST['note'], $_POST['comment'], $_POST['allowed'])) {
    echo json_encode(['success' => false, 'message' => 'Données manquantes.']);
    exit;
}

$nom = trim($_POST['nom']);
$email = trim($_POST['email']);
$note = trim($_POST['note']);
$comment = trim($_POST['comment']);
$allowed = trim($_POST['allowed']);


// Validation serveur
if (strlen($nom) < 2 || strlen($nom) > 30 || !preg_match('/^[a-zA-ZÀ-ÿ\' -]+$/', $nom)) {
    echo json_encode(['success' => false, 'message' => "Nom invalide. Veuillez entrer un nom valide (lettres uniquement)."]);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => "Email invalide."]);
    exit;
}

if ($note === '' || $note === null) {
    echo json_encode(['success' => false, 'message' => "vous devez sélectionner une note."]);
    exit;
}

if (strlen($comment) < 20) {
    echo json_encode(['success' => false, 'message' => "Le témoignage est trop court."]);
    exit;
}

if ($allowed !== "on") {
    echo json_encode(['success' => false, 'message' => "Vous devez autoriser la publication de votre avis."]);
    exit;
}


// Vérifier si l'utilisateur est connecté (optionnel)
session_start();
$id_user = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// Insertion dans la base
try {
    $sql = "INSERT INTO publications (poster, email, note, comment, allowed, id_users)
            VALUES (:poster, :email, :note, :comment, :allowed, :id_user)";
    
    $stmt = $mysqlClient->prepare($sql);
    $stmt->execute([
        ':poster' => $nom,
        ':email' => $email,
        ':note' => $note,
        ':comment' => $comment,
        ':allowed' => $allowed,
        ':id_user' => $id_user
    ]);

    echo json_encode(['success' => true, 'message' => "Merci pour votre témoignage !"]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => "Erreur lors de l'enregistrement : " . $e->getMessage()]);
}

