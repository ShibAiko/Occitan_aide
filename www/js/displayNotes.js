/* Affichage des notes */

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
