<?php

class CUtente extends Controller {
    
    /**
     * Ritorna tutte le informazioni sull'utente
     * @return type
     */
    public function infoUtente() {
        $session = USingleton::getInstance('USession');
        $numero_tel = $session->leggi_valore('numero_tel');
        $FUtente = USingleton::getInstance('FUtente');
        $utente = $FUtente->load($numero_tel);
        $obj = array(
            'nome' => $utente->getNome(),
            'cognome' => $utente->getCognome(),
            'numero_tel' => $utente->getNumeroTel(),
            'email' => $utente->getEmail(),
            'via' => $utente->getVia(),
            'citta' => $utente->getCitta(),
            'cap' => $utente->getCap()
        );
        if ($this->isAjax()) {
            $this->respondeAjaxObject($obj);
        } else {
            return $obj;
        }
    }

        public function smista() {
        $task = $this->getTask();
        switch ($task) {
            case 'infoUtente':
                return $this->infoUtente();
        }
    }
    
}

?>

