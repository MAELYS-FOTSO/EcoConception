<header>
  <nav class="navbar">
    <div class="logo-container">

      <img src="./images/scierie.gif" alt="scierie" class="logo">
      <span class="brand-name">Scierie</span>
    </div>

    <button class="menu"> <i class="fa fa-bars"> </i></button>

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