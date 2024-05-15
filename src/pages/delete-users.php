<?php

if(!empty($_POST['id_utilisateur']))
{
    require '../src/data/db-connect.php';

    $query = $dbh->prepare("DELETE FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
    $query->execute([
        'id_utilisateur' => $_POST['id_utilisateur'],
    ]);
}

header("Location: /?page=users");
exit;