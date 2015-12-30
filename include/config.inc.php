<?php

/*
 * Config file
 */

global $config;

/*
 * Configurazione cartelle di smarty
 */
$config['smarty']['template_dir']='template';
$config['smarty']['compile_dir']='template/temp_compile';
$config['smarty']['config_dir']='template/temp_config';
$config['smarty']['cache_dir']='template/temp_cache';

/*
 * Configurazione paramentri accesso al database e funzione stampa debug
 */
$config['mysql']['user']='root';
$config['mysql']['password']='';
$config['mysql']['host']='localhost';
$config['mysql']['database']='eatonline';        

$config['debug']=true;
function debug($var) {
    global $config;
    if($config['debug']) {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}

?>

