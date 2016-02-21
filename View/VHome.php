<?php

/*
 * Classe VHome, estende la classe View.
 * Gestisce la visualizzazione e formattazione del sito, inoltre imposta i principali contenuti della pagina,
 * suddivisi in contenuti principali (main_content) e contenuti laterali (side_content)
 * @package View
 */

class VHome extends View {
    /*
     * Attributi della classe VHome
     * @access private
     */

    private $_main_content;
    private $_main_button = array();
    private $_side_content = array();
    private $_side_button = array();
    private $_layout = 'default';

    function __construct() {
        parent::__construct();
    }

    /**
     * Setta il layout della pagina, ovvero imposta il file .tpl che deve essere ritornato
     * @param type $_layout
     */
    function set_layout($_layout) {
        $this->_layout = $_layout;
    }

    /**
     * Ritorna il file .tpl di cui sopra
     * @return type
     */
    public function processaTemplate() {
        $contenuto = $this->fetch('home_' . $this->_layout . '.tpl');
        return $contenuto;
    }

    /*
     * Imposta il contenuto principale assegnandolo alla
     * variabile privata $_main_content della classe.
     */

    public function impostaContenuto($contenuto) {
        $this->_main_content = $contenuto;
    }

    /*
     * Assegna il contenuto al template e lo manda in output
     */

    public function mostraPagina() {
        $this->assign('right_content', $this->_side_content);
        $this->assign('tasti_laterali', $this->_side_button);
        $this->set_layout('default');
        $this->display('home_' . $this->_layout . '.tpl');
    }

    /**
     * Imposta la pagina per gli utenti non registrati/autenticati
     */
    public function impostaPaginaOspite() {
        $this->assign('title', 'EatOnline');
        $this->assign('content_title', 'Benvenuto ospite');
        $this->assign('main_content', $this->_main_content);
        $this->assign('menu', $this->_main_button);
        $this->aggiungiModuloLogin();
        $this->aggiungiTastoRegistrazione();
    }

    public function impostaPaginaLoggato($utente, $ordine) {
        $this->assign('title', 'EatOnline');
        if ($utente['tipo_utente'] == 'admin') {
            $this->assign('content_title', 'Ciao ' . $utente['nome'] . ' (ADMIN)');
        } else {
            $this->assign('content_title', 'Benvenuto ' . $utente['nome']);
        }
        $this->assign('main_content', $this->_main_content);
        $this->assign('menu', $this->_main_button);
        $this->aggiungiModuloLogin($utente);
        $this->aggiungiCarrelloLaterale($ordine);
    }

    /**
     * Aggiunge il carrello laterale che verrà modificato runtime con ajax
     * Solo per gli utenti loggati
     * @param type $ordine
     */
    public function aggiungiCarrelloLaterale($ordine) {
        $VCarrello = USingleton::getInstance('VCarrello');
        $VCarrello->set_layout('laterale');
        $VCarrello->assign('ordine', $ordine);
        $carrello_laterale = $VCarrello->processaTemplate();
        $this->_side_content['carrello_laterale'] = $carrello_laterale;
    }

    /*
     * Aggiunge i tasti per la registrazione e l'attivazione
     * Per utenti non registrati o autenticati
     */

    public function aggiungiTastoRegistrazione() {
        $menu_registrazione = array();
        $menu_registrazione[] = array('testo' => 'Attivati', 'link' => '?controller=registrazione&task=modulo_attivazione');
        $this->_side_button[] = array_merge(array('testo' => 'Registrati', 'link' => '?controller=registrazione&task=registra', 'submenu' => $menu_registrazione), $this->_side_button);
    }

    /*
     * Aggiunge il modulo di login nella pagina principale
     * Per gli utenti non autenticati
     */

    public function aggiungiModuloLogin($utente = null) {
        $VRegistrazione = USingleton::getInstance('VRegistrazione');
        $VRegistrazione->set_layout('default');
        if ($utente) {
            $VRegistrazione->assign('utente', $utente);
        }
        $modulo_login = $VRegistrazione->processaTemplate();
        $this->_side_content['modulo_login'] = $modulo_login;
    }

}

?>
