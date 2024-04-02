<?php

    class Director {
        public $nome;
        public $cognome;
        public $nazionalita;
        
        
        /**
         * __construct
         *
         * @param  string $_nome
         * @param  string $_cognome
         * @param  string $_nazionalita
         */
        function __construct($_nome, $_cognome, $_nazionalita){
            $this->nome = $_nome;
            $this->cognome = $_cognome;
            $this->nazionalita = $_nazionalita;
        }

        public function setDirector() {
            return '<p class=\'card-text m-0\'> <span class=\'fw-bold pe-1\'> Regista: </span>' . $this->nome . ' ' . $this->cognome . '</p> 
                    <p class=\'card-text m-0\'> <span class=\'fw-bold pe-1\'> Nazionalità: </span>' . $this->nazionalita . '</p>';
        }
    };

?>