<?php

class FCategoria extends Fdb {

    public function __construct() {
        $this->_table = 'categoria';
        $this->_key = 'id';
        $this->_auto_increment = TRUE;
        $this->_return_class = 'ECategoria';
        USingleton::getInstance('Fdb');
    }

    public function nameToId($nome) {
        $query = 'SELECT * FROM ' . $this->_table . ' WHERE nome = \'' . $nome . '\'';
        $this->query($query);
        $categoria = $this->getObject();
        $id = $categoria->getID();
        return $id;
    }

}

?>
