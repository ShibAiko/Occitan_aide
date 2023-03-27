<?php
//Récupération de l'ID de l'utilisateur connecté
$id = $_SESSION['id_utilisateur'];
if (isset($id)) {
    $dataUser = null;
    try {
        //Prepare
        $sql = "SELECT * FROM `utilisateurs`WHERE `utilisateurs`.`id_utilisateur` =:id ";
        $stmt = $bdd->prepare($sql);
        //BindParam
        $stmt->bindParam(":id", $id); //int
        //Execute
        $stmt->execute();
        // Fetch (récupère les infos de l'utilisateur qui s'est connecté correspondant a l'ID)
        $dataUser = $stmt->fetch();
        
    } catch (PDOException $e) {
    }
}
?>

<!-- Si je fais un 

echo json_encode($dataUser);

J'ai ça en retour -->

<!-- 
    {"id_utilisateur":"1",
        "0":"1",
        "mail_utilisateur":"rk@patient.fr",
        "1":"rk@patient.fr",
        "password_utilisateur":"$2y$10$ZEcV19SJucKL1vbYJw2d1OTzCp.eUIJ2pyMndyMDuFLRwnvV2A5h.",
        "2":"$2y$10$ZEcV19SJucKL1vbYJw2d1OTzCp.eUIJ2pyMndyMDuFLRwnvV2A5h.",
        "nom_utilisateur":"Kikoul",
        "3":"Kikoul",
        "prenom_utilisateur":"Ren\u00e9",
        "4":"Ren\u00e9",
        "tel_utilisateur":null,
        "5":null,
        "id_type_utilisateur":"2",
        "6":"2"
    }

 -->