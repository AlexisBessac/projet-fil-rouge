<section class="container">
    <h1>Ajouter une formation</h1>
    <a href="/?page=lessons"><button class="button cancel-button" title="Annuler">Annuler</button></a>
    <form action="" method="POST">
        <div>
            <label for="lesson_name">Nom de la formation</label>
            <input type="text" name="lesson_name" id="lesson_name" placeholder="Ex. Bachelor Smart Developper">
            <?php if (isset($errors) && !empty($errors['lesson_name'])) : ?>
                <div class="ajout-error"><?= $errors['lesson_name'] ?></div>
            <?php endif; ?>
        </div>
        <div class="formation">
            <div>
                <label for="date_debut">Date de début de la formation</label>
                <input type="date" name="date_debut" id="date_debut" placeholder="02/09/2023">
                <?php if (isset($errors) && !empty($errors['date_debut'])) : ?>
                    <div class="ajout-error"><?= $errors['date_debut'] ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="date_fin">Date de fin de la formation</label>
                <input type="date" name="date_fin" id="date_fin" placeholder="02/09/2026">
                <?php if (isset($errors) && !empty($errors['date_fin'])) : ?>
                    <div class="ajout-error"><?= $errors['date_fin'] ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="formation">
            <div>
                <label for="place">Lieu de la formation</label>
                <input type="text" name="place" id="place" placeholder="Ex. IFA Buisness School">
                <?php if (isset($errors) && !empty($errors['place'])) : ?>
                    <div class="ajout-error"><?= $errors['place'] ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="city">Ville où à lieu la formation</label>
                <input type="text" name="city" id="city" placeholder="Ex. Metz">
                <?php if (isset($errors) && !empty($errors['city'])) : ?>
                    <div class="ajout-error"><?= $errors['city'] ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div>
            <button type="submit" class="button register-button" name="add_lesson_submit" title="Ajouter une formation">Ajouter une formation</button>
        </div>
    </form>
</section>