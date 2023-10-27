//supprimer commentaire
<?php
$bdd = new PDO('mysql:host=mysql-fabyjulien.alwaysdata.net;dbname=fabyjulien_curriculumvitae', '319891', 'alwaysdatastudi');
if (isset($_GET ['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupInfosForm = $bdd->prepare('SELECT * FROM contact WHERE id= ?');
    $recupInfosForm->execute(array($getid));
    if ($recupInfosForm->rowCount() >0){
        $deleteInfosForm = $bdd->prepare('DELETE FROM contact WHERE id = ?');
        $deleteInfosForm->execute(array($getid));
        header('location: infosFormulaire.php');
    }else{
        echo "aucun commentaire trouvé";
    }
}else{
    echo "Aucun identifiant trouvé";
}
?>
