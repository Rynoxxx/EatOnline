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
        $registrato = $CRegistrazione->checkLogin();

        if ($registrato) {
            echo 'SEI LOGGATO!';
            $this->setLogged(true);
        } else
            echo 'NON SEI LOGGATO!';

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
        $VHome = USingleton::getInstance('VHome');
        $contenuto = $this->smista();
        $VHome->impostaContenuto($contenuto);

        // Imposta il breadcrumb in modo da far vedere 'controller' e 'task' coinvolti nella richiesta HTTP
        $controller = $this->getController();
        $task = $this->getTask();
        $VHome->assign('breadcrumb', 'Controller: ' . $controller . ' , Task: ' . $task . '******************** Previous Controller: ' . $previousController . ' , Previous Task: ' . $previousTask);
        $VHome->impostaPaginaOspite();
        $VHome->mostraPagina();

        // Salva nella sessione l'attuale controller e il relativo task
        $controller = $this->getController();
        $task = $this->getTask();
        $sessione->imposta_valore('prevController', $controller);
        $sessione->imposta_valore('prevTask', $task);
    }

    /*
     * Smista le richieste ai vari controller
     */

    public function smista() {
        switch ($this->getController()) {
            case 'registrazione':
                $CRegistrazione = USingleton::getInstance('CRegistrazione');
                return $CRegistrazione->smista();
            case 'ricerca':
                $CRicerca = USingleton::getInstance('CRicerca');
                return $CRicerca->smista();
            case 'ordine':
                $COrdine = USingleton::getInstance('COrdine');
                return $COrdine->smista();
            case 'prodotto':
                $CProdotto = USingleton::getInstance('CProdotto');
                return $CProdotto->smista();
            case 'carrello':
                $CCarrello = USingleton::getInstance('CCarrello');
                return $CCarrello->smista();
            default:
                $CProdotto = USingleton::getInstance('CProdotto');
                return $CProdotto->randomItems();
        }
    }

}

?>
