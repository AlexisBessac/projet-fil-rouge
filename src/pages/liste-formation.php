<?php

$title ="Liste des formations disponibles";
$description = "sur cette page on retrouve";

require '../src/data/db-connect.php';

$query = $dbh->query("SELECT * FROM formation");
$formations = $query->FETCHALL();