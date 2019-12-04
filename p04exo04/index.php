<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4-4</title>
</head>
<body>
  <?php
  function compare($myFirstNumber, $mySecondNumber){
    if ($myFirstNumber==$mySecondNumber){
      return 'Les deux nombres sont identiques';
    }
    else if ($myFirstNumber<$mySecondNumber){
      return 'Le premier nombre est plus petit';
    }
    else{
      return 'Le premier nombre est plus grand';
    }
  }
  ?>
  <p><?= compare(6,12) ?></p>
</body>
</html>
