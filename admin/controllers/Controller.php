<?php
 
abstract class Controller{
    //indiquer le chemin vers la vue
    private $chemin="../view/";
    private $template="../public/view/default.php";

    protected function render($view, $variables=[]){
        ob_start();
        //extraire les variables
        extract($variables);
        require($this->chemin.$view.'.php');
        $leRendu = ob_get_clean();

        require($this->chemin."/template/default.php");
    }   
}

?>