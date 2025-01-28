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
        $errors['street_number'] = "Veuillez renseigner un numéro de rue valide";
    }

    if (empty($_POST['street']) || strlen($_POST['street']) <= 1) 
    {
        $errors['street'] = "Le champ Rue est obligatoire et doit contenir plus d'un caractère";
    }

    if (empty($_POST['zip_code']) || !ctype_digit($_POST['zip_code'])) 
    {
        $errors['zip_code'] = "Le Code Postal renseigné n'est pas valide";
    }

    if (empty($_POST['city']) || strlen($_POST['city']) <= 1) 
    {
        $errors['city'] = "Le champ Ville est obligatoire et doit contenir plus d'un caractère";
    }

    if (empty($errors)) 
    {
        require '../src/data/db-connect.php';
        $email = htmlspecialchars($_POST['email_register']);
        $query = $dbh->prepare("SELECT id_utilisateur FROM utilisateur WHERE email = :email");
        $query->execute(['email' => $email]);
        $utilisateurId = $query->fetch();

        if ($utilisateurId) 
        {
            $errors['email_register'] = "Un compte existe déjà pour cette adresse mail";
        } 
        else 
        {
            // Utilisation d'un grain de sel
            $salt = "fil-rouge";

            // Ajout du grain de sel au mot de passe
            $mdpHache = $_POST['password'] . $salt;

            // Hachage du mot de passe
            $newMdp = password_hash($mdpHache, PASSWORD_DEFAULT);

            $query = $dbh->prepare("INSERT INTO utilisateur(nom, prenom, email, password, telephone, numero, rue, code_postal, ville) VALUES(:nom, :prenom, :email, :password, :telephone, :numero, :rue, :code_postal, :ville)");
            $result = $query->execute([
                'nom' => htmlspecialchars($_POST['lastname']),
                'prenom' => htmlspecialchars($_POST['firstname']),
                'email' => $email,
                'password' => $newMdp,
                'telephone' => htmlspecialchars($_POST['phone_number']),
                'numero' => htmlspecialchars($_POST['street_number']),
                'rue' => htmlspecialchars($_POST['street']),
                'code_postal' => htmlspecialchars($_POST['zip_code']),
                'ville' => htmlspecialchars($_POST['city']),
            ]);

            if ($result) 
            {
                header('Location: /?page=connexion');
                exit;
            } 
            else 
            {
                $errors['form'] = "Une erreur s'est produite lors de l'inscription. Veuillez contacter l'administrateur à l'adresse [email].";
            }
        }
    }
}

$title = "S'inscrire";
$description = "Page d'inscription à Formula'Air";