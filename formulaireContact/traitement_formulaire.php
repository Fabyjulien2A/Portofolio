<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nom"];
    $firstName = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validation des données (vous devez ajouter la validation nécessaire ici)

    // Connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=mysql-fabyjulien.alwaysdata.net;dbname=fabyjulien_curriculumvitae', '319891', 'alwaysdatastudi');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activation de la gestion des erreurs
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }

    // Préparer la requête SQL d'insertion
    $insertionSQL = "INSERT INTO contact (nom, prenom, email, message) VALUES (?, ?, ?, ?)";
    
    // Exécuter la requête SQL
    try {
        $insererContactForm = $bdd->prepare($insertionSQL);
        $insererContactForm->execute([$name, $firstName, $email, $message]);
        // Redirigez vers une page de confirmation ou affichez un message de confirmation ici
        header("Location: confirmation_formulaire.php");
        exit;
    } catch (PDOException $e) {
        echo "Erreur d'insertion : " . $e->getMessage();
    }
}


?>


