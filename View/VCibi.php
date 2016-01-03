<?php

class VCibi extends View {
    
    private $_layout='default';
    
    function set_layout($_layout) {
        $this->_layout = $_layout;
    }
    
    public function processaTemplate() {
        $contenuto=  $this->fetch('cibi_'.$this->_layout.'.tpl');
        return $contenuto;
    }
    
}

?>

