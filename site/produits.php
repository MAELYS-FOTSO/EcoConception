<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"> <!--  Encodage UTF-8 indispensable -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--  Responsive sans surcharge -->
    <meta name="description" content="Découvrez nos produits respectueux de l'environnement - TRUC."> <!-- Description utile au SEO -->
    <title>Produits - TRUC</title>

    <!-- Feuilles de style mutualisées et locales -->
    <link rel="stylesheet" href="content/style.css">
  

    <!-- Utilisation raisonnée des bibliothèques externes : 
         Bootstrap uniquement si nécessaire (pour éviter surcharge JS/CSS inutile) -->
    <link rel="stylesheet" href="libs/bootstrap.min.css">
	<link rel="stylesheet" href="libs/font-awesome.min.css">
</head>

<body>
<!--*************** MENU ***************-->
<nav class="navbar" aria-label="Menu principal">
    <!-- Navigation structurée pour l’accessibilité -->
    <button class="toggle" aria-label="Menu" aria-expanded="false">
        <i class="fa fa-bars menu" aria-hidden="true"></i>
    </button>

    <ul class="nav-links">
        <li class="nav-item"><a href="index.php">Accueil</a></li>
        <li class="nav-item"><a href="produits.php" aria-current="page">Produits</a></li>
        <li class="nav-item"><a href="video.php">Vidéos</a></li>
        <li class="nav-item"><a href="contact.php">Contact</a></li>

        <?php 
        //  Éviter les répétitions de conditions avec une logique simplifiée
        if (isset($_SESSION['id'])) {
            echo "<li class='nav-item'><a href='administration.php'>Administration</a></li>
                  <li class='nav-item'><a href='deconnexion.php'>Déconnexion</a></li>";
        } else {
            echo "<li class='nav-item'><a href='connexion.php'>Connexion</a></li>";
        }
        ?>
    </ul>

    <img src="./images/scierie.webp" alt="Logo TRUC" width="70" height="70" loading="lazy">
</nav>

<!-- JavaScript placé en bas du body pour accélérer le rendu -->
<main id="container">
    <section class="produits">
        <h1>Nos produits</h1>
        <p>Découvrez notre sélection de produits durables et locaux.</p>
        <!-- Contenu produit à venir via JS -->
    </section>
</main>

<!--*************** PIED DE PAGE ***************-->
<footer id="footer">
    <ul class="footer-links">
        <li class="footer-item">© Projet 3iL</li>
        <li class="footer-item">
            <a href="#" aria-label="Page Facebook de TRUC" target="_blank" rel="noopener">
                <img id="logo" src="images/facebook.png" alt="Facebook" width="20" height="20" loading="lazy">
            </a>
        </li>
        <li class="footer-item">Site éco-conçu</li>
    </ul>
</footer>

<!--  Scripts en bas pour réduire le temps de chargement -->
<script src="libs\jquery.min.js" ></script>
<script defer>
    //  Code optimisé, sans redondance
    $(document).ready(function(){
        $('.menu').click(function(){
            $('ul.nav-links').toggleClass('active');
            const expanded = $('ul.nav-links').hasClass('active');
            $('.toggle').attr('aria-expanded', expanded);
        });
    });
</script>

<!--  Script principal des produits -->
<script src="scripts/initListeProduits.js" defer></script>

</body>
</html>
