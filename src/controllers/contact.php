<?php
require_once('./src/model/contact.php');

function sendMessage()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        header('Content-Type: application/json');
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // Vérifier données reçues
        if (!isset($_POST['nom'], $_POST['email'], $_POST['phone'], $_POST['projectType'], $_POST['description'])) {
            echo json_encode(['success' => false, 'message' => 'Données manquantes.']);
            exit;
        }

        $nom = trim($_POST['nom']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $projectType = trim($_POST['projectType']);
        $description = trim($_POST['description']);

        // Validation serveur
        if (strlen($nom) < 2 || strlen($nom) > 30 || !preg_match('/^[a-zA-ZÀ-ÿ\' -]+$/', $nom)) {
            echo json_encode(['success' => false, 'message' => "Nom invalide. Veuillez entrer un nom valide (lettres uniquement)."]);
            exit;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['success' => false, 'message' => "Email invalide."]);
            exit;
        }
        if (!preg_match('/^\+?[0-9\s\-]+$/', $phone)) {
            echo json_encode(['success' => false, 'message' => "Numéro de téléphone invalide."]);
            exit;
        }
        if (strlen($description) < 20) {
            echo json_encode(['success' => false, 'message' => "La description est trop courte."]);
            exit;
        }

        // Insertion dans la base
        $success = insertMessage($nom, $phone, $email, $projectType, $description);
        if ($success) {
            echo json_encode(['success' => true, 'message' => "Votre message a été envoyé avec succès !"]);
        } else {
            echo json_encode(['success' => false, 'message' => "Erreur lors de l'envoi de votre message. Veuillez réessayer plus tard."]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => "Méthode non autorisée."]);
    }
}

function getAllMessages()
{
    $messages = getMessages();

}