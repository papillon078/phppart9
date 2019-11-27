<!DOCTYPE html>
<html lang=fr dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP 1-1</title>
</head>
<body>
<!-- on doit toujours inserer un code php qui contient une instruciont "echo"
dans une balise HTML (ici une balise "p") car sinon, on ecrit du texte dans le body, ce qui est 
interdit en HTML-->
  <p>
    <?php
    $name = 'popol';
    echo $name;
    ?>
  </p>
</body>
</html>
