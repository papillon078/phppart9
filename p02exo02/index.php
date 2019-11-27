<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP 2-2</title>
</head>
<body>
  <p>
    <?php
    $isEasy = true;
    $message = ($isEasy ? 'C\'est facile !' : 'c\'est difficile');
    echo $message;
    ?>
  </p>
  <p>
    <?php
    $isEasy = false;
    if($isEasy){
      echo 'C\'est facile !';
    }else{echo'C\'est difficile';}
    ?>
  </p>
</body>
</html>
