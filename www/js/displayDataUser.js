/* Affichage des infos */

const patientInfo = document.querySelector(".patientInfo");

    fetch("http://localhost:8888/Occitan_aide/www/routes/getDataUser.php")
        .then(function(response) {
            return response.json();
        })

        .then(function (dataUser){
            patientInfo.innerHTML =`
            <img class="profilPic" src="img/profil1.png" alt="">
                    <h3>${dataUser["nom_utilisateur"]}</h3>
                    <h3>${dataUser["prenom_utilisateur"]}</h3>
                    <a href=""><span class="material-symbols-outlined">call</span></a>    
            `; 
        })
        .catch((error) => {
            console.error("There was a problem fetching the data:", error);
        });