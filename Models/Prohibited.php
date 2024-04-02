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

?>