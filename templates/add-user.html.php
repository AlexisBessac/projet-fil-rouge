<div class="container">
    <h1>Ajouter un utilisateur</h1>
    <a href="/?page=users"><button class="button cancel-button">Annuler</button></a>
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
            <input type="tel" name="phone_number" placeholder="Ex. 0600000000" id="phone_number">
            <?php if (isset($errors) && !empty($errors['phone_number'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['phone_number']) ?></div>
            <?php endif; ?>
        </div>
        <div class="adresse-form">
            <div>
                <label for="street_number">Numéro de la rue</label>
                <input type="text" name="street_number" placeholder="Ex. 84" id="street_number">
                <?php if (isset($errors) && !empty($errors['street_number'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['street_number']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="street">Voie</label>
                <input type="text" name="street" id="street" placeholder="Ex. Quai de la Gare">
                <?php if (isset($errors) && !empty($errors['street'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['street']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="zip_code">Code Postal</label>
                <input type="number" name="zip_code" placeholder="Ex. 57000" id="zip_code">
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
            <?php if (isset($errors) && !empty($errors['password'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['password']) ?></div>
            <?php endif; ?>
        </div>
        <div class="role-utilisateur">
            <label for="role_id">Role de l'utilisateur</label>
            <?php foreach ($roles as $role) : ?>
                <div>
                    <label for="role_id_<?= htmlspecialchars($role['Id_role']) ?>"><?= htmlspecialchars($role['nom_role']) ?></label>
                    <input type="radio" name="role_id" id="role_id_<?= htmlspecialchars($role['Id_role']) ?>" value="<?= htmlspecialchars($role['Id_role']) ?>">
                </div>
            <?php endforeach; ?>
            <?php if (isset($errors) && !empty($errors['role_id'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['role_id']) ?></div>
            <?php endif; ?>
        </div>
        <button type="submit" class="button register-button" title="Ajouter un utilisateur" name="add_user_submit">Ajouter un utilisateur</button>
    </form>
</div>