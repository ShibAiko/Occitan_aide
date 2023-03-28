/* Affichage des infos */

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
        
/* Si je fais à la ligne 7 un
return response ;
j'ai ça.  */

/* 
Response {type: 'basic', url: 'http://localhost:8888/Occitan_aide/www/routes/getDataUser.php', redirected: false, status: 200, ok: true, …}
body: (...)
bodyUsed: false
headers: Headers {}
ok: true
redirected: false
status: 200
statusText: "OK"
type: "basic"
url: "http://localhost:8888/Occitan_aide/www/routes/getDataUser.php"
[[Prototype]]: Response
 */