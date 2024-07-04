<?php
$title = "Déclare mes retards";
$description = "L'utilisateur voit ici ses retards et peut les déclarer";


// On vérifie si le formulaire est envoyé
if (isset($_POST['submit_form_late'])) 
{
    $errors = [];

    // Validation des champs
    if (empty($_POST['late-text']) || strlen($_POST['late-text']) <= 1) 
    {
        $errors['late-text'] = "Le champ Motif du retard est obligatoire et doit contenir plus d'un caractère.";
    }

    if (empty($_POST['duree_retard']) || strlen($_POST['duree_retard']) <= 1) 
    {
        $errors['duree_retard'] = "Le champ Durée du retard est obligatoire et doit contenir plus d'un caractère.";
    }

    if (empty($_POST['date_retard']) || ctype_digit($_POST['date_retard'])) 
    {
        $errors['date_retard'] = "Le champ Date du retard est obligatoire et doit être au format YYYY-MM-DD.";
    }

    // Vérification du fichier
    if (isset($_FILES['justificatif_retard']) && $_FILES['justificatif_retard']['error'] == 0) 
    {
        $authorizedFileTypes = [
                                'image/jpeg', 
                                'image/jpg', 
                                'image/png', 
                                'image/gif'];

        // On vérifie le type de fichier
        if (in_array($_FILES['justificatif_retard']['type'], $authorizedFileTypes)) 
        {
            // On vérifie le poids du fichier
            if ($_FILES['justificatif_retard']['size'] < 1000000) 
            {
                // On génère un nom de fichier unique
                $filename = md5(uniqid(rand(), true)) . '.' . pathinfo($_FILES['justificatif_retard']['name'], PATHINFO_EXTENSION);

                // Chemin où sauvegarder le fichier
                $uploadDirectory = 'uploads/';

                // Chemin complet du fichier sur le serveur
                $uploadPath = $uploadDirectory . $filename;

                // Déplacement du fichier temporaire vers le dossier d'upload
                if (!move_uploaded_file($_FILES['justificatif_retard']['tmp_name'], $uploadPath)) 
                {
                    $errors['file'] = "Erreur lors du téléchargement du fichier.";
                }
            } 
            else 
            {
                $errors['file'] = "Erreur: Le fichier est trop volumineux.";
            }
        }
        else 
        {
            $errors['file'] = "Erreur: Le fichier doit être une image (jpg, png, gif).";
        }
    } 
    else 
    {
        $errors['file'] = "Erreur: Aucun fichier sélectionné ou problème lors du téléchargement.";
    }

    // Si pas d'erreurs, on insère dans la base de données
    if (empty($errors)) 
    {
        require '../src/data/db-connect.php';
        session_start();
        $id_utilisateur = $_SESSION['id'];
        $query = $dbh->prepare("INSERT INTO retard (date_retard, motif_retard, justificatif_retard, duree_prevue,id_utilisateur) VALUES (:date_retard, :motif_retard, :justificatif_retard, :duree_prevue, :id_utilisateur)");
        $result = $query->execute([
            'date_retard' => $_POST['date_retard'],
            'motif_retard' => $_POST['late-text'],
            'justificatif_retard' => $filename,
            'duree_prevue' => $_POST['duree_retard'],
            'id_utilisateur' => $id_utilisateur
        ]);

        if ($result) 
            {
                header('Location: /?page=late-user');
                exit;
            } 
            else 
            {
                $errors['form'] = "Une erreur s'est produite lors de l'inscription. Veuillez contacter l'administrateur à l'adresse [email].";
            }
    }
}