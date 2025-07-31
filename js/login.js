const email = document.getElementById("email");
const password = document.getElementById("password");
const message = document.getElementById("message");
const remember = document.getElementById("remember");
document.querySelector("form").addEventListener("submit", function (e) {
  e.preventDefault();

  function afficherMessageErreur(texte) {
    message.textContent = texte;
    message.style.color = "red";
    setTimeout(() => {
      message.textContent = "";
    }, 7000);
  }

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Vérifier si les champs sont vides
  if (!email.value.trim() || !password.value.trim()) {
    afficherMessageErreur("Tous les champs sont obligatoires.");
    return;
  }

  // Vérifier le format de l'email
  if (!emailRegex.test(email.value)) {
    afficherMessageErreur("L'adresse email est invalide.");
    return;
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

  // Soummission du formulaire a l'aide d'AJAX

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "login-process.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if (xhr.status === 200) {
      const response = JSON.parse(xhr.responseText); //  On transforme la réponse JSON en objet JS

      if (response.success) {
        message.textContent = "connexion réussie ! Redirection...";
        message.style.color = "green"; // couleur verte
       setTimeout(() => {
            if (response.role === "admin") {
              window.location.href = "../index?action=DashAdmin";
            } else {
              window.location.href = "../index?action=Profile";
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
  params.append("email", email.value);
  params.append("password", password.value);
  params.append("remember", remember.checked ? "on" : "");

  xhr.send(params.toString());
});
