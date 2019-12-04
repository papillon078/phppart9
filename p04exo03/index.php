<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4-3</title>
</head>
<body>
  <?php
  //déclaration de la fonction
  function returnString($myFirstString, $mySecondString){
      return $myFirstString.' '.$mySecondString;
  };
  ?>
  <!-- appel de la fonction-->
  <p><?= returnString('1er bout', '2e bout') ?></p>
</body>
</html>
