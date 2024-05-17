<?php

if(!empty($_POST['lesson_id']))
{
    require '../src/data/db-connect.php';

    $query = $dbh->prepare("DELETE FROM formation WHERE id_formation = :id_formation");
    $query->execute([
        'id_formation' => $_POST['lesson_id'],
    ]);
}

header("Location: /?page=lessons");
exit;