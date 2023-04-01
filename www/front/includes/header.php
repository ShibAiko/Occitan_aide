<!-- Header
//Img pour le logo
//Bouton de connexion/déconnexion qui switch si l'utilisateur est connecté ou non -->
<header>
<img src="assets/img/Occitanaide.png" alt="">
<?php if (!isset($_SESSION)) : ?>
    <button id="logBtn">Se connecter / S'inscrire <span class="material-symbols-outlined">account_circle</span></button>
<?php else : ?>
    <a href="../back/routes/logout.php">Se déconnecter <span class="material-symbols-outlined">account_circle</span></a>
<?php endif ?>
</header>