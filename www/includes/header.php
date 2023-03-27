<header>
    <img src="img/Occitanaide.png" alt="">
    <?php if (!isset($_SESSION)):?>
    <a href="logPage.php">Se connecter / S'inscrire <span class="material-symbols-outlined">account_circle</span></a>
    <?php else: ?>
    <a href="routes/logout.php">Se déconnecter <span class="material-symbols-outlined">account_circle</span></a>  
    <?php endif ?>
</header>