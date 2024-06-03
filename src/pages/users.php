<?php

require '../src/data/db-connect.php';

$query = $dbh->query("SELECT * FROM utilisateur");
$user = $query->FETCHALL();

// Traitement du formulaire de recherche si une recherche est faite
if(isset($_GET['search']) && !empty($_GET['search'])) {
    $search = strtolower($_GET['search']);
    $query = $dbh->prepare("SELECT * FROM utilisateur WHERE nom LIKE :search ORDER BY nom");
    $query->execute([':search' => "%$search%"]);
    $user = $query->fetchAll();

    // Nombre de résultats total
    $query = $dbh->prepare("SELECT COUNT(*) AS resultCount FROM utilisateur WHERE nom LIKE :search");
    $query->execute([':search' => "%$search%"]);
    $resultCount = $stmt->fetch()['resultCount'];
} 
else 
{
    $query = $dbh->query("SELECT * FROM utilisateur ORDER BY nom");
    $user = $query->fetchAll();
}

$title = "Liste des utilisateurs";
$description = "Sur cette page sont listés les utilisateurs de notre site Web";