<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Portfolio de Julien Faby - Développeur Web junior freelance et à la recherche d’un poste en CDI">
  <title>Julien Faby - Développeur Web</title>
  <link rel="stylesheet" href="./css/style.css">
  <script src="./js/style.js" defer></script>
</head>

<body>

<div class="availability-banner">
  📢 Je suis disponible pour un <strong>poste en CDI</strong> en tant que développeur web junior – <a href="contact.php">Contactez-moi</a>
</div>


  <header class="header">
    <div class="container d-flex">
      <div class="logo">
        <!-- Logo possible ici -->
      </div>
      <nav class="navbar">
        <ul class="menu list-unstyled">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <div class="right">
        <ul class="socials list-unstyled">
          <li>
            <a href="https://www.linkedin.com/in/julien-faby-301955227/" target="_blank">
              <!-- LinkedIn Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="..."/></svg>
            </a>
          </li>
          <li>
            <a href="https://github.com/Fabyjulien2A/Portofolio.git" target="_blank">
              <!-- GitHub Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512"><path d="..."/></svg>
            </a>
          </li>
          <li>
            <a href="espace-admin/connexion.php">
              <!-- Admin Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="1em" viewBox="0 0 24 24"><path d="..."/></svg>
            </a>
          </li>
        </ul>
        <button class="burger"><span class="bar"></span></button>
      </div>
    </div>
  </header>

  <section id="hero" class="hero">
    <div class="container">
      <div class="grid">
        <div class="hero__item left">
        <h1 class="title animate">Bonjour, je suis Julien Faby</h1>
        <p class="subtitle typing">Développeur Web junior – Freelance & ouvert aux opportunités en CDI</p>
        <a href="downloads/CV-Faby_Julien.pdf" class="download-button animate" download>Télécharger mon CV</a>
        </div>
        <div class="hero__item right">
          <img class="img-header" src="./images/pictureHeader.jpg" alt="Photo profil - Développeur web junior">
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="container">
      <div class="grid">
        <div class="grid__item">
          <img class="img-profil" src="./images/photoProfil.jpg" width="560" height="453" loading="lazy" alt="Julien Faby - Développeur web">
        </div>
        <div class="grid__item animate">
          <h2 class="section-title">À propos</h2>
          <h3>Qui suis-je ?</h3>
          <p>
            Je m'appelle <strong>Julien Faby</strong>, développeur web passionné par la création de solutions numériques efficaces, esthétiques et accessibles. 
            Diplômé en développement web et web mobile, j’ai fondé <strong>Corsica Faby Design</strong> pour accompagner les entrepreneurs, TPE/PME et associations dans leur transition numérique.
          </p>
          <p>
            Mon travail repose sur l’écoute, l’adaptabilité et la qualité. Je propose des <strong>sites vitrines</strong>, des <strong>boutiques en ligne</strong> et des prestations de <strong>maintenance web</strong>, le tout sur mesure selon les besoins du client.
          </p>
          <p>
            Actuellement en freelance, je suis également <strong>à la recherche d’un poste en CDI en tant que développeur web junior</strong>, au sein d’une équipe motivante où je pourrais continuer à progresser tout en apportant mes compétences.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="competences-section" class="competences">
    <div class="container">
      <h2 class="section-title">Mes compétences</h2>
      <div class="skills-logos">
        <img class="logo-competences" src="images/icones/icons8-html-96.png" alt="HTML">
        <img class="logo-competences" src="images/icones/icons8-css-100.png" alt="CSS">
        <img class="logo-competences" src="images/icones/icons8-javascript-96.png" alt="JavaScript">
        <img class="logo-competences" src="images/icones/icons8-react-80.png" alt="React">
        <img class="logo-competences" src="images/icones/icons8-php-80.png" alt="PHP">
        <img class="logo-competences" src="images/icones/icons8-laravel-96.png" alt="Laravel">
        <img class="logo-competences" src="images/icones/icons8-mysql-96.png" alt="MySQL">
        <img class="logo-competences" src="images/icones/icons8-wordpress-94.png" alt="WordPress">
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php require 'footer.php'; ?>

</body>
</html>
