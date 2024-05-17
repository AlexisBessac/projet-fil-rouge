<div class="container">
    <h1>Ajouter une formation</h1>
    <form action="" method="POST">
        <div>
            <label for="lesson_name">Nom de la formation</label>
            <input type="text" name="lesson_name" id="lesson_name" placeholder="Entrer le nom d'une formation">
        </div>
        <div>
            <label for="date_debut">Date de début de la formation</label>
            <input type="date" name="date_debut" id="date_debut">
        </div>
        <div>
            <label for="date_fin">Date de fin de la formation</label>
            <input type="date" name="date_fin" id="date_fin">
        </div>
        <div>
            <label for="place">Lieu de la formation</label>
            <input type="text" name="place" id="place">
        </div>
        <div>
            <label for="city">Ville où se déroule la formation</label>
            <input type="text" name="city" id="city" placeholder="Entrer le nom d'une ville">
        </div>
        <div>
            <label for="role_id">Role de l'utilisateur</label>
            <?php foreach($roles as $role) : ?>
                <label for="role_id <?= $role['Id_role'] ?>"><?= $role['nom_role'] ?></label>
                <input type="radio" name="role_id" id="role_id <?= $role['Id_role'] ?>" value="<?= $role['Id_role'] ?>">
            <?php endforeach; ?>
            <?php if (isset($errors) && !empty($errors['role_id'])) : ?>
                <div class="ajout-error"><?= $errors['role_id'] ?></div>
            <?php endif; ?>
        </div>
        <input type="submit" class="button" name="add_lesson_submit" value="Ajouter">
    </form>
</div>