<?php
require_once('model.php');


// Fonction pour ajouter un service
function addService($serviceName, $serviceDescription, $serviceCategory, $servicePrice, $imageName, $badge, $badgeColor)
{
    // connection à la base de données
    $database = dbConnect();

    try {
        $stmt = $database->prepare("INSERT INTO services (title, description, type, price, image, badge, badge_color) VALUES (:title, :description, :type, :price, :image, :badge, :badge_color)");
        $stmt->execute([
            'title' => $serviceName,
            'description' => $serviceDescription,
            'type' => $serviceCategory,
            'price' => $servicePrice,
            'image' => $imageName,
            'badge' => $badge ?: null,
            'badge_color' => $badgeColor ?: null
        ]);
        return true;
    } catch (Exception $e) {
        false;
    }
}
// Recuperation des maisons chères
function getExpensiveHouses()
{
    // connection à la base de données
    $database = dbConnect();

    // Recuperation de tous les services dans la bd.
    $statement = $database->query(
        "SELECT id, title, description, type, price, image, badge, badge_color, DATE_FORMAT(date_pub, '%d/%m/%Y à %Hh%imin%ss') AS date_creation_fr FROM services WHERE type = 'maison_chere' ORDER BY date_pub"
    );
    $expensiveHouses = [];
    while (($row = $statement->fetch())) {
        $expensiveHouse = [
            'title' => $row['title'],
            'description' => $row['description'],
            'type' => $row['type'],
            'price' => $row['price'],
            'image' => $row['image'],
            'badge' => $row['badge'],
            'badge_color' => $row['badge_color'],
        ];

        $expensiveHouses[] = $expensiveHouse;
    }

    return $expensiveHouses;
};

// Recuperation des maisons abordables
function getAffordableHouses()
{
    // connection à la base de données
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
};

// Recuperation des outils de construction
function getConstructionTools()
{
    // connection à la base de données
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
};

// Recuperation des engin de construction
function getConstructionCars()
{
    // connection à la base de données
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
};
