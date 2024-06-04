<div class="container">
    <h1>Modifier un utilisateur</h1>
    <a href="/?page=users"><button class="button cancel-button">Annuler</button></a>
    <form action="" method="POST">
        <div class=identite>
            <div>
                <label for="firstname">Prénom</label>
                <input type="text" name="['utilisateur']['prenom']" id="['utilisateur']['prenom']" placeholder="Votre Prénom">
                <?php if (isset($errors) && !empty($errors['utilisateur']['prenom'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['utilisateur']['prenom']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="lastname">Nom</label>
                <input type="text" name="['utilisateur']['nom']" id="['utilisateur']['nom']" placeholder="Votre nom">
                <?php if (isset($errors) && !empty($errors['utilisateur']['nom'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['utilisateur']['nom']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="coordonne">
            <label for="phone_number">Téléphone</label>
            <input type="tel" name="['utilisateur']['telephone']" id="['utilisateur']['telephone']r">
            <?php if (isset($errors) && !empty($errors['utilisateur']['telephone'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['utilisateur']['telephone']) ?></div>
            <?php endif; ?>
        </div>
        <div class="adresse-form">
            <div>
                <label for="street_number">Numéro de la rue</label>
                <input type="text" name="['utilisateur']['numero']" id="['utilisateur']['numero']">
                <?php if (isset($errors) && !empty($errors['utilisateur']['numero'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['utilisateur']['numero']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="street">Voie</label>
                <input type="text" name="['utilisateur']['rue']" id="['utilisateur']['rue']" placeholder="Entrer le nom d'une rue">
                <?php if (isset($errors) && !empty($errors['utilisateur']['rue'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['utilisateur']['rue']) ?></div>
                <?php endif; ?>
            </div>
            <div>
                <label for="zip_code">Code Postal</label>
                <input type="number" name="['utilisateur']['code_postal']" id="['utilisateur']['code_postal']">
                <?php if (isset($errors) && !empty($errors['utilisateur']['code_postal'])) : ?>
                    <div class="ajout-error"><?= htmlspecialchars($errors['utilisateur']['code_postal']) ?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="coordonne">
            <label for="city">Ville</label>
            <input type="text" name="['utilisateur']['ville']" id="['utilisateur']['ville']" placeholder="Entrer une ville">
            <?php if (isset($errors) && !empty($errors['utilisateur']['ville'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['utilisateur']['ville']) ?></div>
            <?php endif; ?>
        </div>
        <div class="coordonne">
            <label for="email">Email</label>
            <input type="email" name="['utilisateur']['email']" id="['utilisateur']['email']" placeholder="">
            <?php if (isset($errors) && !empty($errors['utilisateur']['email'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['utilisateur']['email']) ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="['utilisateur']['password']" id="['utilisateur']['password']">
            <?php if (isset($errors) && !empty($errors['utilisateur']['password'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['utilisateur']['password']) ?></div>
            <?php endif; ?>
        </div>
        <div class="role-utilisateur">
            <label for="role_id">Role de l'utilisateur</label>
            <?php foreach ($roles as $role) : ?>
                <?php $is_admin = trim(strtolower($role['nom_role'])) === 'administrateur'; ?>
                <div class="<?= $is_admin ? 'hidden' : '' ?>">
                    <label for="role_id_<?= htmlspecialchars($role['Id_role']) ?>"><?= htmlspecialchars($role['nom_role']) ?></label>
                    <input type="radio" name="['utilisateur']['role_Id']" id="['utilisateur']['role_Id'])" value="<?= htmlspecialchars($role['Id_role']) ?>">
                </div>
            <?php endforeach; ?>
            <?php if (isset($errors) && !empty($errors['role_id'])) : ?>
                <div class="ajout-error"><?= htmlspecialchars($errors['role_id']) ?></div>
            <?php endif; ?>
        </div>
        <input type="submit" class="button edit_user_button" title="Modifier un utilisateur" name="edit_user_submit" value="Modifier un utilisateur"></input>
    </form>
</div>