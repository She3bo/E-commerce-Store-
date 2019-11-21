<?php

namespace PHPMVC\LIB\Database;
use \PDO;
class PDODatabaseHandler extends DatabaseHandler{

    private static $_instance;
    private static $_handler;

    private function __construct(){
        self::inti();
    }
    public function __call($name , $arguments){
        return call_user_func_array(array(&self::$_handler, $name), $arguments);
    }
    protected static function inti(){
        try {
            self::$_handler = new PDO(
                'mysql://hostname='. DATABASE_HOST_NAME .';dbname='. DATABASE_DB_NAME,
                DATABASE_USER_NAME, DATABASE_PASSWORD
            );
        } catch (PDOException $e) {
            //throw $th;
        }
    }
    protected static function getInstance(){
        if(self::$_instance === null){
            self::$_instance = new self();
        }
        //var_dump (self::$_instance);
        return self::$_instance ;
    }    
}
?>