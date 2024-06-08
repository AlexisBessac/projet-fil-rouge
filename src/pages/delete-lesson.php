<?php

if (!empty($_GET['lesson_id'])) {
    require '../src/data/db-connect.php';

    $id_formation = $_GET['lesson_id'];

    $query = $dbh->prepare("DELETE FROM formation WHERE id_formation = :id_formation");
    $result = $query->execute([
        'id_formation' => $id_formation,
    ]);

    header("Location: /?page=lessons");
    exit;
} 
else 
{
    echo "Erreur : ID de la formation manquant.";
    exit;
}