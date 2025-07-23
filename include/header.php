<head>
    <link rel="stylesheet" href="../css/header.css">
</head>
<header class="entete">
    <div class="logo">
        <img src="../img2/Logo_building_orage_sans_avc_fond.png" alt="Logo BUILDING">
    </div>

    <div class="menu-toggle" id="mobile-menu">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav class="navigation" id="main-nav">
        <ul>
            <li><a href="/index.php">Accueil</a></li>
            <li><a href="/page/about.php">A propos</a></li>
            <li class="has-menu1">
                <a href="/page/service.php">Services</a>
                <nav class="sousMenu1">
                    <ul>
                        <li class="has-menu2">
                            <a href="#">Maison à vendre</a>
                            <nav class="sousMenu2">
                                <ul>
                                    <li><a href="/page/service1.php">Maisons luxueuses</a></li>
                                    <li><a href="/page/service2.php">Maisons moins cher</a></li>
                                </ul>
                            </nav>
                        </li>
                        <li><a href="/page/instrument.php">Les instruments</a></li>
                    </ul>
                </nav>
            </li>
            <li><a href="/page/publcation.php">Publication</a></li>
            <li><a href="/page/contact.php">Contact</a></li>
            <?php if (!isset($_SESSION['user_id'])): ?>
                <li class="auth-menu">
                    <a href="/page/connexion.php"><i class="fas fa-user-circle"></i> Connexion</a>
                    <!-- <nav class="auth-submenu">
                    <ul>
                        <li><a href="login.html"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
                        <li><a href="register.html"><i class="fas fa-user-plus"></i> Inscription</a></li>
                    </ul>
                </nav> -->
                </li>
            <?php else: ?>
                <li class="auth-menu">
                    <a href="/page/logout.php"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                </li>
            <?php endif; ?>

        </ul>
    </nav>
</header>

    <script src="../js/header.js"></script>
