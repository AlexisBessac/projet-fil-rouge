<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? '' ?></title>
    <link rel="stylesheet" href="../public/assets//css/style.css">
</head>

<body>
    <main>
        <?php require '../templates/' . $page . '.html.php'; ?>
    </main>

    <script src="../public/assets/js/main.js"></script>
</body>

</html>