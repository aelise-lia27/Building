<?php
$title = "Maisons Abordables - Building";
$css = "../css/souServce.css";
?>

<?php ob_start(); ?>

<main>
    <!-- Intro Section -->
    <section class="luxury-intro">
        <div class="container">
            <h2>L'Art de Vivre avec Building</h2>
            <p>
                Plongez dans un monde de raffinement et de confort. Nos maisons luxueuses allient design contemporain,
                finitions haut de gamme et équipements exclusifs. Chaque propriété est pensée pour offrir un cadre de vie
                exceptionnel, avec des espaces généreux, des matériaux nobles et des prestations uniques.
            </p>
            <div class="highlights">
                <div class="highlight-item">
                    <i class="fas fa-gem"></i>
                    <span>Matériaux nobles</span>
                </div>
                <div class="highlight-item">
                    <i class="fas fa-vector-square"></i>
                    <span>Architecture unique</span>
                </div>
                <div class="highlight-item">
                    <i class="fas fa-home"></i>
                    <span>Emplacements prestigieux</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Properties Section -->
    <section class="properties-section">
        <div class="section-header">
            <h2>Nos Propriétés Sélectionnées</h2>
            <p>Découvrez nos dernières acquisitions exclusives</p>
        </div>
<div class="properties-grid">
    <?php foreach ($affordableHouses as $affordableHouse) : ?>
        <!-- Property  -->
        <div class="property-card">
            <div class="property-image">
                <img src="<?= htmlspecialchars($affordableHouse['image']) ?>" alt="Villa d'exception">
                <div class="property-badge">Nouveau</div>
            </div>
            <div class="property-content">
                <h3><?= htmlspecialchars($affordableHouse['title']) ?></h3>
                <div class="property-features">
                    <?= htmlspecialchars($affordableHouse['description']) ?>
                    <span><i class="fas fa-bed"></i> 5 chambres</span>
                    <span><i class="fas fa-bath"></i> 4 salles de bain</span>
                    <span><i class="fas fa-vector-square"></i> 350 m²</span>
                </div>
                <div class="property-price"><?= htmlspecialchars($affordableHouse['price']) ?></div>
                <button class="property-btn">
                    <i class="fas fa-home"></i> Visiter la propriété
                </button>
            </div>
        </div>
    <?php endforeach; ?>
</div>

    </section>

    <!-- CTA Section -->
    <section class="luxury-cta">
        <div class="cta-content">
            <h2>Vous ne trouvez pas votre propriété idéale ?</h2>
            <p>Notre équipe se tient à votre disposition pour une recherche personnalisée</p>
            <button class="cta-btn">
                <i class="fas fa-envelope"></i> Contactez-nous
            </button>
        </div>
    </section>
</main>

<?php $content = ob_get_clean() ?>
<?php require('layout.php') ?>