<?php
namespace PHPMVC;
use PHPMVC\LIB\frontController;
use PHPMVC\LIB\Template;
use PHPMVC\LIB\Language;

if(!defined('DS')){
  define('DS', DIRECTORY_SEPARATOR);
}
require_once 'app' . DS . 'config' . DS . 'config.php';
require_once APP_PATH . DS . 'lib'. DS . 'autoload.php';
$template_parts = require_once 'app' . DS . 'config' . DS . 'templateconfig.php';

session_start();

if(!isset($_SESSION['lang'])){
  $_SESSION['lang'] = APP_DEFUALT_LANGUAGE;    
}
$template = new Template($template_parts);
$language = new Language();

$frontController = new frontController($template , $language);
$frontController->dispatch();
// echo APP_PATH;

?>