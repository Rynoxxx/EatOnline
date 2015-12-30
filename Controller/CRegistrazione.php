<?php

/*
 * Classe CRegistrazione
 */

class CRegistrazione extends Controller {

    private $_numeroTel = null;
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
        $sessione = USingleton::getInstance('USession');
        $result = $sessione->leggi_valore('numero_tel');
        if ($result!=NULL) {
            return true;
        }
        return false;
    }
    
    /*
     * Effettua il Login: controlla se una coppia numeroTel e password corrispondono ad un utente registrato e in tal caso
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
    }

    /*
     * Crea un nuovo utente nel database
     */

    public function creaUtente() {
        $view = USingleton::getInstance('VRegistrazione');
        $dati_registrazione = $view->getDatiRegistrazione;
        $utente = new EUtente();
        $foundation = new FUtente();

        // Prova a caricare dal database un utente avente lo stesso numero di quello passato nel form di registrazione
        $result = $foundation->load($dati_registrazione['numero']);

        if ($result == FALSE) {
            // UTENTE NON ESISTENTE
            if ($dati_registrazione['password'] == $dati_registrazione['password_1']) {
                unset($dati_registrazione['password_1']);
                $keys = array_keys($dati_registrazione);
                $i = 0;
                foreach ($dati_registrazione as $dato) {
                    
                }
            }
        }
    }

    /*
     * Mostra il modulo di registrazione
     */

    public function moduloRegistrazione() {
        $view = USingleton::getInstance('VRegistrazione');
        $view->set_layout('modulo');
        return $view->processaTemplate();
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
            case 'logout':
                return "logou effettuato";
                break;
            case 'autentica':
                return "login effettiatp";
                break;
        }
    }

}
?>

