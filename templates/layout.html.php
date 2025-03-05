<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? '' ?></title>
    <meta name="description" content="<?= $description ?? '' ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" href="../assets/image/logo.svg">
</head>

<body>
    <header class="header py-3"> 
        <div class="logo">
            <img src="../assets/image/logo.svg" alt="Logo de Formul'Air">
        </div>
    </header>
    <main>
        <?php require '../templates/' . $page . '.html.php'; ?>
    </main>
    
    <footer class="py-3">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <img src="../assets/image/logo.svg" alt="logo de Formul'Air">
                </div>
            </div>
            <div class="col-md-4 py-2">
                <p>
                    Page de Confidentialité
                </p>
                <p>
                    Mentions légales
                </p>
            </div>
            <div class="col-md-4 py-2">
                <p>
                    Tous Droits Réservés
                </p>
                <p>
                    Alexis Bessac 2024
                </p>
            </div>
        </div>
    </footer>

    <script src="../assets/js/main.js"></script>
</body>

</html>