<?php
namespace PHPMVC\Controllers;

class IndexController extends AbstractController{
    public function defaultAction(){
        $this->_language->load('template.commen');
        $this->_view();
    }
    public function addAction(){
        $this->_language->load('template.commen');
        $this->_view();
    }
}
?>
