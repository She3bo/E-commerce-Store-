<?php
namespace PHPMVC\LIB;

class AutoLoad{
    public static function autoload($className){
        
        $className = str_replace('PHPMVC','',$className);
        $className = strtolower($className);
        $className .='.php';
        if(file_exists(APP_PATH.$className)){
            require_once APP_PATH.$className;
        }
    }
}
spl_autoload_register(__NAMESPACE__ . DS . 'AutoLoad::autoload');
?>