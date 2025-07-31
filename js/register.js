// Recuperation des element
const firstname = document.getElementById("firstname");
const lastname = document.getElementById("lastname");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirm-password");
const terms = document.getElementById("terms");
const message = document.getElementById("message");

// script.js
document
  .getElementById("registerForm")
  .addEventListener("submit", function (e) {
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
      !firstname.value.trim() ||
      !lastname.value.trim() ||
      !email.value.trim() ||
      !password.value.trim() ||
      !confirmPassword.value.trim()
    ) {
      afficherMessageErreur(
        "Veuillez remplir tous les champs, ils sont obligatoires."
      );
      return;
    }

    // Vérifier le nom d'utilisateur (regexp : lettres/chiffres uniquement)
    const nameRegex = /^[a-zA-ZÀ-ÿ' -]{2,30}$/;
    if (
      !nameRegex.test(firstname.value.trim()) ||
      !nameRegex.test(lastname.value.trim())
    ) {
      afficherMessageErreur("Nom d'utilisateur invalide.");
      return;
    }
    // Vérifier l'email (regexp : format email)
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value)) {
      afficherMessageErreur(
        "Adresse e-mail invalide. Veuillez entrer une adresse e-mail valide."
      );
      return;
    }
    // Vérifier le téléphone (regexp : format téléphone)
    const phoneRegex = /^\+?[0-9]{10,15}$/;
    if (phone && !phoneRegex.test(phone.value)) {
      afficherMessageErreur(
        "Numéro de téléphone invalide. Veuillez entrer un numéro de téléphone valide."
      );
    }
    // verifier le regex du password (regexp : 8-20 caractères, au moins une lettre, un chiffre et un caractère spécial)
    // Fonction pour vérifier la force du mot de passe
    function verifierMotDePasse(motDePasse) {
      if (motDePasse.length < 8) {
        return "Le mot de passe doit contenir au moins 8 caractères.";
      }

      if (!/[a-z]/.test(motDePasse)) {
        return "Il doit contenir au moins une lettre minuscule.";
      }

      if (!/[A-Z]/.test(motDePasse)) {
        return "Il doit contenir au moins une lettre majuscule.";
      }

      if (!/[0-9]/.test(motDePasse)) {
        return "Il doit contenir au moins un chiffre.";
      }

      return "ok";
    }
    // Vérifier la force du mot de passe
    const resultat = verifierMotDePasse(password.value);

    if (resultat !== "ok") {
      afficherMessageErreur("mot de passe invalide : " + resultat);
      return;
    }
    // Vérifier la correspondance des mots de passe
    if (password.value !== confirmPassword.value) {
      afficherMessageErreur("Les mots de passe ne correspondent pas.");
      return;
    }
    // Vérifier si les conditions d'utilisation sont acceptées
    if (!terms.checked) {
      afficherMessageErreur("Veuillez accepter les conditions d'utilisation.");
      return;
    }

    // Soummission du formulaire a l'aide d'AJAX

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "/../templates/register-process.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function () {
      if (xhr.status === 200) {
        const response = JSON.parse(xhr.responseText); //  On transforme la réponse JSON en objet JS

        if (response.success) {
          message.textContent = "Inscription réussie ! Redirection...";
          message.style.color = "green"; // couleur verte

          setTimeout(() => {
            if (response.role === "admin") {
              window.location.href = "../page/dash-admin.php";
            } else {
              window.location.href = "../page/dash-user.php";
            }
          }, 3000);
        } else {
          afficherMessageErreur(response.message); //  message d’erreur venant de PHP
        }
      } else {
        afficherMessageErreur("Erreur serveur.");
      }
    };

    const params = new URLSearchParams();
    params.append("firstname", firstname.value);
    params.append("lastname", lastname.value);
    params.append("email", email.value);
    params.append("phone", phone.value);
    params.append("password", password.value);
    params.append("terms", terms.checked ? "on" : "");

    xhr.send(params.toString());
  });
