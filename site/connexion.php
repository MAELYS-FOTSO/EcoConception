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
    <link rel="stylesheet" href="libs/font-awesome.min.css">



</head>

<body>
    <?php include "includes/header.php"; ?>
    <script src="libs/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.menu').click(function () {

                $('ul').toggleClass('active');
            })
        })
    </script>

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

        <form action="controleur/traitementFormConnexion.php" method="GET" autocomplete="on">
            <label for="idUtil">Identifiant</label>
            <input type="text" name="idUtil" id="idUtil" required placeholder="Nom d'utilisateur">

            <label for="mdpUtil">Mot de Passe</label>
            <input type="password" name="mdpUtil" id="mdpUtil" required placeholder="Mot de passe">

            <button type="submit" class="button">Se connecter</button>
        </form>


    </main>

    <?php
    // à la fin de chaque page PHP
    include "includes/footer.php";
    ?>


</body>

</html>