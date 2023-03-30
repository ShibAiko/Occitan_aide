<?php
// Connexion a la Bdd
include "connectBdd.php";
//Création de compte ------------------- //
if (isset($_POST["registerSubmit"])) {

    //Test si les password correspondent-//
    if ($_POST["password"] != $_POST["password_verif"]) {
        $registerError["password"] = true;
    }
    //Test s'il n'y a pas d'erreurs
    if (!isset($registerError)) {
        //récupère
        $email = $_POST["email"];                             //text
        $password = $_POST["password"];                       //text
        $nom = $_POST["nom"];                                 //text
        $prenom = $_POST["prenom"];                           //text
        $type_utilisateur = $_POST["type"];                   //int
        $hash = password_hash($password, PASSWORD_DEFAULT);   //text
        //prepare
        $sql = "INSERT INTO `utilisateurs` (`id_utilisateur`, `mail_utilisateur`, `password_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `id_type_utilisateur`) VALUES (NULL, :email, :password, :nom, :prenom, :type_utilisateur) ";
        $stmt = $bdd->prepare($sql);
        //bindParam
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $hash);
        $stmt->bindParam(":nom", $nom);
        $stmt->bindParam(":prenom",$prenom);
        $stmt->bindParam(":type_utilisateur", $type_utilisateur);
        //execute
        $stmt->execute();
        echo "<script>alert(\"Compte bien enregistré !\")</script>";
    }
}
?>