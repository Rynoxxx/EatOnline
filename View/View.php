<?php

require 'smarty/Smarty.class.php';

/*
 * Classe View
 * @access public
 * @package View
 */

class View extends Smarty {

    public function __construct() {
        parent::__construct();

        global $config;
        $this->setTemplateDir($config['smarty']['template_dir']);
        $this->setCompileDir($config['smarty']['compile_dir']);
        $this->setConfigDir($config['smarty']['config_dir']);
        $this->setCacheDir($config['smarty']['cache_dir']);

        //initalization
        $CHome = USingleton::getInstance('CHome');
        $this->assign('logged', $CHome->isLogged());
    }


    public function setLoggedUser($logged) {
        $this->assign('logged', $logged);
    }

    public function impostaDati($chiave, $valore) {
        $this->assign($chiave, $valore);
    }
}
