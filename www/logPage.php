<!------------------------------------ PHP ----------------------------------------->
<?php include "routes/connectBdd.php"?>
<?php include "routes/loginRegister.php"?>

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
    <title>logPage</title>
</head>
<body>
    <!-- Header -->
    <?php include "includes/header.html"?>
    <main>
        <div class="formulaire">
            <h2>CONNEXION / INSCRIPTION</h2>
            <div class="form_content">
                <form action="" method="POST">
                    <fieldset>
                        <legend>Adresse email</legend>
                        <input type="email" name="email" placeholder="Exemple : adresse@gmail.fr" required="">
                    </fieldset>

                    <fieldset>
                        <legend>Mot de passe</legend>
                        <input type="password" name="password" placeholder="Mot de passe">
                    </fieldset>
                    <br>
                        <button type="submit" name="logInSubmit">JE ME CONNECTE</button>
                </form>
                <div class="form_bottom">
                    <button class="forget">Mot de passe oublié</button>
                    <button class="register_link">Créer un compte</button>
                </div>
            </div>  
        </div>
    </main>
    <!-- Footer -->
    <?php include "includes/footer.html" ?>
</body>
</html>

<!------------------------------------ JS ----------------------------------------->
<script src="js/login_register.js"></script>