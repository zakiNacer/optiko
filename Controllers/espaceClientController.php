<?php

class espaceClientController extends Controller{
    

    private $insertrdv;

    public function __construct(){
        $this->insertrdv= new espaceClientModel();
    }
    
 public function CheckRdv(){

    if(isset($_POST['mail']) && isset($_POST['password'])){
        $identifiant= htmlspecialchars($_POST['mail']);
        $psw=htmlspecialchars($_POST['password']);
        
       
        $getUser=$this->insertrdv->getUser($identifiant);
        $mdp=$this->insertrdv->getUser($identifiant)->mdp;
        
        // $getid=$this->insertrdv->getid($identifiant);
        // $rdv=$this->insertrdv->getUser2($getid); 
        
        if(preg_match('/^[a-z0-9A-Z._-]*\@[a-zA-Z0-9]*\.[a-zA-z]{2,6}$/',$identifiant)){
            if($getUser){
                if(password_verify($psw,$mdp)){
                        
                    
                    $_SESSION['user2']=$getUser;
                    //die('en mintennance');
                    header('location:../espaceClient');
                }else header('location:../client?erreur=incorect');
            }else header('location:../client?erreur=inexistant');
        }else header('location:../client?erreur=format_inco');
        
    }     
    
 }   

    public function getRdv($sess){
        $sess=$_SESSION['user2']->id;
       
         
       return $this->insertrdv->getUser2($sess);
        
        
    }
    public function deleteRdv($id){
        return $this->insertrdv->dltrdv($id);
        
    }
    public function index(){
        $sess=$_SESSION['user2']->id;
        $rendv=$this->getRdv($sess);
        
        
        
         $this->render('espaceClient',compact('rendv'));
    }
}
?>
   
   