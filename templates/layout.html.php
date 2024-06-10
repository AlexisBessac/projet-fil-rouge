<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? '' ?></title>
    <meta name="description" content="<?= $description ?? '' ?>">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header"> 
        <div class="logo">
            <img src="" alt="Logo de Formul'Air">
        </div>
    </header>
    <main>
        <?php require '../templates/' . $page . '.html.php'; ?>
    </main>
    
    <footer class="footer">
        <div class="grid">
            <div>
                <img src="" alt="logo de Formul'Air">
            </div>
            <div class="legals">
                <p>Page de confidentialité</p>
                <p>Mentions légales</p>
            </div>
            <div class="copyrights">
                <p>Tous Droits Réservés</p>
                <p>Alexis Bessac 2024</p>
            </div>
        </div>
    </footer>

    <script src="../assets/js/main.js"></script>
</body>

</html>