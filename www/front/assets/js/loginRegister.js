/* Affiche le formulaire de connexion/inscription*/

//récupère le main et le bouton de connexion
const main = document.querySelector("main");
const logBtn = document.querySelector("#logBtn")
//écoute le bouton de connexion pour afficher le formulaire
logBtn.addEventListener("click", () => {
    main.innerHTML = `
        <div class="formulaire">
        <h2>CONNEXION / INSCRIPTION</h2>
        <div class="form login_form">
            <form  method="POST" action="../back/routes/login.php">
                <fieldset>
                    <legend>Adresse email</legend>
                    <input type="email" name="email" placeholder="Exemple : adresse@gmail.fr" required="">
                </fieldset>
                <fieldset>
                    <legend>Mot de passe</legend>
                    <input type="password" name="password" placeholder="Mot de passe">
                </fieldset>
                <br>
                    <button id="loginBtn" type="submit" name="logInSubmit">JE ME CONNECTE</button>
            </form>
            <div class="form_bottom">
                <button class="register_link">Créer un compte</button>
            </div>
        </div>
        <div class="form register_form hidden">
            <form method="POST" action="../back/routes/register.php" >
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
                    <button id="registerBtn" type="submit" name="registerSubmit">JE M'INSCRIS</button>
            </form>
            <div class="form_bottom">
                <button class="login_link">J'ai déja un compte</button>
            </div>
        </div>
    </div>
        `;
// récupère les deux forulaire et le bouton pour switcher la classe ".hidden" de l'un ou l'autre
    const register_link = document.querySelector(".register_link");
    const login_link = document.querySelector(".login_link");
    const login_form = document.querySelector(".login_form");
    const register_form = document.querySelector(".register_form");

    register_link.addEventListener("click", () => {
        register_form.classList.toggle("hidden");
        login_form.classList.toggle("hidden");
    });
    
    login_link.addEventListener("click", () => {
        register_form.classList.toggle("hidden");
        login_form.classList.toggle("hidden");
    });

})


