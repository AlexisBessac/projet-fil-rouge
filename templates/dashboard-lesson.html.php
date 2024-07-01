<div class="container">
    <h1>Tableau de bord du responsable administratif</h1>
    <div class="button-container">
        <a href="/?page=connexion"><button class="button" title="Se déconnecter">Se Déconnecter</button></a>
    </div>
    <section>
        <table class="table">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Raison du retard</th>
                    <th>Date du retard</th>
                    <th>Durée du retard</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($late as $lates) : ?>
                    <tr>
                        <td><?= $lates['prenom'] ?></td>
                        <td><?= $lates['nom'] ?></td>
                        <td><?= $lates['motif_retard'] ?></td>
                        <td><?= date('d-m-Y', strtotime($lates['date_retard'])) ?></td>
                        <td><?= date('H:i', strtotime($lates['duree_prevue'])) ?></td>
                        <td>
                            <button class="button" title="Justifié">Justifié</button>
                        </td>
                        <td>
                            <button class="button" title="Injustifié">Injustifié</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php if (empty($late)) : ?>
                    <tr>
                        <td colspan="7" class="text-user">Aucun retard présent dans la base de données</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
</div>