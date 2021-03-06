<?php

/*
 * Classe EUtente
 * @package Entity
 * @access public
 */

class EUtente {
    /*
     * Attributi della classe EUtente
     * @access private
     */

    public $nome;
    public $cognome;
    public $numero_tel;
    public $password;
    public $email;
    public $via;
    public $cap;
    public $citta;
    public $codice_attivazione;
    public $stato = false;
    
    /**
     * Indica il tipo di utente, può essere REGISTRATO (registered) o AMMINISTRATORE (admin)
     * @var String
     */
    public $tipo_utente;
    
    public $_ordini = array();

    /*
     * Metodi della classe EUtente
     */

    public function generaCodiceAttivazione() {
        $this->codice_attivazione = mt_rand();
    }

    public function getCodiceAttivazione() {
        return $this->codice_attivazione;
    }

    public function getOrdini() {
        return $this->_ordini;
    }

    public function getTipo_utente() {
        return $this->tipo_utente;
    }

    public function isUserActivated() {
        return $this->stato > 0;
    }

    public function isUserAdmin() {
        if ($this->getTipo_utente() == 'admin') {
            return true;
        } else {
            return false;
        }
    }

    function getNome() {
        return $this->nome;
    }

    function getCognome() {
        return $this->cognome;
    }

    function getNumeroTel() {
        return $this->numero_tel;
    }

    function getEmail() {
        return $this->email;
    }

    function getVia() {
        return $this->via;
    }

    function getCap() {
        return $this->cap;
    }

    function getCitta() {
        return $this->citta;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    function setNumeroTel($numero) {
        $this->numero_tel = $numero;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setVia($via) {
        $this->via = $via;
    }

    function setCAP($CAP) {
        $this->CAP = $CAP;
    }

    function setCitta($citta) {
        $this->citta = $citta;
    }

    function setTipo_utente($tipo_utente) {
        $this->tipo_utente = $tipo_utente;
    }

}
?>
