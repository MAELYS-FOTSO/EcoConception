<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--  Responsive sans surcharge -->
    <meta name="description" content="Découvrez nos produits respectueux de l'environnement - TRUC.">
    <!-- Description utile au SEO -->
    <title>Produits </title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Découvrez notre site écoresponsable sur la gestion durable ">

	<link rel="stylesheet" href="content/style.css">
	<link rel="stylesheet" href="libs/font-awesome.min.css">

</head>

<body>
    <!--*************** MENU ***************-->
    <?php include "includes/header.php"; ?>
    <script src="libs/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.menu').click(function () {

                $('ul').toggleClass('active');
            })
        })
    </script>


    <!-- JavaScript placé en bas du body pour accélérer le rendu -->
    <main id="container">
        <section class="produits">
            <h1>Nos produits</h1>
            <p>Découvrez notre sélection de produits durables et locaux.</p>
            <!-- Contenu produit à venir via JS -->
        </section>
    </main>

    <!--*************** PIED DE PAGE ***************-->
    <?php include "includes/footer.php"; ?>
    <!--*************** PIED DE PAGE ***************-->

    <!--  Script principal des produits -->
    <script src="scripts/initListeProduits.js" defer></script>

</body>

</html>