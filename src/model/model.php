<?php
function dbConnect()
{
    $host = 'sql100.infinityfree.com';
    $dbname = 'if0_39662474_building';
    $user = 'if0_39662474';
    $pass = 'U1HYOuypu4nTZ';


    try {
        $mysqlClient = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
        return $mysqlClient;
        echo("Successfully connected to the database.");
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Erreur de connexion à la base de données : ' . $e->getMessage()]);
        exit;
    }



}

dbConnect();