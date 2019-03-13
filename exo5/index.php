<?php
$int = null;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>la variable vaut : <?php echo $int ?></p>
    <?php $int = 42 ?>
    <p>la nouvelle variable vaut : <?php echo $int ?></p>
  </body>
</html>
