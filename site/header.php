<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Scierie">
  <link rel="stylesheet" href="content/style.css">
  <link rel="stylesheet" href="lib/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo-container">

        <img src="./images/scierie.gif" alt="scierie" class="logo">
        <span class="brand-name">Scierie</span>
      </div>

      <button class="menu" > <i class="fa fa-bars"  > </i></button>

      <ul class="nav-links">
        <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="produits.php">LES PRODUITS</a></li>
        <li><a href="video.php">VIDÉO</a></li>
        <li><a href="contact.php">CONTACT</a></li>

        <?php if (isset($_SESSION['id'])): ?>
          <li><a href="administration.php">ADMINISTRATION</a></li>
          <li><a href="deconnexion.php">DÉCONNEXION</a></li>
        <?php else: ?>
          <li><a href="connexion.php">CONNEXION</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
</body>
</html>