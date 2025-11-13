<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contactez la Scierie Gineste pour toute demande d'information, de devis ou de partenariat. Téléphone, e-mail et adresse disponibles.">
  <title>Contact | Scierie Gineste - Bois et gestion durable</title>

  <!-- SEO Open Graph -->
  <meta property="og:title" content="Contact | Scierie Gineste">
  <meta property="og:description" content="Contactez la Scierie Gineste pour toute demande d'information.">
  <meta property="og:type" content="website">

  <!-- Styles -->
  <link rel="preload" href="content/style.css" as="style">
  <link rel="stylesheet" href="content/style.css" media="all">
  <link rel="stylesheet" href="libs/font-awesome.min.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
  <!--*************** MENU ***************-->
  <?php include "includes/header.php"; ?>
  <!--*************** END MENU ***************-->

  <main id="contenu-principal" class="contactContainer">
    <h1>Contactez-nous</h1>

    <section aria-labelledby="contact-email">
      <h2 id="contact-email">Email</h2>
      <p>
        <a href="mailto:scierie.gineste@wanadoo.fr">scierie.gineste@wanadoo.fr</a>
      </p>
    </section>

    <section aria-labelledby="contact-tel">
      <h2 id="contact-tel">Téléphone</h2>
      <p>
        <a href="tel:+33970355409">+33 9 70 35 54 09</a>
      </p>
    </section>

    <section aria-labelledby="contact-adresse">
      <h2 id="contact-adresse">Adresse</h2>
      <address>
        Route de Rodez<br>
        12220 Montbazens<br>
        France
      </address>
    </section>

    <section aria-labelledby="contact-reseaux">
      <h2 id="contact-reseaux">Nous suivre</h2>
      <ul class="logo">
        <li class="facebook">
          <a href="https://www.facebook.com/Scierie-du-Fargal-613509152159633/"
             target="_blank"
             rel="noopener noreferrer"
             aria-label="Page Facebook de la Scierie Gineste">
            <img src="images/facebook.png"
                 width="40"
                 height="40"
                 loading="lazy"
                 alt="Logo Facebook Scierie Gineste">
          </a>
        </li>
      </ul>
    </section>
  </main>

  <!--*************** PIED DE PAGE ***************-->
  <?php include "includes/footer.php"; ?>
  <!--*************** PIED DE PAGE ***************-->

  <!-- Script menu sans jQuery -->
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
