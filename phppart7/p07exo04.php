<!DOCTYPE html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/master.css" rel="stylesheet" />
        <title>PHP 7-4 </title>
    </head>
    <body>
        <?php include 'header.html'; ?>
        <div class="mt-5" id="header">
            <h1>4e exercice :</h1>
            <p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>
        </div>
        <form action="user.php" method="POST" class="border border-white">
            <ul>
                <li><label for='lastname'>Entrez votre nom</label></li>
                <li><input type='text' id='lastname' name='lastname' /></li>
                <li><label for='firstname'>Entrez votre prénom</label></li>
                <li><input type='text' id='firstname' name='firstname' /></li>
                <li><input target="_blank" name="submit" type='submit' value='Envoyer'></li>
            </ul>
        </form>
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
