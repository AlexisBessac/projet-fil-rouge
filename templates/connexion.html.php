<section class="container py-5">
    <h1 class="text-center my-4">Se Connecter</h1>
    <form action="" method="POST" class="my-4 d-flex flex-column align-items-center">
        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Ex. john.doe@domaine.com" required>
            <?php if (isset($errors) && !empty($errors['email'])) : ?>
                <div class="ajout-error">
                    <?= htmlspecialchars($errors['email']) ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" required>
            <?php if (isset($errors) && !empty($errors['password'])) : ?>
                <div class="ajout-error">
                    <?= htmlspecialchars($errors['password']) ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="container_button">
            <input type="submit" name="form_login" class="button login_button" title="Se Connecter" value="Se Connecter">
            <button type="button" class="button login_button" title="Mot de passe oublié">Mot de passe oublié</button>
        </div>
    </form>
</section>