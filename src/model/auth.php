<?php
require_once('model.php');

// Register
function insertUser($firstname, $lastname, $email, $phone, $hashedPassword)
{
    $database = dbConnect();
    // Connexion à la base de données
    try {
        $stmt = $database->prepare("INSERT INTO users (firstname, lastname, email, phone, password) VALUES (:firstname, :lastname, :email, :phone, :hashedPassword)");
        $stmt->execute([
            'firstname' =>   $firstname,
            'lastname' =>   $lastname,
            'email' => $email,
            'phone' =>  $phone,
            'hashedPassword' => $hashedPassword,
        ]);

        return $database->lastInsertId();
    } catch (Exception $e) {
        return false;
    }
};

function emailChecked($email)
{
    $database = dbConnect();
    $stmt = $database->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);

    // Si une ligne est trouvée, l'e-mail existe => retourner false
    return $stmt->rowCount() === 0;
}


function getlastInsertId()
{
    $database = dbConnect();
    $userId = $database->lastInsertId();
    return $userId;
}

function getRole($userId)
{
    $database = dbConnect();
    // On récupère le rôle depuis la base
    $stmtRole = $database->prepare("SELECT role FROM users WHERE id = ?");
    $stmtRole->execute([$userId]);
    $user = $stmtRole->fetch(PDO::FETCH_ASSOC);
    return $user;
}

// Login

function searchUser($email)
{
    $database = dbConnect();
    $stmt = $database->prepare("SELECT id, firstname, lastname, email, password, role FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function deleteTokens($user)
{
    $database = dbConnect();
    $stmt = $database->prepare('DELETE FROM remember_tokens WHERE user_id = ?');
    $stmt->execute([$user['id']]);
}

function saveTokens( $user, $tokenHash, $expiration)
{
    $database = dbConnect();
    $stmt = $database->prepare('INSERT INTO remember_tokens (user_id, token_hash, expires_at) VALUES (?, ?, ?)');
    $stmt->execute([$user['id'], $tokenHash, $expiration]);
}
