<div class="container">
    <h1>Liste des documents à fournir pour cette formation</h1>
    <a href="/?page=dashboard"><button class="button">Revenir sur mon tableau de bord</button></a>
    <p class="text-user">Veuillez préparer les documents suivants pour compléter votre inscription à la formation : </p>

    <section class="document-list">
        <div class="container-list">
            <?php foreach ($doc as $docs) : ?>
                <div class="document-item">
                    <h2><?= $docs['nom_type_document'] ?></h2>
                    <div class="document-description">
                        <p>Veuiller fournir ce document pour la formation</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>