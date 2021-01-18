<?php 

// father class

class Product {
    // variabili
    public $nome;
    public $marca;
    public $genere;
    public $prezzo;


    // costruttore 

    public function __construct($nome, $marca, $genere, $prezzo) {
        $this->nome = $nome ;
        $this->marca = $marca;
        $this->genere = $genere;
        $this->prezzo = $prezzo;
    }
    

    // metodi

    public function printname() {
        return $this->marca . ' ' . $this->nome;
    }
    public function  printgen() {
        return $this->genere;
    }
    public function printprice() {
        return $this->prezzo;
    }
}