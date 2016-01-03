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

        // Recupera dalla sessione il controller e il task precedenti
        $sessione = USingleton::getInstance('USession');
        $previousController = $sessione->leggi_valore('prevController');
        $previousTask = $sessione->leggi_valore('prevTask');

        if ($registrato) {
            echo 'SEI LOGGATO!';
            $this->setLogged(true);
        } else
            echo 'NON SEI LOGGATO!';

        // Se il controller è REGISTRAZIONE e il task AUTENTICA o LOGOUT, imposto controllori e task precedenti
        if (($this->getController() == 'registrazione') && ($this->getTask() == 'autentica' || $this->getTask() == 'logout')) {
            $_REQUEST['controller'] = $previousController;
            $_REQUEST['task'] = $previousTask;
        }

        // Imposta il contenuto della pagina
        $VHome = USingleton::getInstance('VHome');
        $contenuto = $this->smista();
        $VHome->impostaContenuto($contenuto);

        // Impossta il breadcrumb in modo da far vedere 'controller' e 'task' coinvolti nella richiesta HTTP
        $controller = $this->getController();
        $task = $this->getTask();
        $VHome->assign('breadcrumb', 'Controller: ' . $controller . ' , Task: ' . $task . ' ------------------------ Previous Controller: ' . $previousController . ' , Previous Task: ' . $previousTask);
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
                break;
            case 'ricerca':
                $CRicerca = USingleton::getInstance('CRicerca');
                return $CRicerca->smista();
                break;
            case 'ordine':
                $COrdine = USingleton::getInstance('COrdine');
                return $COrdine->smista();
                break;
            case 'cibi':
                $CCibi = USingleton::getInstance('CCibi');
                return $CCibi->smista();
            default:
                $ciao = "case default dello switch CHome";
                return $ciao;
            /* $CRicerca = USingleton::getInstance('CRicerca');
              return $CRicerca->Ultimi_arrivi(); */
        }
    }

}

?>