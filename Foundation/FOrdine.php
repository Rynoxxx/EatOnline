<?php

class FOrdine extends Fdb {

    public function __construct() {
        $this->_table = 'ordine';
        $this->_key = 'id';
        $this->_auto_increment = TRUE;
        $this->_return_class = 'EOrdine';
        USingleton::getInstance('Fdb');
    }

    /**
     * Ritorna un Ordine in base all Id Utente. Ritorna solo il primo Ordine Non Confermato
     * @param type $id_utente
     * @return type
     */
    public function ultimoOrdine($id_utente) {
        $query = 'SELECT * FROM ' . $this->_table . ' WHERE id_utente = \'' . $id_utente . '\' AND confermato=\'0\' ';
        $this->query($query);
        $prodotti = $this->getObjectArray();
        return $prodotti[0];
    }

    /**
     * Aggiunge un prodotto ad un ordine
     * @param [type] $id_ordine   [description]
     * @param [type] $id_prodotto [description]
     */
    public function addProdotto($id_ordine,$id_prodotto){
      $FOrdineProdotto = USingleton::getInstance('FOrdineProdotto');
      $ordine_prodotto = $FOrdineProdotto->load($id_ordine,$id_prodotto);
      if($ordine_prodotto){
         $ordine_prodotto->incrementa();
         $FOrdineProdotto->update($ordine_prodotto);
      }else{
         $ordine_prodotto = new EOrdineProdotto();
         $ordine_prodotto->id_ordine = $id_ordine;
         $ordine_prodotto->id_prodotto = $id_prodotto;
         $ordine_prodotto->quantita = 1;
         $FOrdineProdotto->store($ordine_prodotto);
      }
    }

    /**
     * Rimuove un prodotto da un ordine
     * @param  [type] $id_ordine   [description]
     * @param  [type] $id_prodotto [description]
     * @return [type]              [description]
     */
    public function removeProdotto($id_ordine,$id_prodotto){
      $FOrdineProdotto = USingleton::getInstance('FOrdineProdotto');
      $ordine_prodotto = $FOrdineProdotto->load($id_ordine,$id_prodotto);
      if($ordine_prodotto){
         $ordine_prodotto->decrementa();
         if($ordine_prodotto->getQuantita()<=0){
           $FOrdineProdotto->delete($ordine_prodotto);
         }else{
           $FOrdineProdotto->update($ordine_prodotto);
         }
      }
    }

    /**
     * Lista prodotti di un ordine
     * @param  [type] $id_ordine [description]
     * @return [type]            [description]
     */
    public function getOrdineProdotti($id_ordine){
      $FOrdineProdotto = USingleton::getInstance('FOrdineProdotto');
      return $FOrdineProdotto->getProdottiByOrdine($id_ordine);
    }

    /**
     * Ritorna tutti i prodotti presenti nel database
     * @return type
     */
    public function allItems() {
        $query = 'SELECT * FROM ' . $this->_table;
        $this->query($query);
        $items = $this->getObjectArray();
        return $items;
    }

}

?>
