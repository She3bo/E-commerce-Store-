<?php

namespace PHPMVC\Controllers;
use PHPMVC\Models\EmployeeModel;
use PHPMVC\LIB\InputFilter;
use PHPMVC\LIB\Helper;
class EmployeeController extends AbstractController{

    /**
     * defaultAction
     *
     * @return void
     */
    use InputFilter;
    use Helper;
    public function defaultAction(){
        $this->_data['employees'] = EmployeeModel::getAll();
        $this->_view();
    }
    public function addAction(){
        if(isset($_POST['submit'])){
            $emp = new EmployeeModel;
            $emp->name = $this->filterString($_POST['name']);
            $emp->age = $this->filterInt($_POST['age']);
            $emp->address = $this->filterString($_POST['address']);
            if($emp->save()){
                $_SESSION['message'] = 'Employee, Saved Successfully';
                $this->redirect('/employee');
            }
            
        }
        $this->_view();
    }
    public function editAction(){
        $id = $this->filterInt($this->_params[0]);
        $emp = EmployeeModel::getByPK($id);
        if($emp === false){
            $this->redirect('/employee');
        }
       // $emp->age = $this->filterInt($emp->age);
        var_dump($this->filterInt($emp->age));
        $this->_data['employee'] = $emp;
        if(isset($_POST['submit'])){
            $emp->name = $this->filterString($_POST['name']);
            $emp->age = $this->filterInt($_POST['age']);
            $emp->address = $this->filterString($_POST['address']);
            //var_dump($emp);
            if($emp->save()){
                $_SESSION['message'] = 'Employee, Saved Successfully';
                $this->redirect('/employee');
            }
            
        }
        $this->_view();
    }
    public function deleteAction(){
        $id = $this->filterInt($this->_params[0]);
        $emp = EmployeeModel::getByPK($id);
        if($emp === false){
            $this->redirect('/employee');
        }
        if($emp->delete()){
            $_SESSION['message'] = 'Employee, deleted Successfully';
            $this->redirect('/employee');
        }
        
        
    }
}

?>