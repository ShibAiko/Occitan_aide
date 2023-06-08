
<?php
session_start();
include "connectBdd.php";

if(isset($_GET['id'])) {
    $id_note = $_GET['id'];
    $id_utilisateur = $_SESSION['id_utilisateur'];

    /* Supprimer la note de la base de données */
    $sql = "DELETE FROM `notes` WHERE `notes`.`id_note` = :id_note AND `notes`.`id_auteur` = :id_utilisateur";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(":id_note", $id_note);
    $stmt->bindParam(":id_utilisateur", $id_utilisateur);
    
    if ($stmt->execute()) {
        echo "<script type='text/javascript'>
            alert('Note supprimée avec succès!');
            </script>";
        header('Location: ../../front/account.php');
    } else {
        echo "Erreur lors de la suppression de la note: " . $stmt->errorInfo()[2];
    }
}

?>
