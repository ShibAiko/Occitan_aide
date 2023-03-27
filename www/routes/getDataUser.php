
<?php
//Récupération de l'ID de l'utilisateur'
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

/*         echo json_encode($dataUser); */

    } catch (PDOException $e) {
    }
}
?>
