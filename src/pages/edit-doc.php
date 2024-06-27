<?php 

$title = "Modifier un document à transmettre dans le cadre d'une formation";
$description = "L'administrateur peut ici modifier la liste des documents à fournir dans le cadre d'une formation";

if (!empty($_GET['id'])) {

    require '../src/data/db-connect.php';

    if (isset($_POST['edit_docs_submit'])) {
        $_POST['id_type'] = $_GET['id'];

        $errors = [];

        if (empty($_POST['nom_docs']) || strlen($_POST['nom_docs']) <= 1) {
            $errors['nom_docs'] = "Le champ Nom du document à transmettre est obligatoire et doit contenir plus d'un caractère";
        }

        if (empty($errors)) {
            $query = $dbh->prepare("UPDATE type_de_document SET nom_type_document = :nom_type_document WHERE id_type = :id_type");
            $query->execute([
                "id_type" => $_POST['id_type'],
                "nom_type_document" => $_POST['nom_docs']
            ]);

            if ($query->rowCount() == 0) {
                $errors['error'] = "Erreur lors de la mise à jour du document";
            }

            header('Location: /?page=docs');
            exit;
        }
    }

    $query = $dbh->prepare("SELECT nom_type_document FROM type_de_document WHERE id_type = :id_type");
    $query->execute([
        'id_type' => $_GET['id']
    ]);
    $docs = $query->fetch();

    if (!$docs) {
        echo "Document inexistant.";
        exit;
    }

    $nom_docs = $docs['nom_type_document'];

} else {
    echo "Erreur : id du document manquant";
    exit;
}