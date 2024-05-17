<?php

$title = "Ajout d'un utilisateur";
$description = "Formulaire d'ajout d'un utilisateur";

require '../src/data/db-connect.php';

$query = $dbh->query("SELECT * FROM role");
$roles = $query->fetchAll();

// Vérification de l'envoi du formulaire et des champs
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_user_submit']))
{
    $errors = [];

    if(empty($_POST['firstname']) || strlen($_POST['firstname']) <=1)
    {
        $errors['firstname'] = "Le champ Prénom est obligatoire et doit contenir plus d'un caractère";
    }

    if(empty($_POST['lastname']) || strlen($_POST['lastname']) <=1)
    {
        $errors['lastname'] = "Le champ Nom est obligatoire et doit contenir plus d'un caractère";
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = "Le champ Email est obligatoire et doit contenir une adresse email valide";
    }

    if(empty($_POST['password']))
    {
        $errors['password'] = "Le champ Mot de passe est obligatoire";
    }

    if(empty($_POST['phone_number']) || !ctype_digit($_POST['phone_number']))
    {
        $errors['phone_number'] = "Le numéro de téléphone n'est pas valide";
    }

    if(empty($_POST['street_number']) || !ctype_alnum($_POST['street_number']))
    {
        $errors['street_number'] = "Veuiller renseigner un numéro de rue";
    }
    
    if(empty($_POST['street']) || strlen($_POST['street']) <=1)
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

    if(empty($errors))
    {
        // Utilisation d'un grain de sel
        $salt = "fil-rouge";

        // Ajout du grain de sel au mot de passe
        $mdpHache = $_POST['password'] . $salt;
        
        // Hachage du mot de passe
        $newMdp =  password_hash($mdpHache, PASSWORD_DEFAULT);

        require '../src/data/db-connect.php';
        $query = $dbh->prepare("INSERT INTO utilisateur(nom, prenom, email, password, telephone, numero, rue, code_postal, ville, id_role) VALUES(:nom, :prenom, :email, :password, :telephone, :numero, :rue, :code_postal, :ville, :id_role)");
        $query->execute([
            'nom' => $_POST['lastname'],
            'prenom' => $_POST['firstname'],
            'email' => $_POST['email'],
            'password' => $newMdp,
            'telephone' => $_POST['phone_number'],
            'numero' => $_POST['street_number'],
            'rue' => $_POST['street'],
            'code_postal' => $_POST['zip_code'],
            'ville' => $_POST['city'],
            'id_role' => $_POST['role_id']
        ]);

        if(!$dbh->lastInsertId())
        {
            $errors['error'] = "Erreur lors de la création de l'utilsateur";
        }

        header('Location: /?page=users');
        exit;
    }
}