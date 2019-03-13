<?php
$lastname = 'Lecul';
$firstname = 'Simon';
$age = 21;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>partie 1 exo 7 php</title>
  </head>
  <body>
    <p>Bonjour <?php echo $firstname . ' ' . $lastname ?>, tu as <?= $age ?> ans.</p>
  </body>
</html>
