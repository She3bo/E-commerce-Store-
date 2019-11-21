<?php

namespace PHPMVC\Controllers;
use PHPMVC\Models\EmployeeModel;

class EmployeeController extends AbstractController{

    /**
     * defaultAction
     *
     * @return void
     */
    public function defaultAction(){
        echo '<pre>';
        var_dump (EmployeeModel::getAll());
        echo '<pre>';
        // $employees = EmployeeModel::getAll();
        // foreach($employees as $employee){
        //     var_dump($employee);
        // }
        $this->_view();
    }
}

?>