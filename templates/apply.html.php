<section class="container py-5">
    <h1 class="text-center my-4">Liste des documents à fournir pour cette formation</h1>
    <div class="my-4">
        <a href="/?page=home"><button class="button" title="Revenir à l'accueil">Revenir à l'accueil</button></a>
    </div>
    <div class="my-4">
        <p class="text-user">Veuillez préparer les documents suivants pour compléter votre inscription à la formation : </p>
    </div>
    <section class="my-4">
        <div class="row">
            <?php foreach ($doc as $docs) : ?>
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body d-flex flex-column">
                            <h2 class="card-title"><?= $docs['nom_type_document'] ?></h2>
                            <p class="card-text my-4 flex-grow-1">
                                Veuillez fournir ce document pour la formation
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</section>