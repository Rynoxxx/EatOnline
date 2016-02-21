<?php

class FProdotto extends Fdb {

    public function __construct() {
        $this->_table = 'prodotto';
        $this->_key = 'id';
        $this->_auto_increment = TRUE;
        $this->_return_class = 'EProdotto';
        USingleton::getInstance('Fdb');
    }

    /**
     * Ritorna i prodotti appartenenti alla categoria passata come parametro. Se inoltre è impostato il paramentro
     * $limit, verranno selezionati solo i prodotti indicati dal parametro stesso (utilizzato per
     * l'impaginazione).
     * @param type $id_categoria
     * @param type $limit
     * @return type
     */
    public function categoryItems($id_categoria, $limit='') {
        $query = 'SELECT * FROM ' . $this->_table . ' WHERE id_categoria = \'' . $id_categoria . '\' ';
        if ($limit != '') {
            $query.= 'LIMIT ' . $limit . ' ';
        }
        $this->query($query);
        $prodotti = $this->getObjectArray();
        return $prodotti;
    }
    
    /**
     * Ritorna tutti i prodotti presenti nel database. Se inoltre è impostato il paramentro
     * $limit, verranno selezionati solo i prodotti indicati dal parametro stesso (utilizzato per
     * l'impaginazione).
     * @param type $limit
     * @return type
     */
    public function allItems($limit='') {
        $query = 'SELECT * FROM ' . $this->_table;
        if ($limit != '') {
            $query.= ' LIMIT ' . $limit . ' ';
        }
        $this->query($query);
        $items = $this->getObjectArray();
        return $items;
    }
    
}

?>