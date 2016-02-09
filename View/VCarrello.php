<?php

class VCarrello extends View {

    private $_layout = 'default';

    function set_layout($_layout) {
        $this->_layout = $_layout;
    }

    public function processaTemplate() {
        $contenuto = $this->fetch('carrello_' . $this->_layout . '.tpl');
        return $contenuto;
    }

  

}
?>
