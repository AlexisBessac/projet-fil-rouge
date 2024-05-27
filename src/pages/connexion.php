<?php

$title = "Se Connecter";
$description = "Page de connexion à Formul'Air";

// Vérifie que le formulaire a bien été envoyé
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_login']))
{
    $errors = [];

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = 'Le champ Email est obligatoire et être une adresse email valide';
    }

    if(empty($_POST['password']))
    {
        $errors['password'] = 'Le mot de passe est obligatoire.';
    }

    if(empty($errors))
    {
        require '../src/data/db-connect.php';

        // Vérification de l'email en BDD
        $email = $_POST['email'];
        $query = $dbh->prepare("SELECT * FROM utilisateur WHERE email = :email");
        $query->execute(['email' => $email]);
        $user = $query->fetch();

        if($user)
        {
            $salt = "fil-rouge";
            $password = $_POST['password'] . $salt;

            if(password_verify($password, $user['password']))
            {
                // Authentification réussie
                // Ouverture de la session
                session_start();
                $_SESSION['id'] = $user['id']; 

                header('Location: /?page=dashboard');
                exit;
            }
            else
            {
                $errors['email'] = 'Email ou mot de passe incorrect';
                $errors['password'] = 'Email ou mot de passe incorrect';
            }   

        }
        else
        {
            $errors['email'] = 'Email ou mot de passe incorrect';
            $errors['password'] = 'Email ou mot de passe incorrect';
        }

    }   
}