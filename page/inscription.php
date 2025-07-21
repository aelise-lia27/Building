<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription - Building</title>
    <meta name="description" content="Créez votre compte Building">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/cone-ins.css">
    <link rel="shortcut icon" href="../img2/2eme_logo_sans_fond.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php  require_once(__DIR__.'/header.php'); ?>

    <main>
        <section class="auth-container">
        
            <div class="auth-form-container">
                <div class="auth-form">
                    <h2><i class="fas fa-user-plus"></i> Créer un compte</h2>
                    <p>Remplissez le formulaire pour créer votre compte</p>
                    
                    <form action="register-process.php" id="registerForm" method="POST">
                        <div class="name-fields">
                            <div class="form-group">
                                <label for="firstname">Prénom</label>
                                <input type="text" id="firstname" name="firstname" placeholder="Votre prénom" >
                            </div>
                            <div class="form-group">
                                <label for="lastname">Nom</label>
                                <input type="text" id="lastname" name="lastname" placeholder="Votre nom" >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" id="email" name="email" placeholder="votre@email.com" >
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Téléphone (facultatif)</label>
                            <input type="tel" id="phone" name="phone" placeholder="Votre numéro de téléphone">
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" placeholder="Créez un mot de passe" >
                            <div class="password-strength">
                                <div class="password-strength-bar"></div>
                            </div>
                            <div class="password-hint">
                                Le mot de passe doit contenir au moins 8 caractères, dont une majuscule et un chiffre.
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="confirm-password">Confirmez le mot de passe</label>
                            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmez votre mot de passe" >
                        </div>
                        
                        <div class="terms">
                            <input type="checkbox" id="terms" name="terms" >
                            <label for="terms">J'accepte les <a href="terms.html">conditions générales</a> et la <a href="privacy.html">politique de confidentialité</a> de Building</label>
                        </div>
                        
                        <button type="submit" class="auth-btn">S'inscrire</button>
                        <p class="message" id="message"></p>
                        <div class="auth-alt">
                            Vous avez déjà un compte ? <a href="/page/connexion.php">Se connecter</a>
                        </div>
                        
                        <div class="social-login">
                            <p>Ou inscrivez-vous avec</p>
                            <div class="social-icons">
                                <a href="#" class="social-icon facebook" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon google" aria-label="Google">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="social-icon linkedin" aria-label="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

<?php  require_once(__DIR__.'/footer.php'); ?>

</body>
<script src="../js/auth.js"></script>
</html>
