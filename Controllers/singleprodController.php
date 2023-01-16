<?php
   class singleprodController extends Controller{
    private $singleProd;

    public function __construct(){
        $this->singleProd= new singleProdModel();
     }
 
    public function getProduct($id){
        return $this->singleProd->affichProduit($id);
    }

    public function index($id){
           //var_dump($id);
           $getProd=$this->getProduct($id);
           $this->render('singleProd',compact('getProd'));
    }
} 
?>