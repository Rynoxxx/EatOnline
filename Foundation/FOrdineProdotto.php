<?php

class FOrdineProdotto extends Fdb {

    public function __construct() {
        $this->_table = 'ordine_prodotto';
        $this->_key = array("id_ordine","id_prodotto");
        $this->_auto_increment = FALSE;
        $this->_return_class = 'EOrdineProdotto';
        USingleton::getInstance('Fdb');
    }


    public function getProdottiByOrdine($id_ordine){
      $query = 'SELECT * FROM ' . $this->_table. '
         WHERE id_ordine = \'' . $id_ordine . '\' ';
      $this->query($query);
      $ordineProdotti = $this->getObjectArray();
      return $ordineProdotti;
    }


}

?>
