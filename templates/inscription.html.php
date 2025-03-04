<section class="container py-5">
    <div class="my-4">
        <h1 class="text-center">S'inscrire</h1>
    </div>
    <form action="" method="POST" class="my-4">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="firstname" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Ex. John" required>
                    <?php if (isset($errors) && !empty($errors['firstname'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['firstname']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="lastname" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Ex. Doe" required>
                    <?php if (isset($errors) && !empty($errors['lastname'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['lastname']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="phone_number" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" name="phone_number" id="phone_number" placeholder="Ex. 0600000000" required>
                <?php if (isset($errors) && !empty($errors['phone_number'])) : ?>
                    <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['phone_number']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="street_number" class="form-label">N°</label>
                    <input type="text" class="form-control" name="street_number" id="street_number" placeholder="Ex. 86" required>
                    <?php if (isset($errors) && !empty($errors['street_number'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['street_number']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="street" class="form-label">Rue</label>
                    <input type="text" class="form-control" name="street" id="street" placeholder="Ex. Quai de la Gare" required>
                    <?php if (isset($errors) && !empty($errors['street'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['street']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="zip_code" class="form-label">Code Postal</label>
                    <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Ex. 57000" required>
                    <?php if (isset($errors) && !empty($errors['zip_code'])) : ?>
                        <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['zip_code']) ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="city" class="form-label">Ville</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Ex. Metz" required>
                <?php if (isset($errors) && !empty($errors['city'])) : ?>
                    <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['city']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email_register" id="email_register" placeholder="Ex. john.doe@domaine.com" required>
                <?php if (isset($errors) && !empty($errors['email_register'])) : ?>
                    <div class="d-block invalid-feedback"><?= htmlspecialchars($errors['email_register']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="password" required>
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