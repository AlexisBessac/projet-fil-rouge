<div class="container">
    <h1>S'inscrire</h1>
    <form action="" method="POST">
        <div class="form-row">
            <div class="form-group">
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" placeholder="Votre Prénom">
                <?php if (isset($errors) && !empty($errors['firstname'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['firstname']) ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname" placeholder="Votre nom">
                <?php if (isset($errors) && !empty($errors['lastname'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['lastname']) ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="phone_number">Téléphone</label>
                <input type="tel" name="phone_number" id="phone_number">
                <?php if (isset($errors) && !empty($errors['phone_number'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['phone_number']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="street_number">Numéro de la rue</label>
                <input type="text" name="street_number" id="street_number">
                <?php if (isset($errors) && !empty($errors['street_number'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['street_number']) ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="street">Voie</label>
                <input type="text" name="street" id="street" placeholder="Entrer le nom d'une rue">
                <?php if (isset($errors) && !empty($errors['street'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['street']) ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="zip_code">Code Postal</label>
                <input type="number" name="zip_code" id="zip_code">
                <?php if (isset($errors) && !empty($errors['zip_code'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['zip_code']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="city">Ville</label>
                <input type="text" name="city" id="city" placeholder="Entrer une ville">
                <?php if (isset($errors) && !empty($errors['city'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['city']) ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email_register" id="email_register" placeholder="">
                <?php if (isset($errors) && !empty($errors['email_register'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['email_register']) ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
                <?php if (isset($errors) && !empty($errors['password'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['password']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <input type="submit" class="button ajout-button" name="form_inscribe_submit" value="S'inscrire">
    </form>
</div>