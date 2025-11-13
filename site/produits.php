<?php
session_start();
?>
<!DOCTYPE html>

<html lang="fr">

<head>
	<title>Nos Produits</title>

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
	<!--*************** END MENU ***************-->

	<main id="container">
	</main>

	<!--*************** PIED DE PAGE ***************-->
	<?php include "includes/footer.php"; ?>
	<!--*************** PIED DE PAGE ***************-->
	<script src="scripts/initListeProduits.js"></script>

</body>

</html>