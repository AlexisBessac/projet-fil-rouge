<?php

$title = "Document à fournir pour une formation";
$description = "Sur cette page on trouve la liste des documents à fournir pour chaque formation";

require '../src/data/db-connect.php';
$sql_id = "SELECT id_formation FROM formation";
$query_id = $dbh->prepare($sql_id);
$query_id->execute();
$result_id = $query_id->fetch();

if ($result_id) {
    $id_formation = $result_id['id_formation'];

    // Deuxième requête utilisant l'id_formation récupéré
    $sql = "SELECT t.nom_type_document
            FROM type_de_document t
            INNER JOIN formation_type_document ftd ON t.id_type = ftd.id_type
            INNER JOIN formation f ON ftd.id_formation = f.id_formation
            WHERE f.id_formation = :id_formation";

    $query = $dbh->prepare($sql);
    $query->execute(['id_formation' => $id_formation]);

    $doc = $query->fetchAll();
}