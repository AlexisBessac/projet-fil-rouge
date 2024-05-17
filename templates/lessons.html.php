<div class="container">
    <h1>Liste des formations</h1>
    <div>
        <a href="/?page=add-user"><button class="button">Créer une formation</button></a>
    </div>
    <div>
        <form action="" method="GET" class="search">
            <input type="text" name="search" id="search" placeholder="Rechercher un utilisateur">
            <button class="button" type="submit" name="search_submit">Rechercher</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
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
                    <td><?= $lessons['id_formation'] ?></td>
                    <td><?= $lessons['nom_formation'] ?></td>
                    <td><?= $lessons['date_debut'] ?></td>
                    <td><?= $lessons['date_fin'] ?></td>
                    <td><?= $lessons['lieu'] ?></td>
                    <td><?= $lessons['ville'] ?></td>
                    <td>
                        <a class="edit-button">Modifier</a>
                    </td>
                    <td>
                        <form action="" method="POST" onsubmit="return confirm('Are you sure ?')">
                            <input type="hidden" name="user_id" value="<?= $users['id_utilisateur'] ?>" />
                            <button class="delete__button" type="submit">Supprimer</button>
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
</div>