<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="assets/styles/media.css">
    <title>Occitan Aide</title>
</head>
<body>
    <!-- Header -->
    <header>
        <img src="assets/img/Occitanaide.png" alt="">
        <?php if (!isset($_SESSION)):?>
        <button id="logBtn">Se connecter / S'inscrire <span class="material-symbols-outlined">account_circle</span></button>
        <?php else: ?>
        <a href="routes/logout.php">Se déconnecter <span class="material-symbols-outlined">account_circle</span></a>  
        <?php endif ?>
    </header>
    <main>
        <div class="content">

        </div>
    </main>
    <!-- Footer -->
    <footer>
        <p>© 2023 by shibaiko. created for my IT school project.</p>
    </footer>
</body>
</html>

<!-- Javascript -->
<script src="assets/js/loginRegister.js"></script>