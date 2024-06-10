<div class="container">
    <h1>Formations</h1>
    <a href="/?page=dashboard"><button class="button" title="Revenir sur mon tableau de bord">Revenir sur mon tableau de bord</button></a>
    <div class="card-container">
        <?php foreach($formations as $formation) : ?>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"><?= $formation['nom_formation'] ?></h2>
                    <p class="card-text">
                        Date de début : 
                        <?= (new DateTime($formation['date_debut']))->format('d F Y') ?>
                    </p>
                    <p class="card-text">
                        Date de fin : 
                        <?= (new DateTime($formation['date_fin']))->format('d F Y') ?>
                    </p>
                    <p class="card-text"><?= $formation['lieu'] ?></p>
                    <p class="card-text"><?= $formation['ville']?></p>
                    <a href="/?page=apply" class="btn" title="Postuler à une formation">Postuler à cette formation</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>