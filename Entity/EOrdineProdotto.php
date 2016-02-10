<?php

class EOrdineProdotto {

    public $id_prodotto;
    public $id_ordine; //ID dell'ordine di appartenenza
    public $quantita; 

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
