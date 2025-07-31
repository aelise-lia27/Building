<?php 
$host = 'localhost';
$dbname = 'building';
$user = 'root';
$pass = '';

try {
    $mysqlClient = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    return $mysqlClient;
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Erreur de connexion à la base de données : ' . $e->getMessage()]);
    exit;
}
