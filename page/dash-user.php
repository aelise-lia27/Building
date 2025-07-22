<?php require_once(__DIR__.'/../config/auth.php');
session_start();

// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit;
// }

// if ($_SESSION['role'] !== 'user') {
//     // Refuser l'accès aux admins
//     header("Location: unauthorized.php");
//     exit;
// }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mon Compte - Building</title>
    <meta name="description" content="Tableau de bord utilisateur">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/dash-user.css">
    <link rel="shortcut icon" href="../img2/2eme_logo_sans_fond.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php require_once(__DIR__.'/header.php'); ?>

    <div class="user-dashboard-container">
        <!-- User Sidebar -->
        <aside class="user-sidebar">
            <div class="user-profile">
                <img src="../img2/about/dgiamge.jpg" alt="Profile Utilisateur" class="profile-image">
                <h3><?php  echo  strtoupper($_SESSION['firstname' ]) ." ". $_SESSION['lastname'] ?></h3>
                <p class="user-email">jean.dupont@example.com</p>
            </div>
            <nav class="user-nav">
                <ul>
                    <li class=""><a href="#"><i class="fas fa-tachometer-alt"></i> Tableau de bord</a></li>
                    <li><a href="#"><i class="fas fa-home"></i> Mes propriétés</a></li>
                    <li><a href="#"><i class="fas fa-tools"></i> Mes locations</a></li>
                    <li><a href="#"><i class="fas fa-heart"></i> Favoris</a></li>
                    <li><a href="#"><i class="fas fa-comment"></i> Mes avis</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i> Paramètres</a></li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <a href="../logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="user-main-content">
            <div class="welcome-banner">
                <h1>Bonjour, Jean Dupont</h1>
                <p>Bienvenue sur votre tableau de bord. Consultez vos activités récentes et vos statistiques.</p>
            </div>

            <!-- Quick Stats -->
            <div class="quick-stats">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="stat-info">
                        <h3>3</h3>
                        <p>Propriétés</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="stat-info">
                        <h3>5</h3>
                        <p>Locations</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-comment"></i>
                    </div>
                    <div class="stat-info">
                        <h3>2</h3>
                        <p>Avis</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="stat-info">
                        <h3>7</h3>
                        <p>Favoris</p>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="recent-activity">
                <h2 class="section-title">Activité récente</h2>
                <div class="activity-list">
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="activity-content">
                            <h3>Nouvelle propriété ajoutée</h3>
                            <p>Vous avez ajouté une maison à Lyon à votre liste de propriétés</p>
                            <span class="activity-date">10 juin 2023</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="activity-content">
                            <h3>Location confirmée</h3>
                            <p>Votre location de pelleteuse pour le 15 juin a été confirmée</p>
                            <span class="activity-date">8 juin 2023</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">
                            <i class="fas fa-comment"></i>
                        </div>
                        <div class="activity-content">
                            <h3>Avis publié</h3>
                            <p>Vous avez laissé un avis sur la location de bétonnière</p>
                            <span class="activity-date">5 juin 2023</span>
                        </div>
                    </div>
                </div>
                <a href="#" class="view-all-link">Voir toute l'activité <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Current Rentals -->
            <div class="current-rentals">
                <h2 class="section-title">Mes locations en cours</h2>
                <div class="rentals-list">
                    <div class="rental-card">
                        <img src="../img2/betonniere.jpg" alt="Bétonnière" class="rental-image">
                        <div class="rental-info">
                            <h3>Location de bétonnière</h3>
                            <div class="rental-meta">
                                <span class="rental-date"><i class="fas fa-calendar-alt"></i> 15-20 juin 2023</span>
                                <span class="rental-price">60€/jour</span>
                            </div>
                            <div class="rental-status confirmed">
                                <i class="fas fa-check-circle"></i> Confirmée
                            </div>
                            <a href="#" class="rental-details-btn">Détails</a>
                        </div>
                    </div>
                    <div class="rental-card">
                        <img src="../img2/pelleteuse.jpg" alt="Pelleteuse" class="rental-image">
                        <div class="rental-info">
                            <h3>Location de pelleteuse</h3>
                            <div class="rental-meta">
                                <span class="rental-date"><i class="fas fa-calendar-alt"></i> 25-30 juin 2023</span>
                                <span class="rental-price">120€/jour</span>
                            </div>
                            <div class="rental-status pending">
                                <i class="fas fa-clock"></i> En attente
                            </div>
                            <a href="#" class="rental-details-btn">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php require_once(__DIR__.'/footer.php'); ?>

    <script src="../js/user-dashboard.js"></script>
</body>
</html>