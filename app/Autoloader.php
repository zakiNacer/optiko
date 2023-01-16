<?php
// la class autoloadeur permet reperer la class par new+nom de la class et la charger 
class Autoloader{
    static function register(){
        spl_autoload_register(array(__CLASS__,'autoload'));
        //ca permet de recuperer le nom de la class $class_name
    }
    public static function autoload($class_name){
        // un echo ici est necessaire pour debuguer

        //si il repair quil ya le mot controller il charge la class controller il faut que le dossier crel soit identique  du require
		 //si il detect le new il exicute
        if(stripos($class_name,'Controller') OR $class_name=="Controller"){
            require '../controllers/' . $class_name . '.php';
        }
        //  si il repere ne nom de la class dans le model il lexicute
        elseif(stripos($class_name,'Model')){
            require '../model/' . $class_name . '.php';
        }

    }
}

?>