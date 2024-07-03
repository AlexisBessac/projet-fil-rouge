<?php

$title = "Déclare mes reatrds";
$description = "L'utilisateur voit ici ses retards et peut les déclarer";

// On vérifie si le formulaire est envoyé
if(isset($_POST['submit_form_late']))
{
    // On vérifie que le fichier est bien envoyé
    if(isset($_FILES['justificatif_retard']) && $_FILES['justificatif_retard']['error'] == 0)
    {

        $authorizedFileTypes = [
            'image/jpeg',
            'image/jpg',
            'image/png',
            'image/gif'
        ];

        // On vérifie le type de fichier
        if(in_array(mime_content_type($_FILES['justificatif_retard']['tmp_name']), $authorizedFileTypes) && $_FILES['justificatif_retard']['type'] == mime_content_type($_FILES['justificatif_retard']['tmp_name']))
        {
            // On vérifie le poid du fichier
            if($_FILES['justificatif_retard']['size'] < 1000000)
            {

                // On renomme le fichier
                $filename = md5($_FILES['justificatif_retard']['name']) . '.' . pathinfo($_FILES['image']['name'])['extension'];
                move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/ '.$_FILES['image']['name']);
            }
            else
            {
                echo "Error: Le fichier est trop volumineux.";
            }
        }
        else
        {
            echo "Error: Le fichier doit être une image (jpg,png).";
        }
    }

    $errors = [];

    if (empty($_POST['late-text']) || strlen($_POST['late-text']) <= 1) 
    {
        $errors['late-text'] = "Le champ Motif du retard est obligatoire et doit contenir plus d'un caractère";
    }

    if (empty($_POST['duree_retard']) || strlen($_POST['duree_retard']) <= 1) 
    {
        $errors['duree_retard'] = "Le champ Durée du retadr est obligatoire et doit contenir plus d'un caractère";
    }

    if (empty($_POST['date_retard']) || ctype_digit($_POST['date_retard'])) 
    {
        $errors['date-retard'] = "Le champ Date du retard est obligatoire et doit contenir plus d'un caractère";
    }
}