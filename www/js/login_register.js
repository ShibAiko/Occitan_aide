const register_link = document.querySelector(".register_link");
const login_link = document.querySelector(".login_link");
const form_content = document.querySelector(".form_content");

    register_link.addEventListener("click", ()=>{
        form_content.innerHTML=`
        <form action="" method="POST">
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
                        <label for"patient">Patient</label>
                        <input type="radio" name="type" value="3" >
                        <label for"aidant">Aidant</label>
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
                        <button type="submit" name="registerSubmit">JE M'INSCRIT</button>
                </form>
                <div class="form_bottom">
                    <button class="login_link">J'ai déja un compte</button>
                </div>
        `;
    });

    login_link.addEventListener("click", ()=>{
        form_content.innerHTML=`
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
        `;
    });
