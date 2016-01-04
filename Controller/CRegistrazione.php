<?php

/*
 * Classe CRegistrazione
 */

class CRegistrazione extends Controller {

    private $_numero_tel = null;
    private $_password = null;
    private $_errore = array();

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
        $numero = $dati_registrazione['numero_tel'];
        $result = $this->checkUtente($numero);

        $registrato = false;

        if ($result == false) {
            //Utente non esistente
            if ($dati_registrazione['password'] == $dati_registrazione['password_1']) {
                unset($dati_registrazione['password_1']);
                
                foreach ($dati_registrazione as $key => $value) {
                    $utente->$key = $dati_registrazione[$key];
                }
                
                $utente->generaCodiceAttivazione();
                $FUtente = new FUtente();
                $result = $FUtente->store($utente);
                $this->emailAttivazione($utente);
                $registrato = true;
            } else {
                $this->_errore = 'Le password immesse non coincidono';
            }
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

    /**
     * Controlla se un utente è gia inserito nel database
     * @param type $numero
     * @return type
     */
    public function checkUtente($numero) {
        $FUtente = new FUtente();
        $result = $FUtente->load($numero);
        return $result;
    }

    /**
     * Invia una email contenente il link per l'attivazione di un utente appena registrato
     * @global type $config
     * @param EUtente $utente
     * @return type
     */
    
    public function emailAttivazione(EUtente $utente) {
        global $config;
        $view = USingleton::getInstance('VRegistrazione');
        $view->set_layout('email_attivazione');
        $view->assign('numero', $utente->numero_tel);
        $view->assign('nome_cognome', $utente->nome.' '.$utente->cognome);
        $view->assign('codice_attivazione', $utente->getCodiceAttivazione());
        $view->assign('email_webmaster', $config['email_webmaster']);
        $view->assign('url', $config['url_eatonline']);
        $corpo_email = $view->processaTemplate();
        $email = USingleton::getInstance('UEmail');
        return $email->invia_email($utente->email, $utente->nome.' '.$utente->cognome, 'Attivazione account EatOnline', $corpo_email);
    }

    /**
     * 
     * @return type
     */
    public function attivazione() {
        $view = USingleton::getInstance('VRegistrazione');
        $view->set_layout('attivazione');
        return $view->processaTemplate();
    }

    /**
     * 
     */
    public function checkAttivazione() {
        $utente = $this->checkUtente($_REQUEST['numero_tel']);
        if ($utente != NULL) {
            if ($utente->codice_attivazione == $_REQUEST['codice_attivazione']) {
                $utente->stato = TRUE;
                $FUtente = USingleton::getInstance('FUtente');
                $FUtente->update($utente);
            } else {
                debug('codice di attivazione non corretto');
                $this->_errore = 'ATTIVAZIONE NON CORRETTA';
            }
        } else {
            debug('utente non esistente');
            $this->_errore = 'UTENTE NON ESISTENTE';
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
                return $this->checkAttivazione();
                break;
            case 'salva':
                return $this->creaUtente();
                break;
        }
    }

}
?>

