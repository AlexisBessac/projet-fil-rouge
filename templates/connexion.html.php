<div class="container">
    <h1>Se Connecter</h1>
    <form action="" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Ex. john.doe@domaine.com">
            <?php if(isset($errors) && !empty($errors['email'])) : ?>
                    <div class="ajout-error">
                        <?= $errors['email'] ?>
                    </div>
                <?php endif; ?>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
            <?php if(isset($errors) && !empty($errors['password'])) : ?>
                    <div class="ajout-error">
                        <?= $errors['password'] ?>
                    </div>
                <?php endif; ?>
        </div>
        <div>
            <button class="button">Mot de passe oublié</button>
        </div>
        <input name="form_login_submit" type="button" class="button" value="Se Connecter">
  </form>
</div>