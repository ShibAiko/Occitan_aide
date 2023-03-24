<!------------------------------------ PHP ----------------------------------------->
<?php include "routes/connectBdd.php"?>
<?php session_start() ?>
<!------------------------------------ HTML ---------------------------------------->
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="styles/style.css">
    <title>Account de <?=$_SESSION["prenom"]?></title>
</head>
<body>
    <!-- Header -->
    <?php include "includes/header.html"?>
    <main>
    <?php
    print_r($_SESSION);
    ?>
    </main>
    <!-- Footer -->
    <?php include "includes/footer.html" ?>
</body>
</html>

<!------------------------------------ JS ----------------------------------------->
