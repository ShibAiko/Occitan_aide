<?php
// Connexion à la Bdd
include "connectBdd.php";
session_start();
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
        header('Location: ../../front/account.php');
        exit;
    }
}
