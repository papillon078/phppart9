<!DOCTYPE html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <title>PHP 9-5</title>
    </head>
    <body>
        <div class="container">
            <img src="assets/img/baniere.jpg" width="100%" alt="baniere php">
            <?php include 'header.html'; ?>
            <div class="mt-2" id="header">
                <h1>5e exercice :</h1>
                <p>
                    Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
                </p>
            </div>
            <div class="answerZone mt-3">
                <?php
                $tsp01 = strtotime('2016/05/16');
                $tsp02 = time();
                $difference = floor(($tsp02 - $tsp01) / 86400);
                ?>
                <?= 'il s\'est écoulé '.$difference.' jours entre le 16 mai 2016 et aujourd\'hui' ?>
                <p>Autre methode</p>
                <?php 
                $dateDay = new DateTime();
                $date = new DateTime('2016-05-16');
                echo $dateDay->diff($date)->format('%a jours');
                ?>
            </div>
        </div>
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>