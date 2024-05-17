<?php

require '../src/data/db-connect.php';

$query = $dbh->query("SELECT * FROM role");
$roles = $query->fetchAll();

$title = "Ajouter une formation";
$description = "Page d'ajout des formations de l'application";