<?php
session_start();
include "connectBdd.php"; 

$date = new \DateTime();

$date_note = $date->format("Y-m-d H:i:s");
$contenu_note = $_POST["addNotes"];
$utilisateur_concerne = 1;
$auteur_note = $_SESSION['id_utilisateur'];           

$sql = "INSERT INTO `notes` (`id_note`, `date_note`, `contenu_note`, `utilisateur_concerne`, `auteur_note`) VALUES (NULL, :date_note, :contenu_note, :utilisateur_concerne, :auteur_note) ";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(":date_note", $date_note);
$stmt->bindParam(":contenu_note", $contenu_note);
$stmt->bindParam(":utilisateur_concerne", $utilisateur_concerne);
$stmt->bindParam(":auteur_note", $auteur_note);

if ($stmt->execute()) {
    echo "<script type='text/javascript'>
        alert('Note ajoutée avec succès!');
        </script>";
        header('Location: ../../front/account.php');
} else {
    echo "Erreur lors de l'ajout de la note: " . $stmt->errorInfo()[2];
}

