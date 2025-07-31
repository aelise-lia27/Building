<?php
$title = "Connexion - Building";
$css = "../../css/cone-ins.css";

?>
<?php ob_start(); ?>

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

<?php $content = ob_get_clean(); ?>

<?php //$js = "../../js/register.js" ?>
<?php //require('/../layout.php') ?>