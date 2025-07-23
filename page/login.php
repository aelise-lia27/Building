<?php require_once(__DIR__ .'/../config/dbconnect.php'); 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Connexion - Building</title>
        <meta name="description"
            content="Connectez-vous à votre compte Building">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/cone-ins.css">
        <link rel="shortcut icon" href="../img2/2eme_logo_sans_fond.png"
            type="image/x-icon">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body>
    <?php require_once(__DIR__ .'/../include/header.php'); ?>
        <main>
            <section class="auth-container">
                <div class="auth-hero">
                    <img src="../img2/acceuil/m2.png"
                        alt="Équipe de construction Building">
                    <h2>Bienvenue chez Building</h2>
                    <p>Connectez-vous pour accéder à votre espace personnel et
                        suivre vos projets en cours.</p>
                </div>

                <div class="auth-form-container">
                    <div class="auth-form">
                        <h2><i class="fas fa-sign-in-alt"></i> Connexion</h2>
                        <p>Entrez vos identifiants pour accéder à votre
                            compte</p>

                        <form action="login-process.php" method="post" id="login-form">
                            <div class="form-group">
                                <label for="email">Adresse email</label>
                                <input type="email" id="email" name="email"
                                value="<?php echo isset($_COOKIE['remember_email']) ? $_COOKIE['remember_email'] : ''; ?>" 
                                    placeholder="votre@email.com">
                            </div>

                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" id="password"
                                    name="password"
                                    placeholder="Votre mot de passe">
                            </div>

                            <div class="remember-forgot">
                                <div class="remember-me">
                                    <input type="checkbox" id="remember"
                                        name="remember">
                                    <label for="remember">Se souvenir de
                                        moi</label>
                                </div>
                                <div class="forgot-password">
                                    <a href="forgot-password.html">Mot de passe
                                        oublié ?</a>
                                </div>
                            </div>

                            <button type="submit" class="auth-btn">Se connecter</button>
                            <p class="message" id="message"></p>
                            <div class="auth-alt">
                                Vous n'avez pas de compte ? <a
                                    href="/page/inscription.php">S'inscrire</a>
                            </div>

                            <div class="social-login">
                                <p>Ou connectez-vous avec</p>
                                <div class="social-icons">
                                    <a href="#" class="social-icon facebook"
                                        aria-label="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="social-icon google"
                                        aria-label="Google">
                                        <i class="fab fa-google"></i>
                                    </a>
                                    <a href="#" class="social-icon linkedin"
                                        aria-label="LinkedIn">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <?php  require_once(__DIR__.'/../include/footer.php'); ?>

    </body>

    <script src="../js/conex.js"></script>
    <!-- <script src="../js/conex.js"></script> -->
</html>