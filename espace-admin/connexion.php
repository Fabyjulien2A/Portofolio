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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Espace de connexion Admin</title>
</head>
<body>
<div class="container-fluid">
        <div>
            <form method="post" action="">
                <h2>Connexion</h2>
                <div class="mb-3">
                    <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" required autocomplete="off">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="valider" value="Se connecter">
                </div>
                <?php
                
                if (isset($error)) {
                    echo "<p class='text-danger'>$error</p>";
                }
                ?>
            </form>
            <a href="../index.php" class="btn btn-secondary">Retour site</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

