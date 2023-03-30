<!------------------------------------ PHP ----------------------------------------->
<?php include "routes/connectBdd.php"?>
<?php include "routes/login.php"?>
<?php include "routes/register.php"?>
<!------------------------------------ HTML ---------------------------------------->
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/styles.html" ?>
    <title>Page de connexion</title>
</head>
<body>
    <!-- Header -->
    <?php include "includes/header.php"?>
    <a href="index.php"><span class="material-symbols-outlined">arrow_back</span></a>
    <main class="mainForm">
        <div class="formulaire">
            <h2>CONNEXION / INSCRIPTION</h2>
            <div class="form login_form">
                <form  method="POST" >
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
                    <button class="register_link">Créer un compte</button>
                </div>
            </div>
            <div class="form register_form hidden">
                <form method="POST">
                    <fieldset>
                        <legend>Adresse email</legend>
                        <input type="email" name="email" placeholder="Exemple : adresse@gmail.fr" required="">
                    </fieldset>
                    <fieldset>
                        <legend>Nom</legend>
                        <input type="text" name="nom" placeholder="Nom" required="">
                    </fieldset>
                    <fieldset>
                        <legend>Prénom</legend>
                        <input type="text" name="prenom" placeholder="Prénom" required="">
                    </fieldset>
                    <fieldset>
                        <legend>Je suis :</legend>
                        <div class="radio">
                        <input type="radio" name="type" value="2" >
                        <label for="patient">Patient</label>
                        <input type="radio" name="type" value="3" >
                        <label for="aidant">Aidant</label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Mot de passe</legend>
                        <input type="password" name="password" placeholder="une maj / une min / 1 chiffre" required="">
                    </fieldset>
                    <fieldset>
                        <legend>Confirmer mot de passe</legend>
                        <input type="password" name="password_verif" placeholder="confirmez le mot depasse" required="">
                    </fieldset>
                    <br>
                        <button type="submit" name="registerSubmit">JE M'INSCRIS</button>
                </form>
                <div class="form_bottom">
                    <button class="login_link">J'ai déja un compte</button>
                </div>
            </div>

        </div>
    </main>
    <!-- Footer -->
    <?php include "includes/footer.html" ?>
</body>
</html>

<!------------------------------------ JS ----------------------------------------->
<script src="assets/js/loginRegister.js"></script>