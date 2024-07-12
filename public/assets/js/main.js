document.addEventListener("DOMContentLoaded", function() {
    function verifierMotsDePasse(password, password2) {
        if (password.length !== password2.length || password.length < 8 || password.length > 16) {
            return "Les deux mots de passe n'ont pas la même longueur ou la longueur n'est pas entre 8 et 16 caractères";
        }
        return "";
    }

    // Le contrôle se fera sur le clic du bouton submit
    let btn_submit = document.querySelector("#form_inscribe_submit");

    // Vérifier si l'élément existe avant d'ajouter l'écouteur d'événement
    if (btn_submit) {
        // Ajouter l'écoute de l'événement
        btn_submit.addEventListener("click", function(e) {
            e.preventDefault();

            // Contrôler que les deux mots de passe sont identiques
            let pw1 = document.querySelector("#password").value;
            let pw2 = document.querySelector("#password2").value;
            let alerte2 = document.querySelector("#alerte2");

            if (pw1 === pw2) {
                console.log("identique");
                // Se débrouiller pour valider le formulaire
                document.querySelector("#form-register").submit();
            } else {
                console.log("different");
                // Afficher un petit message
                alerte2.innerHTML = "Vos deux mots de passe sont différents";

                // Vérifier la longueur des mots de passe
                let resultat = verifierMotsDePasse(pw1, pw2);
                if (resultat !== "") {
                    alerte2.innerHTML += "<br>" + resultat;
                }
            }
        });
    } else {
        console.error("L'élément #form_inscribe_submit n'existe pas dans le DOM.");
    }
});