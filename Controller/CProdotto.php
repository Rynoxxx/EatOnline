<?php

class CProdotto extends Controller {

    private $_items_for_page = 10;

    /*
     * Questa funzione ha come argomento la categoria da visualizzare.
     * Visualizza quindi tutti i prodotti appartenenti alla categoria desiderata.
     */

    public function visualizza($categoria) {
        $FCategoria = USingleton::getInstance('FCategoria');
        $id_categoria = $FCategoria->nameToId($categoria);
        $FProdotto = USingleton::getInstance('FProdotto');
        $prodotti = $FProdotto->categoryItems($id_categoria);
        $VProdotto = USingleton::getInstance('VProdotto');
        $limit = $VProdotto->getPage() * $this->_items_for_page . ' , ' . $this->_items_for_page;
        $num_items = count($prodotti);
        $num_pages = ceil($num_items / $this->_items_for_page);
        $displayed_items = $FProdotto->categoryItems($id_categoria, $limit);
        $VProdotto->impostaDati('num_pages', $num_pages);
        $categ_rpl = str_replace("_", " ", $categoria);
        $categ_rpl_up = ucfirst($categ_rpl);
        $VProdotto->impostaDati('content_title', $categ_rpl_up);
        $VProdotto->impostaDati('prodotti', $displayed_items);
        $VProdotto->impostaDati('task', $this->getTask());
        $VProdotto->set_layout('list');
        return $VProdotto->processaTemplate();
    }

    public function all() {
        $FProdotto = USingleton::getInstance('FProdotto');
        $prodotti = $FProdotto->allItems();
        
        $VProdotto = USingleton::getInstance('VProdotto');
        $limit = $VProdotto->getPage() * $this->_items_for_page . ' , ' . $this->_items_for_page;
        $num_items = count($prodotti);
        $num_pages = ceil($num_items / $this->_items_for_page);
        $displayed_items = $FProdotto->allItems($limit);
        $VProdotto->impostaDati('content_title', 'Modifica i prodotti');
        $VProdotto->impostaDati('num_pages', $num_pages);
        $VProdotto->impostaDati('prodotti', $displayed_items);
        $VProdotto->impostaDati('task', $this->getTask());
        /*$VProdotto = USingleton::getInstance('VProdotto');*/
        /*$VProdotto->impostaDati('prodotti', $prodotti);*/
        $VProdotto->set_layout('list_small');
        return $VProdotto->processaTemplate();
    }


    public function randomItems() {
        $FProdotto = USingleton::getInstance('FProdotto');
        $items = $FProdotto->allItems();
        $rand_id = array_rand($items, $this->_items_for_page);
        for ($i = 0; $i < $this->_items_for_page; $i++) {
            $displayed_items[$i] = $items[$rand_id[$i]];
        }
        $VProdotto = USingleton::getInstance('VProdotto');
        $VProdotto->impostaDati('num_pages', 1);
        $VProdotto->impostaDati('content_title', "Home");
        $VProdotto->impostaDati('prodotti', $displayed_items);
        $VProdotto->impostaDati('task', $this->getTask());
        $VProdotto->set_layout('list');
        return $VProdotto->processaTemplate();
    }

    public function salva(){
      $prodotto = $_POST;
      $prodotto->id = $_POST->id;
      $FProdotto = USingleton::getInstance('FProdotto');
      $result = $FProdotto->update($prodotto);
      if($this->isAjax()){
        echo $this->respondeAjaxObject($result);
      }
    }

    public function smista() {
        list($azione, $categoria) = explode('.', $this->getTask());
        if ($azione == 'lista') {
            return $this->visualizza($categoria);
        }else if ($azione == 'all') {
            return $this->all();
        }else if ($azione == 'salva') {
            return $this->salva();
        } else {
            switch ($this->getTask()) {
                default :
                    return 'Da aggiungere';
            }
        }
    }

}

?>
