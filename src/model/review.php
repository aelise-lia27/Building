<?php 
require_once('model.php');

function insertReview($poster, $email, $note, $comment, $allowed, $id_user = null)
{
    // Connexion à la base de données
    $database = dbConnect();

    try {
        $stmt = $database->prepare("INSERT INTO publications (poster, email, note, comment, allowed, id_users) VALUES (:poster, :email, :note, :comment, :allowed, :id_user)");
        $stmt->execute([
            'poster' => $poster,
            'email' => $email,
            'note' => $note,
            'comment' => $comment,
            'allowed' => $allowed,
            'id_user' => $id_user
        ]);
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function getReview(){

    $database = dbConnect();

   $stmt = $database->query("SELECT * FROM publications WHERE allowed = 'True' ORDER BY date_publication DESC LIMIT 6");
   
     $testimonials = [];
    while (($row = $stmt->fetch())) {
        $testimonial = [
            'poster' => $row['poster'],
            'email' => $row['email'],
            'note' => $row['note'],
            'comment' => $row['comment'],
            'date_publication' => $row['date_publication'],              
        ];

        $testimonials[] = $testimonial;
    }

    return $testimonials;
}

