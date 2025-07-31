// Recuperation des element
const nom = document.getElementById("nom");
const email = document.getElementById("email");
const phone = document.getElementById("phone");
const projectType = document.getElementById("type-projet");
const description = document.getElementById("description");
const message = document.getElementById("message");

// script.js
document.getElementById("contactForm").addEventListener("submit", function (e) {
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
    !nom.value.trim() ||
    !email.value.trim() ||
    !phone.value.trim() ||
    !projectType.value.trim() ||
    !description.value.trim()
  ) {
    afficherMessageErreur(
      "Veuillez remplir tous les champs, ils sont obligatoires."
    );
    return;
  }

  // Vérifier le nom (regexp : format nom)
  const nomRegex = /^[a-zA-ZÀ-ÿ' -]{2,30}$/;
  if (!nomRegex.test(nom.value.trim())) {
    afficherMessageErreur(
      "nom invalide. Veuillez entrer un nom valide (lettres uniquement)."
    );
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
  if (!phoneRegex.test(phone.value)) {
    afficherMessageErreur(
      "Numéro de téléphone invalide. Veuillez entrer un numéro de téléphone valide."
    );
    return;
  }
  if (description.value.length < 20) {
    afficherMessageErreur("Votre description est trop courte");
    return;
  }

  // Soummission du formulaire a l'aide d'AJAX

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../index?action=EnvoyerUnMessage", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (xhr.status === 200) {
      const response = JSON.parse(xhr.responseText); //  On transforme la réponse JSON en objet JS

      if (response.success) {
        message.textContent = "Message envoyé avec succès";
        message.style.color = "green";
        setTimeout(() => {
          message.textContent = "";
        }, 3000);
      } else {
        afficherMessageErreur(response.message); //  message d’erreur venant de PHP
      }
    } else {
      afficherMessageErreur("Erreur serveur.");
    }
  };

  const params = new URLSearchParams();
  params.append("nom", nom.value);
  params.append("phone", phone.value);
  params.append("email", email.value);
  params.append("projectType", projectType.value);
  params.append("description", description.value);
  xhr.send(params.toString());
});
