<?php
session_start();
if (isset($_POST['valider'])){
    if (!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "admin" ;
        $mdp_par_defaut = "admin1234" ;

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if ($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
        $_SESSION['mdp'] = $mdp_saisi;
        header('location:espace_admin.php');
        }else{
            echo "Votre mot de passe ou pseudo est incorrect";
        }

    }else{
        echo "Veuillez completer tous les champs...";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Espace de connexion Admin</title>
</head>
<body>
<form method="post" action="" align="center">
    <input type="text" name="pseudo" autocomplete="off">
    <br>
    <input type="password" name="mdp">
    <br><br>
    <input type="submit" name="valider">

</form>

</body>
</html>

