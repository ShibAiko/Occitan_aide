<?php
session_start(); 
include "connectBdd.php"; 
header ('content-type:application/json');
//Récupération de l'ID de l'utilisateur connecté
$id = $_SESSION['id_utilisateur'];
if (isset($id)) {
    try {
        $sql = "SELECT intervenants.id_intervenant, intervenants.nom_intervenant, intervenants.prenom_intervenant, intervenants.tel_intervenant, intervenants.mail_intervenant, intervenants.is_principal, intervenants.id_utilisateur, intervenants.fonction
        FROM intervenants
        INNER JOIN utilisateurs ON intervenants.id_utilisateur = utilisateurs.id_utilisateur
        WHERE intervenants.id_utilisateur = :id";
        $stmt = $bdd->prepare($sql);
        //BindParam
        $stmt->bindParam(":id", $id); //int
        //Execute
        $stmt->execute();
        // Fetch (récupère )
        $intervenants = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($intervenants);
    } catch (PDOException $e) {
        echo json_encode(['error' => "Erreur de base de données : " . $e->getMessage()]);
        exit();
    }
}
?>
