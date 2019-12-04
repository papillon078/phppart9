<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4-2</title>
</head>
<body>
  <?php
  //déclaration de la fonction
  function returnString($myString){
      return $myString;
  };
  ?>
  <!-- appel de la fonction-->
  <p><?= returnString('exemple de chaine de caractere') ?></p>
</body>
</html>
