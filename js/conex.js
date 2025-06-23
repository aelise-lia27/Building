document.querySelector("form").addEventListener("submit", function (e) {
  const email = document.getElementById("email");
  const password = document.getElementById("password");
  const message = document.getElementById("message");

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Vérifier si les champs sont vides
  if (!email.value.trim() || !password.value.trim()) {
    e.preventDefault();
    message.textContent = "Tous les champs sont obligatoires.";
    return;
  }

  // Vérifier le format de l'email
  if (!emailRegex.test(email)) {
    e.preventDefault(); // Empêche l'envoi du formulaire
    message.textContent = "L'adresse email est invalide.";
    return;
  }
});

// // Afficher les erreurs si elles existent
// if (erreurs.length > 0) {
//     e.preventDefault(); // Empêche l'envoi du formulaire

//     let messageErreur = document.querySelector(".error-message");
//     if (!messageErreur) {
//         messageErreur = document.createElement("div");
//         messageErreur.className = "error-message";
//         document.querySelector(".auth-form").prepend(messageErreur);
//     }
//     messageErreur.innerHTML = erreurs.join("<br>");
// }
