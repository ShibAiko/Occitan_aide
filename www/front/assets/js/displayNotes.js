/* Affichage des notes */

    const divNotes = document.querySelector(".notes");

    fetch("http://localhost:8888/Occitan_aide/www/back/routes/getNotes.php")
        .then(function(response) {
            return response.json();
        })
        .then(function (displayNotes){
            displayNotes.forEach(function (displayNote){
                divNotes.innerHTML += `
                    <p>${displayNote.date_note}<span class="whoWrote">${displayNote.nom_utilisateur} ${displayNote.prenom_utilisateur}</span><span class="material-symbols-outlined delete">
                    delete
                    </span></p>
                    <p class="textNote" >${displayNote.contenu_note}</p>
                    <hr>
                `;
            })
        })

        