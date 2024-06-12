<div class="container">
    <h1>Liste des utilisateurs</h1>
    <div>
        <a href="/?page=add-user"><button class="button" title="Créer un utilisateur">Créer un utilisateur</button></a>
    </div>
    <div>
        <a href="/?page=lessons"><button class="lesson" title="Liste des Formations">Liste des Formations</button></a>
    </div>
    <div class="button-container">
        <a href="/?page=connexion"><button class="button" title="Se Déconnecter">Se Déconnecter</button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
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
                    <td><?= $users['prenom'] ?></td>
                    <td><?= $users['nom'] ?></td>
                    <td><?= $users['email'] ?></td>
                    <td><?= $users['numero'] ?></td>
                    <td><?= $users['rue'] ?></td>
                    <td><?= $users['code_postal'] ?></td>
                    <td><?= $users['ville'] ?></td>
                    <td>
                        <a href="/?page=edit-user&id=<?= $users['id_utilisateur'] ?>" class="button" title="Modifier">Modifier</a>
                    </td>
                    <td>
                        <form action="/?page=delete-user" method="POST" onsubmit="return confirm('Etes vous sûr de vouloir supprimer cet utilisateur ?')">
                            <input type="hidden" name="user_id" value="<?= $users['id_utilisateur'] ?>" />
                            <button class="delete__button" type="submit" title="Supprimer">Supprimer</button>
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