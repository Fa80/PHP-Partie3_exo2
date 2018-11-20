<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie3_Exo2</title>
</head>
<body>
  <?php
  /* Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
  Tant que la première variable n'est pas supérieure à 20 :

  multiplier la première variable avec la deuxième
  afficher le résultat
  incrementer la première variable
  */
  $num = 0;
  $mult = rand(1, 100);
  while($num <= 20){
    ?>
  <p><?php  echo $result = $num * $mult. ' '; ?></p>
    <?php
    $num++;
  }
    ?>
</body>
</html>
