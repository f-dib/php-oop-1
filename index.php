<?php

    class Prohibited {
        public $vietato;
        
        /**
         * __construct
         *
         * @param  string $_vietato
         */
        function __construct($_vietato){
            $this->vietato = $_vietato;
        }

        public function setProhibited() {
            return $this->vietato;
        }
    };
    class Movie {
        public $titolo;
        public $durata;
        public $anno_di_uscita;
        public $genere = [];
        public $vietato_ai_minori;


        /**
         * __construct
         *
         * @param  string $_titolo
         * @param  mixed $_durata
         * @param  int $_anno_di_uscita
         */
        function __construct($_titolo, $_durata, $_anno_di_uscita, array $_genere, Prohibited $_vietato_ai_minori){
            $this->titolo = $_titolo;
            $this->durata = $_durata;
            $this->anno_di_uscita =  $_anno_di_uscita;
            $this->genere = $_genere;
            $this->vietato_ai_minori = $_vietato_ai_minori;
        }
    }; 

    $movie1 = new Movie("The Beautiful Game", "2 ore", "2024", ["Drammatico", "Sportivo"], new Prohibited(null));
    $movie2 = new Movie("Povere creature!", "2 ore", "2024", ["Commedia"], new Prohibited('Vietato ai minori'));

    $movies = [
        $movie1,
        $movie2
    ];

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    
    <h1>Film</h1>

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