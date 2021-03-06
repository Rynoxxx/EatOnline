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
            $this->setAdmin($loggato->isUserAdmin());
        } else
            debug('NON SEI LOGGATO!');

        // Recupera dalla sessione il controller e il task precedenti
        $sessione = USingleton::getInstance('USession');
        $previousController = $sessione->leggi_valore('prevController');
        $previousTask = $sessione->leggi_valore('prevTask');

        // Se il controller è REGISTRAZIONE e il task AUTENTICA o LOGOUT, imposto controllori e task precedenti
        if (($this->getController() == 'registrazione') && ($this->getTask() == 'autentica' || $this->getTask() == 'logout')) {
            if (($previousController == 'registrazione') && ($previousTask == 'salva' || $previousTask == 'registra' || $previousTask == 'modulo_attivazione')) {
                if ($this->isLogged() || ($previousTask == 'salva')) {
                    $_REQUEST['controller'] = '';
                    $_REQUEST['task'] = '';
                } else {
                    $_REQUEST['controller'] = $previousController;
                    $_REQUEST['task'] = $previousTask;
                }
            } else {
                $_REQUEST['controller'] = $previousController;
                $_REQUEST['task'] = $previousTask;
            }
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
                $CUtente = USingleton::getInstance('CUtente');
                $utente = $CUtente->infoUtente();
                $COrdine = USingleton::getInstance('COrdine');
                $ordine = $COrdine->infoOrdine();
                $VHome->impostaPaginaLoggato($utente, $ordine);
            } else {
                $VHome->impostaPaginaOspite();
            }

            $VHome->mostraPagina();
        }

        // Salva nella sessione gli attuali controller e task che serviranno poi nella prossima chiamata di impostaPagina()
        if ($this->isAjax()) {
            $sessione->imposta_valore('prevController', $previousController);
            $sessione->imposta_valore('prevTask', $previousTask);
        } else {
            $sessione->imposta_valore('prevController', $controller);
            $sessione->imposta_valore('prevTask', $task);
        }
    }

    /**
     * Mostra la pagine dei contatti
     * @return type
     */
    public function contatti() {
        $view = USingleton::getInstance('VHome');
        $view->set_layout('contatti');
        $view->assign('content_title', 'Contatti');
        return $view->processaTemplate();
    }

    /**
     * Smista fra le funzioni di CHome a seconda del task
     * @return type
     */
    public function smistaInHome() {
        $task = $this->getTask();
        switch ($task) {
            case 'contatti':
                return $this->contatti();
        }
    }

    /**
     * Smista le richieste ai vari controller
     * @return type
     */
    public function smista() {
        switch ($this->getController()) {
            case 'home':
                return $this->smistaInHome();
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
            case 'utente':
                $CUtente = USingleton::getInstance('CUtente');
                return $CUtente->smista();
            default:
                $CProdotto = USingleton::getInstance('CProdotto');
                return $CProdotto->randomItems();
        }
    }

}

?>
