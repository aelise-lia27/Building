<?php
require_once('./src/model/service.php');


function createService()
{
    header('Content-Type: application/json');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sécuriser les entrées
        $serviceName = trim($_POST['serviceName'] ?? '');
        $serviceCategory = trim($_POST['serviceCategory'] ?? '');
        $servicePrice = trim($_POST['servicePrice'] ?? '');
        $serviceDescription = trim($_POST['serviceDescription'] ?? '');
        $badge = trim($_POST['badge'] ?? '');
        $badgeColor = trim($_POST['badgeColor'] ?? '');

        // Validation basique
        if (empty($serviceName) || empty($serviceCategory) || empty($servicePrice) || empty($serviceDescription)) {
            echo json_encode(['success' => false, 'message' => 'Veuillez remplir tous les champs obligatoires.']);
            exit;
        }

        if (!is_numeric($servicePrice) || $servicePrice <= 0) {
            echo json_encode(['success' => false, 'message' => 'Prix invalide.']);
            exit;
        }

        // Vérifier si un fichier a été uploadé
        if (!isset($_FILES['image']) || $_FILES['image']['error'] != 0) {
            echo json_encode(['success' => false, 'message' => 'Image obligatoire.']);
            exit;
        }

        $image = $_FILES['image'];
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($image['type'], $allowedTypes)) {
            echo json_encode(['success' => false, 'message' => 'Format d\'image invalide.']);
            exit;
        }

        // Déplacer l'image dans le dossier uploads
        $uploadDir = __DIR__ . '/../../uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $imageName = time() . '_' . basename($image['name']);
        $imagePath = $uploadDir . $imageName;

        if (!move_uploaded_file($image['tmp_name'], $imagePath)) {
            echo json_encode(['success' => false, 'message' => 'Erreur lors du téléchargement de l\'image.']);
            exit;
        }

        // Connexion à la base de données (à adapter selon ton projet)

        $success = addService($serviceName, $serviceDescription, $serviceCategory, $servicePrice, $imageName, $badge, $badgeColor);
        if ($success) {
            echo json_encode(['success' => true, 'message' => 'Service ajouté avec succès !']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'ajout du service.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Méthode de requête non autorisée.']);
        exit;
    };
};

function luxuryHouse()
{

    $expensiveHouses = getExpensiveHouses();

    require_once('./templates/sub-service1.php');
};



function affordableHouse()
{

    $affordableHouses = getAffordableHouses();

    require_once('./templates/sub-service2.php');
};


function instrument()
{

    $constructionTools = getConstructionTools();

    $constructionCars = getConstructionCars();

    require_once('./templates/instrument.php');
};
