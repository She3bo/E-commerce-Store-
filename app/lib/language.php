<?php
namespace PHPMVC\LIB;
class Language{
    private $dectionry=[];
    public function load($path){
        $defualtLAnguage = APP_DEFUALT_LANGUAGE;
        if(isset($_SESSION['lang'])){
            $defualtLAnguage = $_SESSION['lang'] ;    
        }
        $pathArray = explode('.',$path);
        //var_dump($pathArray);
        $languageFileLoad = LANGUAGE_PATH . $defualtLAnguage . DS . $pathArray[0] . DS . $pathArray[1].'.lang.php';
        $languageFileContent = file_get_contents($languageFileLoad);
        if(file_exists($languageFileLoad)){
            require $languageFileLoad;
            if(is_array($_) && !empty($_)){
                foreach($_ as $key => $value){
                      $this->dectionry[$key] = $value;
                }
            }
        }else{
            trigger_error('Sorry the language file ' . $path . 'dosn\'t Exists',E_USER_WARNING);
        }
        //var_dump($dectionry);
    }

    public function getDectionry(){
       // var_dump($this->dectionry);
        return $this->dectionry;
    }
}

?>