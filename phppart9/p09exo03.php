<!DOCTYPE html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <title>PHP 9-3</title>
    </head>
    <body>
        <div class="container">
            <img src="assets/img/baniere.jpg" width="100%" alt="baniere php">
            <?php include 'header.html'; ?>
            <div class="mt-2" id="header">
                <h1>3e exercice :</h1>
                <p>
                    Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
                    Bonus : Le faire en français.
                </p>
            </div>
            <div class="answerZone mt-3">
                <?php
                $day = array('', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
                $month = array('', 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                ?>
                <p><?= 'voici la date d\'aujourd\'hui : '.$day[date('N')].' '.date('d').' '.$month[date('n')].' '.date('Y') ?></p>
            </div>
        </div>
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>