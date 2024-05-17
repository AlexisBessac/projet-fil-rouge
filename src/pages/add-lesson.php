<?php

require '../src/data/db-connect.php';

$query = $dbh->query("SELECT * FROM role");
$roles = $query->fetchAll();

$title = "Ajouter une formation";
$description = "Page d'ajout des formations de l'application";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_lesson_submit']))
{
    $errors = [];

    if(empty($_POST['lesson_name']) || strlen($_POST['lesson_name']) <=1)
    {
        $errors['lesson_name'] = "Le champ Nom de la formation est obligatoire et doit contenir plus d'un caractère";
    }

    if(empty($_POST['date_debut']))
    {
        $errors['date_debut'] = "Veuiller choisir une date au format JJ/MM/AAAA";
    }

    if(empty($_POST['date_fin']))
    {
        $errors['date_fin'] = "Veuiller choisir une date au format JJ/MM/AAAA";
    }

    if(empty($_POST['place']) || strlen($_POST['place']) <=1)
    {
        $errors['place'] = "Le champ Lieu où se déroule la formation est obligatoire et doit contenir plus d'un caractère";
    }
    if(empty($_POST['city']) || strlen($_POST['city']) <=1)
    {
        $errors['city'] = "Le champ Ville est obligatoire et doit contenir plus d'un caractère";
    }

    if(empty($_POST['role_id']) || !ctype_digit($_POST['role_id']))
    {
        $errors['role_id'] = "Veuiller cocher l'un des trois rôles";
    }

}