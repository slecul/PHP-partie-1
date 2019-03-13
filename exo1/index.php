<?php
  $name = 'Simon';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>exo 1 partie 1 php</title>
  </head>
  <body>
    <p><?php echo $name; ?></p>
    <!-- peut aussi s'écrire sous la forme suivante, si et seulement si il n'y a qu'une seule variable. -->
    <p><?= $name ?></p>
  </body>
</html>
