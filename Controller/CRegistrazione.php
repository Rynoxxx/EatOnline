<?php

/*
 * Classe CRegistrazione
 */

class CRegistrazione extends Controller {

    private $_numero_tel = null;
    private $_password = null;
    private $_errore = '';

    /**
     * Controlla se l'utente è loggato
     * @return boolean
     */
    public function checkLogin() {
        $controller = $this->getController();
        $task = $this->getTask();

        //Controlla se ci sono i dati di Logout nella REQUEST
        if ($controller == 'registrazione' && $task == 'logout') {
            $this->logout();
        }

        //Controlla se ci sono i dati di Login nella REQUEST
        if ($controller == 'registrazione' && $task == 'autentica') {
            $this->login($_REQUEST['numero_tel'], $_REQUEST['password']);
        }

        //Controlla se c'è un logged user nella SESSION
        debug('Controlla se cè un logged user nella SESSION');
        $sessione = USingleton::getInstance('USession');
        $result = $sessione->leggi_valore('numero_tel');
        debug($_SESSION);
        if ($result != NULL) {
            return true;
        }
        return false;
    }

    /*
     * Effettua il Login: controlla se una coppia numero_tel e password corrispondono ad un utente registrato e in tal caso
     * imposta la sessione per l'utente autenticato
     * @access public
     * @return mixed
     */

    public function login($numero, $password) {
        $FUtente = new FUtente();
        $utente = $FUtente->load($numero); // Ritorna un oggetto della classe EUtente
        if ($utente != FALSE) {
            if ($password == $utente->password) {
                if ($utente->isUserActivated()) {
                    // Account attivato
                    // Imposta la sessione per l'utente in questione
                    $session = USingleton::getInstance('USession');
                    $session->imposta_valore('numero_tel', $numero);
                    return $utente;
                } else {
                    $view = USingleton::getInstance('VRegistrazione');
                    $view->setErrore('UTENTE NON ATTIVO');
                }
            } else {
                $view = USingleton::getInstance('VRegistrazione');
                $view->setErrore('PASSWORD ERRATA');
            }
        }
        return false;
    }

    /*
     * Effettua il Logout
     */

    public function logout() {
        $session = USingleton::getInstance('USession');
        $session->cancella_valore('numero_tel');
        return true;
    }

    /*
     * Mostra il modulo di registrazione
     */

    public function moduloRegistrazione() {
        $view = USingleton::getInstance('VRegistrazione');
        $view->set_layout('modulo');
        return $view->processaTemplate();
    }

    /**
     * Crea un oggetto della classe EUtente e lo memorizza nel database
     */
    public function creaUtente() {
        $view = USingleton::getInstance('VRegistrazione');
        $dati_registrazione = $view->getDatiRegistrazione();

        $utente = new EUtente();
        $FUtente = new FUtente();
        $result = $FUtente->load($dati_registrazione['numero_tel']);
        $registrato = false;

        if ($result == false) {
            //Utente non esistente
            /* if ($dati_registrazione['password'] == $dati_registrazione['password']) {
              unset($dati_registrazione['password_1']);
              $chiavi = array_keys($dati_registrazione);
              $i = 0;
              foreach ($dati_registrazione as $dato) {
              $utente->$chiavi[$i] = $dato;
              $i++;
              }
              $utente->generaCodiceAttivazione();
              $FUtente->store($utente); */
            $registrato = true;
            /* }
              else {
              $this->_errore = 'Le password immesse non coincidono';
              } */
        } else {
            //Utente già esistente
            $this->_errore = 'Utente già registrato';
        }
        return $this->checkReg($registrato);
    }

    public function checkReg($registrato) {
        $view = USingleton::getInstance('VRegistrazione');
        if (!$registrato) {
            $view->setErrore($this->_errore);
            $this->_errore = '';
            $view->set_layout('problemi');
            $result = $view->processaTemplate();
            $view->set_layout('modulo');
            $result.= $view->processaTemplate();
            return $result;
        } else {
            $view->set_layout('conferma');
            return $view->processaTemplate();
        }
    }

    /*
     * A seconda del task, questo metodo smista le richieste ai vari metodi della classe.
     */

    public function smista() {
        switch ($this->getTask()) {
            case 'registra':
                return $this->moduloRegistrazione();
                break;
            case 'attivazione':
                return $this->attivazione();
                break;
            case 'salva':
                return $this->creaUtente();
                break;
        }
    }

}
?>

