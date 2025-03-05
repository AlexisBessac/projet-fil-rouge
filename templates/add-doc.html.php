<section class="container py-5">
    <h1 class="text-center my-4">Ajouter un document à fournir dans le cadre d'une formation</h1>
    <div class="my-4">
        <a href="/?page=docs"><button class="button" title="Liste des documents">Liste des documents</button></a>
    </div>
    <form action="" method="POST" class="my-4">
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="nom_type_document">Nom du document</label>
                <input type="text" name="nom_type_document" id="nom_type_document" class="form-control" placeholder="Ex. CV" required>
                <?php if (isset($errors) && !empty($errors['nom_type_document'])) : ?>
                    <div class="ajout-error"><?= $errors['nom_type_document'] ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 py-4">
            <button type="submit" name="add_docs_submit" class="button" title="Ajouter le document">Ajouter le document</button>
        </div>
    </form>
</section>