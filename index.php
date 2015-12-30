<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once 'include/autoload.inc.php';
        require_once 'include/config.inc.php';
        
        $CHome=  USingleton::getInstance('CHome');
        $CHome->impostaPagina();
        
        error_reporting(E_ALL); 

        ?>
    </body>
</html>
