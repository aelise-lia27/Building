<?php require_once(__DIR__ . '/../config/dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Témoignages des clients - Building</title>
    <meta name="description" content="Partagez votre expérience avec Building et lisez les avis de nos clients satisfaits">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/contact1.css">
    <link rel="shortcut icon" href="assets/images/ChatGPT Image 10 avr. 2025, 03_55_06.png" type="image/x-icon">
    <link rel="shortcut icon" href="../img2/2eme_logo_sans_fond.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #FF8C00;
            --secondary-color: #1E3A8A;
            --light-color: #F8F9FA;
            --dark-color: #1E1E1E;
            --gray-color: #6C757D;
            --white: #FFFFFF;
            --black: #000000;
            --transition: all 0.3s ease;
        }

        .error-message {
            color: #D8000C;
            background-color: #FFD2D2;
            padding: 15px;
            margin: 20px 0;
            border-radius: 8px;
            border-left: 5px solid #D8000C;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .error-message i {
            font-size: 1.2rem;
        }

        select#note {
            padding: 15px;
            width: 100%;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 1em;
        }

        select#note option {
            padding: 12px;
        }

        .success-message {
            display: none;
            color: #4F8A10;
            background-color: #DFF2BF;
            padding: 15px;
            margin: 20px 0;
            border-radius: 8px;
            border-left: 5px solid #4F8A10;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <?php require_once(__DIR__ . '/header.php'); ?>


    <main>
        <!-- Hero Section -->
        <section class="testimonial-hero">
            <div class="hero-content">
                <h1>Votre Avis Compte !</h1>
                <p>Partagez votre expérience avec Building et aidez-nous à améliorer nos services.</p>
            </div>
        </section>

        <!-- Testimonial Form Section -->
        <section class="testimonial-section">
            <div class="testimonial-container">
                <div class="testimonial-form">
                    <h2><i class="fas fa-edit"></i> Publiez un avis</h2>

                    <!-- <?php if (isset($_GET['error']) && $_GET['error'] == 'not_allowed'): ?>
                        <div class="error-message">
                            <i class="fas fa-exclamation-circle"></i>
                            Vous devez autoriser la publication de votre avis.
                        </div>
                    <?php endif; ?> -->

                    <div class="success-message" id="successMessage">
                        <i class="fas fa-check-circle"></i>
                        Merci pour votre avis ! Il sera publié après modération.
                    </div>

                    <form class="form-avis" id="testimonialForm">
                        <div class="form-group">
                            <label for="nom"><i class="fas fa-user"></i> Nom (facultatif)</label>
                            <input type="text" name="nom" id="nom" placeholder="Votre nom ou pseudo">
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> Email </label>
                            <input type="email" name="email" id="email" placeholder="votre@email.com">
                        </div>

                        <div class="form-group">
                            <label for="note"><i class="fas fa-star"></i> Note </label>
                            <select id="note" name="note">
                                <option value="" disabled selected>Sélectionnez une note</option>
                                <option value="5">⭐⭐⭐⭐⭐ Excellent</option>
                                <option value="4">⭐⭐⭐⭐ Très bien</option>
                                <option value="3">⭐⭐⭐ Bien</option>
                                <option value="2">⭐⭐ Moyen</option>
                                <option value="1">⭐ Décevant</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="comment"><i class="fas fa-comment"></i> Votre témoignage </label>
                            <textarea name="comment" id="comment" placeholder="Décrivez votre expérience avec Building..."></textarea>
                            <small>Minimum 20 caractères</small>
                        </div>

                        <div class="form-group checkbox-group">
                            <input type="checkbox" name="allowed" id="allowed" value="True">
                            <label for="allowed">J'autorise la publication de mon avis </label>
                        </div>

                        <div class="form-group submit-btn">
                            <button type="submit" class="btn">
                                <i class="fas fa-paper-plane"></i> Soumettre mon avis
                            </button>
                            <p class="message" id="message"></p>
                        </div>
                    </form>
                </div>

                <div class="testimonial-side">
                    <div class="testimonial-guidelines">
                        <h3><i class="fas fa-info-circle"></i> Conseils pour votre avis</h3>
                        <ul>
                            <li>Soyez honnête et objectif</li>
                            <li>Décrivez votre expérience en détail</li>
                            <li>Mentionnez ce que vous avez particulièrement apprécié</li>
                            <li>Signalez éventuellement ce qui pourrait être amélioré</li>
                            <li>Évitez les propos injurieux ou discriminatoires</li>
                        </ul>
                    </div>

                    <div class="testimonial-example">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-rating">
                                    ⭐⭐⭐⭐⭐
                                </div>
                                <div class="testimonial-author">
                                    <strong>Jean D.</strong>
                                    <span>Client depuis 2023</span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <p>"Building a transformé notre projet en réalité. Leur équipe professionnelle et attentionnée a su comprendre nos besoins et nous proposer des solutions adaptées. Un service impeccable de A à Z !"</p>
                            </div>
                            <div class="testimonial-date">
                                Publié le 15 mars 2025
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Existing Testimonials -->
        <section class="existing-testimonials">
            <div class="section-header">
                <h2>Témoignages de nos clients</h2>
                <div class="divider"></div>
                <p>Découvrez ce que nos clients disent de leur expérience avec Building</p>
            </div>

            <div class="testimonials-grid">
                <!-- Les tém
                 oignages existants seraient chargés ici dynamiquement -->
                 <?php foreach ($mysqlClient->query("SELECT * FROM publications WHERE allowed = 'True' ORDER BY date_publication DESC LIMIT 6") as $testimonial  ) :?> 
                   <?php  $poster = htmlspecialchars($testimonial['poster']);
                     $email = htmlspecialchars($testimonial['email']);
                     $note = (int)$testimonial['note'];
                     $comment = htmlspecialchars($testimonial['comment']);
                     $date_publication = date('d F Y', strtotime($testimonial['date_publication']));
                     $note = str_repeat('⭐', $note) . str_repeat('☆', 5 - $note);?>
                     
                      <div class="testimonial-item">
                      <div class="testimonial-meta">
                      <div class="client-avatar"><i class="fas fa-user-circle"></i></div>
                      <div class="client-info">
                      <h4><?php echo $poster; ?></h4>
                      <div class='rating'><?php echo $note; ?></div>
                      </div></div>
                      <div class='testimonial-text'><p> <?php echo $comment ?></p></div>
                      <div class='testimonial-date'><?php echo $date_publication ?></div>
                      </div>
                    <?php endforeach; ?>
            </div>

            <div class="view-more">
                <a href="#" class="view-more-btn">Voir plus de témoignages</a>
            </div>
        </section>
    </main>

    <?php require_once(__DIR__ . '/footer.php'); ?>

    <script src="../js/publication.js"></script>
    
</body>

</html>