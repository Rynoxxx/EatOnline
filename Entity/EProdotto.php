<?php

class EProdotto {

    public $id; //ID del prodotto
    public $id_categoria; //ID della categoria di appartenenza
    public $nome;
    public $ingredienti;
    public $prezzo;
    public $immagine;
    public $disponibile; //Booleano, indica se il prodotto è disponibile o meno

    function getId() {
        return $this->id;
    }

    function getId_categoria() {
        return $this->id_categoria;
    }

    function getNome() {
        return $this->nome;
    }

    function getIngredienti() {
        return $this->ingredienti;
    }

    function getPrezzo() {
        return $this->prezzo;
    }

    function getImmagine() {
        return $this->immagine;
    }

    function getDisponibile() {
        return $this->disponibile;
    }

    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIngredienti($ingredienti) {
        $this->ingredienti = $ingredienti;
    }

    function setPrezzo($prezzo) {
        $this->prezzo = $prezzo;
    }

    function setImmagine($immagine) {
        $this->immagine = $immagine;
    }

    function setDisponibile($disponibile) {
        $this->disponibile = $disponibile;
    }

}

?>