<?php
session_start();
?>
<!DOCTYPE html>

<html lang="fr">

<head>
	<title>Vidéo</title>

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
	<div style="text-align: center;">
		<video width="500" height="281" controls>
			<source src="./video/videoplayback.mp4" type="video/mp4" alt="Vidéo descriptive sur la gestion du bois" loading="lazy">
		</video>
	</div>

	<!--*************** PIED DE PAGE ***************-->
	<?php include "includes/footer.php"; ?>
	<!--*************** PIED DE PAGE ***************-->


</body>

</html>