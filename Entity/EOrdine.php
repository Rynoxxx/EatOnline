<?php

class EOrdine {

    public $id;
    public $data;
    public $confermato;
    public $pagato; //Non viene usato
    public $id_utente; //Numero di telefono dell'utente che ha fatto l'ordine
    public $id_carta; //Oggetto ECartaCredito
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

    function getIdUtente() {
        return $this->id_utente;
    }

    function getIdCarta() {
        return $this->id_carta;
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

    function setId_utente($id_utente) {
        $this->id_utente = $id_utente;
    }

    function setCarta_credito($carta_credito) {
        $this->carta_credito = $carta_credito;
    }

    function set_ordine_item($_ordine_item) {
        $this->_ordine_item = $_ordine_item;
    }

}

?>
