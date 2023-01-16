<?php
class updateController extends Controller{

    private $update;
    public function __construct(){
        $this->update= new updateModel();
    }

    public function selectData($id){
        return  $this->update->afficher($id);
        
    }
    public function updateitem($id){
        $titre=$_POST['titre'];
        $text=$_POST['contenu'];
        
        $this->update->update($titre,$text,$id);

        header('location:../../HomeDashbordaffiche');
    }

    
    public function index($id){
         $display=$this->selectData($id);
         //var_dump($display);
        $this->render('update',compact('display'));
    }
}




?>