<div class="container">
    <h1>S'inscrire</h1>
    <form action="" method="POST">
        <div class="identite">
            <div>
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="Ex. John">
                <?php if (isset($errors) && !empty($errors['firstname'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['firstname']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname" placeholder="Ex. Doe">
                <?php if (isset($errors) && !empty($errors['lastname'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['lastname']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="coordonne">
            <label for="phone_number">Téléphone</label>
            <input type="tel" name="phone_number" id="phone_number" placeholder="Ex. 0600000000">
            <?php if (isset($errors) && !empty($errors['phone_number'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['phone_number']) ?></div>
            <?php endif; ?>
        </div>
        <div class="adresse-form">
            <div>
                <label for="street_number">N°</label>
                <input type="text" name="street_number" id="street_number" placeholder="Ex. 86">
                <?php if (isset($errors) && !empty($errors['street_number'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['street_number']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="street">Rue</label>
                <input type="text" name="street" id="street" placeholder="Ex. Quai de la Gare">
                <?php if (isset($errors) && !empty($errors['street'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['street']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="zip_code">Code Postal</label>
                <input type="number" name="zip_code" id="zip_code" placeholder="Ex. 57000">
                <?php if (isset($errors) && !empty($errors['zip_code'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['zip_code']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="coordonne">
            <label for="city">Ville</label>
            <input type="text" name="city" id="city" placeholder="Ex. Metz">
            <?php if (isset($errors) && !empty($errors['city'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['city']) ?></div>
            <?php endif; ?>
        </div>
        <div class="coordonne">
            <label for="email">Email</label>
            <input type="email" name="email_register" id="email_register" placeholder="Ex. john.doe@domaine.com">
            <?php if (isset($errors) && !empty($errors['email_register'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['email_register']) ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <span>Votre mot de passe doit contenir entre 8 et 16 caractères, une minusucule, une majuscule un chiffre et un caractèrel spécial tel que (!,$,€,*).</span>
                <?php if (isset($errors) && !empty($errors['password'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['password']) ?></div>
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
        <div>
            <button type="submit" class="button register-button" title="S'inscrire" name="form_inscribe_submit">S'inscrire</button>
        </div>
    </form>
</div>