<?php
session_start();
?>
<!DOCTYPE html>

<html lang="fr">

<head>
	<title>Contact</title>

	<meta name="description" content="Scierie">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
	<main >
		<div class="contactContainer">

			<h2> EMAIL </h2>
			<p> scierie.gineste@wanadoo.fr

			<h2> TELEPHONE </h2>
			<p> +33 9 70 35 54 09

			<div class="adresse">
				<h2> ADRESSE </h2>
				<ul>
					<li> Route de Rodez
					<li> 12220
					<li> MONTBAZENS

				</ul>
			</div>

			<div class="reseauxSociaux">
				<h2> NOUS SUIVRE </h2>

				<ul class="logo">
					<li class="facebook"><a href="https://www.facebook.com/Scierie-du-Fargal-613509152159633/"
							target="_blank"><img src="images/facebook.png"></a></li>
				</ul>
			</div>

		</div>
	</main>

	<!--*************** PIED DE PAGE ***************-->
	<?php include "includes/footer.php"; ?>
	<!--*************** PIED DE PAGE ***************-->


</body>

</html>