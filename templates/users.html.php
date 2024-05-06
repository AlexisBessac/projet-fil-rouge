<div class="container">
    <h1>Liste des utilisateurs</h1>
    <div>
            <button>Créer un utilisateur</button>
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
            <button>Modifier</button>
        </td>
        <td>
           <button>Supprimer</button>
        </td>
    </tr>
<?php endforeach; ?>
        </tbody>
    </table>
</div>