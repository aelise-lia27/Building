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
                    <li class="active"><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li><a href="admin-services.php"><i class="fas fa-tools"></i> Services</a></li>
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
                    <h1>Tableau de bord</h1>
                </div>
                <div class="header-right">
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="notification-count">3</span>
                    </div>
                    <div class="admin-profile">
                        <img src="../img2/default-profile.jpg" alt="Profile Admin">
                        <span>Admin</span>
                    </div>
                </div>
            </header>

            <div class="admin-content">
                <!-- Stats Cards -->
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

                <!-- Recent Activity -->
                <div class="activity-container">
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
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-tools text-warning"></i>
                            </div>
                            <div class="activity-content">
                                <p><strong>Service mis à jour</strong> - Location de bétonnière modifiée</p>
                                <small>Hier à 14:30</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Users -->
                <div class="users-container">
                    <div class="section-header">
                        <h2>Derniers utilisateurs</h2>
                        <a href="#" class="view-all">Voir tout</a>
                    </div>
                    <table class="users-table">
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
                                        <img src="../img2/default-profile.jpg" alt="User">
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
                            <tr>
                                <td>
                                    <div class="user-info">
                                        <img src="../img2/default-profile.jpg" alt="User">
                                        <span>Marie Lambert</span>
                                    </div>
                                </td>
                                <td>marie.lambert@example.com</td>
                                <td>08/06/2023</td>
                                <td><span class="badge user">Utilisateur</span></td>
                                <td>
                                    <button class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user-info">
                                        <img src="../img2/default-profile.jpg" alt="User">
                                        <span>Paul Martin</span>
                                    </div>
                                </td>
                                <td>paul.martin@example.com</td>
                                <td>05/06/2023</td>
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
            </div>
        </main>
    </div>

    <script src="../js/admin-dashboard.js"></script>
</body>
</html>