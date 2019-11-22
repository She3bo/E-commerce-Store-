<?php
namespace PHPMVC\Models;

class EmployeeModel extends AbstractModel{
    public $id , $name , $age , $address , $tax , $salary ;
  
    public static $tableName = 'employee';
    
    protected static $tableSchema = array(
        'name'      => self:: DATA_TYPE_STR,
        'age'       => self:: DATA_TYPE_INT,
        'address'   => self:: DATA_TYPE_STR,
        'tax'       => self:: DATA_TYPE_DECIMAL,
        'salary'    => self:: DATA_TYPE_DECIMAL
    );

    protected static $primaryKey = 'id';

    // public function __construct($name , $age , $address , $tax , $salary){
    //     global $connection;
    //     $this->name = $name;
    //     $this->age = $age;
    //     $this->address = $address;
    //     $this->tax = $tax;
    //     $this->salary = $name;
    // }
    // public function __get($prop){
    //     return $this->$prop;
    // }

    public function setName($name){
        $this->name = $name;
    }

    public function calculateSalary(){
        return $this ->salary - ($this ->salary  * $this->tax /100);
    }

    public function fireEmployee(){}

    public function promotEmployee(){}

    public function getTableName(){
        return self::$tableName;
    }

}

?>