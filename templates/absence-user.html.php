<section class="container py-5">
    <h1 class="text-center my-4">Déclarer une absence</h1>
    <div class="my-4">
        <a href="/?page=dashboard"><button class="button" title="Revenir sur mon tableau de bord">Revenir sur mon tableau de bord</button></a>
    </div>
    <section class="d-flex flex-column align-items-center">
        <div>
            <form action="" method="POST" enctype="multipart/form-data" class="my-4">
                <div class="form-group mb-3">
                    <label for="justificatif_absence" class="form-label">Parcourir</label>
                    <input type="file" class="form-control" name="justificatif_absence" id="justificatif_absence" required>
                </div>
                <div class="form-group mb-3">
                    <label for="absence-text" class="form-label">Motif de l'absence</label>
                    <input type="text" class="form-control" name="absence-text" id="absence-text" placeholder="Maladie" required>
                    <?php if (isset($errors) && !empty($errors['absence-text'])) : ?>
                        <div class="ajout-error">
                            <?= htmlspecialchars($errors['absence-text']) ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-3">
                    <label for="date_debut_absence" class="form-label">Date du début de l'absence</label>
                    <input type="date" class="form-control" name="date_debut_absence" id="date_debut_absence" required>
                    <?php if (isset($errors) && !empty($errors['date_debut_absence'])) : ?>
                        <div class="ajout-error">
                            <?= htmlspecialchars($errors['date_debut_absence']) ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-3">
                    <label for="date_fin_absence" class="form-label">Date de la fin de l'absence</label>
                    <input type="date" class="form-control" name="date_fin_absence" id="date_fin_absence" required>
                    <?php if (isset($errors) && !empty($errors['date_fin_absence'])) : ?>
                        <div class="ajout-error">
                            <?= htmlspecialchars($errors['date_fin_absence']) ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <button class="button register-button" name="submit_form_absence" type="submit" title="Transmettre mon absence">Transmettre mon absence</button>
                </div>
            </form>
        </div>
    </section>
</section>