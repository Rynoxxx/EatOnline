<?php

class CProdotto extends Controller {

    public function mostraProdotti() {
        $view = USingleton::getInstance('VCibo');
        $view->set_layout('default');
        return $view->processaTemplate();
    }

    public function smista() {
        switch ($this->getTask()) {
            case 'cibo':
                return $this->visualizzaCibi();
        }
    }

}

?>
       