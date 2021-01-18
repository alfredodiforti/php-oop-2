<?php 

//importo classe product

include_once __DIR__ . '/Product.php';

//  CLASSE FIGLIA DI PRODUCT

class Aspirapolveri extends Product {
    // variabili
    public $potenza;

    //methods
    public function setpower($potenza) {
         $this->potenza = $potenza;
    }
    public function getpower() {
        return $this->potenza;
    }

}

