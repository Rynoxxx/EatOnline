<?php

class CCibi extends Controller {
    
    public function mostraProdotti() {
        $view = USingleton::getInstance('VCibi');
        $view->set_layout('default');
        return $view->processaTemplate();
    }


    public function smista() {
        switch ($this->getTask()) {
            default :
                return $this->mostraProdotti();
        }
    }
    
}

?>
       