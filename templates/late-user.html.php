<div class="container">
    <h1>Déclarer un retard</h1>
    <a href="/?page=dashboard"><button class="button" title="Revenir sur mon tableau de bord">Revenir sur mon tableau de bord</button></a>
    <section>
        <div>
            <form action="" method="POST" enctype="multipart/form-data" class="form-absence">
                <div>
                    <label for="user_file">Parcourir</label>
                    <input type="file" name="user_file" id="user_file">
                </div>
                <div>
                    <label for="late-text">Motif du retard</label>
                    <input type="text" name="late-text" id="late-text" placeholder="Ex. Maladie">
                </div>
                <div>
                    <label for="date_retard">Date du retard</label>
                    <input type="date" name="date_retard" id="date_retard">
                </div>
                <div class="dropzone">Où faites glisser vos documents ici</div>
                <div>
                    <button class="button reguster-buttonr" name="submit_form_late" type="submit" title="Trasmettre mon retard">Transmettre mon retard</button>
                </div>
            </form>
        </div>
    </section>
</div>