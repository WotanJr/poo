<?php
class persona {
    
    
    //Atributs
    private $nom;
    private $cognom;
    private $sou;


    //Metode constructor
    public function __construct ($nom, $cognom) {
        $this->nom = $nom;
        $this->cognom = $cognom;
        $this->sou = 100;
    }
    

    //Getters
    function getNom() {
        return $this->nom;
    }

    function getCognom() {
        return $this->cognom;
    }

    function getSou() {
        return $this->sou;
    }
    

    //Setters
    function setNom($nom) {
        $this->nom = $nom;
    }

    function setCognom($cognom) {
        $this->cognom = $cognom;
    }
    
    function setSou($sou) {
        $this->sou = $sou;
    }
    


    //Metodes generals
    function saludar() {
        return "Come! Baby! (by " . $this->nom . ")" . " It is " . $this->sou . " euro" . "<br>";
    }

}

?>