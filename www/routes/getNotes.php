
<?php
/* //Récupération de l'ID de l'utilisateur'
$id = $_SESSION['id_utilisateur'];
if (isset($id)) {
    //Prepare
    $sql = "SELECT * FROM `notes` WHERE `notes`.`id_utilisateur` =:id ";
    $stmt = $bdd->prepare($sql);
    //BindParam
    $stmt->bindParam(":id", $id); //int
    //Execute
    $stmt->execute();
    // Fetch (récupère )
    $notes = $stmt->fetchall();
}
 */
?>
<?php

$id = $_SESSION['id_utilisateur'];

if (isset($id)) {
    $notes = null;

    try {
        $stmt = $bdd->query("SELECT * FROM `notes` WHERE `notes`.`id_utilisateur` =:id , utilisateurs.nom_utilisateur, utilisateurs.prenom_utilisateur 
                        FROM notes
                        INNER JOIN utilisateurs ON notes.id_auteur = utilisateurs.id_utilisateur
                        ");
        $stmt = $bdd->prepare($sql);
        //BindParam
        $stmt->bindParam(":id", $id); //int
        //Execute
        $stmt->execute();
        // Fetch (récupère )
        $notes = $stmt->fetchall();
        
    } catch (PDOException $e) {
    }
}
?>