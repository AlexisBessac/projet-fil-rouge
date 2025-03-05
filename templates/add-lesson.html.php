<section class="container py-5">
    <h1 class="text-center my-4">Ajouter une formation</h1>
    <div class="my-4">
        <a href="/?page=lessons"><button class="button cancel-button" title="Annuler">Annuler</button></a>
    </div>
    <form action="" method="POST" class="my-4">
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="lesson_name" class="form-label">Nom de la formation</label>
                <input type="text" class="form-control" id="lesson_name" name="lesson_name" placeholder="Ex. Bachelor Smart Developper" required>
                <?php if (isset($errors) && !empty($errors['lesson_name'])) : ?>
                    <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['lesson_name']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="date_debut" class="form-label">Date de début de la formation</label>
                    <input type="date" class="form-control" name="date_debut" id="date_debut" required>
                    <?php if (isset($errors) && !empty($errors['date_debut'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['date_debut']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="date_fin" class="form-label">Date de fin de la formation</label>
                    <input type="date" class="form-control" name="date_fin" id="date_fin" required>
                    <?php if (isset($errors) && !empty($errors['date_fin'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['date_fin']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="place" class="form-label">Lieu de la formation</label>
                    <input type="text" class="form-control" name="place" id="place" placeholder="Ex. IFA Buisness School" required>
                    <?php if (isset($errors) && !empty($errors['place'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['place']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-grou pmb-3">
                    <label for="city" class="form-label">Ville où à lieu la formation</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Ex. Metz" required>
                    <?php if (isset($errors) && !empty($errors['city'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['city']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12 py-4">
            <button type="submit" class="button register-button" name="add_lesson_submit" title="Ajouter une formation">Ajouter une formation</button>
        </div>
    </form>
</section>