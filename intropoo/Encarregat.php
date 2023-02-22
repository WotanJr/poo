<?php
    class Encarregat extends Persona{
        //Atributs
        private $plus;

        //Constructor
        public function __construct($nom, $cognom, $plus) {
            parent::__construct($nom, $cognom);
            $this->plus = $plus;
        }

        //getter
        function getPlus() {
            return $this->plus;
        }

        //setter
        function setPlus($plus) {
            $this->plus = $plus;
        }

        //Metode
        function aplicarPlus() {
            $sou = parent::getSou();
            $sou = $sou + $this->plus;
            parent::setSou($sou);

        }

        function saludar() {
            return "M'estoy forrando";
        }



    }



?>