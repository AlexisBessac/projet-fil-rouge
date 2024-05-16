<?php

# Connexion à la base de données
require '../src/data/db-connect.php';

# Récupération de tous les utilisateur
$query = $dbh->query("SELECT * FROM formation");
$lesson = $query->fetchAll();