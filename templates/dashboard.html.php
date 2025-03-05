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
    <section class="container my-4 d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="card-body">
            <p class="card-text">Bienvenue <span class="font-weight-bold"><?= htmlspecialchars($user['prenom']); ?> <?= htmlspecialchars($user['nom']); ?></span></p>
            <p class="card-text">Mail : <span class="font-weight-bold"><?= htmlspecialchars($user['email']); ?></span></p>
            <p class="card-text">Numéro de téléphone : <span class="font-weight-bold"><?= htmlspecialchars($user['telephone']); ?></span></p>
            <p class="card-text">Adresse : <span class="font-weight-bold"><?= htmlspecialchars($user['numero']); ?> <?= htmlspecialchars($user['rue']); ?>, <?= htmlspecialchars($user['code_postal']); ?> <?= htmlspecialchars($user['ville']); ?></span></p>
        </div>
    </div>
</section>
</section>