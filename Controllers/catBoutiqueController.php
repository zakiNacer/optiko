<?php
class catBoutiqueController extends Controller{
    private $catboutique;

    public function __construct(){
       $this->catboutique= new catboutiqueModel();
    }
    public function affichlacat(){
        return $this->catboutique->categorie();
    }
    public function filterCat($id){
        return $this->catboutique->catProd($id);   
    }
    
   
    public function index($id=NULL){
        $categorie=$this->affichlacat();
        $getProd=$this->filterCat($id);
        $this->render('catboutique',compact('categorie','getProd'));
    }
}

?>
   
