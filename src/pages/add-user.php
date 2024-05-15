<?php

$title = "Ajout d'un utilisateur";
$description = "Formulaire d'ajout d'un utilisateur"; 


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_user_submit']))
{
    $errors = [];

    if(empty($_POST['firstname']) || strlen($_POST['firstname']) <=1)
    {
        $errors['firstname'] = "Le champ Prénom est obligatoire et doit contenir au moins un caractère";
    }

    if(empty($_POST['lastname']) || strlen($_POST['lastname']) <=1)
    {
        $errors['lastname'] = "Le champ Nom est obligatoire et doit contenir au moins un caractère";
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = "Le champ Email est obligatoire et doit contenir une adresse email valide";
    }

    if(empty($_POST['password']))
    {
        $errors['password'] = "Le champ Mot de passe est obligatoire";
    }

    if(empty($_POST['phone_number']))
    {
        $errors['phone_number'] = "Le numéro de téléphone n'est pas valide";
    }
    
    if($_POST['address'] || strlen($_POST['lastname']) <=1)
    {
        $errors['address'] = "Le champ Adresse est obligatoire";
    }

    if($_POST['zip_code'])
    {
        $errors['zip_cide'] = "Le Code Postal renseigné n'est pas valide";
    }

    if(empty($errors))
    {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        require '../src/data/db-connect.php';
        $query = $dbh->prepare("INSERT INTO utilisateur(nom, prenom, email, password, telephone, adresse, code_postal, ville) VALUES(:nom, :prenom, :email, :password, :telephone, :adresse, :code_postal, :ville)");
        $query->execute([
            'nom' => $_POST['lastname'],
            'prenom' => $_POST['firstname'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'telephone' => $_POST['phone_number'],
            'adresse' => $_POST['address'],
            'code_postal' => $_POST['zip_code'],
            'ville' => $_POST['city']
        ]);

        if(!$dbh->lastInsertId())
        {
            $errors['error'] = "Erreur lors de la création de l'utilsateur";
        }

        header('Location: /?page=users');
        exit;
    }
}