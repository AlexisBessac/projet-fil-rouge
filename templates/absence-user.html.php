<div class="container">
    <h1>Mes absences</h1>
    <a href="/?page=dashboard"><button class="button" title="Revenir sur mon tableau de bord">Revenir sur mon tableau de bord</button></a> 
    <section>
        <div>
            <form action="" method="POST" class="form-absence">
                <div>
                    <label for="user_file">Parcourir</label>
                    <input type="file" name="user_file" id="user_file">
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

                </div>
                <div>
                    <button class="button reguster-buttonr" name="submit_form_upload" type="submit" title="Trasmettre mon absnce">Transmettre mon absence</button>
                </div>
            </form>
        </div>
    </section>
</div>