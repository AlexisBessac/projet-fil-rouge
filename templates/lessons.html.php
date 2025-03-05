<?php setlocale(LC_TIME, 'fr_FR.UTF-8'); ?>
<section class="container py-5">
    <h1 class="text-center my-4">Liste des formations</h1>
    <div class="my-4">
        <a href="/?page=add-lesson"><button class="button" title="Créer une formation ">Créer une formation</button></a>
    </div>
    <div class="my-4">
        <a href="/?page=users"><button class="button" title="Liste des utilisateurs">Liste des utilisateurs</button></a>
    </div>
    <div class="button-container">
        <a href="/?page=connexion"><button class="button" title="Se Déconnecter">Se Déconnecter</button></a>
    </div>
    <div class="my-4">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nom de la formation</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Lieu</th>
                    <th>Ville</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lesson as $lessons) : ?>
                    <tr>
                        <td><?= htmlspecialchars($lessons['nom_formation']) ?></td>
                        <td><?= date('d F Y', strtotime($lessons['date_debut'])) ?></td>
                        <td><?= date('d F Y', strtotime($lessons['date_fin'])) ?></td>
                        <td><?= htmlspecialchars($lessons['lieu']) ?></td>
                        <td><?= htmlspecialchars($lessons['ville']) ?></td>
                        <td>
                            <a href="/?page=edit-lesson&id=<?= htmlspecialchars($lessons['id_formation']) ?>" class="btn button" title="Modifier">Modifier</a>
                        </td>
                        <td>
                            <form action="/?page=delete-lesson" method="POST" onsubmit="return confirm('Are you sure ?')">
                                <input type="hidden" name="lesson_id" value="<?= htmlspecialchars($lessons['id_formation']) ?>" />
                                <button class="btn btn-danger" type="submit" title="Supprimer">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php if (empty($lesson)) : ?>
                    <tr>
                        <td colspan="7" class="text-center">Aucune formation présente dans la base de données</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>