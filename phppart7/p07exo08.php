<!DOCTYPE html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/master.css" rel="stylesheet" />
        <title>PHP 7-8 </title>
    </head>
    <body>
        <?php include 'header.html'; ?>
        <div class="mt-5" id="header">
            <h1>8e exercice :</h1>
            <p>Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.</p>
        </div>
        <?php
        if (!isset($_GET['lastname'])) {
            ?>
            <form action="" method="get" enctype="multipart/form-data" class="border border-white">
                <ul>
                    <select name="gender">
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
        } else {
            $ext = pathinfo($_GET['fileLoad'], PATHINFO_EXTENSION);
            $name = pathinfo($_GET['fileLoad'], PATHINFO_FILENAME);
            $pdfCheck = ($ext == 'pdf' || $ext == 'PDF') ? 'Vous avez bien selectionné un fichier PDF' : 'Vous n\'avez selectionné un fichier PDF valide';
            ?>
            <p><?= $pdfCheck ?></p>
            <p><?= 'informations envoyées via la méthode GET : ' . $_GET['gender'] . ' ' . $_GET['lastname'] . ' ' . $_GET['firstname'] . '<br>fichier selectionné : "' . $name . '", d\'extention : "' . $ext . '"' ?></p>
        <?php } ?>
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
