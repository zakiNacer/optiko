<?php
    class ADMboutiqueController extends Controller{
        private $insertData;

        public function __construct(){
            $this->insertData= new admModel();
        }
        
        public function afichCat(){
            return $this->insertData->secteCat();
        }
        public function afichbrand(){
            return $this->insertData->secteBrand();
        }

        public function additem(){
            $picture= $_FILES["file"]["name"];
            $tname=$_FILES["file"]["tmp_name"];
            //lemplacement de limage
            $chemin='../../public/image/produit/all/'.$picture;
            move_uploaded_file($tname,$chemin);
            
            $article=$_POST['article'];
            $idcat=$_POST['cat'];
            $id_marque=$_POST['brand'];
            
            //ajout du produit dans la table articles
            $this->insertData->ajoutarticle($picture, $article);
            //récuperer le dernier id article pour linjecter dans la table intermediaire
            $last_insert_id=$this->insertData->lastid();
            $this->insertData->ajoutcategorie($idcat,$last_insert_id,$id_marque);
            header('location:../ADMboutique?aprouved');
        }
      
        public function index(){
           $id=$this->afichCat();
           $brand=$this->afichbrand();
            
            $this->render('ADMboutique',compact('id','brand'));
            
        }
    }

    //cera une fonction global qui permet d'enclencher tout les function enfent qui inserent des des donné 
    // public function additem(){

    // }












?>
