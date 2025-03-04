<section class="container py-5">
    <h1 class="text-center my-4">Mon tableau de bord</h1>
    <div class="button-container">
        <a href="/?page=connexion"><button class="button" title="Se déconnecter">Se Déconnecter</button></a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light my-4 justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/?page=liste-formation"><button class="button" title="Postuler à une formation">Postuler à une formation</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=absence-user"><button class="button" title="Déclarer une absence">Déclarer une absence</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/?page=late-user"><button class="button" title="Déclarer un retard">Déclarer un retard</button></a>
            </li>
        </ul>
    </nav>
    <section class="user-info-section container my-4">
        <div class="user-info-container">
            <h2>Informations Personnelles :</h2>
            <p>Bienvenue <span class="user-detail"><?= $user['prenom']; ?> <?= $user['nom']; ?></span></p>
            <p>Mail : <span class="user-detail"><?= $user['email']; ?></span></p>
            <p>Numéro de téléphone : <span class="user-detail"><?= $user['telephone']; ?></span></p>
            <p>Adresse : <span class="user-detail"><?= $user['numero']; ?> <?= $user['rue']; ?> <?= $user['code_postal']; ?> <?= $user['ville']; ?></span></p>
        </div>
    </section>
</section>