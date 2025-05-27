// Script JavaScript amélioré
document.addEventListener('DOMContentLoaded', function() {
    // Sélection des éléments
    const menuToggle = document.getElementById('mobile-menu');
    const navigation = document.getElementById('main-nav');
    const submenuToggles = document.querySelectorAll('.has-menu1, .has-menu2');

    // Gestion du menu burger
    menuToggle.addEventListener('click', function() {
        menuToggle.classList.toggle('active');
        navigation.classList.toggle('active');
    });

    // Gestion des sous-menus
    submenuToggles.forEach(toggle => {
        const link = toggle.querySelector('a');
        const submenu = toggle.querySelector('.sousMenu1, .sousMenu2');
        
        // Créer le bouton toggle pour le sous-menu
        const submenuToggle = document.createElement('div');
        submenuToggle.className = 'submenu-toggle';
        link.appendChild(submenuToggle);

        // Gérer le clic sur le lien parent
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                toggle.classList.toggle('active');
            }
        });
    });

    // Fermer le menu lors du clic en dehors
    document.addEventListener('click', function(e) {
        if (!navigation.contains(e.target) && !menuToggle.contains(e.target)) {
            menuToggle.classList.remove('active');
            navigation.classList.remove('active');
        }
    });

    // Fermer le menu lors du redimensionnement de la fenêtre
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            menuToggle.classList.remove('active');
            navigation.classList.remove('active');
            submenuToggles.forEach(toggle => {
                toggle.classList.remove('active');
            });
        }
    });
});