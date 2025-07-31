<?php
require_once('./src/model/auth.php');


// Register
function registerUser()
{

    header('Content-Type: application/json');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


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
    $response = emailChecked($email);
    if ($response === false) {
        echo json_encode(['success' => false, 'message' => "Cet email est déjà utilisé."]);
        exit;
    };

    // Hasher le mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insertion
    $userId = insertUser($firstname, $lastname, $email, $phone, $hashedPassword);

    if ($userId !== false) {
        $user = getRole($userId);
        $user = getRole($userId);
        // Démarrer la session
        $_SESSION['user_id'] = $userId;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $user['role'];

        echo json_encode([
            'success' => true,
            'role' => $user['role'],
        ]);
    }
}

// Login

function loginUser(){
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$database = dbConnect();

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
    $user = searchUser($email);

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
    deleteTokens($user['id']);

    // 1. Générer un token unique
    $token = bin2hex(random_bytes(32)); // 64 caractères

    // 2. Hasher le token avant de l'enregistrer en base (jamais en clair !)
    $tokenHash = password_hash($token, PASSWORD_DEFAULT);

    // 3. Expiration dans 30 jours
    $expiration = date('Y-m-d H:i:s', time() + (86400 * 30));

    // 4. Enregistrer dans la table remember_tokens
    saveTokens( $user, $tokenHash, $expiration);
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


}