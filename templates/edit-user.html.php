<section class="container py-5">
    <h1 class="text-center my-4">Modifier un utilisateur</h1>
    <div class="my-4">
        <a href="/?page=users"><button class="button cancel-button" title="Annuler">Annuler</button></a>
    </div>
    <form action="" method="POST" class="my-4">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="<?= htmlspecialchars($firstname); ?>">
                    <?php if (isset($errors) && !empty($errors['firstname'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['firstname']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?= htmlspecialchars($lastname); ?>">
                    <?php if (isset($errors) && !empty($errors['lastname'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['lastname']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="phone_number" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" name="phone_number" id="phone_number" value="<?= htmlspecialchars($phone_number); ?>">
                <?php if (isset($errors) && !empty($errors['phone_number'])) : ?>
                    <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['phone_number']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="street_number" class="form-label">N°</label>
                    <input type="text" class="form-control" name="street_number" id="street_number" value="<?= htmlspecialchars($street_number); ?>">
                    <?php if (isset($errors) && !empty($errors['street_number'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['street_number']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="street" class="form-label">Rue</label>
                    <input type="text" class="form-control" name="street" id="street" value="<?= htmlspecialchars($street); ?>">
                    <?php if (isset($errors) && !empty($errors['street'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['street']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="zip_code" class="form-label">Code Postal</label>
                    <input type="text" class="form-control" name="zip_code" id="zip_code" value="<?= htmlspecialchars($zip_code); ?>">
                    <?php if (isset($errors) && !empty($errors['zip_code'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['zip_code']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="city" class="form-label">Ville</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Entrer une ville" value="<?= htmlspecialchars($city); ?>">
                <?php if (isset($errors) && !empty($errors['city'])) : ?>
                    <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['city']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?= htmlspecialchars($email); ?>">
                <?php if (isset($errors) && !empty($errors['email'])) : ?>
                    <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['email']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group mb-3">
            <div class="col-12">
                <label for="role_id" class="form-label">Role de l'utilisateur</label>
                <?php foreach ($roles as $role) : ?>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="role_id" id="role_id_<?= htmlspecialchars($role['Id_role']) ?>" value="<?= htmlspecialchars($role['Id_role']) ?>" required>
                        <label for="role_id_<?= htmlspecialchars($role['Id_role']) ?>" class="form-check-label"><?= htmlspecialchars($role['nom_role']) ?></label>
                    </div>
                <?php endforeach; ?>
                <?php if (isset($errors) && !empty($errors['role_id'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['role_id']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 py-4">
            <button type="submit" class="button register-button" title="Modifier un utilisateur" name="edit_user_submit">Modifier</button>
        </div>
    </form>
</section>