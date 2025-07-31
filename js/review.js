// Recuperation des element
const nom = document.getElementById("nom");
const email = document.getElementById("email");
const note = document.getElementById("note");
const comment = document.getElementById("comment");
const message = document.getElementById("message");
const allowed = document.getElementById("allowed");

// script.js
document
  .getElementById("testimonialForm")
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
      !nom.value.trim() ||
      !email.value.trim() ||
      !note.value.trim() ||
      !comment.value.trim()
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
        "Nom invalide. Veuillez entrer un nom valide (lettres uniquement)."
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
    if (note.value === "" || note.value === null) {
      afficherMessageErreur("Veuillez attribuer une note");
      return;
    }

    if (comment.value.length < 20) {
      afficherMessageErreur(
        "Votre témoignage doit contenir au moins 20 caractères"
      );
      return;
    }

    // Vérifier si la publication de l'avis est autorise
    if (!allowed.checked) {
      afficherMessageErreur(
        "Vous devez autoriser la publication de votre avis."
      );
      return;
    }

    // Soummission du formulaire a l'aide d'AJAX

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../index?action=PublierUnAvis", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function () {
      if (xhr.status === 200) {
        const response = JSON.parse(xhr.responseText); //  On transforme la réponse JSON en objet JS

        if (response.success) {
          message.textContent = "Avis publié avec succès";
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
    params.append("email", email.value);
    params.append("note", note.value);
    params.append("comment", comment.value);
    params.append("allowed", allowed.checked ? "on" : "");

    xhr.send(params.toString());
  });
