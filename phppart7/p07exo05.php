<!DOCTYPE html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/master.css" rel="stylesheet" />
        <title>PHP 7-5 </title>
    </head>
    <body>
        <?php include 'header.html'; ?>
        <div class="mt-5" id="header">
            <h1>5e exercice :</h1>
            <p>Créer un formulaire sur la page index.php avec :</p>
            <ul>
                <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
                <li>Un champ texte pour le nom</li>
                <li>Un champ texte pour le prénom</li>
            </ul>
            <p>Ce formulaire doit rediriger vers la page index.php.<br>
                Vous avez le choix de la méthode.</p>
        </div>
        <form action="p07exo05.php" method="GET" class="border border-white">
            <ul>
                <select name="gender">
                    <option value="Mme">Madame</option>
                    <option value="Mr">Monsieur</option>
                </select>
                <li><label for="lastname">Entrez votre nom</label></li>
                <li><input type="text" id="lastname" name="lastname" /></li>
                <li><label for="firstname">Entrez votre prénom</label></li>
                <li><input type="text" id="firstname" name="firstname" /></li>
                <li><input name="submit" type="submit" value="Envoyer"></li>
            </ul>
        </form>
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
