<section class="container">
    <h1>Liste des formations</h1>
    <div>
        <a href="/?page=add-lesson"><button class="button" title="Créer une formation ">Créer une formation</button></a>
    </div>
    <div>
        <a href="/?page=users"><button class="lesson" title="Liste des utilisateurs">Liste des utilisateurs</button></a>
    </div>
    <div class="button-container">
        <a href="/?page=connexion"><button class="button" title="Se Déconnecter">Se Déconnecter</button></a>
    </div>
    <table class="table">
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
                    <td><?= $lessons['nom_formation'] ?></td>
                    <td><?= $lessons['date_debut'] ?></td>
                    <td><?= $lessons['date_fin'] ?></td>
                    <td><?= $lessons['lieu'] ?></td>
                    <td><?= $lessons['ville'] ?></td>
                    <td>
                        <a href="/?page=edit-lesson&id=<?= $lessons['id_formation'] ?>" class="button" title="Modifier">Modifier</a>
                    </td>
                    <td>
                        <form action="/?page=delete-lesson" method="POST" onsubmit="return confirm('Are you sure ?')">
                            <input type="hidden" name="lesson_id" value="<?= $lessons['id_formation'] ?>" />
                            <button class="delete__button" type="submit" title="Supprimer">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (empty($lessons)) : ?>
                <tr>
                    <td colspan="7" class="text-user">Aucune formation présente dans la base de donnée</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>