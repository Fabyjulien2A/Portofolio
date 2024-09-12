<?php
session_start();
if (!$_SESSION['mdp']){
    header('location: connexion.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="body-admin">
    <div class="container-fluid">
    <h1 class="text-center mt-4">Mon espace</h1>
    <br>
        <div class="row justify-content-center">
            <div class="col-md-6">
            <a href="../formulaireContact/infosFormulaire.php"><button class="btn btn-primary btn-block mb-3">Mes messages</button></a>
            </div>

            <div class="row justify-content-center">
            <div class="col-md-6 mt-3">
                <a href="../espace-admin/deconnexion.php" class="btn btn-danger btn-block">Déconnexion</a>
            </div>

        </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>