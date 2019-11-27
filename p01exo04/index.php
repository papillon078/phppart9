<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP 1-4</title>
</head>
<body>
  <p>
    <?php
    $myText = 'bonjour';
    $myNumber = 3;
    $barelyNumber = 12.5;
    $hole = true;
    echo
    'Une chaine de caractère : '.$myText;
    ?>
  </p>
  <p>
    <?php
    echo 'Un nombre entier : '.$myNumber;
    ?>
  </p>
  <p>
    <?php
    echo 'un nombre décimal : '.$barelyNumber;
    ?>
  </p>
  <p>
    <?php
    echo 'et enfin un booléen : '.$hole;
    ?>
  </p>
</body>
</html>
