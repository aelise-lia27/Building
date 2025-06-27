<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion des Services - Building</title>
    <meta name="description" content="Gestion des services de construction">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin-services.css">
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
                    <li><a href="admin-dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="active"><a href="admin-services.php"><i class="fas fa-tools"></i> Services</a></li>
                    <li><a href="#"><i class="fas fa-home"></i> Propriétés</a></li>
                    <li><a href="#"><i class="fas fa-users"></i> Utilisateurs</a></li>
                    <li><a href="#"><i class="fas fa-comment"></i> Avis</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i> Messages</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i> Paramètres</a></li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <a href="../logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="admin-main">
            <header class="admin-header">
                <div class="header-left">
                    <h1>Gestion des Services</h1>
                </div>
                <div class="header-right">
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="notification-count">2</span>
                    </div>
                    <div class="admin-profile">
                        <img src="../img2/default-profile.jpg" alt="Profile Admin">
                        <span>Admin</span>
                    </div>
                </div>
            </header>

            <div class="admin-content">
                <div class="service-actions">
                    <button class="btn btn-primary" id="addServiceBtn">
                        <i class="fas fa-plus"></i> Ajouter un service
                    </button>
                    <div class="search-box">
                        <input type="text" placeholder="Rechercher un service...">
                        <button class="search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <!-- Add Service Modal -->
                <div class="modal" id="serviceModal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Ajouter un nouveau service</h3>
                            <span class="close-modal">&times;</span>
                        </div>
                        <div class="modal-body">
                            <form id="serviceForm">
                                <div class="form-group">
                                    <label for="serviceName">Nom du service</label>
                                    <input type="text" id="serviceName" name="serviceName" placeholder="Ex: Location de bétonnière" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="serviceCategory">Catégorie</label>
                                    <select id="serviceCategory" name="serviceCategory" required>
                                        <option value="">Sélectionnez une catégorie</option>
                                        <option value="location">Location d'équipement</option>
                                        <option value="construction">Construction</option>
                                        <option value="renovation">Rénovation</option>
                                        <option value="materiaux">Matériaux</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="servicePrice">Prix (€/jour)</label>
                                    <input type="number" id="servicePrice" name="servicePrice" placeholder="50" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="serviceDescription">Description</label>
                                    <textarea id="serviceDescription" name="serviceDescription" rows="4" placeholder="Décrivez le service en détail..." required></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="serviceImages">Images</label>
                                    <div class="image-upload">
                                        <label for="serviceImages" class="upload-btn">
                                            <i class="fas fa-cloud-upload-alt"></i> Choisir des images
                                        </label>
                                        <input type="file" id="serviceImages" name="serviceImages" multiple accept="image/*" style="display: none;">
                                        <div class="image-preview" id="imagePreview"></div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Disponibilité</label>
                                    <div class="availability-options">
                                        <label>
                                            <input type="radio" name="serviceAvailability" value="available" checked> Disponible
                                        </label>
                                        <label>
                                            <input type="radio" name="serviceAvailability" value="unavailable"> Indisponible
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-actions">
                                    <button type="button" class="btn btn-secondary close-modal">Annuler</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Services List -->
                <div class="services-container">
                    <div class="services-list">
                        <!-- Service Card 1 -->
                        <div class="service-card">
                            <div class="service-image">
                                <img src="../img2/betonniere.jpg" alt="Bétonnière">
                                <span class="service-status available">Disponible</span>
                            </div>
                            <div class="service-info">
                                <h3>Location de bétonnière</h3>
                                <div class="service-meta">
                                    <span class="service-category">Location d'équipement</span>
                                    <span class="service-price">60€/jour</span>
                                </div>
                                <p class="service-description">
                                    Bétonnière professionnelle 160L, capacité 8/6 charges par heure, moteur thermique...
                                </p>
                                <div class="service-actions">
                                    <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Service Card 2 -->
                        <div class="service-card">
                            <div class="service-image">
                                <img src="../img2/pelleteuse.jpg" alt="Pelleteuse">
                                <span class="service-status available">Disponible</span>
                            </div>
                            <div class="service-info">
                                <h3>Location de pelleteuse</h3>
                                <div class="service-meta">
                                    <span class="service-category">Location d'équipement</span>
                                    <span class="service-price">120€/jour</span>
                                </div>
                                <p class="service-description">
                                    Pelleteuse compacte 1.5T, idéale pour les petits espaces et travaux de terrassement...
                                </p>
                                <div class="service-actions">
                                    <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Service Card 3 -->
                        <div class="service-card">
                            <div class="service-image">
                                <img src="../img2/maçon.jpg" alt="Maçonnerie">
                                <span class="service-status unavailable">Indisponible</span>
                            </div>
                            <div class="service-info">
                                <h3>Service de maçonnerie</h3>
                                <div class="service-meta">
                                    <span class="service-category">Construction</span>
                                    <span class="service-price">45€/heure</span>
                                </div>
                                <p class="service-description">
                                    Service professionnel de maçonnerie pour tous vos projets de construction et rénovation...
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
            </div>
        </main>
    </div>

    <script src="admin-services.js"></script>
</body>
</html>