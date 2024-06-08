<?php
$title = "Modifier une formation";
$description = "La page pour modifier une formation";

if (!empty($_GET['id'])) {
    require '../src/data/db-connect.php';

    $id_formation = $_GET['id'];

    if (isset($_POST['edit_lesson_submit'])) {
        $errors = [];

        if (empty($_POST['lesson_name']) || strlen($_POST['lesson_name']) <= 1) {
            $errors['lesson_name'] = "Le champ Nom de la formation est obligatoire et doit contenir plus d'un caractère";
        }

        if (empty($_POST['date_debut'])) {
            $errors['date_debut'] = "Veuillez choisir une date au format JJ/MM/AAAA";
        }

        if (empty($_POST['date_fin'])) {
            $errors['date_fin'] = "Veuillez choisir une date au format JJ/MM/AAAA";
        }

        if (empty($_POST['place']) || strlen($_POST['place']) <= 1) {
            $errors['place'] = "Le champ Lieu où se déroule la formation est obligatoire et doit contenir plus d'un caractère";
        }

        if (empty($_POST['city']) || strlen($_POST['city']) <= 1) {
            $errors['city'] = "Le champ Ville est obligatoire et doit contenir plus d'un caractère";
        }

        if (empty($errors)) {
            $query = $dbh->prepare("UPDATE formation SET nom_formation = :nom_formation, date_debut = :date_debut, date_fin = :date_fin, lieu = :lieu, ville = :ville WHERE id_formation = :id_formation");
            $query->execute([
                'nom_formation' => $_POST['lesson_name'],
                'date_debut' => $_POST['date_debut'],
                'date_fin' => $_POST['date_fin'],
                'lieu' => $_POST['place'],
                'ville' => $_POST['city'],
                'id_formation' => $id_formation,
            ]);

            if ($query->rowCount() > 0) {
                header("Location: /?page=lessons");
                exit;
            } else {
                $errors['error'] = "Une erreur s'est produite lors de la mise à jour.";
            }
        }
    }

    // Récupération des données de la formation
    $query = $dbh->prepare("SELECT nom_formation, date_debut, date_fin, lieu, ville FROM formation WHERE id_formation = :id_formation");
    $query->execute(['id_formation' => $id_formation]);
    $lesson = $query->fetch();

    if (!$lesson) {
        echo "Formation inexistante";
        exit;
    }

    $lessonName = $lesson['nom_formation'];
    $lessonStart = $lesson['date_debut'];
    $lessonEnd = $lesson['date_fin'];
    $lessonPlace = $lesson['lieu'];
    $lessonCity = $lesson['ville'];
} else {
    echo "Erreur : id de la formation manquant";
    exit;
}