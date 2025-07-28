<?php
// connection à la base de données
function dbConnect()
{
    try {
        $database = new PDO('mysql:host=localhost;dbname=building;charset=utf8', 'root', '');
        return $database;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
// Recuperation des maisons chères
function getExpensiveHouses()
{
    // We connect to the database.
    $database = dbConnect();

    // Recuperation de tous les services dans la bd.
    $statement = $database->query(
        "SELECT id, title, description, type, price, image, badge, badge_color, DATE_FORMAT(date_pub, '%d/%m/%Y à %Hh%imin%ss') AS date_creation_fr FROM services WHERE type = 'maison_chere' ORDER BY date_pub"
    );
    $ExpensiveHouse = [];
    while (($row = $statement->fetch())) {
        $ExpensiveHouse = [
            'title' => $row['title'],
            'description' => $row['description'],
            'type' => $row['type'],
            'price' => $row['price'],
            'image' => $row['image'],
            'badge' => $row['badge'],
            'badge_color' => $row['badge_color'],
        ];

        $ExpensiveHouses[] = $ExpensiveHouse;
    }

    return $ExpensiveHouses;
}

// Recuperation des maisons abordables
function getAffordableHouses()
{
    // We connect to the database.
    $database = dbConnect();

    // Recuperation de tous les services dans la bd.
    $AffordableHouses = [];
    $statement = $database->query(
        "SELECT id, title, description, type, price, image, badge, badge_color, DATE_FORMAT(date_pub, '%d/%m/%Y à %Hh%imin%ss') AS date_creation_fr FROM services WHERE type = 'maison_reduite' ORDER BY date_pub  "
    );

    while (($row = $statement->fetch())) {
        $AffordableHouse = [
            'title' => $row['title'],
            'description' => $row['description'],
            'type' => $row['type'],
            'price' => $row['price'],
            'image' => $row['image'],
            'badge' => $row['badge'],
            'badge_color' => $row['badge_color'],
        ];

        $AffordableHouses[] = $AffordableHouse;
    }

    return $AffordableHouses;
}


// Recuperation des outils de construction
function getConstructionTools()
{
    // We connect to the database.
    $database = dbConnect();

    // Recuperation de tous les services dans la bd.
    $constructionTools = [];
    $statement = $database->query(
        "SELECT id, title, description, type, price, image, badge, badge_color, DATE_FORMAT(date_pub, '%d/%m/%Y à %Hh%imin%ss') AS date_creation_fr FROM services WHERE type = 'equipement' ORDER BY date_pub  "
    );
    while (($row = $statement->fetch())) {
        $constructionTool = [
            'title' => $row['title'],
            'description' => $row['description'],
            'type' => $row['type'],
            'price' => $row['price'],
            'image' => $row['image'],
            'date_pub' => $row['date_creation_fr'],
            'badge' => $row['badge'],
            'badge_color' => $row['badge_color'],
        ];

        $constructionTools[] = $constructionTool;
    }

    return $constructionTools;
}

function getConstructionCar()
{
    // We connect to the database.
    $database = dbConnect();

    // Recuperation de tous les services dans la bd.
    $constructionCars = [];
    $statement = $database->query(
        "SELECT id, title, description, type, price, image, badge, badge_color, DATE_FORMAT(date_pub, '%d/%m/%Y à %Hh%imin%ss') AS date_creation_fr FROM services WHERE type = 'car' ORDER BY date_pub  "
    );
    while (($row = $statement->fetch())) {
        $constructionCar = [
            'title' => $row['title'],
            'description' => $row['description'],
            'type' => $row['type'],
            'price' => $row['price'],
            'image' => $row['image'],
            'date_pub' => $row['date_creation_fr'],
            'badge' => $row['badge'],
            'badge_color' => $row['badge_color'],
        ];

        $constructionCars[] = $constructionCar;
    }

    return $constructionCars;
}
