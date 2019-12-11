<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/master.css" />
        <title>PHPpart7-USER</title>
    </head>
    <body>
         <?php include 'header.html'; ?>
        <p class="text-white">
            <?php
            //var_dump($_POST); pour afficher le contenu de post
            if (isset($_GET['lastname']) AND isset($_GET['firstname'])) {
                echo 'informations envoyées via la méthode GET : ' . $_GET['lastname'] . ' ' . $_GET['firstname'];
            } else {
                echo 'methode GET non employée';
            }
            ?>
        </p>
        <p class="text-white">
            <?php
            if (isset($_POST['lastname']) AND isset($_POST['firstname'])) {
                echo 'informations envoyées via la méthode POST : ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
            } else {
                echo 'Méthode POST non employée';
            }
            ?>
        </p>
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
