<?php
session_start();
$bdd = new PDO('mysql:host=mysql-fabyjulien.alwaysdata.net;dbname=fabyjulien_curriculumvitae', '319891', 'alwaysdatastudi');

if (!isset($_SESSION['csrf_token'])) {
  $token = bin2hex(random_bytes(32));
  $_SESSION['csrf_token'] = $token;
} else {
  $token = $_SESSION['csrf_token'];
}


if (isset($_POST['Envoyer'])){
    if (!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['message']) ) {
    $name = htmlspecialchars($_POST['nom']);
    $firstName = nl2br(htmlspecialchars($_POST['prenom']));
    $email = nl2br(htmlspecialchars($_POST['email']));
    $message = nl2br(htmlspecialchars($_POST['message']));

    $insererContactForm = $bdd->prepare('INSERT INTO contact (nom, prenom, email, message)VALUES(?, ?, ?, ?)');
    $insererContactForm->execute(array($name, $firstName, $email, $message));

    echo "Votre demande a bien été envoyée";
    }else{
    echo "Veuillez completer tous les champs";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>Document</title>
    <script src="./js/style.js" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<header class="header">
          <div class="container d-flex">
            <div class="logo">
            
            </div>
            <nav class="navbar ">
              <ul class="menu list-unstyled">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </nav>
            <div class="right">
              <ul class="socials list-unstyled">
                <li>
                  <a href="https://www.linkedin.com/in/julien-faby-301955227/?trk=org-employees&originalSubdomain=my" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                  </a>
                </li>
                <li>
                  <a href="https://github.com/Fabyjulien2A/Portofolio.git" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                  </a>
                </li>
                <li>
                 <a href="espace-admin\connexion.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="1em" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 9v11a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9"/><path d="M9 22V12h6v10M2 10.6L12 2l10 8.6"/></svg>
                 </a>
              </li>
              </ul>
              <button class="burger"><span class="bar"></span></button>
            </div>
          </div>
        </header>
   



    <section id="contact" class="contact">
        <div class="container">
          <div class="section-header">
            <h2 class="section-title">Contact</h2>
            <p>Pour me contacter veuillez remplir ce formulaire.<br>Merci
            </p>
          </div>
    
          <form action="formulaireContact\traitement_formulaire.php" method="POST" class="form">
    
    
            <label for="name">
              <input type="text" name="nom" id="name" placeholder="Nom" required>
            </label>
            <label for="firstname">
              <input type="text" name="prenom" id="firstname" placeholder="Prénom">
            </label>
            <label for="email">
              <input type="email" name="email" id="email" placeholder="Email" required>
            </label>
            <textarea name="message" id="message" placeholder="Message"></textarea>
                 <!-- CSRF -->
            <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
            <input type="submit" class="btn" value="Envoyer">
          </form>
        </div>
      </section>

      <!--Footer -->
      <?php require 'footer.php'; ?>

</body>
</html>


