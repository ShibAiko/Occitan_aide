<!------------------------------------ PHP ----------------------------------------->
<?php
session_start();
?>
<!------------------------------------ HTML ---------------------------------------->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/link.html" ?>
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
                    <!-- Script display_patientInfo.js -->
                </div>
                <div class="checkPills">
                    <h3>Prise de medicament</h3> <!-- l'image check change en fonction de l'état  -->
                    <p>Matin</p>
                    <img class="icon" src="assets/img/check.png" alt="">
                    <p>Midi</p>
                    <img class="icon" src="assets/img/nocheck.png" alt="">
                    <p>soir</p>
                    <img class="icon" src="assets/img/nocheck.png" alt="">
                </div>
                <div class="constantes">
                    <h3>Dernières constantes : 21/11/22 11:25</h3> <!-- l'heure change en fonction de la dernière mise à jour -->
                    <p><img class="icon" src="assets/img/bpm.png" alt=""></p>
                    <p>## bpm</p>
                    <p><img class="icon" src="assets/img/tension.png" alt=""></p>
                    <p>##mmHg</p>
                    <p><img class="icon" src="assets/img/oxy.png" alt=""></p>
                    <p>##%</p>
                    <P><img class="icon" src="assets/img/glycemie.png" alt=""></P>
                    <P>## g/l</P>
                </div>
            </div>
        </aside>
        <article id="notesContainer">
            <h3>Notes</h3>
            <hr>
            <section>
                <form action="../back/routes/addNotes.php" method="POST">
                    <label for="addNotes">Ajouter une note</label> <!-- La note s'ajoute avec la date du jour et le nom du profil de la personne qui l'écrit -->
                    <textarea id=addNotes name="addNotes" rows="5" cols="33"></textarea>
                    <input type="submit" value="Ajouter">
                </form>
                <div class="notes">

                    <!-- Script display_notes.js -->

                </div>
            </section>
        </article>
    </main>
    <!-- Footer -->
    <?php include "includes/footer.html" ?>
</body>image.png

</html>

<!------------------------------------ JS ----------------------------------------->
<script src="assets/js/displayDataUser.js"></script>
<script src="assets/js/displayNotes.js"></script>



