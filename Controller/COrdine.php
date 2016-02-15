<?php

class COrdine extends Controller {

    public function infoOrdine() {
        $session = USingleton::getInstance('USession');
        $numero_tel = $session->leggi_valore('numero_tel');
        $FOrdine = USingleton::getInstance('FOrdine');
        $ordine = $FOrdine->ritornaOrdine($numero_tel);
        $id_ordine = $ordine->getId();
        $prodottiOrdinati = $FOrdine->getOrdineProdotti($id_ordine);
        $obj = array(
            'id_utente' => $numero_tel,
            'id_ordine' => $id_ordine,
        );
        if ($prodottiOrdinati == FALSE) {
            $obj['num_elementi_carrello'] = 0;
        } else {
            $numElementiCarrello = count($prodottiOrdinati);
            $arrayProdotti = array();
            $array = array();
            foreach ($prodottiOrdinati as $item) {
                $id_prodotto = $item->getIdProdotto();
                $quantita_prodotto = $item->getQuantita();

                $FProdotto = USingleton::getInstance('FProdotto');
                $prodotto = $FProdotto->load($id_prodotto);

                $nome_prodotto = $prodotto->getNome();
                $prezzo_prodotto = $prodotto->getPrezzo();

                $arrayProdotti = [
                    "id_prodotto" => $id_prodotto,
                    "nome_prodotto" => $nome_prodotto,
                    "quantita_prodotto" => $quantita_prodotto,
                    "prezzo_prodotto" => $prezzo_prodotto
                ];
                array_push($array,$arrayProdotti);
            }
            $obj['num_elementi_carrello'] = $numElementiCarrello;
            $obj['prodotti'] = $array;
            $obj['totale'] = $this->totaleOrdine($id_ordine);
        }
        if ($this->isAjax()) {
            $this->respondeAjaxObject($obj);
        } else {
            return $obj;
        }
    }

    public function totaleOrdine($id_ordine) {
        $FOrdine = USingleton::getInstance('FOrdine');
        $prodottiOrdinati = $FOrdine->getOrdineProdotti($id_ordine);
        if ($prodottiOrdinati == FALSE) {
            return 0;
        } else {
            $tot = 0;
            foreach ($prodottiOrdinati as $item) {
                $id_prodotto = $item->getIdProdotto();
                $quantita_prodotto = $item->getQuantita();

                $FProdotto = USingleton::getInstance('FProdotto');
                $prodotto = $FProdotto->load($id_prodotto);

                $prezzo_prodotto = $prodotto->getPrezzo();
                $subTot = $prezzo_prodotto * $quantita_prodotto;
                $tot = $tot + $subTot;
            }
            return $tot;
        }
    }

    public function smista() {
        $task = $this->getTask();
        switch ($task) {
            case 'infoOrdine':
                return $this->infoOrdine();
        }
    }

}

?>
