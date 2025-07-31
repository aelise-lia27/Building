<?php
require_once('./src/model/review.php');

function publishReview()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        header('Content-Type: application/json');
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // Vérifier données reçues
        if (!isset($_POST['nom'], $_POST['email'], $_POST['note'], $_POST['comment'], $_POST['allowed'])) {
            echo json_encode(['success' => false, 'message' => 'Données manquantes.']);
            exit;
        }

        $nom = trim($_POST['nom']);
        $email = trim($_POST['email']);
        $note = trim($_POST['note']);
        $comment = trim($_POST['comment']);
        $allowed = trim($_POST['allowed']);


        // Validation serveur
        if (strlen($nom) < 2 || strlen($nom) > 30 || !preg_match('/^[a-zA-ZÀ-ÿ\' -]+$/', $nom)) {
            echo json_encode(['success' => false, 'message' => "Nom invalide. Veuillez entrer un nom valide (lettres uniquement)."]);
            exit;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['success' => false, 'message' => "Email invalide."]);
            exit;
        }

        if ($note === '' || $note === null) {
            echo json_encode(['success' => false, 'message' => "vous devez sélectionner une note."]);
            exit;
        }

        if (strlen($comment) < 20) {
            echo json_encode(['success' => false, 'message' => "Le témoignage est trop court."]);
            exit;
        }

        if ($allowed !== "on") {
            echo json_encode(['success' => false, 'message' => "Vous devez autoriser la publication de votre avis."]);
            exit;
        }


        // Vérifier si l'utilisateur est connecté (optionnel)
        $id_user = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        // Insertion dans la base
        $success = insertReview($nom, $email, $note, $comment, $allowed, $id_user);
        if ($success) {
            echo json_encode(['success' => true, 'message' => "Merci pour votre avis !"]);
        } else {
            echo json_encode(['success' => false, 'message' => "Erreur lors de l'envoi de votre avis. Veuillez réessayer plus tard."]);
        }
    }
}

function renderStars($note)
{
    $note = (int)$note;
    return str_repeat('⭐', $note) . str_repeat('☆', 5 - $note);
}

function showReviews()
{

    $testimonials = getReview();
    require_once('./templates/review.php');
}
