<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4-5</title>
</head>
<body>
  <?php
  //déclaration de la fonction
  function concat($myNumber, $myString){
    //vérification que les parametres sont bien un nombre entier et un chaine de caractère
    if (is_int($myNumber) && is_string($myString)){
      return $myNumber.' '.$myString;
    }else{
      return 'veuillez entrer des informations valides';
    }
  }
  ?>
  <!-- appel de la fonction-->
  <p><?= concat(100,'patates') ?></p>
</body>
</html>
