<!DOCTYPE html>
<html lang="efr" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <title>exo10</title>
    </head>
    <body>
        <p>
            <?php
            //jai creer un tableau et j ai mis un echo pour afficher une valeur et j ai utiliser une boucle foreach pour afficher complet le tableau
            $departement[02] = 'Aisne';
            $departement[51] = 'Marne';
            $departement[59] = 'Nord';
            $departement[60] = 'Oise';
            $departement[62] = 'Pas-de-Calais';
            $departement[80] = 'Somme';
            foreach ($departement as $i => $i_value) {
                echo 'Le departement' . ' ' . $i_value . ' ' . 'a le number' . ' ' . $i . '. ';
            }
            ?>
        </p>
    </body>
</html>
