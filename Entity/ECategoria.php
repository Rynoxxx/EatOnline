<?php

class ECategoria {

    public $id;
    public $nome;
    public $descrizione;
    public $immagine;

    function getID() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescrizione() {
        return $this->descrizione;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescrizione($descrizione) {
        $this->descrizione = $descrizione;
    }

}

?>