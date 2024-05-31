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
        $_POST['utilisateur']['id_utilisateur'] = $_GET['id'];

        # Vérification des champs
        if(empty($_POST['utilisateur']['prenom']) || strlen($_POST['utilisateur']['prenom']))
            $errors['utilisateur']['prenom'] = "Le champ Prénom est obligatoire.";

        if(empty($_POST['utilisateur']['nom']) || strlen($_POST['utilisateur']['nom']))
            $errors['utilisateur']['nom'] = "Le champ Nom est obligatoire";

        if(empty($_POST['utilisateur']['email']) || !filter_var($_POST['utilisateur']['email'], FILTER_VALIDATE_EMAIL))
            $errors['utilisateur']['email'] = "Le champ Email est obligatoire";

        if (empty($_POST['utilisateur']['telephone'])) 
        {
            $errors['utilisateur']['telephone'] = "Le numéro de téléphone n'est pas valide";
        }

        if (empty($_POST['utilisateur']['numero'])) 
        {
            $errors['utilisateur']['numero'] = "Veuiller renseigner un numéro de rue";
        }

        if (empty($_POST['utilisateur']['rue'])) 
        {
            $errors['utilisateur']['rue'] = "Le champ Rue est obligatoire";
        }

        if (empty($_POST['utilisateur']['code_postal']) || !ctype_digit($_POST['utilisateur']['zip_code'])) 
        {
            $errors['utilisateur']['code_postal'] = "Le Code Postal renseigné n'est pas valide";
        }

        if (empty($_POST['utilisateur']['ville']) || strlen($_POST['utilisateur']['city']) <= 1) 
        {
            $errors['utilisateur']['ville'] = "Le champ ville est obligatoire et doit contenir plus d'un caractère";
        }

        if (empty($_POST['utilisateur']['role_id']) || !ctype_digit($_POST['utilisateur']['role_id'])) 
        {
            $errors['utilisateur']['role_id'] = "Le champ Rôle doit être un nombre entier";
        }
        
        if(empty($errors))
        {

            $query = $dbh->prepare("UPDATE utilisateur SET prenom, nom, email, password, telephone, numero, rue, code_postal, ville, Id_role FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
            $query->execute($_POST['utilisateur']);

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
