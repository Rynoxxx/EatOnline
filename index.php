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

        if(isset($_REQUEST['ajax'])){
          $config['debug'] = false;
        }

        $CHome = USingleton::getInstance('CHome');
        $CHome->impostaPagina();

        

        ?>
    </body>
</html>
