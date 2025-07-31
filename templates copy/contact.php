<?php $title = "Contact - Building";
$css = "../css/contact.css";
$js = "../js/contact.js";
?>
<?php ob_start(); ?>

<main>
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="hero-content">
            <h1>Contactez notre équipe</h1>
            <p>Un projet en tête ? Notre équipe est à votre écoute pour le concrétiser</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h2><i class="fas fa-building"></i> Building Company</h2>
                <p>Nous sommes disponibles pour répondre à toutes vos questions et vous accompagner dans vos projets de construction.</p>

                <div class="info-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h3>Adresse</h3>
                        <p>123 Avenue de la Construction<br>Lomé, Togo</p>
                    </div>
                </div>

                <div class="info-card">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h3>Téléphone</h3>
                        <p>+228 90 00 00 00</p>
                    </div>
                </div>

                <div class="info-card">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h3>Email</h3>
                        <p>contact@building.tg</p>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="contact-form">
                <div id="successMessage" class="success-message">
                    <i class="fas fa-check-circle"></i> Merci pour votre message ! Nous vous contacterons rapidement.
                </div>

                <h2><i class="fas fa-paper-plane"></i> Envoyez-nous un message</h2>
                <form method="post" action="" id="contactForm">
                    <div class="form-group">
                        <input type="text" name="nom" id="nom" placeholder="Votre nom" >
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <input type="phone" name="phone" id="phone" placeholder="Votre téléphone" >
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Votre email" >
                        </div>
                    </div>

                    <div class="form-group">
                        <select name="type-projet" id="type-projet" >
                            <option value="">Type de projet</option>
                            <optgroup label="Construction neuve">
                                <option value="maison-individuelle">Maison individuelle</option>
                                <option value="immeuble-residentiel">Immeuble résidentiel</option>
                                <option value="batiment-commercial">Bâtiment commercial</option>
                                <option value="lotissement">Lotissement</option>
                            </optgroup>
                            <optgroup label="Rénovation">
                                <option value="renovation-complete">Rénovation complète</option>
                                <option value="extension">Extension de bâtiment</option>
                                <option value="reamenagement">Réaménagement intérieur</option>
                                <option value="isolation">Isolation thermique</option>
                            </optgroup>
                            <optgroup label="Travaux spécifiques">
                                <option value="terrassement">Terrassement</option>
                                <option value="charpente-couverture">Charpente/Couverture</option>
                                <option value="plomberie">Plomberie/Sanitaire</option>
                                <option value="electricite">Électricité</option>
                            </optgroup>
                            <optgroup label="Autres services">
                                <option value="devis">Demande de devis</option>
                                <option value="conseil">Conseil en construction</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <textarea name="description" id="description" placeholder="Décrivez votre projet en détail..." ></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i> Envoyer le message
                        </button>
                        <p id="message"></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d1.2318185153657334!3d6.201662645483475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e3e3e3e3e3e3%3A0x3e3e3e3e3e3e3e3e!2sLom%C3%A9%2C%20Togo!5e0!3m2!1sfr!2sfr!4v1620000000000!5m2!1sfr!2sfr"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </section>
</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('layout.php'); ?>