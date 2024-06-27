<?php

# Connexion à la base de données
require '../src/data/db-connect.php';

# Récupération de toutes les formations
$query = $dbh->query("SELECT * FROM type_de_document");
$doc = $query->fetchAll();

$title = "Liste des documents à fournir pour une formation";
$description = "La page liste les documents àfournir pour une formation ";