<?php

$title = "Tableau de bord du responsable administratif";
$description = "Sur cette page, le responsable administratif peut voir les documents envoyés par un candidat dans le cadre d'une inscription à une formation, d'une absence ou d'un retard et les valider ou non";

require '../src/data/db-connect.php';

$query= $dbh->prepare(" SELECT prenom, nom, date_retard, motif_retard, justificatif_retard, duree_prevue 
                        FROM retard 
                        JOIN utilisateur ON retard.id_utilisateur = utilisateur.id_utilisateur;");
$query->execute();
$late = $query->fetchAll();