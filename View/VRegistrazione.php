<?php

/*
 * Classe VRegistrazione, estende la classe View
 */

class VRegistrazione extends View {
    /*
     * Attributi della classe VRegistrazione
     * @access private
     */

    private $_layout = 'default';

    /*
     * Funzioni della classe VHome
     */

    function __construct() {
        parent::__construct();
        $this->assign('errore', '');
    }

    /*
     * Imposta il layout
     */

    function set_layout($_layout) {
        $this->_layout = $_layout;
    }

    public function processaTemplate() {
        $contenuto = $this->fetch('registrazione_' . $this->_layout . '.tpl');
        return $contenuto;
    }

    public function setErrore($errore) {
        $this->assign('errore', $errore);
    }

    /*
     * Restituisce l'array contenente i dati immessi durante la registrazione
     */

    public function getDatiRegistrazione() {
        $dati_richiesti = array('numero_tel', 'password', 'password_1', 'nome', 'cognome', 'via', 'citta', 'cap', 'email');
        $dati = array();
        foreach ($dati_richiesti as $dato) {
            if (isset($_REQUEST[$dato]))
                $dati[$dato] = $_REQUEST[$dato];
        }
        return $dati;
    }

}

?>
