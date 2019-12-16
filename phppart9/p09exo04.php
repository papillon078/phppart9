<!DOCTYPE html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <title>PHP 9-4</title>
    </head>
    <body>
        <div class="container">
            <img src="assets/img/baniere.jpg" width="100%" alt="baniere php">
            <?php include 'header.html'; ?>
            <div class="mt-2" id="header">
                <h1>4e exercice :</h1>
                <p>
                    Afficher le timestamp du jour.
                    Afficher le timestamp du mardi 2 août 2016 à 15h00.
                </p>
            </div>
            <div class="answerZone mt-3">
                <p><?= 'Timestamp actuel : '.time() ?></p>
                <p><?= 'timestamp du mardi 2 août 2016 à 15h00 : ' . mktime(15,0,0,8,2,2016) ?></p>
            </div>
        </div>
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>