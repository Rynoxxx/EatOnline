<?php

class FProdotto extends Fdb {

    public function __construct() {
        $this->_table = 'prodotto';
        $this->_key = 'id';
        $this->_auto_increment = TRUE;
        $this->_return_class = 'EProdotto';
        USingleton::getInstance('Fdb');
    }

    public function prodottiCategoria($id_categoria) {
        $query = 'SELECT * FROM ' . $this->_table . ' WHERE id_categoria = \'' . $id_categoria . '\'';
        $this->query($query);
        $prodotti = $this->getObjectArray();
        return $prodotti;
    }

}

?>