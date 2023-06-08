<?php
session_start(); 
include "connectBdd.php"; 
header ('content-type:application/json');
//Récupération de l'ID de l'utilisateur connecté
$id = $_SESSION['id_utilisateur'];
if (isset($id)) {
    try {
        $sql = "SELECT notes.id_note, notes.date_note, notes.contenu_note, notes.id_utilisateur, notes.id_auteur , utilisateurs.nom_utilisateur, utilisateurs.prenom_utilisateur 
            FROM notes
            INNER JOIN utilisateurs ON notes.id_auteur = utilisateurs.id_utilisateur
            WHERE notes.id_utilisateur = :id
            ORDER BY notes.id_note DESC";
        $stmt = $bdd->prepare($sql);
        //BindParam
        $stmt->bindParam(":id", $id); //int
        //Execute
        $stmt->execute();
        // Fetch (récupère )
        $notes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($notes);
    } catch (PDOException $e) {
        echo json_encode(['error' => "Erreur de base de données : " . $e->getMessage()]);
        exit();
    }
}
