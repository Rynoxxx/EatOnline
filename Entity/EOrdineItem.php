<?php

class EOrdineItem {

    public $id;
    public $id_ordine; //ID dell'ordine di appartenenza
    public $quantità;
    public $prodotto; //Oggetto della classe EProdotto

    function getID() {
        return $this->id;
    }

    function getID_ordine() {
        return $this->id_ordine;
    }

    function getQuantità() {
        return $this->quantità;
    }

    function getProdotto() {
        return $this->prodotto;
    }

    function setID_ordine($id_ordine) {
        $this->ID_ordine = $id_ordine;
    }

    function setQuantità($quantità) {
        $this->quantità = $quantità;
    }

    function setProdotto($prodotto) {
        $this->prodotto = $prodotto;
    }

}

?>