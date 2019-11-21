<?php
namespace PHPMVC\Controllers;
use PHPMVC\LIB\frontController;

class AbstractController{
    protected $_controller,$_action,$_params;
    /**
     * notFoundAction
     *
     * @return void
     */
    public function notFoundAction(){
        $this->_view();
    }
    /**
     * setContorller
     *
     * @param  mixed $controllerName
     *
     * @return void
     */
    public function setContorller($controllerName){
        $this->_controller = $controllerName;
    }
    /**
     * setAction
     *
     * @param  mixed $actionName
     *
     * @return void
     */
    public function setAction($actionName){
        $this->_action = $actionName;
    }
    public function setParams($Params){
        $this->_params = $Params;
    }
    /**
     * _view
     *
     * @return void
     */
    protected function _view(){
        //echo frontController::Not_Found_Action . "   " . $this->_action ;
        if($this->_action == frontController::Not_Found_Action){
          require_once VIEWS_PATH . 'notfound' . DS . 'notfound.view.php';
        }else{
            $view = VIEWS_PATH . $this->_controller . DS . $this->_action .'.view.php';
            if(file_exists($view)){
                require_once $view;
            }else{
                require_once VIEWS_PATH . 'notfound' . DS . 'noview.view.php';
            }
        }
    }
}

?>