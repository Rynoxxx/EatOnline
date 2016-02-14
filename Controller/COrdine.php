<?php

class COrdine extends Controller {

    public function info() {
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
            $this->respondeAjaxObject($obj);
        } else {
            $numElementiCarrello = count($prodottiOrdinati);
            $arrayProdotti = array();
            foreach ($prodottiOrdinati as $item) {
                $id_prodotto = $item->getIdProdotto();
                $quantita_prodotto = $item->getQuantita();

                $FProdotto = USingleton::getInstance('FProdotto');
                $prodotto = $FProdotto->load($id_prodotto);

                $nome_prodotto = $prodotto->getNome();
                $prezzo_prodotto = $prodotto->getPrezzo();

                $arrayProdotti[$id_prodotto] = [
                    "id_prodotto" => $id_prodotto,
                    "nome_prodotto" => $nome_prodotto,
                    "quantita_prodotto" => $quantita_prodotto,
                    "prezzo_prodotto" => $prezzo_prodotto
                ];
            }
            $obj['num_elementi_carrello'] = $numElementiCarrello;
            $obj['prodotti'] = $arrayProdotti;
            $this->respondeAjaxObject($obj);
        }
    }

    public function smista() {
        $task = $this->getTask();
        switch ($task) {
            case 'info':
                return $this->info();
        }
    }

}

?>
