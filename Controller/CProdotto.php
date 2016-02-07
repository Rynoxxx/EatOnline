<?php

class CProdotto extends Controller {
    /*
     * Questa funzione ha come argomento la categoria da visualizzare.
     * Visualizza quindi tutti i prodotti appartenenti alla categoria desiderata.
     */

    public function visualizza($categoria) {
        $FCategoria = USingleton::getInstance('FCategoria');
        $id_categoria = $FCategoria->nameToId($categoria);
        $FProdotto = USingleton::getInstance('FProdotto');
        $prodotti = $FProdotto->prodottiCategoria($id_categoria);
        $VProdotto = USingleton::getInstance('VProdotto');
        $VProdotto->impostaDati('prodotti', $prodotti);
        $VProdotto->set_layout('list');
        return $VProdotto->processaTemplate();
    }

    public function smista() {
        list($azione, $categoria) = explode('.', $this->getTask());
        if ($azione == 'lista') {
            return $this->visualizza($categoria);
        } else {
            switch ($this->getTask()) {
                default :
                    return 'Da aggiungere';
            }
        }
    }

}

?>
