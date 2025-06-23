<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connexion à la base
require_once(__DIR__ .'/../config/dbconnect.php'); 

// Vérifier données reçues
if (!isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'])) {
    echo json_encode(['success' => false, 'message' => 'Données manquantes.']);
    exit;
}

$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone'] ?? '');
$password = $_POST['password'];

// Validation serveur
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => "Email invalide."]);
    exit;
}

if (strlen($password) < 8) {
    echo json_encode(['success' => false, 'message' => "Mot de passe trop court."]);
    exit;
}

if (!empty($phone) && !preg_match('/^\+?[0-9]{8,15}$/', $phone)) {
    echo json_encode(['success' => false, 'message' => "Numéro de téléphone invalide."]);
    exit;
}

// Vérifier si email existe déjà
$stmt = $mysqlClient->prepare("SELECT id FROM users WHERE email = ?");
$stmt->execute([$email]);
if ($stmt->rowCount() > 0) {
    echo json_encode(['success' => false, 'message' => "Cet email est déjà utilisé."]);
    exit;
}

// Hasher le mot de passe
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insertion
$stmt = $mysqlClient->prepare("INSERT INTO users (firstname, lastname, email, phone, password) VALUES (?, ?, ?, ?, ?)");
$success = $stmt->execute([$firstname, $lastname, $email, $phone, $hashedPassword]);

if ($success) {
    $userId = $mysqlClient->lastInsertId();

    // Démarrer la session
    session_start();
    $_SESSION['user_id'] = $userId;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => "Erreur lors de l'enregistrement."]);
}?>

