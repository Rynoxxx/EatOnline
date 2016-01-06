<?php

class EOrdine {

    public $id;
    public $data;
    public $confermato;
    public $pagato;
    public $utente;
    public $carta_credito; //Oggetto ECartaCredito
    public $_ordine_item = array(); //Array di oggetti EOrdineItem

    function getId() {
        return $this->id;
    }

    function getData() {
        return $this->data;
    }

    function getConfermato() {
        return $this->confermato;
    }

    function getPagato() {
        return $this->pagato;
    }

    function getUtente() {
        return $this->utente;
    }

    function getCarta_credito() {
        return $this->carta_credito;
    }

    function get_ordine_item() {
        return $this->_ordine_item;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setConfermato($confermato) {
        $this->confermato = $confermato;
    }

    function setPagato($pagato) {
        $this->pagato = $pagato;
    }

    function setUtente($utente) {
        $this->utente = $utente;
    }

    function setCarta_credito($carta_credito) {
        $this->carta_credito = $carta_credito;
    }

    function set_ordine_item($_ordine_item) {
        $this->_ordine_item = $_ordine_item;
    }

}

?>
