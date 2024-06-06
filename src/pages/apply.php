<?php

$title = "Document à fournir pour une formation";
$description = "Sur cette page on trouve la liste des documents à fournir pour chaque formation";

require '../src/data/db-connect.php';

$query = $dbh->prepare("SELECT t.nom_type_document 
                        FROM type_de_document t 
                        INNER JOIN formation_type_document ftd ON t.id_type = ftd.id_type 
                        INNER JOIN formation f ON ftd.id_formation = f.id_formation 
                        WHERE f.id_formation = ?");

    $query->execute(['id_formation']);
    $doc = $query->FETCHALL();
