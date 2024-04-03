<?php

    class Movie {
        public $titolo;
        public $durata;
        public $anno_di_uscita;
        public $genere = [];
        public $director;
        public $poster;
        public $vietato_ai_minori;


        /**
         * __construct
         *
         * @param  string $_titolo
         * @param  mixed $_durata
         * @param  int $_anno_di_uscita
         */
        function __construct($_titolo, $_durata, $_anno_di_uscita, array $_genere, Director $_director, $_poster, Prohibited $_vietato_ai_minori){
            $this->titolo = $_titolo;
            $this->durata = $_durata;
            $this->anno_di_uscita =  $_anno_di_uscita;
            $this->genere = $_genere;
            $this->director = $_director;
            $this->poster = $_poster;
            $this->vietato_ai_minori = $_vietato_ai_minori;
        }
    }; 

?>