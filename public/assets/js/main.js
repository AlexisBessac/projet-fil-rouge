// Vérification de l'existence de l'email en temps réel
document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('email_register');
    const emailFeedback = document.getElementById('email_feedback');
    const form = document.querySelector('form');
    
    // Variable pour tracker l'état de validation de l'email
    let emailExists = false;

    if (emailInput && emailFeedback) {
        // Événement blur - quand l'utilisateur quitte le champ
        emailInput.addEventListener('blur', function() {
            const email = this.value.trim();
            
            // Si le champ est vide, réinitialiser
            if (email === '') {
                emailFeedback.innerHTML = '';
                emailInput.classList.remove('is-invalid');
                emailExists = false;
                return;
            }
            
            // Validation du format email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                emailFeedback.innerHTML = '<span class="text-warning">⚠️ Format d\'email invalide</span>';
                emailExists = false;
                return;
            }
            
            // Afficher un message de chargement
            emailFeedback.innerHTML = '<span class="text-info">⏳ Vérification en cours...</span>';
            
            // Requête AJAX pour vérifier l'email
            fetch('/?page=check-email', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'email=' + encodeURIComponent(email)
            })
            .then(response => response.json())
            .then(data => {
                if (data.exists) {
                    emailFeedback.innerHTML = '<span class="text-danger">❌ Cet email existe déjà</span>';
                    emailInput.classList.add('is-invalid');
                    emailExists = true;
                } else {
                    emailFeedback.innerHTML = '<span class="text-success">✅ Email disponible</span>';
                    emailInput.classList.remove('is-invalid');
                    emailExists = false;
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                emailFeedback.innerHTML = '<span class="text-danger">❌ Erreur lors de la vérification</span>';
            });
        });
    }

    // Validation au submit du formulaire
    if (form) {
        form.addEventListener('submit', function(e) {
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
