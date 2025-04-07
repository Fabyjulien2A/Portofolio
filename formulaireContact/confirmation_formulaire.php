<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Merci pour votre message</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }

    .confirmation-box {
      background-color: #ffffff;
      border: 1px solid #eee;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      padding: 4rem 3rem;
      max-width: 500px;
      border-radius: 15px;
      animation: fadeInUp 1s ease-out;
    }

    h1 {
      font-size: 2.8rem;
      color: #0077cc;
      margin-bottom: 1rem;
    }

    p {
      font-size: 1.6rem;
      color: #555;
      margin-bottom: 2.5rem;
    }

    .btn-home {
      background-color: #0077cc;
      color: white;
      padding: 1rem 2.5rem;
      border: none;
      border-radius: 30px;
      font-size: 1.5rem;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn-home:hover {
      background-color: #005fa3;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media screen and (max-width: 480px) {
      .confirmation-box {
        padding: 3rem 2rem;
      }

      h1 {
        font-size: 2.2rem;
      }

      p {
        font-size: 1.4rem;
      }
    }
  </style>
</head>
<body>
  <div class="confirmation-box">
    <h1>Merci pour votre message !</h1>
    <p>Votre message a bien été envoyé. Je vous répondrai dans les plus brefs délais.</p>
    <a href="../index.php" class="btn-home">Retour à l'accueil</a>
  </div>
</body>
</html>
