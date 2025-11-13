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
  <link rel="stylesheet" href="libs/font-awesome.min.css">

</head>

<body>

  <!--*************** NAVBAR ***************-->
  <?php include "includes/header.php"; ?>
  <script src="libs/jquery.min.js" defer></script>
  <script type="text/javascript">
    $(document).ready(function () {

      $('.menu').click(function () {

        $('ul').toggleClass('active');
      })
    })
  </script>

  <!--*************** CONTENU ***************-->
  <main class="forms">
    <?php include "controleur/initIndex.php"; ?>
  </main>

  <!--*************** FOOTER ***************-->
  <?php include "includes/footer.php"; ?>


</body>

</html>