<?php

require '../src/data/db-connect.php';

$query = $dbh->query("SELECT * FROM utilisateur");
$user = $query->FETCHALL();

$title = "Liste des utilisateurs";
$description = "Sur cette page sont listés les utilisateurs de notre site Web";