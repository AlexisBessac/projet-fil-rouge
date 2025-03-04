<section class="container py-5">
    <h1 class="text-center my-4">Liste des utilisateurs</h1>
    <div class="my-4">
        <a href="/?page=add-user"><button class="button" title="Créer un utilisateur">Créer un utilisateur</button></a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light my-4 justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/?page=lessons"><button class="button" title="Liste des formations">Liste des formations</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=docs"><button class="button" title="Liste des documents à fournir pour une formation">Liste des documents à fournir pour une formation</button></a>
            </li>
        </ul>
    </nav>
    <div class="button-container">
        <a href="/?page=connexion"><button class="button" title="Se Déconnecter">Se Déconnecter</button></a>
    </div>
    <div class="my-4">
        <table class="table table-striped table-bordered">
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
                            <a href="/?page=edit-user&id=<?= $users['id_utilisateur'] ?>" class="btn button" title="Modifier">Modifier</a>
                        </td>
                        <td>
                            <form action="/?page=delete-user" method="POST" onsubmit="return confirm('Etes vous sûr de vouloir supprimer cet utilisateur ?')">
                                <input type="hidden" name="user_id" value="<?= $users['id_utilisateur'] ?>" />
                                <button class="btn btn-danger" type="submit" title="Supprimer">Supprimer</button>
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
</section>