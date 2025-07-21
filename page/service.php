<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services - Building</title>
    <link rel="stylesheet" href="../css/service.css">
    <link rel="shortcut icon" href="../img2/2eme_logo_sans_fond.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php  require_once(__DIR__.'/header.php'); ?>


    <main>
        <!-- Hero Section -->
        <section class="service-hero">
            <div class="hero-content">
                <h1>Nos Services Premium</h1>
                <p>Des solutions sur mesure pour tous vos projets immobiliers et de construction</p>
            </div>
        </section>

        <!-- Services Grid -->
        <section class="services-container">
            <div class="section-header">
                <h2>Ce que nous vous offrons</h2>
                <div class="divider"></div>
                <p>Découvrez notre gamme complète de services professionnels</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <img src="../img2/service/m8.jpg" alt="Maison en vente">
                    <div class="service-content">
                        <h3>Vente de maisons</h3>
                        <p>Découvrez notre sélection exclusive de maisons modernes et classiques, adaptées à tous les besoins et budgets.</p>
                        <a href="#" class="service-btn">Voir nos offres <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <img src="../img2/service/m2.jpg" alt="Outils de construction">
                    <div class="service-content">
                        <h3>Location d'équipements</h3>
                        <p>Accédez à des outils professionnels de qualité pour mener à bien tous vos projets de construction et rénovation.</p>
                        <a href="./page/instrument.html" class="service-btn">Découvrir <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <img src="../img2/service/m3.jpg" alt="Service client">
                    <div class="service-content">
                        <h3>Conseil personnalisé</h3>
                        <p>Bénéficiez de l'expertise de nos professionnels pour guider chacun de vos projets immobiliers.</p>
                        <a href="/page/contact.html" class="service-btn">Nous contacter <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="section-header">
                <h2>Nos Réalisations</h2>
                <div class="divider"></div>
                <p>Découvrez quelques-uns de nos projets récents</p>
            </div>

            <div class="gallery-grid">
                <div class="gallery-item main-item">
                    <img src="../img2/service/m9.jpg" alt="Projet Building">
                    <div class="overlay">
                        <h3>Résidence Les Palmiers</h3>
                        <p>Projet achevé en 2024</p>
                    </div>
                </div>
              
                <div class="gallery-item">
                    <img src="../img2/service/m6.jpg" alt="Projet Building">
                    <div class="overlay">
                        <h3>Complexe Azur</h3>
                        <p>Projet commercial</p>
                    </div>
                </div>
                <div class="gallery-item">
                <img src="../img2/service/m1.jpg" alt="Projet Building">
                    <div class="overlay">
                        <h3>Villa Akassato</h3>
                        <p>Projet résidentiel</p>
                    </div>
                </div>    
                  <div class="gallery-item main-item">
                    <img src="../img2/service/m5.jpg" alt="Projet Building">
                    <div class="overlay">
                        <h3>Gotham Building</h3>
                        <p>Projet achevé en 2020</p>
                    </div>
                </div>
                <div class="gallery-item">
                <img src="../img2/service/m8.jpg" alt="Projet Building">
                    <div class="overlay">
                        <h3>Villa Golding</h3>
                        <p>Projet résidentiel</p>
                    </div>
                </div>    
                <div class="gallery-cta">
                    <h3>Building Company</h3>
                    <p>Votre partenaire de confiance pour tous vos projets immobiliers</p>
                    <a href="/page/contact.html" class="gallery-btn">Voir plus de projets</a>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="service-cta">
            <div class="cta-content">
                <h2>Prêt à concrétiser votre projet?</h2>
                <p>Contactez-nous dès aujourd'hui pour une consultation gratuite et sans engagement</p>
                <div class="cta-buttons">
                    <a href="/page/contact.html" class="cta-btn primary">Nous contacter</a>
                    <a href="tel:+22890000000" class="cta-btn secondary"><i class="fas fa-phone"></i> +228 90 00 00 00</a>
                </div>
            </div>
        </section>
    </main>

     <?php  require_once(__DIR__.'/footer.php'); ?>

</body>
</html>