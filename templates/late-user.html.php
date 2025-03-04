<section class="container py-5">
    <h1 class="text-center my-4">Déclarer un retard</h1>
    <div class="my-4">
        <a href="/?page=dashboard"><button class="button" title="Revenir sur mon tableau de bord">Revenir sur mon tableau de bord</button></a>
    </div>
    <section class="my-4 d-flex flex-column align-items-center">
        <div>
            <form action="" method="POST" enctype="multipart/form-data" class="form-absence">
                <div class="form-group mb-3">
                    <label for="justificatif_retard" class="form-label">Parcourir</label>
                    <input type="file" class="form-control" name="justificatif_retard" id="justificatif_retard" required>
                </div>
                <div class="form-group mb-3">
                    <label for="late-text" class="form-label">Motif du retard</label>
                    <input type="text" class="form-control" name="late-text" id="late-text" placeholder="Ex. Maladie" required>
                </div>
                <div class="form-group mb-3">
                    <label for="duree_retard" class="form-label">Durée du retard</label>
                    <input type="time" class="form-control" name="duree_retard" id="duree_retard" placeholder="Ex. 15 minutes" required>
                </div>
                <div class="form-group mb-3">
                    <label for="date_retard" class="form-label">Date du retard</label>
                    <input type="date" class="form-control" name="date_retard" id="date_retard" required>
                </div>
                <div class="form-group mb-3">
                    <button class="button register-button" name="submit_form_late" type="submit" title="Transmettre mon retard">Transmettre mon retard</button>
                </div>
            </form>
        </div>
    </section>
</section>