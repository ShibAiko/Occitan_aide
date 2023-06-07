/* Affichage des contacts */

    const divIntervenants = document.querySelector(".contactList");

    fetch("http://localhost:8888/Occitan_aide/www/back/routes/getIntervenants.php")
        .then(function(response) {
            return response.json();
        })
        .then(function (displayIntervenants){
            displayIntervenants.forEach(function (displayIntervenant){
                divIntervenants.innerHTML += `
                <p>${displayIntervenant.fonction}_ <span class="contactName">${displayIntervenant.nom_intervenant} ${displayIntervenant.prenom_intervenant}</span></p>
                `;
            })
        })
