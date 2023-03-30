<?php
 //Recupération de toutes les données de la BDD
$utilisateurs = null;
try {
    $stmt = $bdd->query("SELECT * FROM utilisateurs") ;
    $utilisateurs = $stmt->fetchAll();
} catch (PDOException $e) {
} 
?>
