<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connexion à la base
require_once(__DIR__ .'/../src/model/model.php'); 
dbConnect();
session_start();

// Vérifier données reçues
if (!isset( $_POST['email'], $_POST['password'])) {
    echo json_encode(['success' => false, 'message' => 'Données manquantes.']);
    exit;
}

$email = trim($_POST['email']);
$password = $_POST['password'];
$remember = isset($_POST['remember']) ? $_POST['remember'] : '';

// Validation serveur
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => "Email invalide."]);
    exit;
}

if (strlen($password) < 8) {
    echo json_encode(['success' => false, 'message' => "Mot de passe trop court."]);
    exit;
}


// Rechercher l'utilisateur
$stmt = $mysqlClient->prepare("SELECT id, firstname, lastname, email, password, role FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo json_encode(['success' => false, 'message' => 'Aucun compte trouvé avec cet email.']);
    exit;
}

// Vérification du mot de passe (si hashé dans la base)
if (!password_verify($password, $user['password'])) {
    echo json_encode(['success' => false, 'message' => 'Mot de passe incorrect.']);
    exit;
}


if ( $_POST['remember'] === 'on') {
    // Supprimer les anciens tokens pour cet utilisateur
    $stmt = $mysqlClient->prepare('DELETE FROM remember_tokens WHERE user_id = ?');
    $stmt->execute([$user['id']]);

    // 1. Générer un token unique
    $token = bin2hex(random_bytes(32)); // 64 caractères

    // 2. Hasher le token avant de l'enregistrer en base (jamais en clair !)
    $tokenHash = password_hash($token, PASSWORD_DEFAULT);

    // 3. Expiration dans 30 jours
    $expiration = date('Y-m-d H:i:s', time() + (86400 * 30));

    // 4. Enregistrer dans la table remember_tokens
    $stmt = $mysqlClient->prepare('INSERT INTO remember_tokens (user_id, token_hash, expires_at) VALUES (?, ?, ?)');
    $stmt->execute([$user['id'], $tokenHash, $expiration]);

    // 5. Envoyer le token brut dans un cookie
    setcookie('remember_token', $token, time() + (86400 * 30), '/', '', true, true);
    
}


    // Authentification réussie
$_SESSION['user_id'] = $user['id'];
$_SESSION['firstname'] = $user['firstname'];
$_SESSION['lastname'] = $user['lastname'];
$_SESSION['role'] = $user['role'];
$_SESSION['email'] = $user['email'];

    // Réponse succès + arrêt du script
echo json_encode([
    'success' => true,
    'role' => $user['role'],
]);
exit;


