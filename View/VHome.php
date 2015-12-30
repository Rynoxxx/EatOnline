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
    private $_main_button=array();
    private $_side_content;
    private $_side_button=array();
    private $_layout='default';
    
    
    function __construct() {
        parent::__construct();
    }
    
    /*
     * Funzioni della classe VHome
     */
    
    /*
     * Imposta il contenuto principale assegnandolo alla
     * variabile privata $_main_content della classe.
     */
    public function impostaContenuto($contenuto) {
        $this->_main_content=$contenuto;
    }
    
    /*
     * Assegna il contenuto al template e lo manda in output
     */
    public function mostraPagina() {
        $this->assign('right_content', $this->_side_content);
        $this->assign('tasti_laterali', $this->_side_button);
        $this->display('home_'.$this->_layout.'.tpl');
    }
    
    /*
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
    
    /*
     * Aggiunge i tasti per la registrazione e l'attivazione
     * Per utenti non registrati o autenticati
     */
    public function aggiungiTastoRegistrazione() {
        $menu_registrazione=array();
        $menu_registrazione[]=array('testo'=>'Attivati', 'link'=>'?controller=registrazione&task=attivazione');
        $this->_side_button[]=  array_merge(array('testo'=>'Registrati', 'link'=>'?controller=registrazione&task=registra', 'submenu'=>$menu_registrazione), $this->_side_button);
    }
    
    /*
     * Aggiunge il modulo di login nella pagina principale
     * Per gli utenti non autenticati
     */
    public function aggiungiModuloLogin() {
        $VRegistrazione=  USingleton::getInstance('VRegistrazione');
        $VRegistrazione->set_layout('default');
        $modulo_login=$VRegistrazione->processaTemplate();
        $this->_side_content=$modulo_login;        
    }
    
}

?>


