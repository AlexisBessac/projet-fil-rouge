<?php

# Connexion à la base de données
require '../src/data/db-connect.php';

# Récupération de toutes les formations
$query = $dbh->query("SELECT * FROM formation");
$lesson = $query->fetchAll();

$title = "Liste des formations";
$description = "La page liste les formations disponibles dans l'application ";