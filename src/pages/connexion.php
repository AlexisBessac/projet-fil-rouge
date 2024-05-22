<?php


$title = "Se Connecter";
$description = "Page de connexion à Formul'Air";

// Vérifie que le formulaire a bien été envoyé
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_login_submit']))
{
    $errors = [];

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = 'Le champ Email est obligatoire et doit être une adresse email valide';
    }

    if(empty($_POST['password']))
    {
        $errors['password'] = 'Le Mot de passe est obligatoire.';
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
            // Assurez-vous d'utiliser le même sel que celui utilisé lors de l'enregistrement du mot de passe
            $salt = "fil-rouge";
            $password = $_POST['password'] . $salt;

            if(password_verify($password, $user['password']))
            {
                // Authentification réussie
                // Ouverture de la session
                session_start();
                $_SESSION['id'] = $user['id']; // Utilisez $user['id'] au lieu de $customer['id_customer']

                header('Location: /index.php?page=dashboard');
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