<section class="container py-5">
    <div class="my-4">
        <h1 class="text-center">S'inscrire</h1>
    </div>
    <div class="my-4">
        <a href="/?page=home"><button class="button cancel-button" title="Revenir à l'accueil">Revenir à l'accueil</button></a>
    </div>

    <!-- Affichage des erreurs centralisé au début du formulaire -->
    <?php if (isset($errors) && !empty($errors)) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erreurs détectées :</strong>
            <ul class="mb-0 mt-2">
                <?php foreach ($errors as $field => $message) : ?>
                    <li><?= htmlspecialchars($message) ?></li>
                <?php endforeach; ?>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <form action="" method="POST" class="my-4" >
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control <?php if (isset($errors['firstname'])) echo 'is-invalid'; ?>" id="firstname" name="firstname" placeholder="Ex. John" value="<?= htmlspecialchars($form_data['firstname'] ?? '') ?>" required>
                    <?php if (isset($errors) && !empty($errors['firstname'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['firstname']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" class="form-control <?php if (isset($errors['lastname'])) echo 'is-invalid'; ?>" id="lastname" name="lastname" placeholder="Ex. Doe" value="<?= htmlspecialchars($form_data['lastname'] ?? '') ?>" required>
                    <?php if (isset($errors) && !empty($errors['lastname'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['lastname']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="phone_number" class="form-label">Téléphone</label>
                <input type="tel" class="form-control <?php if (isset($errors['phone_number'])) echo 'is-invalid'; ?>" name="phone_number" id="phone_number" placeholder="Ex. 0600000000" value="<?= htmlspecialchars($form_data['phone_number'] ?? '') ?>" required>
                <?php if (isset($errors) && !empty($errors['phone_number'])) : ?>
                    <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['phone_number']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="street_number" class="form-label">N°</label>
                    <input type="text" class="form-control <?php if (isset($errors['street_number'])) echo 'is-invalid'; ?>" name="street_number" id="street_number" placeholder="Ex. 86" value="<?= htmlspecialchars($form_data['street_number'] ?? '') ?>" required>
                    <?php if (isset($errors) && !empty($errors['street_number'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['street_number']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="street" class="form-label">Rue</label>
                    <input type="text" class="form-control <?php if (isset($errors['street'])) echo 'is-invalid'; ?>" name="street" id="street" placeholder="Ex. Quai de la Gare" value="<?= htmlspecialchars($form_data['street'] ?? '') ?>" required>
                    <?php if (isset($errors) && !empty($errors['street'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['street']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="zip_code" class="form-label">Code Postal</label>
                    <input type="text" class="form-control <?php if (isset($errors['zip_code'])) echo 'is-invalid'; ?>" name="zip_code" id="zip_code" placeholder="Ex. 57000" value="<?= htmlspecialchars($form_data['zip_code'] ?? '') ?>" required>
                    <?php if (isset($errors) && !empty($errors['zip_code'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['zip_code']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="city" class="form-label">Ville</label>
                <input type="text" class="form-control <?php if (isset($errors['city'])) echo 'is-invalid'; ?>" name="city" id="city" placeholder="Ex. Metz" value="<?= htmlspecialchars($form_data['city'] ?? '') ?>" required>
                <?php if (isset($errors) && !empty($errors['city'])) : ?>
                    <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['city']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control <?php if (isset($errors['email_register'])) echo 'is-invalid'; ?>" name="email_register" id="email_register" placeholder="Ex. john.doe@domaine.com" value="<?= htmlspecialchars($form_data['email_register'] ?? '') ?>" required>
                <div id="email_feedback" class="mt-2"></div>
                <?php if (isset($errors) && !empty($errors['email_register'])) : ?>
                    <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['email_register']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control <?php if (isset($errors['password'])) echo 'is-invalid'; ?>" name="password" id="password" required>
                <span>Votre mot de passe doit contenir entre 16 et 32 caractères, une minuscule, une majuscule, un chiffre et un caractère spécial tel que (!,$,€,*).</span>
                <?php if (isset($errors) && !empty($errors['password'])) : ?>
                    <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['password']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <button type="submit" class="button" title="S'inscrire" name="form_inscribe_submit" id="form_inscribe_submit">S'inscrire</button>
            </div>
        </div>
    </form>
</section>