<?php
class clientController extends Controller{
    private  $check;
    public function __Construct(){
        $this->check= new clienModel();
    }
    
    
    // public function checkUser(){

    //     if(isset($_POST['mail']) && isset($_POST['password'])){
    //         $identifiant= htmlspecialchars($_POST['mail']);
    //         $psw=htmlspecialchars($_POST['password']);
            
    //         $getUser=$this->check->getUser($identifiant);
    //         $mdp=$this->check->getUser($identifiant)->mdp;
            
    //         $getid=$this->check->getid($identifiant);
    //         $rdv=$this->check->getUser2($getid); 
    //         echo"<pre>";
    //         var_dump($rdv);
    //         die('haya');
           
    //         if($getUser){
    //             if(filter_var($identifiant, FILTER_VALIDATE_EMAIL)){
    //                 if(password_verify($psw,$mdp)){
                            
                        
    //                     $_SESSION['user2']=$getUser;
    //                     //die('en mintennance');
    //                     header('location:../espaceClient');
    //                 }else header('location:../client?erreur=incorect');
    //             }else header('location:../client?erreur');
    //         }else header('location:../client?erreur=inexistant');   
    //     }     
    //   }
     
     public function déconnexion(){
         session_destroy();
         header("location:../client");
     }
     
    public function index(){
        $this->render('client');  
    }
}
?>