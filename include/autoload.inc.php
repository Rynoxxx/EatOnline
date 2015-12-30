<?php

/*
 * Funzione chiamata automaticamente ogni qual volta viene invocata
 * una classe che non è stata definita prima.
 */

function __autoload($class_name) {
    switch ($class_name[0]) {
        case 'V':
            require_once 'View/'.$class_name.'.php';
            break;
        case 'F':
            require_once 'Foundation/'.$class_name.'.php';
            break;
        case 'E':
            require_once 'Entity/'.$class_name.'.php';
            break;
        case 'C':
            require_once 'Controller/'.$class_name.'.php';
            break;
        case 'U':
            require_once 'Utility/'.$class_name.'.php';
    }
}

spl_autoload_register('__autoload');

?>

