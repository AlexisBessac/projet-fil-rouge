<?php

$title = "Modifier un utilisateur";
$description = "La page pour modifier un utilisateur";

require '../src/data/db-connect.php';
require '../src/pages/role.php';

if(!empty($_GET['id']) && isset($_POST['edit_user_submit']))
{
    require '../src/data/db-connect.php';
    
    $errors = [];

    if(empty($_POST['firstname']))
    {
        $errors['firstname'] = "Le champ Prénom est obligatoire et doit contenir plus d'un caractère";
    }

    if(empty($_POST['lastname']))
    {
        $errors['lastname'] = "Le champ Nom est obligatoire et doit contenir plus d'un caractère";
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = "Le champ Email est obligatoire et doit contenir une adresse email valide";
    }

    if(empty($_POST['phone_number']))
    {
        $errors['phone_number'] = "Le numéro de téléphone n'est pas valide";
    }

    if(empty($_POST['street_number']))
    {
        $errors['street_number'] = "Veuiller renseigner un numéro de rue";
    }
    
    if(empty($_POST['street']))
    {
        $errors['street'] = "Le champ Rue est obligatoire";
    }

    if(empty($_POST['zip_code']) || !ctype_digit($_POST['zip_code']))
    {
        $errors['zip_code'] = "Le Code Postal renseigné n'est pas valide";
    }

    if(empty($_POST['city']) || strlen($_POST['city']) <=1)
    {
        $errors['city'] = "Le champ ville est obligatoire et doit contenir plus d'un caractère";
    }

    if(empty($_POST['role_id']) || !ctype_digit($_POST['role_id']))
    {
        $errors['role_id'] = "Le champ Rôle doit être un nombre entier";
    }

    if (empty($errors)) {
        // Mise à jour de l'utilisateur
        $query = $dbh->prepare('UPDATE utilisateur SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone, numero = :numero, rue = :rue, code_postal = :code_postal, ville = :ville WHERE id_utilisateur = :id_utilisateur');
        $query->execute([
            'id_utilisateur' => $_GET['id'],
            'nom' => $_POST['lastname'],
            'prenom' => $_POST['firstname'],
            'email' => $_POST['email'],
            'telephone' => $_POST['phone_number'],
            'numero' => $_POST['street_number'],
            'rue' => $_POST['street'],
            'code_postal' => $_POST['zip_code'],
            'ville' => $_POST['city'],
        ]);

        if ($query->rowCount() > 0) {
            header("Location: /?page=users");
            exit;
        } else {
            $errors['error'] = "Une erreur s'est produite lors de la mise à jour";
        }

        $query = $dbh->prepare("SELECT nom, prenom, email, telephone, numero, rue, code_postal, ville FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
        $query->execute([
            'id_utilisateur' => $_GET['id']
        ]);
        $user = $query->fetch();
    
        if (!$user) {
            echo "Utilisateur inexistant.";
            exit;
        }
    }
    else {
        echo "Erreur : ID de l'utilisateur manquant";
        exit;
    } 
}