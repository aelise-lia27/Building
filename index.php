<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue chez Building</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img2/2eme_logo_sans_fond.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php  require_once(__DIR__ ."/page/header.php"); ?>


    <main>
        <h1>Bienvenue sur Building</h1>
        <p class="intro-text">Chez <span class="brand">Buil<span>ding</span></span>, nous vous offrons tout ce dont vous avez besoin pour bâtir votre avenir !</p>

        <section class="body-center">
            <div class="text">
                <ul class="body">
                    <li><span class="p1">Instruments de construction</span>: Découvrez notre large gamme d'outils et équipements de qualité professionnelle.</li>
                    <li><span class="p1">Construction clé en main</span>: Faites confiance à nos experts pour concevoir et construire vos maisons.</li>
                    <li><span class="p1">Vente de maisons</span>: Trouvez votre maison idéale parmi nos propriétés disponibles.</li>
                </ul>
            </div>
            
            <div class="slider-container">
                <div class="slider">
                    <input type="radio" name="slide" id="c1" checked>
                    <label for="c1" class="card">
                        <div class="content">
                            <h2>Maison familiale</h2>
                            <p>Avec plusieurs chambres, un grand salon et un espace extérieur.</p>
                        </div>
                    </label>
                    
                    <input type="radio" name="slide" id="c2">
                    <label for="c2" class="card">
                        <div class="content">
                            <h2>Nos équipes</h2>
                        </div>
                    </label>
                    
                    <input type="radio" name="slide" id="c3">
                    <label for="c3" class="card">
                        <div class="content">
                            <h2>Appartement de luxe</h2>
                            <p>Élégant, avec finitions haut de gamme et vue imprenable.</p>
                        </div>
                    </label>
                    
                    <input type="radio" name="slide" id="c4">
                    <label for="c4" class="card">
                        <div class="content">
                            <p>Tous les instruments disponibles</p>
                        </div>
                    </label>
                    
                    <input type="radio" name="slide" id="c5">
                    <label for="c5" class="card">
                        <div class="content">
                            <h2>Maison moderne avec jardin</h2>
                            <p>Spacieuse, lumineuse, et équipée de toutes les commodités.</p>
                        </div>
                    </label>
                </div>
            </div>
        </section>

        <div class="down-text">
            <p class="devise">Avec <span class="brand">Buil<span>ding</span></span>, construire, rénover, ou acheter un bien devient simple et accessible. Explorez nos services et démarrez votre prochain projet dès aujourd'hui !</p>
        </div>
        
        <div class="btn"><a href="#">Découvrir nos offres</a></div>
    </main>

      <?php  require_once(__DIR__.'/page/footer.php'); ?>

    <script src="js/header.js"></script>
</body>
</html>