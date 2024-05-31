<?php

session_start();

// Si l'utilisateur est connecté et souhaite se déconnecter
if (isset($_GET['logout'])) {
    // Détruire la session
    session_unset();
    session_destroy();
    header('Location: /?page=connexion'); // Rediriger vers la page de connexion
    exit;
}