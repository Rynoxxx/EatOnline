<?php

class COrdine extends Controller {

    public function prodottiRimasti() {
        $FOrdine = USingleton::getInstance('FOrdine');
        $ordine = $FOrdine->ritornaOrdine();
        $id_ordine = $ordine->getId();
        $FOrdineProdotto = USingleton::getInstance('FOrdineProdotto');
        $prodottiOrdinati = $FOrdineProdotto->getProdottiByOrdine($id_ordine);
        if(count($prodottiOrdinati)==0) {
            return 0;
        }
        else return count($prodottiOrdinati);
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

