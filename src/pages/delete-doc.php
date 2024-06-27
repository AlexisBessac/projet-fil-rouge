<?php

if(!empty($_POST['type_id']))
{
    require '../src/data/db-connect.php';

    $query = $dbh->prepare("DELETE FROM type_de_document WHERE id_type = :id_type");
    $query->execute([
        'id_type' => $_POST['type_id'],
    ]);
}

header('Location: /?page=docs');
exit;