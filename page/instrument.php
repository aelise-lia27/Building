<?php require_once(__DIR__ .'/../config/dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building - Location d'outils et véhicules de construction</title>
    <link rel="stylesheet" href="../css/instrument.css">
    <link rel="shortcut icon" href="../img2/2eme_logo_sans_fond.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> -->
</head>

<body>
    <?php // require_once(__DIR__.'/header.php'); ?>

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
                <!-- Outil 1 -->
                <div class="equipment-card">
                    <div class="equipment-image">
                        <img src="../img2/instrument/ins1.jpeg" alt="Perceuse électrique">
                        <span class="badge">Populaire</span>
                        <!-- <span class="badge cat-certified">CAT</span> -->
                    </div>
                    <div class="equipment-info">
                        <h3><i class="fas fa-bolt"></i> Perceuse électrique</h3>
                        <p class="description">Parfaite pour percer tous types de matériaux. Puissance 850W, livrée avec coffret de forets.</p>
                        <div class="specs">
                            <span><i class="fas fa-battery-three-quarters"></i> 18V</span>
                            <span><i class="fas fa-tachometer-alt"></i> 3000 rpm</span>
                        </div>
                        <div class="price">98,500 FCFA <span class="period">/mois</span></div>
                        <button class="rent-btn"><i class="fas fa-cart-plus"></i> Louer maintenant</button>
                    </div>
                </div>

                <!-- Outil 2 -->
                <div class="equipment-card">
                    <div class="equipment-image">
                        <img src="../img2/instrument/ins2.jpeg" alt="Échafaudage">
                        <span class="badge">Sécurité</span>
                        <!-- <span class="badge cat-certified">CAT</span> -->
                    </div>
                    <div class="equipment-info">
                        <h3><i class="fas fa-ladder"></i> Échafaudage</h3>
                        <p class="description">Structure aluminium 2x1m, hauteur max 8m, conforme aux normes de sécurité.</p>
                        <div class="specs">
                            <span><i class="fas fa-ruler-combined"></i> 2x1m</span>
                            <span><i class="fas fa-weight-hanging"></i> 200kg</span>
                        </div>
                        <div class="price">131,000 FCFA <span class="period">/mois</span></div>
                        <button class="rent-btn"><i class="fas fa-cart-plus"></i> Louer maintenant</button>
                    </div>
                </div>

                <!-- Outil 3 -->
                <div class="equipment-card">
                    <div class="equipment-image">
                        <img src="../img2/instrument/ins3.jpeg" alt="Bétonnière">
                        <!-- <span class="badge cat-certified">CAT</span> -->
                    </div>
                    <div class="equipment-info">
                        <h3><i class="fas fa-mixer"></i> Bétonnière</h3>
                        <p class="description">Capacité 180L, moteur thermique 6.5HP, idéale pour petits et moyens travaux.</p>
                        <div class="specs">
                            <span><i class="fas fa-flask"></i> 180L</span>
                            <span><i class="fas fa-gas-pump"></i> Essence</span>
                        </div>
                        <div class="price">98,500 FCFA <span class="period">/mois</span></div>
                        <button class="rent-btn"><i class="fas fa-cart-plus"></i> Louer maintenant</button>
                    </div>
                </div>

                <!-- Outil 4 -->
                <div class="equipment-card">
                    <div class="equipment-image">
                        <img src="../img2/instrument/ins4.jpeg" alt="Marteau-piqueur">
                        <span class="badge new">Nouveau</span>
                        <!-- <span class="badge cat-certified">CAT</span> -->
                    </div>
                    <div class="equipment-info">
                        <h3><i class="fas fa-hammer"></i> Marteau-piqueur</h3>
                        <p class="description">30kg, 1500W, force de frappe 45J, pour démolition lourde et travaux intensifs.</p>
                        <div class="specs">
                            <span><i class="fas fa-bolt"></i> 1500W</span>
                            <span><i class="fas fa-weight"></i> 30kg</span>
                        </div>
                        <div class="price">32,800 FCFA <span class="period">/mois</span></div>
                        <button class="rent-btn"><i class="fas fa-cart-plus"></i> Louer maintenant</button>
                    </div>
                </div>

                <!-- Outil 5 -->
                <div class="equipment-card">
                    <div class="equipment-image">
                        <img src="../img2/instrument/ins5.jpeg" alt="Scie circulaire">
                        <!-- <span class="badge cat-certified">CAT</span> -->
                    </div>
                    <div class="equipment-info">
                        <h3><i class="fas fa-cut"></i> Scie circulaire</h3>
                        <p class="description">Diamètre lame 185mm, 1400W, profondeur de coupe 65mm, guidage laser.</p>
                        <div class="specs">
                            <span><i class="fas fa-ruler"></i> 185mm</span>
                            <span><i class="fas fa-bolt"></i> 1400W</span>
                        </div>
                        <div class="price">39,400 FCFA <span class="period">/mois</span></div>
                        <button class="rent-btn"><i class="fas fa-cart-plus"></i> Louer maintenant</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="equipment-section vehicles">
            <h2><i class="fas fa-truck-monster"></i> Nos Véhicules en Location</h2>
            <div class="equipment-grid">
                <!-- Véhicule 1 -->
                <div class="equipment-card">
                    <div class="equipment-image">
                        <img src="../img2/instrument/ins6.jpeg" alt="Grue">
                        <span class="badge">Pro</span>
                        <!-- <span class="badge cat-certified">CAT</span> -->
                    </div>
                    <div class="equipment-info">
                        <h3><i class="fas fa-crane"></i> Grue mobile</h3>
                        <p class="description">Portée 28m, charge max 6T, idéale pour chantiers urbains et manutention.</p>
                        <div class="specs">
                            <span><i class="fas fa-arrows-alt-v"></i> 28m</span>
                            <span><i class="fas fa-weight"></i> 6T</span>
                        </div>
                        <div class="price">984,000 FCFA <span class="period">/mois</span></div>
                        <button class="rent-btn"><i class="fas fa-cart-plus"></i> Louer maintenant</button>
                    </div>
                </div>

                <!-- Véhicule 2 -->
                <div class="equipment-card">
                    <div class="equipment-image">
                        <img src="../img2/instrument/ins7.jpeg" alt="Bulldozer">
                        <!-- <span class="badge cat-certified">CAT</span> -->
                    </div>
                    <div class="equipment-info">
                        <h3><i class="fas fa-tractor"></i> Bulldozer</h3>
                        <p class="description">25T, lame 3.5m, pour terrassement et nivellement de grands terrains.</p>
                        <div class="specs">
                            <span><i class="fas fa-ruler"></i> 3.5m</span>
                            <span><i class="fas fa-weight"></i> 25T</span>
                        </div>
                        <div class="price">787,000 FCFA <span class="period">/mois</span></div>
                        <button class="rent-btn"><i class="fas fa-cart-plus"></i> Louer maintenant</button>
                    </div>
                </div>

                <!-- Véhicule 3 -->
                <div class="equipment-card">
                    <div class="equipment-image">
                        <img src="../img2/instrument/ins8.jpeg" alt="Pelleteuse">
                        <span class="badge">Best-seller</span>
                        <!-- <span class="badge cat-certified">CAT</span> -->
                    </div>
                    <div class="equipment-info">
                        <h3><i class="fas fa-digging"></i> Pelleteuse</h3>
                        <p class="description">8T, godet 0.3m³, rotation 360°, parfaite pour excavation et travaux divers.</p>
                        <div class="specs">
                            <span><i class="fas fa-weight"></i> 8T</span>
                            <span><i class="fas fa-cube"></i> 0.3m³</span>
                        </div>
                        <div class="price">656,000 FCFA <span class="period">/mois</span></div>
                        <button class="rent-btn"><i class="fas fa-cart-plus"></i> Louer maintenant</button>
                    </div>
                </div>

                <!-- Véhicule 4 -->
                <div class="equipment-card">
                    <div class="equipment-image">
                        <img src="../img2/instrument/ins9.jpeg" alt="Camion-toupie">
                        <!-- <span class="badge cat-certified">CAT</span> -->
                    </div>
                    <div class="equipment-info">
                        <h3><i class="fas fa-truck-moving"></i> Camion-toupie</h3>
                        <p class="description">Capacité 6m³, livraison de béton prêt à l'emploi sur votre chantier.</p>
                        <div class="specs">
                            <span><i class="fas fa-flask"></i> 6m³</span>
                            <span><i class="fas fa-road"></i> 4x2</span>
                        </div>
                        <div class="price">590,000 FCFA <span class="period">/mois</span></div>
                        <button class="rent-btn"><i class="fas fa-cart-plus"></i> Louer maintenant</button>
                    </div>
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


</body>
<?php  require_once(__DIR__.'/footer.php'); ?>

</body>
</html>