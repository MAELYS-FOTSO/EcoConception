<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Test Green IT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Découvrez notre site écoresponsable sur la gestion durable ">


    <link rel="stylesheet" href="content/style.css">


    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="stylesheet" href="libs/font-awesome.min.css">
    <link rel="stylesheet" href="libs/bootstrap.min.css">

</head>

<body>
<?php

include 'header.php';
?>

<main class="forms">
    <h1>Connexion</h1>

    <span class="err">
        <?php
        foreach (['errCnx', 'creationOk', 'creationNok'] as $msg) {
            if (!empty($_SESSION[$msg])) {
                echo htmlspecialchars($_SESSION[$msg]);
                $_SESSION[$msg] = "";
            }
        }
        ?>
    </span>

    <form action="controleur/traitementFormConnexion.php" method="post" autocomplete="on">
        <label for="idUtil">Identifiant</label>
        <input type="text" name="idUtil" id="idUtil" required placeholder="Nom d'utilisateur">

        <label for="mdpUtil">Mot de Passe</label>
        <input type="password" name="mdpUtil" id="mdpUtil" required placeholder="Mot de passe">

        <button type="submit" class="button">Se connecter</button>
    </form>


</main>

<?php
// à la fin de chaque page PHP
include 'footer.php';
?>
<script src="libs/jquery.min.js" defer></script>
<script src="scripts/main.min.js" defer></script>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script type="text/javascript">
	$(document).ready(function(){
	      $('.onglet a').on('click', function (e) {
	      e.preventDefault();

	      $(this).parent().addClass('active');
	      $(this).parent().siblings().removeClass('active');

	      var href = $(this).attr('href');
	      $('.forms > form').hide();
	      $(href).fadeIn(333);
	    });
	});
</script>

</body>
</html>
