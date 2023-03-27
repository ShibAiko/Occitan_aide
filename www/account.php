<!------------------------------------ PHP ----------------------------------------->
<?php session_start() ?>
<?php include "routes/connectBdd.php" ?>
<?php include "routes/getDataUser.php" ?>
<?php include "routes/getNotes.php" ?>

<!------------------------------------ HTML ---------------------------------------->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/styles.html" ?>
    <title>Page de <?= $_SESSION["prenom"] ?></title>
</head>

<body>
    <!-- Header -->
    <?php include "includes/header.php" ?>
    <!-- NavBar -->
    <nav>
        <ul>
            <li>Mon profil</li>
            <li>Constantes</li>
            <li>Intervenants</li>
            <li>Documents</li>
        </ul>
    </nav>
    <!-- Main -->
    <main>
        <aside>
            <div class="patientResume">
                <div class="patientInfo">

                </div>
                <div class="checkPills">
                    <h3>Prise de medicament</h3> <!-- l'image check change en fonction de l'état  -->
                    <p>Matin</p>
                    <img class="icon" src="img/check.png" alt="">
                    <p>Midi</p>
                    <img class="icon" src="img/nocheck.png" alt="">
                    <p>soir</p>
                    <img class="icon" src="img/nocheck.png" alt="">
                </div>
                <div class="constantes">
                    <h3>Dernières constantes : 21/11/22 11:25</h3> <!-- l'heure change en fonction de la dernière mise à jour -->
                    <p><img class="icon" src="img/bpm.png" alt=""></p>
                    <p>## bpm</p>
                    <p><img class="icon" src="img/tension.png" alt=""></p>
                    <p>##mmHg</p>
                    <p><img class="icon" src="img/oxy.png" alt=""></p>
                    <p>##%</p>
                    <P><img class="icon" src="img/glycemie.png" alt=""></P>
                    <P>## g/l</P>
                </div>
            </div>
        </aside>
        <article id="notesContainer">
            <h3>Notes</h3>
            <hr>
            <section>
                <form action="">
                    <label for="addNotes">Ajouter une note</label> <!-- La note s'ajoute avec la date du jour et le nom du profil de la personne qui l'écrit -->
                    <textarea id=addNotes rows="5" cols="33"></textarea>
                    <input type="submit">
                </form>
                <div class="notes">



                </div>
            </section>
        </article>
    </main>
    <!-- Footer -->
    <?php include "includes/footer.html" ?>
</body>

</html>

<!------------------------------------ JS ----------------------------------------->

<!-- Affichage des infos -->
<script>
    const patientResume = document.querySelector(".patientResume");
    const patientInfo = document.querySelector(".patientInfo");
    fetch("http://localhost:8888/Occitan_aide/www/routes/getDataUser.php")
        .then(function(response) {
            return response.json();
        })

        .then(function (dataUser){
            console.log(dataUser);
            patientInfo.innerHTML =`
            <img class="profilPic" src="img/profil1.png" alt="">
                    <h3>${dataUser["id_utilisateur"]}</h3>
                    <h3>${dataUser["prenom_utilisateur"]}</h3>
                    <a href=""><span class="material-symbols-outlined">call</span></a>    
            `; 
        }) 
</script>

<!-- Affichage des notes -->
<script>
    const divNotes = document.querySelector(".notes");

    fetch("http://localhost:8888/Occitna_aide/www/routes/getNotes.php")
        .then(function(response) {
            return response.json();
        })
        .then(function (displayNotes){
            displayNotes.forEach(function (displayNote){
                divNotes.innerHTML = `
                    <p>${displayNote.date_note}<span class="whoWrote">${displayNote.nom_utilisateur} ${displayNote.prenom_utilisateur}</span></p>
                    <p>${displayNote.contenu_note}</p>
                    <hr>
                `;
            })
        })
</script>