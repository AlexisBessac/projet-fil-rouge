<?php

$title = "Modifier un utilisateur";
$description = "La page pour modifier un utilisateur";

require '../src/pages/role.php';

if(!empty($_GET['id']))
{
    require '../src/data/db-connect.php';

    // On vérifie que le formulaire de modification est envoyé
    if(isset($_POST['edit_user_submit']))
    {
        // On rajoute l'id dans les données du POST
        $_POST['id_utilisateur'] = $_GET['id'];

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

        if(empty($_POST['role_id']))
        {
            $errors['role_id'] = "Veuiller cocher l'un des trois rôles";
        }
        
        
        if(empty($errors))
        {
            // Utilisation d'un grain de sel
            $salt = "fil-rouge";

            // Ajout du grain de sel au mot de passe
            $mdpHache = $_POST['password'] . $salt;
        
            // Hachage du mot de passe
            $newMdp =  password_hash($mdpHache, PASSWORD_DEFAULT);

            $query = $dbh->prepare("UPDATE utilisateur SET prenom, nom, email, password, telephone, numero, rue, code_postal, ville, Id_role FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
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
                'Id_role' => $_POST['role_id']
            ]);

            if($query->rowCount() > 0){
                header("Location: /?page=users");
                exit;
            }
            else
            {
                $errors['error'] = "Une erreur s'est produite lors de la mise à jour.";
            }
        }
    }


    // On recupère les données (modifiable) de l'utilisateur
    $query = $dbh->prepare("SELECT prenom, nom, email, password, telephone, numero, rue, code_postal, ville, Id_role FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
    $query->execute([
        'id_utilisateur' => $_GET['id']
    ]);
    $user = $query->fetch();

    if(!$user){
        echo "Utilisateur inexistant.";
        exit;
    }

}
else
{
    echo "Erreur : id de l'utilisateur manquant";
    exit;
}