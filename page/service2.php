<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maisons Abordables - Building</title>
    <link rel="stylesheet" href="../css/souServce.css">
    <link rel="shortcut icon" href="../img2/2eme_logo_sans_fond.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #FF8C00;
            --secondary-color: #1E3A8A;
            --light-color: #F8F9FA;
            --dark-color: #1E1E1E;
            --white: #FFFFFF;
            --gold: #FFD700;
            --transition: all 0.3s ease;
        }
    </style>
</head>

<body>

    <?php require_once(__DIR__ . '/header.php'); ?>

    <section class="luxury-intro">
        <div class="container">
            <h2>L'Art de Vivre avec Building</h2>
            <p>
                Découvrez des maisons de qualité à des prix accessibles. Nos propriétés allient confort,
                fonctionnalité et bon rapport qualité-prix. Chaque maison est pensée pour offrir un cadre de vie
                agréable, avec des espaces bien aménagés, des matériaux de qualité et des prestations soignées.
            </p>
            <div class="highlights">
                <div class="highlight-item">
                    <i class="fas fa-gem"></i>
                    <span>Matériaux de qualité</span>
                </div>
                <div class="highlight-item">
                    <i class="fas fa-vector-square"></i>
                    <span>Plans fonctionnels</span>
                </div>
                <div class="highlight-item">
                    <i class="fas fa-home"></i>
                    <span>Bons emplacements</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Properties Section -->
    <section class="properties-section">
        <div class="section-header">
            <h2>Nos Propriétés Abordables</h2>
            <p>Découvrez nos meilleures offres pour votre budget</p>
        </div>

        <div class="properties-grid">
            <!-- Property 1 -->
            <div class="property-card">
                <div class="property-image">
                    <img src="../img2/simple/m1.jpg" alt="Maison familiale">
                    <div class="property-badge">Bon plan</div>
                </div>
                <div class="property-content">
                    <h3>Maison familiale avec jardin</h3>
                    <div class="property-features">
                        <span><i class="fas fa-bed"></i> 3 chambres</span>
                        <span><i class="fas fa-bath"></i> 2 salles de bain</span>
                        <span><i class="fas fa-vector-square"></i> 120 m²</span>
                    </div>
                    <div class="property-price">25.000.000 FCFA</div>
                    <button class="property-btn">
                        <i class="fas fa-home"></i> Visiter la propriété
                    </button>
                </div>
            </div>

            <!-- Property 2 -->
            <div class="property-card">
                <div class="property-image">
                    <img src="../img2/simple/m2.jpg" alt="Maison moderne">
                    <div class="property-badge">Nouveau</div>
                </div>
                <div class="property-content">
                    <h3>Maison moderne clé en main</h3>
                    <div class="property-features">
                        <span><i class="fas fa-bed"></i> 4 chambres</span>
                        <span><i class="fas fa-bath"></i> 2 salles de bain</span>
                        <span><i class="fas fa-vector-square"></i> 150 m²</span>
                    </div>
                    <div class="property-price">35.000.000 FCFA</div>
                    <button class="property-btn">
                        <i class="fas fa-home"></i> Visiter la propriété
                    </button>
                </div>
            </div>

            <!-- Property 3 -->
            <div class="property-card">
                <div class="property-image">
                    <img src="../img2/simple/m3.jpg" alt="Maison économique">
                </div>
                <div class="property-content">
                    <h3>Maison économique bien située</h3>
                    <div class="property-features">
                        <span><i class="fas fa-bed"></i> 2 chambres</span>
                        <span><i class="fas fa-bath"></i> 1 salle de bain</span>
                        <span><i class="fas fa-vector-square"></i> 80 m²</span>
                    </div>
                    <div class="property-price">15.000.000 FCFA</div>
                    <button class="property-btn">
                        <i class="fas fa-home"></i> Visiter la propriété
                    </button>
                </div>
            </div>

            <!-- Property 4 -->
            <div class="property-card">
                <div class="property-image">
                    <img src="../img2/simple/m4.jpg" alt="Maison rénovée">
                    <div class="property-badge">Coup de cœur</div>
                </div>
                <div class="property-content">
                    <h3>Maison rénovée avec terrasse</h3>
                    <div class="property-features">
                        <span><i class="fas fa-bed"></i> 3 chambres</span>
                        <span><i class="fas fa-bath"></i> 1 salle de bain</span>
                        <span><i class="fas fa-vector-square"></i> 100 m²</span>
                    </div>
                    <div class="property-price">20.000.000 FCFA</div>
                    <button class="property-btn">
                        <i class="fas fa-home"></i> Visiter la propriété
                    </button>
                </div>
            </div>

            <!-- Property 5 -->
            <div class="property-card">
                <div class="property-image">
                    <img src="../img2/simple/m5.jpg" alt="Petite maison">
                </div>
                <div class="property-content">
                    <h3>Petite maison cosy</h3>
                    <div class="property-features">
                        <span><i class="fas fa-bed"></i> 2 chambres</span>
                        <span><i class="fas fa-bath"></i> 1 salle de bain</span>
                        <span><i class="fas fa-vector-square"></i> 70 m²</span>
                    </div>
                    <div class="property-price">12.000.000 FCFA</div>
                    <button class="property-btn">
                        <i class="fas fa-home"></i> Visiter la propriété
                    </button>
                </div>
            </div>

            <!-- Property 6 -->
            <div class="property-card">
                <div class="property-image">
                    <img src="../img2/simple/m1.jpg" alt="Maison de ville">
                    <div class="property-badge">Exclusivité</div>
                </div>
                <div class="property-content">
                    <h3>Maison de ville pratique</h3>
                    <div class="property-features">
                        <span><i class="fas fa-bed"></i> 3 chambres</span>
                        <span><i class="fas fa-bath"></i> 2 salles de bain</span>
                        <span><i class="fas fa-vector-square"></i> 110 m²</span>
                    </div>
                    <div class="property-price">28.000.000 FCFA</div>
                    <button class="property-btn">
                        <i class="fas fa-home"></i> Visiter la propriété
                    </button>
                </div>
            </div>
            <div class="property-card">
                <div class="property-image">
                    <img src="../img2/simple/m3.jpg" alt="Maison compacte">
                    <div class="property-badge">Économique</div>
                </div>
                <div class="property-content">
                    <h3>Maison compacte bien agencée</h3>
                    <div class="property-features">
                        <span><i class="fas fa-bed"></i> 2 chambres</span>
                        <span><i class="fas fa-bath"></i> 1 salle de bain</span>
                        <span><i class="fas fa-vector-square"></i> 65 m²</span>
                    </div>
                    <div class="property-price">10.000.000 FCFA</div>
                    <button class="property-btn">
                        <i class="fas fa-home"></i> Visiter la propriété
                    </button>
                </div>
            </div>
            <div class="property-card">
                <div class="property-image">
                    <img src="../img2/simple/m2.jpg" alt="Maison traditionnelle">
                    <div class="property-badge">Bon état</div>
                </div>
                <div class="property-content">
                    <h3>Maison traditionnelle spacieuse</h3>
                    <div class="property-features">
                        <span><i class="fas fa-bed"></i> 4 chambres</span>
                        <span><i class="fas fa-bath"></i> 2 salles de bain</span>
                        <span><i class="fas fa-vector-square"></i> 140 m²</span>
                    </div>
                    <div class="property-price">30.000.000 FCFA</div>
                    <button class="property-btn">
                        <i class="fas fa-home"></i> Visiter la propriété
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="luxury-cta">
        <div class="cta-content">
            <h2>Vous cherchez une maison à petit prix ?</h2>
            <p>Notre équipe peut vous aider à trouver la propriété qui correspond à votre budget</p>
            <button class="cta-btn">
                <i class="fas fa-envelope"></i> Contactez-nous
            </button>
        </div>
    </section>
</body>
<?php require_once(__DIR__ . '/footer.php'); ?>

</body>

</html>