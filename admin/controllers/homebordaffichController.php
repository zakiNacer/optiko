<?php
    class homebordaffichController extends Controller{
        private $home;

        public function __construct(){
        $this->homeDashbord= new homeDashbordModel();
        }

       
        public function affichecontenu(){
            return $this->homeDashbord->affichehomedashB();
        }
        
        public function afficheactu(){
            return $this->homeDashbord->affichebloc2();
        }
        //delete pour homecard
        public function deletetm($id){
             $this->homeDashbord->deletee($id);
             header('location:../../HomeDashbordaffiche');
        }
        //delete pour homeactu
        public function deletact($act_id){
            $this->homeDashbord->del($act_id);
            header('location:../../HomeDashbordaffiche');
        }
        


        public function index(){
            $displ=$this->affichecontenu();
            $affiche=$this->afficheactu();
            //$displ=$this->affichecontenu();
            $this->render('HomeDashbordaffiche',compact('displ','affiche'));
        }
    }
?>