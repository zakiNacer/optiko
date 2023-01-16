<?php
    class rdvController extends Controller{
        private $rdv;

        public function __construct(){
            $this->rdv= new rdvModel();
                               
        }
             
        public function getrdv(){
            return $this->rdv->afficherrdv();
        }
        public function deletrdv($id){
            $this->rdv->delete($id);
            header('location:../../rdv');
        }
        public function index(){
            $rndv=$this->getrdv();
            $this->render('rdv',compact('rndv'));
        }
    }
?>
