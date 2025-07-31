<?php 
require_once('model.php');

function insertMessage($nom, $phone, $email, $projectType, $description)
{
    // Connexion à la base de données
    $database = dbConnect();

    try {
        $stmt = $database->prepare("INSERT INTO contacts (name, phone, email, project_type, description) VALUES (:name, :phone, :email, :project_type, :description)");
        $stmt->execute([
            'name' => $nom,
            'phone' => $phone,
            'email' => $email,
            'project_type' => $projectType,
            'description' => $description,
        ]);
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function getMessages()
{
    $database = dbConnect();

    $stmt = $database->query("SELECT * FROM contact ORDER BY date DESC");

    $messages = [];
    while (($row = $stmt->fetch())) {
        $message = [
            'nom' => $row['nom'],
            'phone' => $row['phone'],
            'email' => $row['email'],
            'project_type' => $row['project_type'],
            'description' => $row['description'],
            'date' => $row['date'],
        ];

        $messages[] = $message;
    }

    return $messages;
}
