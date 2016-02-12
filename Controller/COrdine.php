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
        $obj = array('result' => $numero,'id_ordine'=>$id_ordine, 'id_utente' => $numero_tel);
        $this->respondeAjaxObject($obj);
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
