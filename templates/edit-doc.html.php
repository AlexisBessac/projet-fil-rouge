<section class="container py-5">
    <h1 class="text-center my-4">Modifier un document à la liste des documents à fournir dans le cadre d'une formation</h1>
    <div class="my-4">
        <a href="/?page=docs"><button class="button cancel-button" title="Annuler">Annuler</button></a>
    </div>
    <form action="" method="POST" class="my-4">
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="nom_docs" class="form-label">Nom du document à transmettre</label>
                <input type="text" name="nom_docs" id="nom_docs" class="form-control" value="<?= htmlspecialchars($nom_docs);?>"> 
                <?php if (isset($errors) && !empty($errors['nom_docs'])) : ?>
                    <div class="ajout-error"><?= $errors['nom_docs'] ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 mb-3">
            <button type="submit" name="edit_docs_submit" id="edit_docs_submit" class="button" title="Modifier le document">Modifier le document</button>
        </div>
    </form>
</section>