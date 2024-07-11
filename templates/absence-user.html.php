<div class="container">
    <h1>Déclarer une absence</h1>
    <a href="/?page=dashboard"><button class="button" title="Revenir sur mon tableau de bord">Revenir sur mon tableau de bord</button></a> 
    <section>
        <div>
            <form action="" method="POST" enctype="multipart/form-data" class="form-absence">
                <div>
                    <label for="justificatif_absence">Parcourir</label>
                    <input type="file" name="justificatif_absence" id="justificatif_absence">
                </div>
                <div>
                    <label for="absence-text">Motif de l'absence</label>
                    <input type="text" name="absence-text" id="absence-text" placeholder="Maladie">
                </div>
                <div>
                    <label for="date_debut_absence">Date du début de l'absence</label>
                    <input type="date" name="date_debut_absence" id="date_debut_absence">
                </div>
                <div>
                    <label for="date_debut_absence">Date de la fin de l'absence</label>
                    <input type="date" name="date_fin_absence" id="date_fin_absence">
                </div>
                <div class="dropzone">Où faites glisser vos documents ici</div>
                <div>
                    <button class="button reguster-buttonr" name="submit_form_absence" type="submit" title="Trasmettre mon absnce">Transmettre mon absence</button>
                </div>
            </form>
        </div>
    </section>
</div>