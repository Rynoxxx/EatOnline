<?php

/*
 * Classe CHome
 * @package Controller
 * @access public
 */

class CHome extends Controller {
    /*
     * Controlla l'autenticazione ed imposta la pagina.
     */

    public function impostaPagina() {

        $CRegistrazione = USingleton::getInstance('CRegistrazione');
        $loggato = $CRegistrazione->checkLogin();

        if ($loggato) {
            debug('SEI LOGGATO!');
            $this->setLogged(true);
        } else
            debug('NON SEI LOGGATO!');

        // Recupera dalla sessione il controller e il task precedenti
        $sessione = USingleton::getInstance('USession');
        $previousController = $sessione->leggi_valore('prevController');
        $previousTask = $sessione->leggi_valore('prevTask');

        // Se il controller è REGISTRAZIONE e il task AUTENTICA o LOGOUT, imposto controllori e task precedenti
        if (($this->getController() == 'registrazione') && ($this->getTask() == 'autentica' || $this->getTask() == 'logout')) {
            $_REQUEST['controller'] = $previousController;
            $_REQUEST['task'] = $previousTask;
        }

        // Imposta il contenuto della pagina
        $contenuto = $this->smista();

        $controller = $this->getController();
        $task = $this->getTask();

        //Se non è AJAX risponde la pagina web secondo il flusso normale, altrimenti non risponde niente (pagina bianca)
        if (!$this->isAjax()) {
            $VHome = USingleton::getInstance('VHome');
            $VHome->impostaContenuto($contenuto);
            // Imposta il breadcrumb in modo da far vedere 'controller' e 'task' coinvolti nella richiesta HTTP
            $VHome->assign('breadcrumb', 'Controller: ' . $controller . ' , Task: ' . $task . '******************** Previous Controller: ' . $previousController . ' , Previous Task: ' . $previousTask);

            if ($loggato) {
                $numero_utente = $sessione->leggi_valore('numero_tel');
                debug($numero_utente);
                $VHome->impostaPaginaLoggato($numero_utente);
            } else {
                $VHome->impostaPaginaOspite();
            }

            $VHome->mostraPagina();
        }

        // Salva nella sessione l'attuale controller e il relativo task
        if ($this->isAjax()) {
            $sessione->imposta_valore('prevController', $previousController);
            $sessione->imposta_valore('prevTask', $previousTask);
        } else {
            $sessione->imposta_valore('prevController', $controller);
            $sessione->imposta_valore('prevTask', $task);
        }
    }

    /*
     * Smista le richieste ai vari controller
     */

    public function smista() {
        switch ($this->getController()) {
            case 'registrazione':
                $CRegistrazione = USingleton::getInstance('CRegistrazione');
                return $CRegistrazione->smista();
            case 'prodotto':
                $CProdotto = USingleton::getInstance('CProdotto');
                return $CProdotto->smista();
            case 'carrello':
                $CCarrello = USingleton::getInstance('CCarrello');
                return $CCarrello->smista();
            case 'ordine':
                $COrdine = USingleton::getInstance('COrdine');
                return $COrdine->smista();
            default:
                $CProdotto = USingleton::getInstance('CProdotto');
                return $CProdotto->randomItems();
        }
    }

}

?>
