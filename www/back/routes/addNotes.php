<?php
session_start();
include "connectBdd.php";

if (!empty($_POST["addNotes"])) {
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
        echo "<script>
            alert('Note ajoutée avec succès!');
            window.location.href = '../../front/account.php';
            </script>";
        exit();
    } else {
        echo "<script type='text/javascript'>
        alert('Erreur lors de l\'ajout de la note: " . $stmt->errorInfo()[2] . "');
        window.history.back();
        </script>";
    exit();
    }
} else {
    echo "<script>
        alert('Le champ de texte est vide. La note n\'a pas été ajoutée.');
        window.history.back();
        </script>";
    exit();
}
