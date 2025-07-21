document.addEventListener('DOMContentLoaded', function() {
    // Gestion de la navigation dans le sidebar
    const sidebarLinks = document.querySelectorAll('.sidebar-nav li');
    const contentSections = document.querySelectorAll('.content-section');
    
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Retirer la classe active de tous les liens
            sidebarLinks.forEach(item => item.classList.remove('active'));
            
            // Ajouter la classe active au lien cliqué
            this.classList.add('active');
            
            // Masquer toutes les sections de contenu
            contentSections.forEach(section => {
                section.classList.remove('active-section');
            });
            
            // Afficher la section correspondante
            const sectionId = this.getAttribute('data-section');
            document.getElementById(sectionId).classList.add('active-section');
        });
    });
    
    // Gestion des notifications
    const notificationBell = document.querySelector('.notifications');
    if (notificationBell) {
        notificationBell.addEventListener('click', function() {
            alert('Vous avez 3 nouvelles notifications');
            // Ici vous pourriez implémenter un système de notifications plus avancé
        });
    }
    
    // Gestion du profil admin
    const adminProfile = document.querySelector('.admin-profile');
    if (adminProfile) {
        adminProfile.addEventListener('click', function() {
            // Ici vous pourriez ajouter un menu déroulant pour le profil
            window.location.href = 'profile.php';
        });
    }
    
    // Initialisation - Afficher la première section par défaut
    const defaultSection = document.querySelector('.sidebar-nav li.active');
    if (defaultSection) {
        const sectionId = defaultSection.getAttribute('data-section');
        document.getElementById(sectionId).classList.add('active-section');
    }
    
    // Animation pour les cartes statistiques
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Gestion des modales (exemple pour le formulaire d'ajout de service)
    const addServiceBtn = document.getElementById('addServiceBtn');
    const serviceModal = document.getElementById('serviceModal');
    const closeModalBtns = document.querySelectorAll('.close-modal');
    
    if (addServiceBtn && serviceModal) {
        addServiceBtn.addEventListener('click', function() {
            serviceModal.style.display = 'block';
        });
        
        closeModalBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                serviceModal.style.display = 'none';
            });
        });
        
        window.addEventListener('click', function(event) {
            if (event.target === serviceModal) {
                serviceModal.style.display = 'none';
            }
        });
    }
});