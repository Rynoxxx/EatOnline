<?php

class COrdine extends Controller {

    public function prodottiRimasti() {
        $session = USingleton::getInstance('USession');
        $numero_tel = $session->leggi_valore('numero_tel');
        $FOrdine = USingleton::getInstance('FOrdine');
        $ordine = $FOrdine->ritornaOrdine($numero_tel);
        $id_ordine = $ordine->getId();
        $FOrdineProdotto = USingleton::getInstance('FOrdineProdotto');
        $prodottiOrdinati = $FOrdineProdotto->getProdottiByOrdine($id_ordine);
        if($prodottiOrdinati==FALSE) {
            $numero = 0;
        }
        else $numero = count($prodottiOrdinati);
        $this->respondeAjaxObject(array('result' => $numero));
    }

    public function smista() {
        $task = $this->getTask();
        switch ($task) {
            case 'prodottiRimasti':
                return $this->prodottiRimasti();
        }
    }

}
?>

