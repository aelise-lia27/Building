<?php 
$css = "../css/instrument.css";
$title = " Building - Location d'outils et véhicules de construction";
?>

<head>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> -->
</head>
<?php ob_start(); ?>


<div class="hero">
    <div class="hero-content">
        <h1><i class="fas fa-tools"></i> Location d'équipements de construction</h1>
        <p class="subtitle">Des outils professionnels et véhicules adaptés à tous vos chantiers, avec des tarifs compétitifs</p>
        <!-- <div class="cat-certification-badge">
                <img src="../img2/cat-logo-white.png" alt="Certifié CAT" class="cat-logo">
                 <span>Certifié CAT</span>
            </div> -->
    </div>
</div>

<main class="container">


    <section class="equipment-section">
        <h2><i class="fas fa-tools"></i> Nos Outils en Location</h2>
        <div class="equipment-grid">
            <?php foreach ($constructionTools as $constructionTool) : ?>
                <!-- Outil  -->
                <div class="equipment-card">
                    <div class="equipment-image">
                        <img src="../img2/instrument/ins1.jpeg" alt="Perceuse électrique">
                        <span class="badge">Populaire</span>
                        <!-- <span class="badge cat-certified">CAT</span> -->
                    </div>
                    <div class="equipment-info">
                        <h3><i class="fas fa-bolt"></i><?= $constructionTool['title'] ?></h3>
                        <p class="description"><?= $constructionTool['description'] ?></p>
                        <div class="specs">
                            <span><i class="fas fa-battery-three-quarters"></i> 18V</span>
                            <span><i class="fas fa-tachometer-alt"></i> 3000 rpm</span>
                        </div>
                        <div class="price"><?= $constructionTool['price'] ?>FCFA <span class="period">/mois</span></div>
                        <button class="rent-btn"><i class="fas fa-cart-plus"></i> Louer maintenant</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="equipment-section vehicles">
        <h2><i class="fas fa-truck-monster"></i> Nos Véhicules en Location</h2>
        <div class="equipment-grid">
            <?php foreach ($constructionCars as $constructionCar) : ?>
                <!-- Véhicule 1 -->
                <div class="equipment-card">
                    <div class="equipment-image">
                        <img src="../img2/instrument/ins6.jpeg" alt="Grue">
                        <span class="badge">Pro</span>
                        <!-- <span class="badge cat-certified">CAT</span> -->
                    </div>
                    <div class="equipment-info">
                        <h3><i class="fas fa-crane"></i><?= $constructionCar['title'] ?></h3>
                        <p class="description"><?= $constructionCar['description'] ?></p>
                        <div class="specs">
                            <span><i class="fas fa-arrows-alt-v"></i> 28m</span>
                            <span><i class="fas fa-weight"></i> 6T</span>
                        </div>
                        <div class="price"><?= $constructionCar['price'] ?><span class="period">/mois</span></div>
                        <button class="rent-btn"><i class="fas fa-cart-plus"></i> Louer maintenant</button>
                    </div>
                <?php endforeach; ?>
                </div>

        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <h2>Prêt à commencer votre chantier ?</h2>
            <p>Nos experts sont disponibles pour vous conseiller sur le matériel adapté à vos besoins.</p>
            <div class="cta-buttons">
                <button class="cta-btn primary"><i class="fas fa-phone-alt"></i> 90 00 00 00</button>
                <button class="cta-btn secondary"><i class="fas fa-envelope"></i> contact@Building.tg</button>
            </div>
        </div>
    </section>
</main>


<?php $content = ob_get_clean()  ?>

<?php require_once('layout.php'); ?>


</html>