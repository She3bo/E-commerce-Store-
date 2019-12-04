<?php

if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}

define('APP_PATH', realpath(dirname(__FILE__)). DS . '..');
define('VIEWS_PATH', APP_PATH . DS . 'views' . DS);
define('TEMPLATE_PATH', APP_PATH . DS . 'template' . DS);
define('LANGUAGE_PATH', APP_PATH . DS . 'languages' . DS);

define('CS','../../public/css/');
define('JS','../../public/js/');

defined('DATABASE_HOST_NAME')       ?null : define('DATABASE_HOST_NAME','localhost');
defined('DATABASE_DB_NAME')         ?null : define('DATABASE_DB_NAME','mydbpdo'); //myDBPDO
defined('DATABASE_USER_NAME')       ?null : define('DATABASE_USER_NAME','root');
defined('DATABASE_PASSWORD')        ?null : define('DATABASE_PASSWORD','');
defined('DATABASE_PORT_NUMBER')     ?null : define('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DREIVER')    ?null : define('DATABASE_CONN_DREIVER',1);

defined('APP_DEFUALT_LANGUAGE')    ?null : define('APP_DEFUALT_LANGUAGE','en');
?>
