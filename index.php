<?php

    require 'db.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container-xl">
        <div class="py-5">
            <?php include './partials/nav.php' ?>
        </div>

        <div class="row">
            <?php
            foreach($movies as $movie) {

                echo "
                <div class=\"col-4\">
                    <div class=\"card\">
                        <img src=\"     \" class=\"card-img-top\" alt=\"   \">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">". $movie->titolo . "</h5>
                            <p class=\"card-text m-0\"> <span class=\"fw-bold pe-1\"> Durata: </span>" . $movie->durata . "</p>
                            <p class=\"card-text m-0\"> <span class=\"fw-bold pe-1\"> Anno di uscita: </span>" . $movie->anno_di_uscita . "</p>";
                        
                            foreach ($movie->genere as $genere) {
                                echo "<p class=\"card-text m-0\"> <span class=\"fw-bold pe-1\"> Genere: </span>" . $genere . "</p>";
                            }

                            echo $movie->director->setDirector() . " " . $movie->vietato_ai_minori?->setProhibited() . "

                        </div>
                    </div>
                </div>";

            }
            ?>
        </div> 
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>