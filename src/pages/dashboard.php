<?php

$title = "Tableau de bord de l'utilisateur";
$description = "Sur cette page on affiche le tableau de bord de l'utilisateur";

session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['id'])) {
    // Redirigez l'utilisateur vers la page de connexion s'il n'est pas connecté
    header('Location: /?page=connexion');
    exit;
}

// Incluez le fichier de connexion à la base de données
require '../src/data/db-connect.php';

// Sélectionnez les données de l'utilisateur à partir de la base de données
$query = $dbh->prepare("SELECT prenom, nom, email, telephone, numero, rue, code_postal, ville FROM utilisateur WHERE id_utilisateur = :id_utilisateur");

$query->execute(['id_utilisateur' => $_SESSION['id']]);
$user = $query->fetch();
