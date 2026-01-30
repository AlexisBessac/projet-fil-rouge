// Vérification de l'existence de l'email en temps réel
document.addEventListener('DOMContentLoaded', function () {
    const emailInput = document.getElementById('email_register');
    const emailFeedback = document.getElementById('email_feedback');
    const form = document.querySelector('form');

    // Variable pour tracker l'état de validation de l'email
    let emailExists = false;

    if (emailInput && emailFeedback) {
        // Événement blur - quand l'utilisateur quitte le champ
        emailInput.addEventListener('focusout', function () {
            const email = this.value.trim();

            // Requête AJAX pour vérifier l'email (sans afficher de message)
            fetch('/?page=check-email',
                {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'email=' + encodeURIComponent(email)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.exists) {
                        emailInput.classList.add('is-invalid');
                        emailExists = true;
                    } else {
                        emailInput.classList.remove('is-invalid');
                        emailExists = false;
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                });
        });
    }

    // Validation au submit du formulaire
    if (form) {
        form.addEventListener('submit', function (e) {
            // Si l'email existe déjà, bloquer l'envoi (sans afficher de message)
            if (emailExists) {
                e.preventDefault();
                emailInput.classList.add('is-invalid');
                emailInput.focus();
                return false;
            }
        });
    }
});
