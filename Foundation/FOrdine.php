<?php

class FOrdine extends Fdb {

    public function __construct() {
        $this->_table = 'ordine';
        $this->_key = 'id';
        $this->_auto_increment = TRUE;
        $this->_return_class = 'EOrdine';
        USingleton::getInstance('Fdb');
    }

    /**
     * Ritorna un Ordine in base all'Id Utente (in questo caso il numero di telefono dell'utente).
     * Se $ordini è TRUE (non è NULL), ritorna solo il primo Ordine NON Confermato ($ordini[0])
     * Se $ordini è NULL, crea un nuovo ordine (new EOrdine), setta l'Id Utente e Confermato a FALSE e 
     * ritorna l'Ordine appena creato.
     * @param type $id_utente
     * @return type
     */
    public function ritornaOrdine($id_utente) {
        $query = 'SELECT * FROM ' . $this->_table . ' WHERE id_utente = \'' . $id_utente . '\' AND confermato=\'0\' ';
        $this->query($query);
        $ordini = $this->getObjectArray();
        if ($ordini) {
            return $ordini[0];
        }
        $ordine = new EOrdine();
        $ordine->setId_utente($id_utente);
        $ordine->setConfermato(FALSE);
        $FOrdine = USingleton::getInstance('FOrdine');
        $id = $FOrdine->store($ordine);
        return $FOrdine->load($id);
    }

    /**
     * Aggiunge un prodotto ad un ordine
     * Se esiste già un OrdineProdotto appartente all'Ordine in questione e avente l'Id Prodotto coincidente con quello 
     * del prodotto da aggiungere, allora incrementa l'Ordine Prodotto.
     * @param type $id_ordine
     * @param type $id_prodotto
     */
    public function addProdotto($id_ordine, $id_prodotto) {
        $FOrdineProdotto = USingleton::getInstance('FOrdineProdotto');
        $ordine_prodotto = $FOrdineProdotto->load($id_ordine, $id_prodotto);
        if ($ordine_prodotto) {
            $ordine_prodotto->incrementa();
            $FOrdineProdotto->update($ordine_prodotto);
        } else {
            $ordine_prodotto = new EOrdineProdotto();
            $ordine_prodotto->id_ordine = $id_ordine;
            $ordine_prodotto->id_prodotto = $id_prodotto;
            $ordine_prodotto->quantita = 1;
            $FOrdineProdotto->store($ordine_prodotto);
        }
    }

    /**
     * Rimuove un prodotto da un ordine
     * @param type $id_ordine
     * @param type $id_prodotto
     */
    public function removeProdotto($id_ordine, $id_prodotto) {
        $FOrdineProdotto = USingleton::getInstance('FOrdineProdotto');
        $ordine_prodotto = $FOrdineProdotto->load($id_ordine, $id_prodotto);
        if ($ordine_prodotto) {
            $ordine_prodotto->decrementa();
            if ($ordine_prodotto->getQuantita() <= 0) {
                $FOrdineProdotto->delete($ordine_prodotto);
            } else {
                $FOrdineProdotto->update($ordine_prodotto);
            }
        }
    }

    /**
     * Ritorna la lista dei prodotti appartenenti a un determinato ordine.
     * @param type $id_ordine
     * @return type
     */
    public function getOrdineProdotti($id_ordine) {
        $FOrdineProdotto = USingleton::getInstance('FOrdineProdotto');
        return $FOrdineProdotto->getProdottiByOrdine($id_ordine);
    }

}

?>
