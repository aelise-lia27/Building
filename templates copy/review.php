<?php
$title = "Témoignages des clients - Building";
$css = "../css/contact1.css";
$js = "../js/review.js";
?>
<?php ob_start(); ?>


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
            <?php foreach ($testimonials as $testimonial) : ?>
                <div class="testimonial-item">
                    <div class="testimonial-meta">
                        <div class="client-avatar"><i class="fas fa-user-circle"></i></div>
                        <div class="client-info">
                            <h4><?= $testimonial['poster']; ?></h4>
                            <div class='rating'><?= renderStars($testimonial['note']); ?></div>
                        </div>
                    </div>
                    <div class='testimonial-text'>
                        <p> <?= $testimonial['comment'] ?></p>
                    </div>
                    <div class='testimonial-date'><?= $testimonial['date_publication'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="view-more">
            <a href="#" class="view-more-btn">Voir plus de témoignages</a>
        </div>
    </section>
</main>

<?php $content = ob_get_clean(); ?>

<?php require_once('layout.php'); ?>