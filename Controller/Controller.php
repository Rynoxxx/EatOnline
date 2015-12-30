<?php

/* 
 * Classe Controller
 * @package Controller
 * @access public
 */

class Controller {
    
    protected $logged = false;

    public function setLogged($logged){
        $this->logged = $logged;
    }
    
    public function isLogged(){
        return $this->logged;
    }
    
    /*
     * Restituisce il CONTROLLER passato tramite richiesta
     * GET o POST
     */
    public function getController() {
        if(isset($_REQUEST['controller']))
            return $_REQUEST['controller'];
        else
            return false;
    }
    
    /*
     * Restituisce il TASK passato tramite richiesta
     * GET o POST
     */
    public function getTask() {
        if(isset($_REQUEST['task']))
            return $_REQUEST['task'];
        else
            return false;
    }
}

?>

