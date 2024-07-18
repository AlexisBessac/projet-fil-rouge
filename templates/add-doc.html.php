<section class="container">
    <h1>Ajouter un document à la liste des documents à fournir dans le cadre d'une formation</h1>
    <a href="/?page=docs"><button class="button cancel-button" title="Annuler">Annuler</button></a>
    <form action="" method="POST">
        <div>
            <label for="nom_docs">Nom du document à transmettre</label>
            <input type="text" name="nom_docs" id="nom_docs" placeholder="Ex. CV">
            <?php if (isset($errors) && !empty($errors['nom_docs'])) : ?>
                <div class="ajout-error"><?= $errors['nom_docs'] ?></div>
            <?php endif; ?>
            <button type="submit" name="add_docs_submit" id="add_docs_submit" class="button" title="Ajouter le document">Ajouter le document</button>
        </div>
    </form>
</section>