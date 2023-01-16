<?php
//https://ayrault.net/devweb/docphp/
class boutiqueController extends Controller{
    private $boutique;
    
    const PAR_PAGE= 16;
    public function __construct(){
       $this->boutique= new boutiqueModel();
    }
    public function affichlacat(){  
        return $this->boutique->categorie();
    }
   
    public function afficheproduit($pagecurrent){
        $offset=($pagecurrent-1)*SELF::PAR_PAGE;
        return $this->boutique->getproduct($offset,SELF::PAR_PAGE );

    }
    public function getNbarticle(){
        return (int)$this->boutique->countArticle(); 
    }
    public function index($param1_url=null){
            if($param1_url==NULL){
                $pagecurrent=1;
            }else{
                $pagecurrent=$param1_url;
            }
            
            $produit=$this->afficheproduit($pagecurrent);
            $categorie=$this->affichlacat();
            $nb_article=$this->getNbarticle();
            $nb_page=ceil($nb_article/SELF::PAR_PAGE);           
        $this->render('boutique',compact('produit','categorie','nb_page','pagecurrent'));
    }
}

?>
   
