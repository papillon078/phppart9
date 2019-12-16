<!DOCTYPE html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <title>PHP 9-6</title>
    </head>
    <body>
        <div class="container">
            <img src="assets/img/baniere.jpg" width="100%" alt="baniere php">
            <?php include 'header.html'; ?>
            <div class="mt-2" id="header">
                <h1>6e exercice :</h1>
                <p>
                    Afficher le nombre de jour dans le mois de février de l'année 2016.
                </p>
            </div>
            <div class="answerZone mt-3">
                <?php
                $difference = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
                $difference2 = date('t',mktime(0,0,0,2,1,2016));
                ?>
                <?= 'Février 2016 a compté '.$difference.' jours.' ?>
            </div>
        </div>
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>