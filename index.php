<?php

    require 'db.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    
    <?php include './partials/nav.php' ?>

    <ul>
        <?php
        foreach($movies as $movie) {

            echo "
            <li>
                ". $movie->titolo . ", " . $movie->durata . ", " . $movie->anno_di_uscita . ", "; 
                
                foreach ($movie->genere as $genere) {
                    echo $genere . " ";
                }

                echo $movie->vietato_ai_minori?->setProhibited() . "
            </li>";

        }
        ?>
    </ul>

</body>
</html>