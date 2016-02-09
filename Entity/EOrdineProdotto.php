<?php

class EOrdineProdotto {

    public $id_ordine; //ID dell'ordine di appartenenza
    public $id_prodotto;
    public $quantita; //Oggetto della classe EProdotto

    function getIdProdotto(){
      return $this->id_prodotto;
    }

    function getQuantita() {
        return $this->quantita;
    }

    function setQuantita($value){
        $this->quantita = $value;
    }

    function incrementa(){
        $this->setQuantita($this->getQuantita()+1);
    }

    function decrementa(){
        $this->setQuantita($this->getQuantita()-1);
    }

}

?>
