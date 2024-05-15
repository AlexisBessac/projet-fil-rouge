<div class="container">
    <h1>Liste des utilisateurs</h1>
    <div>
        <a href="/?page=add-user"><button class="button">Créer un utilisateur</button></a>
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
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $users) : ?>
                <tr>
                    <td><?= $users['id_utilisateur'] ?></td>
                    <td><?= $users['nom'] ?></td>
                    <td><?= $users['prenom'] ?></td>
                    <td><?= $users['email'] ?></td>
                    <td><?= $users['adresse'] ?></td>
                    <td><?= $users['code_postal'] ?></td>
                    <td><?= $users['ville'] ?></td>
                    <td>
                        <button class="edit-button">Modifier</button>
                    </td>
                    <td>
                        <form action="/?page=delete-user" method="POST" onsubmit="return confirm('Are you sure ?')">
                            <input type="hidden" name="user_id" value="<?= $users['id_utilisateur'] ?>" />
                            <button class="delete__button" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (empty($user)) : ?>
                <tr>
                    <td colspan="8">Aucun utilisateur présent dans la base de données</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>