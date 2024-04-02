<?php

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

?>