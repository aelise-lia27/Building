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
            <li><a href="../index.php?action=Acceuil">Accueil</a></li>
            <li><a href="../index.php?action=Apropos">A propos</a></li>
            <li class="has-menu1">
                <a href="../index.php?action=Services">Services</a>
                <nav class="sousMenu1">
                    <ul>
                        <li class="has-menu2">
                            <a href="#">Maison à vendre</a>
                            <nav class="sousMenu2">
                                <ul>
                                    <li><a href="../index.php?action=Luxury">Maisons luxueuses</a></li>
                                    <li><a href="../index.php?action=Affordable">Maisons moins cher</a></li>
                                </ul>
                            </nav>
                        </li>
                        <li><a href="../index.php?action=Instrument">Les instruments</a></li>
                    </ul>
                </nav>
            </li>
            <li><a href="../index.php?action=publication">Publication</a></li>
            <li><a href="../index.php?action=contact">Contact</a></li>
            <?php if (!isset($_SESSION['user_id'])): ?>
                <li class="auth-menu">
                    <a href="../index.php?action=login"><i class="fas fa-user-circle"></i> Connexion</a>
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