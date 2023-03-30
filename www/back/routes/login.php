<?php
// Connexion a la Bdd
include "connectBdd.php";
// Tableau pour stocker les erreurs
$response = array();
//Connexion à un compte ---------------- //
if (isset($_POST["logInSubmit"])) {
    session_start();
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
    $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
    //Vérifie si l'utilisateur existe et si le mot de passe correspond
    if($utilisateur === false OR $utilisateur === null OR !password_verify($password, $utilisateur['password_utilisateur'])){
        //Erreur utilisateur non trouvé
        $response["success"] = false;
        $response["message"] = "Email ou mot de passe incorrect";
    } else {

        $response["success"] = true;
        $response["message"] = "Connexion réussie";
        $response["data_user"] = $utilisateur;
    }
}
// Envoie la réponse sous forme de JSON
header('Content-Type: application/json');
echo json_encode($response);
?>