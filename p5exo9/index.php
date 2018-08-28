<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>exo9</title>
    </head>
    <body>
        <p>
            <?php
            //jai utiliser une boucle foreach pour afficher tout mon tableau
            $departement[02] = 'Aisne';
            $departement[59] = 'Nord';
            $departement[60] = 'Oise';
            $departement[62] = 'Pas-de-Calais';
            $departement[80] = 'Somme';
            $departement[51] = 'Marne';
            foreach ($departement as $bloc) {
                echo $bloc . ' ';
            }
            ?>
        </p>
    </body>
</html>
