<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Scierie">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoConception - Green IT</title>

  <link rel="stylesheet" href="content/style.css">
  <link rel="stylesheet" href="lib/bootstrap.min.css">
</head>

<body>

  <!--*************** NAVBAR ***************-->
  <?php

include 'header.php';
?>

  <!--*************** SLIDER ***************-->
  <section class="slider-section">
    <?php include "includes/slider.php"; ?>
  </section>

  <!--*************** CONTENU ***************-->
  <main class="forms">
    <?php include "controleur/initIndex.php"; ?>
  </main>

  <!--*************** FOOTER ***************-->
  <?php

include 'footer.php';
?>
  <script src="scripts/slider.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>

</body>
</html>
