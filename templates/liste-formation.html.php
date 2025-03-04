<section class="container">
    <h1 class="text-center my-4">Liste des Formations</h1>
    <div class="my-4">
        <a href="/?page=dashboard"><button class="button" title="Revenir sur mon tableau de bord">Revenir sur mon tableau de bord</button></a>
    </div>
    <div class="row">
        <?php foreach ($lesson as $lessons) : ?>
            <div class="col-md-4 mb-4 d-flex align-items-stretch">
                <div class="card w-100">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title"><?= $lessons['nom_formation'] ?></h2>
                        <div class="py-4 flex-grow-1">
                            <p class="card-text">
                                Date de début :
                                <?= (new DateTime($lessons['date_debut']))->format('d F Y') ?>
                            </p>
                            <p class="card-text">
                                Date de fin :
                                <?= (new DateTime($lessons['date_fin']))->format('d F Y') ?>
                            </p>
                            <p class="card-text"><?= $lessons['lieu'] ?></p>
                            <p class="card-text"><?= $lessons['ville'] ?></p>
                        </div>
                        <div class="mt-auto d-flex justify-content-center">
                            <a href="/?page=apply" class="button-card text-center" title="Postuler à une formation">Postuler à cette formation</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>