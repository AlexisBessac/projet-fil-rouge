<section class="container py-5">
    <h1 class="text-center my-4">Modifier une formation</h1>
    <div class="my-4">
        <a href="/?page=lessons"><button class="button" title="Annuler">Annuler</button></a>
    </div>
    <form action="" method="POST" class="my-4">
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="lesson_name">Nom de la formation</label>
                <input type="text" name="lesson_name" id="lesson_name" class="form-control" placeholder="Ex. Bachelor Smart Developper" value="<?= htmlspecialchars($lessonName); ?>">
                <?php if (isset($errors) && !empty($errors['lesson_name'])) : ?>
                    <div class="ajout-error"><?= $errors['lesson_name'] ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="date_debut">Date de début de la formation</label>
                    <input type="date" name="date_debut" id="date_debut" class="form-control" value="<?= htmlspecialchars($lessonStart); ?>">
                    <?php if (isset($errors) && !empty($errors['date_debut'])) : ?>
                        <div class="ajout-error"><?= $errors['date_debut'] ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="date_fin">Date de fin de la formation</label>
                    <input type="date" name="date_fin" id="date_fin" class="form-control" value="<?= htmlspecialchars($lessonEnd); ?>">
                    <?php if (isset($errors) && !empty($errors['date_fin'])) : ?>
                        <div class="ajout-error"><?= $errors['date_fin'] ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="place">Lieu de la formation</label>
                    <input type="text" name="place" id="place" class="form-control" placeholder="IFA Buisness School" value="<?= htmlspecialchars($lessonPlace); ?>">
                    <?php if (isset($errors) && !empty($errors['place'])) : ?>
                        <div class="ajout-error"><?= $errors['place'] ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="city">Ville où a lieu la formation</label>
                    <input type="text" name="city" id="city" class="form-control" placeholder="Ex. Metz" value="<?= htmlspecialchars($lessonCity); ?>">
                    <?php if (isset($errors) && !empty($errors['city'])) : ?>
                        <div class="ajout-error"><?= $errors['city'] ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12 py-4">
            <button type="submit" class="button register-button" name="edit_lesson_submit" title="Modifier">Modifier</button>
        </div>
    </form>
</section>