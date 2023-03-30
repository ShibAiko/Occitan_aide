<?php
//Connexion à la BDD ---------------------//
$username = "admin";
$pass = "pass";
$bdd = null;
try {
    $bdd =  new PDO("mysql:host=localhost;dbname=occitanaide", $username, $pass);
} catch (PDOException $error) {
    echo "Erreur lors de la connexion à la BDD";
}
?>