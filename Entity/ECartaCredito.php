<?php

class ECartaCredito {

    public $id;
    public $nome_titolare;
    public $cognome_titolare;
    public $data_scadenza;
    public $numero;
    public $ccv;

    function getID() {
        return $this->id;
    }

    function getNome_titolare() {
        return $this->nome_titolare;
    }

    function getCognome_titolare() {
        return $this->cognome_titolare;
    }

    function getData_scadenza() {
        return $this->data_scadenza;
    }

    function getNumero() {
        return $this->numero;
    }

    function getCcv() {
        return $this->ccv;
    }

    function setNome_titolare($nome_titolare) {
        $this->nome_titolare = $nome_titolare;
    }

    function setCognome_titolare($cognome_titolare) {
        $this->cognome_titolare = $cognome_titolare;
    }

    function setData_scadenza($data_scadenza) {
        $this->data_scadenza = $data_scadenza;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setCcv($ccv) {
        $this->ccv = $ccv;
    }

}

?>