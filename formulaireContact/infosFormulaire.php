<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Commentaires</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4">Informations formulaire de contact</h1>  
    </div>

    <div class="container">
        <?php
        $bdd = new PDO('mysql:host=mysql-fabyjulien.alwaysdata.net;dbname=fabyjulien_portfolio', '319891_faby', 'alwaysdatastudi');
        $recupInfosForm = $bdd->query('SELECT * FROM users');
        while ($infosForm = $recupInfosForm->fetch()) {
        ?>
            <div class="contact">
                <div class="contact-body">
                    <h5 class="contact-name"><?= $infosForm['nom']; ?></h5>
                    <p class="contact-firstName"><?= $infosForm['prenom']; ?></p>
                    <p class="contact-email"><?= $infosForm['email']; ?></p>
                    <p class="contact-message"><?= $infosForm['message']; ?></p>
                    <a href="supprimerInfosFormulaire.php?id=<?= $infosForm['id']; ?>" class="supprimer-commentaire">Supprimer le commentaire</a>
                </div>
            </div>
            <br>
        <?php
        }
        ?>
    </div>
    <br>
        <a href="../espace-admin/espace_admin.php"><button class="mon-espace">Mon espace</button></a>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
