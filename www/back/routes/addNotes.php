<?php
session_start();
include "connectBdd.php"; 

$date = new \DateTime();

$date_note = $date->format("Y-m-d H:i:s");
$contenu_note = $_POST["addNotes"];
$id_utilisateur = 1;
$id_auteur = $_SESSION['id_utilisateur'];           

$sql = "INSERT INTO `notes` (`id_note`, `date_note`, `contenu_note`, `id_utilisateur`, `id_auteur`) VALUES (NULL, :date_note, :contenu_note, :id_utilisateur, :id_auteur) ";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(":date_note", $date_note);
$stmt->bindParam(":contenu_note", $contenu_note);
$stmt->bindParam(":id_utilisateur", $id_utilisateur);
$stmt->bindParam(":id_auteur", $id_auteur);

if ($stmt->execute()) {
    echo "<script type='text/javascript'>
        alert('Note ajoutée avec succès!');
        </script>";
        header('Location: ../../front/account.php');
} else {
    echo "Erreur lors de l'ajout de la note: " . $stmt->errorInfo()[2];
}
