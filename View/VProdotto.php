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

  

    /**
     * Ritorna il numero della pagina, passato tramite GET o POST. Usato per la visualizzazione dei prodotti
     * @return int
     */
    public function getPage() {
        if (isset($_REQUEST['page'])) {
            return $_REQUEST['page'];
        } else
            return 0;
    }

}
?>
