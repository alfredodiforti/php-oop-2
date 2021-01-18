<?php 

include_once __DIR__ . '/Product.php';

// cildren Class

class Computer extends Product {
    // variabili nuove
    public $processore ;

    // costruttore
    public function __construct($nome, $marca, $genere, $prezzo, $processore) {
        // trasferire i valori del padre
        parent::__construct($nome, $marca, $genere, $prezzo);
        // caricare il nuovo parametro 
        $this->processore = $processore;
        
    }
    // metodi
    public function printproc() {
    return $this->processore;
    }
}