<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>exo8</title>
    </head>
    <body>
        <p>
            <?php
            //jai utiliser une boucle for pour afficher tout mon tableau
            $months = array('janvier', 'fevrire', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'decembre');
            $arrlength = count($months);
            for ($i = 0; $i < $arrlength; $i++) {
                echo $months[$i] . ' ';
            }
            ?>
        </p>
    </body>
</html>
