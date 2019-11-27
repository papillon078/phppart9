<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP 2-1</title>
</head>
<body>
  <p>
    <?php
    $age = 1;
    $message = ($age >=18 ? 'Vous êtes majeur' : 'Vous êtes mineur');
    echo $message;
    ?>
  </p>
</body>
</html>
