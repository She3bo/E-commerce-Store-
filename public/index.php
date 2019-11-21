<?php
namespace PHPMVC;
use PHPMVC\LIB\frontController;

if(!defined('DS')){
  define('DS', DIRECTORY_SEPARATOR);
}
require_once '..' . DS . 'app' . DS .'config.php';

require_once APP_PATH . DS . 'lib'. DS . 'Autoload.php';

$frontController = new frontController();
$frontController->dispatch();
// echo APP_PATH;

?>