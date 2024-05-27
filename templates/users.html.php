<div class="container">
    <h1>Liste des utilisateurs</h1>
    <div>
        <a href="/?page=add-user"><button class="button">Créer un utilisateur</button></a>
    </div>
    <div>
        <form action="/?page=search" method="GET" class="search">
            <input type="text" name="search" id="search" placeholder="Rechercher un utilisateur">
            <button class="button" type="submit">Rechercher</button>
        </form>
        <?php if (isset($resultCount)) : ?>
            <h2><?= htmlspecialchars($resultCount); ?> résultats correspondants à votre recherche "<?= htmlspecialchars($search); ?>".</h2>
        <?php endif; ?>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Numéro</th>
                <th>Rue</th>
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
                    <td><?= $users['numero'] ?></td>
                    <td><?= $users['rue'] ?></td>
                    <td><?= $users['code_postal'] ?></td>
                    <td><?= $users['ville'] ?></td>
                    <td>
                        <a href="/?page=edit-user&id=<?= $users['id_utilisateur'] ?>" class="button">Modifier</a>
                    </td>
                    <td>
                        <form action="/?page=delete-user" method="POST" onsubmit="return confirm('Are you sure ?')">
                            <input type="hidden" name="user_id" value="<?= $users['id_utilisateur'] ?>" />
                            <button class="delete__button" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (empty($users)) : ?>
                <tr>
                    <td colspan="9" class="text-user">Aucun utilisateur présent dans la base de données</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>