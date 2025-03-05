<section class="container py-5">
    <h1 class="text-center my-4">Liste des documents à fournir dans le cadre d'une formation</h1>
    <div class="my-4">
        <a href="/?page=add-doc"><button class="button" title="Ajouter un document">Ajouter un document</button></a>
    </div>
    <div class="my-4">
        <a href="/?page=users"><button class="button" title="Liste des utilisateurs">Liste des utilisateurs</button></a>
    </div>
    <table class="table table-bordered table-striped my-4">
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
                        <a href="/?page=edit-doc&id=<?= $docs['id_type'] ?>" class=" btn button" title="Modifier">Modifier</a>
                    </td>
                    <td>
                        <form action="/?page=delete-doc" method="POST" onsubmit="return confirm('Etes vous sûr de vouloir supprimer cet type de document ?')">
                            <input type="hidden" name="type_id" value="<?= $docs['id_type'] ?>" />
                            <button class="btn btn-danger" type="submit" title="Supprimer">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (empty($docs)) : ?>
                <tr>
                    <td colspan="3" class="text-center">Aucun document présent dans la base de données</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</section>