<?php
namespace PHPMVC\LIB;

class Template{
    private $_tempalteParts,
            $_AciontView,
            $_data; 

    public function __construct(array $parts){
        $this->_tempalteParts = $parts;
    }

    public function setActionView($ActionView){
        $this->_ActionView = $ActionView;
    }
    public function setAppData($data){
        $this->_data = $data;
    }
    public function renderTemplateHeaderStart(){
        require_once TEMPLATE_PATH . DS . 'templateheaderstart.php'; 
    }
    public function renderTemplateHeaderEnd(){
        require_once TEMPLATE_PATH . DS . 'templateheaderend.php';
    }
    public function renderTemplateFooter(){
        require_once TEMPLATE_PATH . DS . 'templatefooter.php';
    }
    public function renderTemplateBlocks(){
        if(!array_key_exists('template',$this->_tempalteParts)){
            trigger_error('Sorry! Template Blocks not Definde',E_USER_WARNING);
        }else{
            $parts = $this->_tempalteParts['template'];
            if(!empty($parts)){
                foreach($parts as $part => $file){
                    if($part === ':view'){
                        extract($this->_data);
                        require_once $this->_ActionView;
                    }
                    else{
                        require_once $file;
                    }
                }
            }
        }
    }
    public function renderHeaderResources(){
        $output="";
        if(!array_key_exists('header_resources',$this->_tempalteParts)){
            trigger_error('Sorry! Header Resources not Definde',E_USER_WARNING);
        }else{
            $resources = $this->_tempalteParts['header_resources'];

            // CSS File

            $css = $resources['css'];
            if(!empty($css)){
                foreach($css as $cssKey => $path){
                    $output.='<link rel="stylesheet" href = "' . $path . '"/>';
                }
            }
            // JS file 
            $js = $resources['js'];
            if(!empty($js)){
                foreach($js as $jsKey => $path){
                    $output.='<script src="' .$path . '"></script>';
                }
            }
            
        }
        echo $output;
    }
    public function renderFooterResources(){
        $output="";
        if(!array_key_exists('footer_resources',$this->_tempalteParts)){
            trigger_error('Sorry! Footer Resources not Definde',E_USER_WARNING);
        }else{
            $resources = $this->_tempalteParts['footer_resources'];
            if(!empty($resources)){
                foreach($resources as $jsKey => $path){
                    $output.='<script src="' .$path . '"></script>';
                }
            }
            
        }
        echo $output;
    }
  public function render(){
    
    $this->renderTemplateHeaderStart();
    $this->renderHeaderResources();
    $this->renderTemplateHeaderEnd();
    $this->renderTemplateBlocks();
    $this->renderFooterResources();
    $this->renderTemplateFooter();
  }
}
?>