<!DOCTYPE html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/master.css" rel="stylesheet" />
        <title>PHP 7-7 </title>
    </head>
    <body>
        <?php include 'header.html'; ?>
        <div class="mt-5" id="header">
            <h1>7e exercice :</h1>
            <p>Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
        </div>
        <?php
        if (!isset($_GET['lastname'])) {
        ?>
        <form action="" method="get" enctype="multipart/form-data" class="border border-white">
          <!-- enctype necessaire pour envoyer des fichier dans un formulaire-->
            <ul>
                <select name="gender">
                  <option disabled selected>selectionner...</option>
                    <option value="Mme">Madame</option>
                    <option value="Mr">Monsieur</option>
                </select>
                <li><label for='lastname'>Entrez votre nom</label></li>
                <li><input type='text' id='lastname' name='lastname' /></li>
                <li><label for='firstname'>Entrez votre prénom</label></li>
                <li><input type='text' id='firstname' name='firstname' /></li>
                <li><input type='file' id='fileLoad' name='fileLoad' /></li>
                <li><input target="_blank" type='submit' value='Envoyer'></li>
            </ul>
        </form>
        <?php
        }
        else{
            $ext=pathinfo($_GET['fileLoad'], PATHINFO_EXTENSION);
            $name=pathinfo($_GET['fileLoad'], PATHINFO_FILENAME);
            echo 'informations envoyées via la méthode GET : ' . $_GET['lastname'] . ' ' . $_GET['firstname'].'<br>fichier selectionné : '.$name.' d\'extention : '.$ext;
        }
        ?>
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
