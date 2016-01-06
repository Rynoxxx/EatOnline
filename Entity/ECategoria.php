<?php

class ECategoria {

    public $id;
    public $nome_categoria;
    public $descrizione;
    public $immagine;

    function getID() {
        return $this->id;
    }

    function getNome_categoria() {
        return $this->nome_categoria;
    }

    function getDescrizione() {
        return $this->descrizione;
    }

    function setNome_categoria($nome_categoria) {
        $this->nome_categoria = $nome_categoria;
    }

    function setDescrizione($descrizione) {
        $this->descrizione = $descrizione;
    }

}

?>