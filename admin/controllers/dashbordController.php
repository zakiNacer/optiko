<?php
    class dashbordController extends Controller{

    private $affiche;

    public function __construct(){
        $this->affiche= new  dashbordModel();
                           
    }
         
    public function getarticle(){
        return $this->affiche->afficherlesarticles();
    }
    public function deleteitm($id){
        $this->affiche->delete($id);
        header('location:../../dashbord');
    }
        public function index(){
            $get=$this->getarticle();
            // echo '<pre>';
            //  var_dump($get);
            // echo '</pre>';
            $this->render('dashbord',compact('get'));
        }
    }
?>
