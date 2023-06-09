<?php 
session_start(); 
include "connectBdd.php"; 
header ('content-type:application/json');
//Récupération de l'ID de l'utilisateur connecté
$id = $_SESSION['id_utilisateur'];
if (isset($id)) {
    $dataUser = null;
    try {
        //Prepare
        $sql = "SELECT * FROM `utilisateurs` WHERE `utilisateurs`.`id_utilisateur` = :id ";
        $stmt = $bdd->prepare($sql);
        //BindParam
        $stmt->bindParam(":id", $id); //int
        //Execute
        $stmt->execute();
        // Fetch (récupère les infos de l'utilisateur qui s'est connecté correspondant a l'ID)
        $dataUser = $stmt->fetch();
        // Convertir le tableau associatif en JSON
        $jsonData = json_encode($dataUser);
        echo $jsonData;
    } catch (PDOException $e) {
        echo json_encode(['error' => "Erreur de base de données : " . $e->getMessage()]);
        exit();
    }
}
?>
