<?php

class CCarrello extends Controller {

    /**
     * Se l'utente è loggato, restituisce il suo carrello, ovvero l'elenco dei prodotti appartenenti all'ultimo ordine
     * NON confermato. In caso NON esiste un'ordine NON Cconfermato, E' ANCORA DA VEDERE.
     * Se l'utente NON è loggato, ritorna NULL.
     * @return type
     */
    public function getCarrello() {
        $session = USingleton::getInstance('USession');
        $numero = $session->leggi_valore('numero_tel');

        if ($numero) {
            $FOrdine = new FOrdine();
            $ordine = $FOrdine->ultimoOrdine($numero);
            return $ordine;
        }
        return NULL;
    }

    /**
     * Aggiunge al carrello il prodotto avente l'id passato come parametro
     * @param type $id_prodotto
     * @return type
     */
    public function aggiungiProdotto($id_prodotto) {
        $ordine = $this->getCarrello();
        $FOrdine = new FOrdine();
        $FOrdine->addProdotto($ordine->getId(), $id_prodotto);
        return $this->mostraCarrello();
    }

    /**
     * Rimuove dal carrello il prodotto avente l'id passato come parametro
     * @param type $id_prodotto
     * @return type
     */
    public function eliminaProdotto($id_prodotto) {
        $ordine = $this->getCarrello();
        $FOrdine = new FOrdine();
        $FOrdine->removeProdotto($ordine->getId(), $id_prodotto);
        return $this->mostraCarrello();
    }

    public function mostraCarrello() {
        $view = USingleton::getInstance('VCarrello');

        $FOrdine = USingleton::getInstance('FOrdine');
        $ordine = $this->getCarrello();
        $ordine_prodotti = $FOrdine->getOrdineProdotti($ordine->getId());

        //Carica i Prodotti in base alla lista di OrdineProdotti
        $FProdotto = USingleton::getInstance('FProdotto');
        $prodotti = array();
        foreach ($ordine_prodotti as $key => $value) {
            $prodotto = $FProdotto->load($value->getIdProdotto());
            $prodotto->_quantita = $value->getQuantita();
            $prodotti[] = $prodotto;
        }
        $view->impostaDati('prodotti', $prodotti);
        $view->set_layout('default');
        return $view->processaTemplate();
    }

    public function smista() {

        if (!$this->getCarrello()) {
            $view = USingleton::getInstance('VCarrello');
            $view->set_layout('error');
            return $view->processaTemplate();
        }

        list($azione, $data) = explode('.', $this->getTask());
        if ($azione == 'default') {
            return $this->mostraCarrello();
        }
        if ($azione == 'aggiungi') {
            return $this->aggiungiProdotto($data);
        }
        if ($azione == 'elimina') {
            return $this->eliminaProdotto($data);
        }
    }

}

?>
