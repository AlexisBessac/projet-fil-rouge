<div class="container">
    <h1>Liste des documents à fournir pour cette formation</h1>
    <a href="/?page=dashboard"><button class="button">Revenir sur mon tableau de bord</button></a>
    <table class="table">
    <thead>
        <tr>
            <th>Nom du document</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($doc as $docs) : ?>
        <tr>
            <td><?=$docs['nom_type_document'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>