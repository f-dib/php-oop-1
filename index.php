<?php
    class Movie {
        public $titolo;
        public $durata;
        public $anno_di_uscita;

        /**
         * __construct
         *
         * @param  string $_titolo
         * @param  mixed $_durata
         * @param  int $_durata
         */
        function __construct($_titolo, $_durata,  $_anno_di_uscita){
            $this->titolo = $_titolo;
            $this->durata = $_durata;
            $this->anno_di_uscita =  $_anno_di_uscita;
        }
    } 

    $movie1 = new Movie("The Beautiful Game", "2 ore", "2024");
    var_dump($movie1);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    


</body>
</html>