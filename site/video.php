<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Découvrez nos vidéos sur la gestion durable des ressources naturelles et l’écoresponsabilité.">
  <title>Vidéo sur la gestion durable | Site écoresponsable</title>

  <!-- SEO et partage -->
  <meta property="og:title" content="Vidéo sur la gestion durable">
  <meta property="og:description" content="Découvrez nos vidéos éducatives sur la gestion responsable des ressources.">
  <meta property="og:type" content="video.other">


  <!-- Feuilles de style -->
  <link rel="preload" href="content/style.css" as="style">
  <link rel="stylesheet" href="content/style.css" media="all">
  <link rel="stylesheet" href="libs/font-awesome.min.css">

</head>
<body>
  <?php include "includes/header.php"; ?>

  <main id="contenu-principal">
    <h1>Scierie Descourvières Scie de têtes</h1>
    <section class="video-section" style="text-align:center;">
      <video width="500" height="281" controls preload="metadata" poster="./video/preview.jpg">
        <source src="./video/videoplayback.mp4" type="video/mp4">
        
      </video>
      <p class="description-video"> L’unité de sciage comprend deux scies de tête : une scie alternative (châssis) pour les séries et grandes longueurs, et une scie à ruban pour les gros bois et les débits sur liste.</p>
    </section>
  </main>

  <?php include "includes/footer.php"; ?>

  <!-- Script natif sans jQuery -->
  <script defer>
    document.addEventListener('DOMContentLoaded', function() {
      const menuBtn = document.querySelector('.menu');
      const navList = document.querySelector('ul');
      if (menuBtn && navList) {
        menuBtn.addEventListener('click', () => {
          navList.classList.toggle('active');
        });
      }
    });
  </script>
</body>
</html>
