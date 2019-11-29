<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP 2-3</title>
</head>
<body>
  <p>
    <?php
    $age = 18;
    $gender = 'Femme';
    /*if ($gender=='Homme' AND $age>=18){
      echo'Vous êtes un homme et vous êtes majeur';
    }
    else if($gender=='Homme'){
      echo'Vous êtes un homme et vous êtes mineur';
    }
    else if($gender=='Femme' AND $age>=18){
      echo'Vous êtes une femme et vous êtes majeur';
    }
    else{echo'Vous êtes une femme et vous êtes mineur';}*/
    echo $gender=='Homme'?'Vous êtes un homme':'Vous êtes une femme';
    echo $age>=18?' et vous êtes majeur':' et vous êtes mineur';
    ?>
  </p>
</body>
</html>
