<?php
// session_start();
require_once(__DIR__ .'/../src/model/model.php');

if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_token'])) {
    $token = $_COOKIE['remember_token'];

    // Rechercher tous les tokens non expirés
    $stmt = $mysqlClient->prepare("SELECT * FROM remember_tokens WHERE expires_at > NOW()");
    $stmt->execute();
    $tokens = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($tokens as $record) {
        if (password_verify($token, $record['token_hash'])) {
            // Token valide → connecter l'utilisateur
            $stmtUser = $mysqlClient->prepare("SELECT * FROM users WHERE id = ?");
            $stmtUser->execute([$record['user_id']]);
            $user = $stmtUser->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['firstname'] = $user['firstname'];
                $_SESSION['lastname'] = $user['lastname'];
                $_SESSION['email'] = $user['email'];
            }

            break;
        }
    }
}
?>
