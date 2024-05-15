<div class="container">
    <h1>Ajouter un utilisateur</h1>
    <a href="/?page=users"><button class="button cancel-button">Annuler</button></a>
    <form action="/?page=add-user" method="POST">
        <div>
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" placeholder="Votre Prénom">
            <?php if (isset($errors) && !empty($errors['firstname'])) : ?>
                <div class="ajout-error"><?= $errors['firstname'] ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname" placeholder="Votre nom">
            <?php if (isset($errors) && !empty($errors['lastname'])) : ?>
                <div class="ajout-error"><?= $errors['lastname'] ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="">
            <?php if (isset($errors) && !empty($errors['email'])) : ?>
                <div class="ajout-error"><?= $errors['email'] ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <?php if (isset($errors) && !empty($errors['password'])) : ?>
                <div class="ajout-error"><?= $errors['password'] ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="phone_number">Téléphone</label>
            <input type="tel" name="phone_number" id="phone_number">
            <?php if (isset($errors) && !empty($errors['phone_number'])) : ?>
                <div class="ajout-error"><?= $errors['phone_number'] ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="street_number">Numéro</label>
            <input type="text" name="street_number" id="street_number">
            <?php if (isset($errors) && !empty($errors['street_number'])) : ?>
                <div class="ajout-error"><?= $errors['street_number'] ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="street">Rue</label>
            <input type="text" name="street" id="street" placeholder="Entrer le nom d'une rue">
            <?php if (isset($errors) && !empty($errors['street'])) : ?>
                <div class="ajout-error"><?= $errors['street'] ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="zip_code">Code Postal</label>
            <input type="number" name="zip_code" id="zip_code">
            <?php if (isset($errors) && !empty($errors['zip_code'])) : ?>
                <div class="ajout-error"><?= $errors['zip_code'] ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="city">Ville</label>
            <input type="text" name="city" id="city" placeholder="Entrer une ville">
            <?php if (isset($errors) && !empty($errors['city'])) : ?>
                <div class="ajout-error"><?= $errors['city'] ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="role_id">Rôle de l'utilisateur</label>
            <input type="number" name="role_id" id="role_id">
            <?php if (isset($errors) && !empty($errors['role_id'])) : ?>
                <div class="ajout-error"><?= $errors['role_id'] ?></div>
            <?php endif; ?>
        </div>
        <input type="submit" class="button ajout-button" name="add_user_submit" value="Ajouter"></input>
    </form>
</div>