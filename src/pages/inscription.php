<?php

require '../src/pages/role.php';

// Vérification de l'envoi du formulaire et des champs
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_inscribe_submit'])) 
{
    $errors = [];

    if (empty($_POST['firstname']) || strlen($_POST['firstname']) <= 1) 
    {
        $errors['firstname'] = "Le champ Prénom est obligatoire et doit contenir plus d'un caractère";
    }

    if (empty($_POST['lastname']) || strlen($_POST['lastname']) <= 1) 
    {
        $errors['lastname'] = "Le champ Nom est obligatoire et doit contenir plus d'un caractère";
    }

    if (empty($_POST['email_register']) || !filter_var($_POST['email_register'], FILTER_VALIDATE_EMAIL)) 
    {
        $errors['email_register'] = "Le champ Email est obligatoire et doit contenir une adresse email valide";
    }

    if (empty($_POST['password'])) 
    {
        $errors['password'] = "Le champ Mot de passe est obligatoire";
    }

    if (empty($_POST['phone_number']) || !ctype_digit($_POST['phone_number']))
    {
        $errors['phone_number'] = "Le numéro de téléphone n'est pas valide";
    }

    if (empty($_POST['street_number']) || !ctype_alnum($_POST['street_number'])) 
    {
        $errors['street_number'] = "Veuiller renseigner un numéro de rue";
    }

    if (empty($_POST['street']) || strlen($_POST['street']) <= 1) 
    {
        $errors['street'] = "Le champ Rue est obligatoire";
    }

    if (empty($_POST['zip_code']) || !ctype_digit($_POST['zip_code'])) 
    {
        $errors['zip_code'] = "Le Code Postal renseigné n'est pas valide";
    }

    if (empty($_POST['city']) || strlen($_POST['city']) <= 1) 
    {
        $errors['city'] = "Le champ ville est obligatoire et doit contenir plus d'un caractère";
    }

    if (empty($_POST['role_id'])) 
    {
        $errors['role_id'] = "Veuiller cocher l'un des trois rôles";
    }

    if (empty($errors)) 
    {
        require '../src/data/db-connect.php';
        $email = $_POST['email_register'];
        $query = $dbh->prepare("SELECT id_utilisateur FROM utilisateur WHERE email = :email");
        $query->execute(['email' => $email]);
        $utilisateurId = $query->fetch();

        if ($utilisateurId) 
        {
            $errors['email'] = "Un compte existe déjà pour cette adresse mail";
        }
        else 
        {
            // Utilisation d'un grain de sel
            $salt = "fil-rouge";

            // Ajout du grain de sel au mot de passe
            $mdpHache = $_POST['password'] . $salt;

            // Hachage du mot de passe
            $newMdp =  password_hash($mdpHache, PASSWORD_DEFAULT);


            $query = $dbh->prepare("INSERT INTO utilisateur(nom, prenom, email, password, telephone, numero, rue, code_postal, ville, Id_role) VALUES(:nom, :prenom, :email, :password, :telephone, :numero, :rue, :code_postal, :ville, :Id_role)");
            $query->execute([
                'nom' => htmlspecialchars($_POST['lastname']),
                'prenom' => htmlspecialchars($_POST['firstname']),
                'email' => htmlspecialchars($email),
                'password' => $newMdp,
                'telephone' => htmlspecialchars($_POST['phone_number']),
                'numero' => htmlspecialchars($_POST['street_number']),
                'rue' => htmlspecialchars($_POST['street']),
                'code_postal' => htmlspecialchars($_POST['zip_code']),
                'ville' => htmlspecialchars($_POST['city']),
                'Id_role' => htmlspecialchars($_POST['role_id'])
            ]);

            if ($dbh->lastInsertId()) {
                header('Location: /?page=connexion');
                exit;
            } 
            else 
            {
                $errors['form'] = "Une erreur s'est produit lors de l'inscription. Contacter l'administrateur à l'adresse [email].";
            }
        }
    }
}

$title = "S'inscire";
$description = "Page d'inscription à Formula'Air";