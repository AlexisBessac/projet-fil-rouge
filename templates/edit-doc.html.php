<section class="container">
    <h1>Modifier un document à la liste des documents à fournir dans le cadre d'une formation</h1>
    <a href="/?page=docs"><button class="button cancel-button" title="Annuler">Annuler</button></a>
    <form action="" method="POST">
        <div>
            <label for="nom_docs">Nom du document à transmettre</label>
            <input type="text" name="nom_docs" id="nom_docs" value="<?= htmlspecialchars($nom_docs);?>">
            <?php if (isset($errors) && !empty($errors['nom_docs'])) : ?>
                <div class="ajout-error"><?= $errors['nom_docs'] ?></div>
            <?php endif; ?>
            <button type="submit" name="edit_docs_submit" id="edit_docs_submit" class="button" title="Modifier le document">Modifier le document</button>
        </div>
    </form>
</section>