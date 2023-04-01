/* Affichage des infos */
const patientInfo = document.querySelector(".patientInfo");

fetch("http://localhost:8888/Occitan_aide/www/back/routes/getDataUser.php")
    .then(function (response) {
        return response.json();
    })
    .then(function (dataUser) {
        patientInfo.innerHTML = `
            <img class="profilPic" src="assets/img/profile-boy-icon.svg" alt="">
                    <h3>${dataUser["nom_utilisateur"]}</h3>
                    <h3>${dataUser["prenom_utilisateur"]}</h3>
                    <a href="${dataUser["tel_utilisateur"]}"><span class="material-symbols-outlined">call</span></a>    
            `;
    })
    .catch((error) => {
        console.error("There was a problem fetching the data:", error);
    });
