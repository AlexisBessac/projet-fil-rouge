<div class="container">
    <h1>Modifier une formation</h1>
    <a href="/?page=lessons"><button class="button cancel-button">Annuler</button></a>
    <form action="" method="POST">
        <div>
            <label for="lesson_name">Nom de la formation</label>
            <input type="text" name="lesson_name" id="lesson_name" placeholder="Entrer le nom d'une formation">
            <?php if (isset($errors) && !empty($errors['lesson_name'])) : ?>
                <div class="ajout-error"><?= $errors['lesson_name'] ?></div>
            <?php endif; ?>
        </div>
        <div class="formation">
            <div>
                <label for="date_debut">Date de début de la formation</label>
                <input type="date" name="date_debut" id="date_debut">
                <?php if (isset($errors) && !empty($errors['date_debut'])) : ?>
                    <div class="ajout-error"><?= $errors['date_debut'] ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="date_fin">Date de fin de la formation</label>
                <input type="date" name="date_fin" id="date_fin">
                <?php if (isset($errors) && !empty($errors['date_fin'])) : ?>
                    <div class="ajout-error"><?= $errors['date_fin'] ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="formation">
            <div>
                <label for="place">Lieu de la formation</label>
                <input type="text" name="place" id="place">
                <?php if (isset($errors) && !empty($errors['place'])) : ?>
                    <div class="ajout-error"><?= $errors['place'] ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="city">Ville où à lieu la formation</label>
                <input type="text" name="city" id="city" placeholder="Entrer le nom d'une ville">
                <?php if (isset($errors) && !empty($errors['city'])) : ?>
                    <div class="ajout-error"><?= $errors['city'] ?></div>
                <?php endif; ?>
            </div>
            <div class="role-utilisateur">
            <label for="role_id">Role de l'utilisateur</label>
            <?php foreach ($roles as $role) : ?>
                <?php $is_admin = trim(strtolower($role['nom_role'])) === 'administrateur'; ?>
                <div class="<?= $is_admin ? 'hidden' : '' ?>">
                    <label for="role_id_<?= htmlspecialchars($role['Id_role']) ?>"><?= htmlspecialchars($role['nom_role']) ?></label>
                    <input type="radio" name="role_id" id="role_id_<?= htmlspecialchars($role['Id_role']) ?>" value="<?= htmlspecialchars($role['Id_role']) ?>">
                </div>
            <?php endforeach; ?>
            <?php if (isset($errors) && !empty($errors['role_id'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['role_id']) ?></div>
            <?php endif; ?>
        </div>
        </div>
        <input type="submit" class="button register-button" name="add_lesson_submit" value="Ajouter">
    </form>
</div>