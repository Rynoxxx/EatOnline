<?php

class CCarrello extends Controller {


    /*
     * Questa funzione ha come argomento la categoria da visualizzare.
     * Visualizza quindi tutti i prodotti appartenenti alla categoria desiderata.
     */
     function microtime_float()
     {
         list($usec, $sec) = explode(" ", microtime());
         return ((float)$usec + (float)$sec);
     }

     public function getCarrello(){
       $session = USingleton::getInstance('USession');
       $numero = $session->leggi_valore('numero_tel');

       if($numero){
         $FOrdine = new FOrdine();
         $ordine = $FOrdine->ultimoOrdine($numero);
         return $ordine;
       }
       return NULL;
     }

     public function aggiungiProdotto($id_prodotto){
       $ordine = $this->getCarrello();
       $FOrdine = new FOrdine();
       $FOrdine->addProdotto($ordine->getId(),$id_prodotto);
       return $this->mostraCarrello();
     }

     public function eliminaProdotto($id_prodotto){
       $ordine = $this->getCarrello();
       $FOrdine = new FOrdine();
       $FOrdine->removeProdotto($ordine->getId(),$id_prodotto);
       return $this->mostraCarrello();
     }


    public function mostraCarrello() {
      $view = USingleton::getInstance('VCarrello');

      $FOrdine = USingleton::getInstance('FOrdine');
      $ordine = $this->getCarrello();
      $ordine_prodotti = $FOrdine->getOrdineProdotti($ordine->getId());

      //Carica i Prodotti in abse alla lista di OrdineProdotti
      $FProdotto = USingleton::getInstance('FProdotto');
      $prodotti = array();
      foreach ($ordine_prodotti as $key => $value) {
       $prodotto =   $FProdotto->load($value->getIdProdotto());
       $prodotto->_quantita = $value->getQuantita();
       $prodotti[] = $prodotto;
      }
      $view->impostaDati('prodotti', $prodotti);
      $view->set_layout('default');
      return $view->processaTemplate();
    }

    public function smista() {

        if(!$this->getCarrello()){
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
