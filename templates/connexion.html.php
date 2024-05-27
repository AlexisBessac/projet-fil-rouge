<div class="container">
    <h1>Se Connecter</h1>
    <form action="" method="POST" class="form-login">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="john.doe@domaine.com">
            <?php if (isset($errors) && !empty($errors['email'])) : ?>
                <div class="ajout-error">
                    <?= htmlspecialchars($errors['email']) ?>
                </div>
            <?php endif; ?>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <?php if (isset($errors) && !empty($errors['password'])) : ?>
                <div class="ajout-error">
                    <?= htmlspecialchars($errors['password']) ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="container_button">
            <input name="form_login" type="button" class="button login_button" title="Se Connecter" value="Se Connecter">
            <button type="button" class="button login_button" title="Mot de passe oublié">Mot de passe oublié</button>
        </div>
    </form>
</div>