<?php
// Configuration de la connexion à la base de données MySQL
/*const MYSQL_HOST = 'localhost';
const MYSQL_PORT = 3306;
const MYSQL_NAME = 'building_db';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = '';*/

// try {
//     $mysqlClient = new PDO(
//         sprintf('mysql:host=localhost;dbname=building;port=3306;charset=utf8'),
//         'root',
//         ''
//     );
//     $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (Exception $exception) {
//     die('Erreur : ' . $exception->getMessage());
    
// }
$host = 'localhost';
$dbname = 'building';
$user = 'root';
$pass = '';

try {
    $mysqlClient = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Erreur de connexion à la base de données : ' . $e->getMessage()]);
    exit;
}
?>
