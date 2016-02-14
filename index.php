<?php

require_once 'include/autoload.inc.php';
require_once 'include/config.inc.php';

if (isset($_REQUEST['ajax'])) {
    $config['debug'] = false;
}

$CHome = USingleton::getInstance('CHome');
$CHome->impostaPagina();
?>
