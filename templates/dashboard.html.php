<div class="container">
    <h1>Mon  tableau de bord</h1>
    <div class="button-container">
        <a href="/?page=connexion"><button class="button" title="Se déconnecter">Se Déconnecter</button></a>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="/?page=liste-formation"><button class="button" title="Postuler à une formation">Postuler à une formation</button></a></li>
            <li><a href="/?page=absence-user"><button class="button" title="Mes absences">Mes absences</button></a></li>
            <li><a href="/?page=late-user"><button class="button" title="Mes retards">Mes retards</button></a></li>
        </ul>
    </nav>
    <section>
        <p>Bienvenue <?= $user['prenom']; ?> <?= $user['nom']; ?></p>
        <p>Votre adresse mail est la suivante <?= $user['email']; ?></p>
        <p>Votre numéro de téléphone est le suivant <?= $user['telephone']; ?></p>
        <p>Vous habitez au <?= $user['numero']; ?> <?= $user['rue']; ?> <?= $user['code_postal']; ?> <?= $user['ville']; ?></p>
    </section>
</div>