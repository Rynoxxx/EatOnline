<?php

class VProdotto extends View {

    private $_layout = 'default';

    function set_layout($_layout) {
        $this->_layout = $_layout;
    }

    public function processaTemplate() {
        $contenuto = $this->fetch('prodotto_' . $this->_layout . '.tpl');
        return $contenuto;
    }
    
    public function impostaDati($chiave, $valore) {
        $this->assign($chiave, $valore);
    }

}
?>

