<?php

$title = "Se Connecter";
$description = "Page de connexion à Formul'Air";

// Vérifie que le formulaire a bien été envoyé
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_login_submit']))
{
    $errors = [];

    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
        $errors['email'] = 'Le champ Email est obligatoire et doit être une adresse email valide';
    }

    if (empty($_POST['password']))
    {
        $errors['password'] = 'Le Mot de passe est obligatoire.';
    }

    if (empty($errors)) 
    {
        require '../src/data/db-connect.php';

        // Vérification de l'email en BDD
        $email = $_POST['email'];
        $query = $dbh->prepare("SELECT * FROM utilisateur WHERE email = :email");
        $query->execute(['email' => $email]);
        $user = $query->fetch();

        if ($user) 
        {
            $salt = "fil-rouge"; // Sel utilisé lors de la création du hash de mot de passe
            $password = $_POST['password'] . $salt; // Concaténation du sel avec le mot de passe saisi
            $hashed_password = $user['password'];

            if (password_verify($password, $hashed_password)) 
            {
                // Authentification réussie
                session_start();
                $_SESSION['id_utilisateur'] = $user['id_utilisateur'];
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