<article>
    <h3><!-- Titre de l'article --></h3>
    <hr>
    <section>
        <form>
            <label><!-- Label de la zone de texte --></label>
            <textarea><!-- Zone de texte a remplir par l'utilisateur --></textarea>
            <input><!-- Le bouton pour valider -->
        </form>
            <div>
                <p>
                    <!-- La date de la note, suivi du nom et prenom de l'auteur -->
                    <a><!-- Le lien de suppression --></a> 
                </p>
                <p>
                    <!-- Le contenu de la note -->
                </p>
                <hr>
            </div>
    </section>
</article>

<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
<article id="notesContainer">
    <h3>Notes</h3>
    <hr>
    <section>
        <form action="../back/routes/addNotes.php" method="POST">
            <label for="addNotes">Ajouter une note</label>
            <textarea id=addNotes name="addNotes" rows="5" cols="33"></textarea>
            <input type="submit" value="Ajouter">
        </form>
        <div class="notes">
            <p> <!-- daate de la note -->
                <span class="whoWrote"><!-- auteur de la note --></span>
            <a href= "../back/routes/deleteNotes.php?id=${displayNote.id_note}">
            <span class="material-symbols-outlined delete"></span></a>
            </p>
            <p class="textNote" ><!-- contenu de la note --></p>
            <hr>
        </div>
    </section>
</article>

<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
<article id="notesContainer">
    <h3>Notes</h3>
    <hr>
    <section>
        <form action="../back/routes/addNotes.php" method="POST">
            <label for="addNotes">Ajouter une note</label>
            <textarea id=addNotes name="addNotes" rows="5" cols="33"></textarea>
            <input type="submit" value="Ajouter">
        </form>
        <div class="notes">
            <p>${displayNote.date_note}<span class="whoWrote">${displayNote.nom_utilisateur} ${displayNote.prenom_utilisateur}</span>
            <a href= "../back/routes/deleteNotes.php?id=${displayNote.id_note}"><span class="material-symbols-outlined delete"></span></a>
            </p>
            <p class="textNote" >${displayNote.contenu_note}</p>
            <hr>
        </div>
    </section>
</article>