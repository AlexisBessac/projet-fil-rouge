<?php

$title = "Déclarer mes absences";
$description = "L'utilisateur peut voir ses absences et les déclarer";


// On vérifie si le formulaire est envoyé
if (isset($_POST['submit_form_absence'])) 
{
    $errors = [];

    // Validation des champs
    if (empty($_POST['absence-text']) || strlen($_POST['absence-text']) <= 1) 
    {
        $errors['absence-text'] = "Le champ Motif de l'absence est obligatoire et doit contenir plus d'un caractère.";
    }

    if (empty($_POST['date_debut_absence']) || ctype_digit($_POST['date_debut_absence'])) 
    {
        $errors['date_debut_absence'] = "Le champ Date de début de l'absence est obligatoire et doit être au format YYYY-MM-DD.";
    }

    if (empty($_POST['date_fin_absence']) || ctype_digit($_POST['date_fin_absence'])) 
    {
        $errors['date_fin_absence'] = "Le champ Date de fin de l'absence est obligatoire et doit être au format YYYY-MM-DD.";
    }

    // Vérification du fichier
    if (isset($_FILES['justificatif_absence']) && $_FILES['justificatif_absence']['error'] == 0) 
    {
        $authorizedFileTypes = [
                                'image/jpeg', 
                                'image/jpg', 
                                'image/png', 
                                'image/gif'];

        // On vérifie le type de fichier
        if (in_array($_FILES['justificatif_absence']['type'], $authorizedFileTypes)) 
        {
            // On vérifie le poids du fichier
            if ($_FILES['justificatif_absence']['size'] < 1000000) 
            {
                // On génère un nom de fichier unique
                $filename = md5(uniqid(rand(), true)) . '.' . pathinfo($_FILES['justificatif_absence']['name'], PATHINFO_EXTENSION);

                // Chemin où sauvegarder le fichier
                $uploadDirectory = 'uploads/';

                // Chemin complet du fichier sur le serveur
                $uploadPath = $uploadDirectory . $filename;

                // Déplacement du fichier temporaire vers le dossier d'upload
                if (!move_uploaded_file($_FILES['justificatif_absence']['tmp_name'], $uploadPath)) 
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
        $query = $dbh->prepare("INSERT INTO absence (motif_absence, justificatif_absence, date_debut, date_fin, id_utilisateur) VALUES (:motif_absence, :justificatif_absence, :date_debut, :date_fin, :id_utilisateur)");
        $result = $query->execute([
            'motif_absence' => $_POST['absence-text'],
            'justificatif_absence' => $filename,
            'date_debut' => $_POST['date_debut_absence'],
            'date_fin' => $_POST['date_fin_absence'],
            'id_utilisateur' => $id_utilisateur
        ]);

        if ($result) 
            {
                header('Location: /?page=dashboard');
                exit;
            } 
            else 
            {
                $errors['form'] = "Une erreur s'est produite lors de l'inscription. Veuillez contacter l'administrateur à l'adresse [email].";
            }
    }
}