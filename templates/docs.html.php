<section class="container">
    <h1>Liste des documents à fournir dans le cadre d'une formation</h1>
    <div>
        <a href="/?page=add-doc"><button class="button" title="Ajouter un document">Ajouter un document</button></a>
    </div>
    <div>
        <a href="/?page=users"><button class="button" title="Liste des utilisateurs">Liste des utilisateurs</button></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nom du document</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($doc as $docs) : ?>
                <tr>
                    <td><?= $docs['nom_type_document'] ?></td>
                    <td>
                        <a href="/?page=edit-doc&id=<?= $docs['id_type'] ?>" class="button" title="Modifier">Modifier</a>
                    </td>
                    <td>
                        <form action="/?page=delete-doc" method="POST" onsubmit="return confirm('Etes vous sûr de vouloir supprimer cet type de document ?')">
                            <input type="hidden" name="type_id" value="<?= $docs['id_type'] ?>" />
                            <button class="delete__button" type="submit" title="Supprimer">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (empty($docs)) : ?>
                <tr>
                    <td colspan="3" class="text-user">Aucun document présent dans la base de données</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>