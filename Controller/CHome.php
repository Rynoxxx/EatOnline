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
        }
        else echo 'NON SEI LOGGATO!';
        
        
        $VHome = USingleton::getInstance('VHome');

        // Imposta il contenuto della pagina
        $contenuto = $this->smista();
        $VHome->impostaContenuto($contenuto);

        // Impossta il breadcrumb in modo da far vedere 'controller' e 'task' coinvolti nella richiesta HTTP
        $controller = $this->getController();
        $task = $this->getTask();
        $VHome->assign('breadcrumb', 'Controller:'.$controller.' , Task:'.$task);

        $VHome->impostaPaginaOspite();
        $VHome->mostraPagina();
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
            default:
                $ciao="ciao, case default dello switch CHome";
                return $ciao;
                /*$CRicerca = USingleton::getInstance('CRicerca');
                return $CRicerca->Ultimi_arrivi();*/
        }
    }

}

?>