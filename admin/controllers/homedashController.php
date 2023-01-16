<?php
    class homedashController extends Controller{
        private $homeDashbord;

        public function __construct(){
        $this->homeDashbord= new homeDashbordModel();
        }

        public function insertDataCard(){
            $picture= $_FILES["files"]["name"];
            $tname=$_FILES["files"]["tmp_name"];
            $text=$_POST['text'];
            //lemplacement de limage
            $chemin='../../public/image/home/'.$picture;
            move_uploaded_file($tname,$chemin);
            
            
            $this->homeDashbord->insertCard($picture,$text);
            header('location:../HomeDashbord');
        }
        public function insertData(){   
            if(isset($_POST['titre2'])){
                 
                 $titre=$_POST['titre2'];
                 var_dump($titre);
            }
            if(isset($_POST['contenu'])){
                $text=$_POST['contenu'];
                var_dump($text);
            }
            
            
            $this->homeDashbord->insertdataCard($titre,$text);
            header('location:../HomeDashbord');
        }
        


        public function index(){
            
            $this->render('HomeDashbord');
        }
    }
?>