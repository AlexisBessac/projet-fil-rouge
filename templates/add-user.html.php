<section class="container">
    <h1>Ajouter un utilisateur</h1>
    <a href="/?page=users"><button class="button cancel-button" title="Annuler">Annuler</button></a>
    <form action="" method="POST" class="d-flex flex-column align-items-center">
        <div class="identite">
            <div>
                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Ex. John" required>
                <?php if (isset($errors) && !empty($errors['firstname'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['firstname']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="lastname" class="form-label">Nom</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Ex. Doe" required>
                <?php if (isset($errors) && !empty($errors['lastname'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['lastname']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="coordonne">
            <label for="phone_number" class="form-label">Téléphone</label>
            <input type="tel" class="form-control" name="phone_number" id="phone_number" placeholder="Ex. 0600000000" required>
            <?php if (isset($errors) && !empty($errors['phone_number'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['phone_number']) ?></div>
            <?php endif; ?>
        </div>
        <div class="adresse-form">
            <div>
                <label for="street_number" class="form-label">Numéro de la rue</label>
                <input type="text" class="form-control" name="street_number" id="street_number" placeholder="Ex. 84" required>
                <?php if (isset($errors) && !empty($errors['street_number'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['street_number']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="street" class="form-label">Rue</label>
                <input type="text" class="form-control" name="street" id="street" placeholder="Ex. Quai de la Gare" required>
                <?php if (isset($errors) && !empty($errors['street'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['street']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="zip_code" class="form-label">Code Postal</label>
                <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Ex. 57000" required>
                <?php if (isset($errors) && !empty($errors['zip_code'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['zip_code']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="coordonne">
            <label for="city" class="form-label">Ville</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Ex. Metz" required>
            <?php if (isset($errors) && !empty($errors['city'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['city']) ?></div>
            <?php endif; ?>
        </div>
        <div class="coordonne">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Ex. john.doe@domaine.com" required>
            <?php if (isset($errors) && !empty($errors['email'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['email']) ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" required>
            <?php if (isset($errors) && !empty($errors['password'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['password']) ?></div>
            <?php endif; ?>
        </div>
        <div class="role-utilisateur">
            <label for="role_id" class="form-label">Role de l'utilisateur</label>
            <?php foreach ($roles as $role) : ?>
                <div>
                    <label for="role_id_<?= htmlspecialchars($role['Id_role']) ?>" class="form-check-label"><?= htmlspecialchars($role['nom_role']) ?></label>
                    <input type="radio" class="form-check-input" name="role_id" id="role_id_<?= htmlspecialchars($role['Id_role']) ?>" value="<?= htmlspecialchars($role['Id_role']) ?>" required>
                </div>
            <?php endforeach; ?>
            <?php if (isset($errors) && !empty($errors['role_id'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['role_id']) ?></div>
            <?php endif; ?>
        </div>
        <button type="submit" class="button register-button" title="Ajouter un utilisateur" name="add_user_submit">Ajouter un utilisateur</button>
    </form>
</section>