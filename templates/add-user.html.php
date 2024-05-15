<div class="container">
    <h1>Ajout d'un utilisateur</h1>
    <a href="/?page=users"><button class="button">Annuler</button></a>
    <form action="/?page=add-users" method="POST" class="grid">
        <div>
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" placeholder="Votre Prénom">
        </div>
        <div>
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname" placeholder="Votre nom">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="phone_number">Téléphone</label>
            <input type="tel" name="phone_number" id="phone_number">
        </div>
        <div>
            <label for="adress">Adresse</label>
            <input type="text" name="adress" id="adress" placeholder="Entrer une adresse">
        </div>
        <div>
            <label for="zip_code">Code Postal</label>
            <input type="number" name="zip_code" id="zip_code">
        </div>
        <div>
            <label for="city">Ville</label>
            <input type="text" name="city" id="city" placeholder="Entrer une ville">
        </div>
    </form>
    <div>
        <button type="submit" class="button" name="add_user_submit">Ajouter</button>
    </div>
</div>