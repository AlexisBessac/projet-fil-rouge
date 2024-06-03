<div class="container">
    <h1>S'inscrire</h1>
    <form action="" method="POST">
        <div class="identite">
            <div>
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="Votre Prénom">
                <?php if (isset($errors) && !empty($errors['firstname'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['firstname']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname" placeholder="Votre nom">
                <?php if (isset($errors) && !empty($errors['lastname'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['lastname']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="coordonne">
            <label for="phone_number">Téléphone</label>
            <input type="tel" name="phone_number" id="phone_number">
            <?php if (isset($errors) && !empty($errors['phone_number'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['phone_number']) ?></div>
            <?php endif; ?>
        </div>
        <div class="adresse-form">
            <div>
                <label for="street_number">Numéro de la rue</label>
                <input type="text" name="street_number" id="street_number">
                <?php if (isset($errors) && !empty($errors['street_number'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['street_number']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="street">Voie</label>
                <input type="text" name="street" id="street" placeholder="Entrer le nom d'une rue">
                <?php if (isset($errors) && !empty($errors['street'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['street']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="zip_code">Code Postal</label>
                <input type="number" name="zip_code" id="zip_code">
                <?php if (isset($errors) && !empty($errors['zip_code'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['zip_code']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="coordonne">
            <label for="city">Ville</label>
            <input type="text" name="city" id="city" placeholder="Entrer une ville">
            <?php if (isset($errors) && !empty($errors['city'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['city']) ?></div>
            <?php endif; ?>
        </div>
        <div class="coordonne">
            <label for="email">Email</label>
            <input type="email" name="email_register" id="email_register" placeholder="">
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
        <input type="submit" class="button register-button" title="S'inscrire" name="form_inscribe_submit" value="S'inscrire"></input>
    </form>
</div>