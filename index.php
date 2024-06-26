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

    <div class="bg-dark">
    <div class="container-xl">
        <div class="py-5">
            <?php include './partials/nav.php' ?>
        </div>

        <div class="row">
            <?php
            foreach($movies as $movie) {

                echo "
                <div class=\"col-12 col-md-6 col-lg-4 pb-4\">
                    <div class=\"card h-100\">
                        <img src=\"" . $movie->poster . "\" class=\"card-img-top h-75\" alt=\"   \">
                        <div class=\"card-body bg-dark text-white h-25\">
                            <h5 class=\"card-title\">". $movie->titolo . "</h5>
                            <p class=\"card-text m-0\"> <span class=\"fw-bold pe-1\"> Durata: </span>" . $movie->durata . "</p>
                            <p class=\"card-text m-0\"> <span class=\"fw-bold pe-1\"> Anno di uscita: </span>" . $movie->anno_di_uscita . "</p>";
                        
                            echo "<p class=\"card-text m-0\"> <span class=\"fw-bold pe-1\"> Genere: </span>";

                            foreach ($movie->genere as $genere) {
                                echo "<span class=\"pe-2 \">" . $genere . "</span>";
                            }

                            echo "</p>" . $movie->director->setDirector() . "<div class=\"small text-center text-danger px-1\">" . $movie->vietato_ai_minori?->setProhibited() . "</div>

                        </div>
                    </div>
                </div>";

            }
            ?>
        </div> 
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>