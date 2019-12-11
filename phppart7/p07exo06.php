<!DOCTYPE html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/master.css" rel="stylesheet" />
        <title>PHP 7-6 </title>
    </head>
    <body>
        <?php include 'header.html'; ?>
        <div class="mt-5" id="header">
            <h1>6e exercice :</h1>
            <p>Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. N'utiliser qu'une seule page.</p>
        </div>
        <?php
        if (!isset($_GET['lastname'])) {
        ?>
        <form action="p07exo06.php" method="get" class="border border-white">
            <ul>
                <select name="gender">
                    <option value="Mme">Madame</option>
                    <option value="Mr">Monsieur</option>
                </select>
                <li><label for='lastname'>Entrez votre nom</label></li>
                <li><input type='text' id='lastname' name='lastname' /></li>
                <li><label for='firstname'>Entrez votre prénom</label></li>
                <li><input type='text' id='firstname' name='firstname' /></li>
                <li><input target="_blank" type='submit' value='Envoyer'></li>
            </ul>
        </form>
        <?php
        }
        else{
            echo 'informations envoyées via la méthode GET : ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
        }
        ?>
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>