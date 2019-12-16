<!DOCTYPE html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <title>PHP 9-TP</title>
    </head>
    <body>
        <div class="container">
            <img src="assets/img/baniere.jpg" width="100%" alt="baniere php">
            <?php include 'header.html'; ?>
            <div class="mt-2" id="header">
                <h1>TP :</h1>
                <p>
                    Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
                    En fonction des choix, afficher un calendrier.
                </p>
            </div>
            <div class="answerZone mt-3">
                <form action="" class="d-inline" method="get" class="border border-white">
                    <select name="year">
                        <?php for ($i = 1970; $i <= 2050; $i++) { ?>
                            <option value= <?= $i ?>><?= $i ?></option>
                        <?php } ?>
                    </select>
                    <select name="month">
                        <option value="1">Janvier</option>
                        <option value="2">Février</option>
                        <option value="3">Mars</option>
                        <option value="4">Avril</option>
                        <option value="5">Mai</option>
                        <option value="6">Juin</option>
                        <option value="7">Juillet</option>
                        <option value="8">Aoùt</option>
                        <option value="9">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Décembre</option>
                    </select>
                    <input target="_blank" type='submit' value='Envoyer'>
                </form>
                <div class="row">
                    <div class="col-8 mb-5 mx-auto">
                        <table> 
                            <thead>
                                <!-- en-tête du calendrier-->
                                <tr> 
                                    <th>Lundi</th> 
                                    <th>Mardi</td>
                                    <th>Mercredi</th>  
                                    <th>Jeudi</th> 
                                    <th>Vendredi</th> 
                                    <th>Samedi</th> 
                                    <th>Dimanche</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //recupération du mois et de l'année souhaitée
                                $year = $_GET['year'];
                                $month = $_GET['month'];
                                //initialisation du comptage des jours dans un mois
                                $dayCount = 1;
                                //boucle qui génère les lignes
                                for ($j = 1; $j <= 6; $j++) {
                                    ?>
                                    <tr>
                                        <?php
                                        //boucle qui génère les colonnes
                                        for ($i = 1; $i <= 7; $i++) {
                                            $date = $year . '/' . $month . '/' . $dayCount;
                                            $dateTimeStamp = strtotime($date);
                                            //variable qui determine le nombre de jours dans chaque mois
                                            $dayInMonth = date('t', mktime(0, 0, 0, $month, $year));
                                            //condition pour commencer le compte à la bonne colonne
                                            if (date('N', $dateTimeStamp) == $i && $dayCount <= $dayInMonth) {
                                                ?>
                                                <td>
                                                    <?php
                                                    $dayCount++;
                                                    ?>
                                                    <?= date('d', $dateTimeStamp) ?> 
                                                </td>
                                            <?php } else {
                                                ?>
                                                <td class="bg-dark">
                                                </td>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div><!-- fin col-8-->
                </div><!-- fin row-->
            </div> <!-- fin d'answerZone-->
        </div> <!-- fin container-->    
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>