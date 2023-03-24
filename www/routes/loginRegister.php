<?php
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
//

//Connexion à un compte ---------------- //
if (isset($_POST["logInSubmit"])) {

    //récupère du formulaire
    $email = $_POST["email"];       //text
    $password = $_POST["password"]; //text
    //prepare
    $sql = "SELECT * FROM utilisateurs WHERE mail_utilisateur = :email";
    $stmt = $bdd->prepare($sql);
    //bindParam
    $stmt->bindParam(':email', $email);
    //execute
    $stmt->execute();
    //récupère de la BDD
    $utilisateur = $stmt->fetch();
    //Vérifie si l'utilisateur existe et si le mot de passe correspond
    if($utilisateur === false OR $utilisateur === null OR !password_verify($password, $utilisateur['password_utilisateur'])){
        //Erreur utilisateur non trouvé
        $registerError['loginError'] = true;
    } else {
        //stocke les données utilisateur 
        $_SESSION['id_utilisateur'] = $utilisateur['id_utilisateur'];
        $_SESSION['type_utilisateur'] = $user['id_type_utilisateur'];
        $_SESSION['prenom'] = $user['prenom_utilisateur'];
        //Quitte et redirige vers la page account.php
        header('Location: account.php');
        exit;
    }
}
?>