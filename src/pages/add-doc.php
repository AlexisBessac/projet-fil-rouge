<?php

$title = "Ajouter un document à la liste de document à fournir dans le cadre d'une formation";
$description = "L'administrateur peut ici ajouter un nouveau document dans la liste ds documents à fourni dans le cadre d'une formation";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_docs_submit']))
{
    $errors = [];

    if(empty($_POST['nom_docs']) || strlen($_POST['nom_docs']) <=1)
    {
        $errors['nom_docs'] = "Le champ Nom du document à transmettre est obligatoire et doit contenir plus d'un caractère";
    }

    if(empty($errors))
    {
        require '../src/data/db-connect.php';
        $query = $dbh->prepare("INSERT INTO type_de_document(nom_type_document) VALUES(:nom_type_document)");
        $query->execute([
            "nom_type_document" => $_POST['nom_docs']
        ]);

        if(!$dbh->lastInsertId())
        {
            $errors['error'] = "Erreur lors de la création de la formation";
        }

        header('Location: /?page=docs');
        exit;
    }
}