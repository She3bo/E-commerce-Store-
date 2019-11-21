<?php

namespace PHPMVC\LIB\Database;

abstract class DatabaseHandler{
    
    const DATABASE_DRIVER_PDO = 1;
    const DATABASE_DRIVER_MYSQLI = 2;

    private function __construct(){}
    abstract protected static function inti();
    abstract protected static function getInstance();

    public static function factory(){
        $driver = DATABASE_CONN_DREIVER;
        //echo 'the driver is : '.$driver;
        if($driver == self::DATABASE_DRIVER_PDO){
            return PDODatabaseHandler::getInstance();
        }else if($driver == self::DATABASE_DRIVER_MYSQLI){
            return MySQLiDatabaseHandler::getInstance();
        }
    }
}
?>