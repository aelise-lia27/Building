<?php 

if (!isset($_SESSION['user_id'])) {
    // Pas connecté
    header("Location: login.php");
    exit;
}

if ($_SESSION['role'] !== 'admin') {
    // L'utilisateur n'est pas un admin
    header("Location: unauthorized.php"); // ou index.php
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Admin - Building</title>
    <meta name="description" content="Tableau de bord administrateur">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/dash-admin.css">
    <link rel="shortcut icon" href="../img2/2eme_logo_sans_fond.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <div class="sidebar-header">
                <img src="../img2/2eme_logo_sans_fond.png" alt="Logo Building" class="sidebar-logo">
                <h3>Building Admin</h3>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li class="active" data-section="overview"><a href="#"><i class="fas fa-tachometer-alt"></i> Overview</a></li>
                    <li data-section="services"><a href="#"><i class="fas fa-tools"></i> Services</a></li>
                    <li data-section="reviews"><a href="#"><i class="fas fa-star"></i> Avis</a></li>
                    <li data-section="users"><a href="#"><i class="fas fa-users"></i> Utilisateurs</a></li>
                    <li data-section="messages"><a href="#"><i class="fas fa-envelope"></i> Messages</a></li>
                    <li data-section="settings"><a href="#"><i class="fas fa-cog"></i> Paramètres</a></li>
                    <li data-section="settings"><a href="../index.php?action=Acceuil"><i class="fas fa-arrow-left"></i> Retour au site</a></li>
                    <li data-section="settings"><a href="../index.php?action=Deconnexion"><i class="fas fa-sign-in-alt"></i> Deconnexion</a></li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <a href="../logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="admin-main">
            <!-- Header commun à toutes les sections -->
            <header class="admin-header">
                <div class="header-left">
                    <h1>Tableau de bord</h1>
                </div>
                <div class="header-right">
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="notification-count">3</span>
                    </div>
                    <div class="admin-profile">
                        <img src="../img2/about/dff.jpg" alt="Profile Admin">
                        <span>Admin</span>
                    </div>
                </div>
            </header>

            <!-- Overview Section -->
            <section id="overview" class="content-section active-section">
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-icon bg-primary">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3>1,254</h3>
                            <p>Utilisateurs</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon bg-success">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="stat-info">
                            <h3>568</h3>
                            <p>Propriétés</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon bg-warning">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="stat-info">
                            <h3>324</h3>
                            <p>Services</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon bg-danger">
                            <i class="fas fa-comment"></i>
                        </div>
                        <div class="stat-info">
                            <h3>1,024</h3>
                            <p>Avis</p>
                        </div>
                    </div>
                </div>

                <div class="activity-container card">
                    <div class="section-header">
                        <h2>Activité récente</h2>
                        <a href="#" class="view-all">Voir tout</a>
                    </div>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-user-plus text-primary"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>Nouvel utilisateur</strong> - Jean Dupont s'est inscrit</p>
                                <small>Il y a 10 minutes</small>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-home text-success"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>Nouvelle propriété</strong> - Maison à Paris ajoutée</p>
                                <small>Il y a 45 minutes</small>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-comment text-danger"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>Nouvel avis</strong> - Marie a laissé un avis sur "Location pelleteuse"</p>
                                <small>Il y a 2 heures</small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Section -->
            <section id="services" class="content-section">
                <div class="card">
                    <div class="section-header">
                        <h2>Gestion des Services</h2>
                        <button class="btn btn-primary" id="addServiceBtn">
                            <i class="fas fa-plus"></i> Ajouter un service
                        </button>
                    </div>

                    <div class="search-box">
                        <input type="text" placeholder="Rechercher un service...">
                        <button class="btn btn-secondary"><i class="fas fa-search"></i></button>
                    </div>

                    <div class="services-list">
                        <div class="service-card">
                            <div class="service-image">
                                <img src="../img2/betonniere.jpg" alt="Bétonnière">
                                <span class="service-status available">Disponible</span>
                            </div>
                            <div class="service-info">
                                <h3>Location de bétonnière</h3>
                                <div class="service-meta">
                                    <span class="service-category">Location</span>
                                    <span class="service-price">60€/jour</span>
                                </div>
                                <p class="service-description">
                                    Bétonnière professionnelle 160L, capacité 8/6 charges par heure...
                                </p>
                                <div class="service-actions">
                                    <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="service-image">
                                <img src="../img2/pelleteuse.jpg" alt="Pelleteuse">
                                <span class="service-status available">Disponible</span>
                            </div>
                            <div class="service-info">
                                <h3>Location de pelleteuse</h3>
                                <div class="service-meta">
                                    <span class="service-category">Location</span>
                                    <span class="service-price">120€/jour</span>
                                </div>
                                <p class="service-description">
                                    Pelleteuse compacte 1.5T, idéale pour les petits espaces...
                                </p>
                                <div class="service-actions">
                                    <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Reviews Section -->
            <section id="reviews" class="content-section">
                <div class="card">
                    <div class="section-header">
                        <h2>Avis Clients</h2>
                        <a href="#" class="view-all">Voir tout</a>
                    </div>

                    <div class="reviews-list">
                        <div class="review-item">
                            <div class="review-header">
                                <div class="user-info">
                                    <img src="../img2/default-profile.jpg" alt="Marie Lambert">
                                    <div>
                                        <h4>Marie Lambert</h4>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5</span>
                                        </div>
                                    </div>
                                </div>
                                <small>Il y a 2 jours</small>
                            </div>
                            <div class="review-content">
                                <p>Excellent service ! La bétonnière était en parfait état et la livraison très ponctuelle. Je recommande vivement.</p>
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-sm btn-success"><i class="fas fa-check"></i> Approuver</button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i> Rejeter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Users Section -->
            <section id="users" class="content-section">
                <div class="card">
                    <div class="section-header">
                        <h2>Gestion des Utilisateurs</h2>
                        <button class="btn btn-primary">
                            <i class="fas fa-plus"></i> Ajouter un utilisateur
                        </button>
                    </div>

                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Inscription</th>
                                <th>Rôle</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="user-info">
                                        <img src="../img2/default-profile.jpg" alt="Jean Dupont">
                                        <span>Jean Dupont</span>
                                    </div>
                                </td>
                                <td>jean.dupont@example.com</td>
                                <td>10/06/2023</td>
                                <td><span class="badge user">Utilisateur</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Messages Section -->
            <section id="messages" class="content-section">
                <div class="card">
                    <div class="section-header">
                        <h2>Messages Reçus</h2>
                        <a href="#" class="view-all">Voir tout</a>
                    </div>

                    <div class="messages-list">
                        <div class="message-item unread">
                            <div class="message-header">
                                <div class="sender-info">
                                    <img src="../img2/default-profile.jpg" alt="Paul Martin">
                                    <div>
                                        <h4>Paul Martin</h4>
                                        <small>paul.martin@example.com</small>
                                    </div>
                                </div>
                                <small>Il y a 1 heure</small>
                            </div>
                            <div class="message-content">
                                <p>Bonjour, je souhaiterais obtenir des informations sur vos services de location...</p>
                            </div>
                            <div class="message-actions">
                                <button class="btn btn-sm btn-primary">Répondre</button>
                                <button class="btn btn-sm btn-danger">Supprimer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Settings Section -->
            <section id="settings" class="content-section">
                <div class="card">
                    <div class="section-header">
                        <h2>Paramètres du Site</h2>
                    </div>

                    <form class="settings-form">
                        <div class="form-group">
                            <label for="site-name">Nom du site</label>
                            <input type="text" id="site-name" value="Building Services">
                        </div>

                        <div class="form-group">
                            <label for="site-logo">Logo du site</label>
                            <input type="file" id="site-logo">
                        </div>

                        <div class="form-group">
                            <label for="maintenance-mode">Mode maintenance</label>
                            <div class="toggle-switch">
                                <input type="checkbox" id="maintenance-mode">
                                <span class="slider"></span>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
    </div>

    <!-- Modal pour ajouter un service -->
    <div class="modal" id="serviceModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Ajouter un nouveau service</h3>
                <span class="close-modal">&times;</span>
            </div>
            <div class="modal-body">
                <form id="serviceForm" action="../index.php?ajouter.php" method="POST" enctype="multipart/form-data" style="max-width:500px; margin:auto;">
                    <h2>Publier une annonce</h2>

                    <div class="form-group">
                        <label for="serviceName">Titre :</label>
                        <input type="text" id="serviceName" name="title" placeholder="Ex: Location de bétonnière">
                    </div>

                    <div class="form-group">
                        <label for="serviceCategory">Type :</label>
                        <select id="serviceCategory" name="type">
                            <option value="maison_chere">Maison chère</option>
                            <option value="maison_reduite">Maison à coût réduit</option>
                            <option value="equipement">Équipement à louer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="servicePrice">Prix (cfa) :</label>
                        <input type="number" id="servicePrice" name="price" step="0.01" placeholder="50">
                    </div>

                    <div class="form-group">
                        <label for="serviceDescription">Description :</label>
                        <textarea id="serviceDescription" name="description" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" id="image" name="image" accept="image/*">
                    </div>

                    <div class="form-group">
                        <label for="badge">Badge (optionnel) :</label>
                        <input type="text" id="badge" name="badge" placeholder="Ex: Promo, Premium">
                    </div>

                    <div class="form-group">
                        <label for="badge_color">Couleur du badge :</label>
                        <input type="color" id="badge_color" name="badge_color" value="#ff0000">
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary close-modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Publier</button>
                    </div>
                    <p id="message"></p>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal pour éditer un service -->
<div class="modal" id="editServiceModal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Modifier le service</h3>
            <span class="close-modal">&times;</span>
        </div>
        <div class="modal-body">
            <form id="editServiceForm" action="../index.php?modifier.php" method="POST" enctype="multipart/form-data" style="max-width:500px; margin:auto;">
                <input type="hidden" id="editServiceId" name="id">
                
                <div class="form-group">
                    <label for="editServiceName">Titre :</label>
                    <input type="text" id="editServiceName" name="title" placeholder="Ex: Location de bétonnière">
                </div>

                <div class="form-group">
                    <label for="editServiceCategory">Type :</label>
                    <select id="editServiceCategory" name="type">
                        <option value="maison_chere">Maison chère</option>
                        <option value="maison_reduite">Maison à coût réduit</option>
                        <option value="equipement">Équipement à louer</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="editServicePrice">Prix (cfa) :</label>
                    <input type="number" id="editServicePrice" name="price" step="0.01" placeholder="50">
                </div>

                <div class="form-group">
                    <label for="editServiceDescription">Description :</label>
                    <textarea id="editServiceDescription" name="description" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="editImage">Image :</label>
                    <input type="file" id="editImage" name="image" accept="image/*">
                    <div id="currentImageContainer" style="margin-top: 10px;">
                        <small>Image actuelle :</small>
                        <img id="currentImagePreview" src="" style="max-width: 100px; display: block; margin-top: 5px;">
                    </div>
                </div>

                <div class="form-group">
                    <label for="editBadge">Badge (optionnel) :</label>
                    <input type="text" id="editBadge" name="badge" placeholder="Ex: Promo, Premium">
                </div>

                <div class="form-group">
                    <label for="editBadgeColor">Couleur du badge :</label>
                    <input type="color" id="editBadgeColor" name="badge_color" value="#ff0000">
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-secondary close-modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
                <p id="editMessage"></p>
            </form>
        </div>
    </div>
</div>

    <script src="../js/dash.js"></script>
</body>

</html>