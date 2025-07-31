document.addEventListener("DOMContentLoaded", function () {
  // Gestion de la navigation dans le sidebar
  const sidebarLinks = document.querySelectorAll(".sidebar-nav li");
  const contentSections = document.querySelectorAll(".content-section");

  sidebarLinks.forEach((link) => {
    link.addEventListener("click", function () {
      // Retirer la classe active de tous les liens
      sidebarLinks.forEach((item) => item.classList.remove("active"));

      // Ajouter la classe active au lien cliqué
      this.classList.add("active");

      // Masquer toutes les sections de contenu
      contentSections.forEach((section) => {
        section.classList.remove("active-section");
      });

      // Afficher la section correspondante
      const sectionId = this.getAttribute("data-section");
      document.getElementById(sectionId).classList.add("active-section");
    });
  });

  // Gestion des notifications
  const notificationBell = document.querySelector(".notifications");
  if (notificationBell) {
    notificationBell.addEventListener("click", function () {
      alert("Vous avez 3 nouvelles notifications");
      // Ici vous pourriez implémenter un système de notifications plus avancé
    });
  }

  // Gestion du profil admin
  const adminProfile = document.querySelector(".admin-profile");
  if (adminProfile) {
    adminProfile.addEventListener("click", function () {
      // Ici vous pourriez ajouter un menu déroulant pour le profil
      window.location.href = "profile.php";
    });
  }

  // Initialisation - Afficher la première section par défaut
  const defaultSection = document.querySelector(".sidebar-nav li.active");
  if (defaultSection) {
    const sectionId = defaultSection.getAttribute("data-section");
    document.getElementById(sectionId).classList.add("active-section");
  }

  // Animation pour les cartes statistiques
  const statCards = document.querySelectorAll(".stat-card");
  statCards.forEach((card) => {
    card.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-5px)";
    });

    card.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0)";
    });
  });
  
  // Gestion des modales (exemple pour le formulaire d'ajout de service)
  const addServiceBtn = document.getElementById("addServiceBtn");
  const serviceModal = document.getElementById("serviceModal");
  const closeModalBtns = document.querySelectorAll(".close-modal");

  if (addServiceBtn && serviceModal) {
    addServiceBtn.addEventListener("click", function () {
      serviceModal.style.display = "block";
    });

    closeModalBtns.forEach((btn) => {
      btn.addEventListener("click", function () {
        serviceModal.style.display = "none";
      });
    });

    window.addEventListener("click", function (event) {
      if (event.target === serviceModal) {
        serviceModal.style.display = "none";
      }
    });
  }
});

// Recuperation des element
const serviceName = document.getElementById("serviceName");
const serviceCategory = document.getElementById("serviceCategory");
const servicePrice = document.getElementById("servicePrice");
const serviceDescription = document.getElementById("serviceDescription");
const image = document.getElementById("image");
const badge = document.getElementById("badge");
const badgeColor = document.getElementById("badge_color");
const message = document.getElementById("message");

// script.js

// Envoie des information du form  de publication de service via Ajaxx
document.getElementById("serviceForm").addEventListener("submit", function (e) {
  e.preventDefault();

  // fonction qui affiche les message
  function afficherMessageErreur(texte) {
    message.textContent = texte;
    message.style.color = "red";
    setTimeout(() => {
      message.textContent = "";
    }, 7000);
  }
  // verification des champs vides
  if (
    !serviceName.value.trim() ||
    !serviceCategory.value.trim() ||
    !servicePrice.value.trim() ||
    !serviceDescription.value.trim() ||
    !image.value.trim()
  ) {
    afficherMessageErreur(
      "Veuillez remplir tous les champs, ils sont obligatoires."
    );
    return;
  }

  // Vérifier le titre du service (regexp : lettres/chiffres uniquement)
  const titleRegex = /^[a-zA-ZÀ-ÿ' -]{2,30}$/;
  if (!titleRegex.test(serviceName.value.trim())) {
    afficherMessageErreur("Titre du service invalide.");
    return;
  }
  // Vérifier l'email (regexp : format email)
  const priceRegex = /^\d+(\.\d{1,2})?$/;
  if (
    !priceRegex.test(servicePrice.value.trim()) ||
    Number(servicePrice.value) <= 0
  ) {
    afficherMessageErreur(
      "Prix invalide. Entrez un nombre positif ou superieur a 0."
    );
    return;
  }
  // verifier la longueur description du service
  if (serviceDescription.value.trim().length < 20) {
    afficherMessageErreur(
      "La description doit contenir au moins 20 caractères."
    );
    return;
  }

  // Vérifier le format de l'image (regexp : jpg, jpeg, png, gif)
  const imageRegex = /\.(jpg|jpeg|png|gif)$/i;
  if (!imageRegex.test(image.value.trim())) {
    afficherMessageErreur("Format d'image invalide (jpg, jpeg, png, gif).");
    return;
  }
  // Vérifier le badge (regexp : lettres/chiffres uniquement)
  const badgeRegex = /^[a-zA-ZÀ-ÿ0-9' -]{2,30}$/;
  if (badge.value.trim() && !badgeRegex.test(badge.value.trim())) {
    afficherMessageErreur("Badge invalide. Utilisez des lettres et chiffres.");
    return;
  }
  // Vérifier la couleur du badge (regexp : format hexadécimal)
  const colorRegex = /^#[0-9A-F]{6}$/i;
  if (badgeColor.value.trim() && !colorRegex.test(badgeColor.value.trim())) {
    afficherMessageErreur("Couleur du badge invalide (exemple : #FF0000).");
    return;
  }

  // Création de FormData
  const formData = new FormData();
  formData.append("serviceName", serviceName.value);
  formData.append("serviceCategory", serviceCategory.value);
  formData.append("servicePrice", servicePrice.value);
  formData.append("serviceDescription", serviceDescription.value);
  formData.append("image", image.files[0]); // image réelle

  if (badge.value.trim()) formData.append("badge", badge.value);
  if (badgeColor.value.trim()) formData.append("badgeColor", badgeColor.value);

  // AJAX avec XMLHttpRequest
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../index?action=CreerUnService", true);

  xhr.onload = function () {
    if (xhr.status === 200) {
      const response = JSON.parse(xhr.responseText);
      if (response.success) {
        message.textContent = "Service ajouté avec succès !";
        message.style.color = "green";
      } else {
        afficherMessageErreur(response.message);
      }
    } else {
      afficherMessageErreur("Erreur serveur.");
    }
  };

  xhr.send(formData); // Envoi direct
});
