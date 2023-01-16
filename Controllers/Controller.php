<?php
 
abstract class Controller{
    //indiquer le chemin vers la vue
    private $chemin="../view/";
    private $template="../public/view/default.php";

    protected function render($view, $variables=[]){
        // mettre les concenu en memoire avec un tempon avant le liberer avec ob clean
        ob_start();
        //extraire les variables
        extract($variables);
        require($this->chemin.$view.'.php');
        $leRendu = ob_get_clean();

        require($this->chemin."/template/default.php");
    }   
}

?>