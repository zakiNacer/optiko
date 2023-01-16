<?php
class contactController extends Controller{

    private $texto;

    public function __construct(){
        $this->texto= new contactModel();
    }
    
    public function sendMail(){
        if(isset($_POST['submit'])){
            $nom=$_POST['nome'];
            $mail=$_POST['emailAddress'];
            $msg=$_POST['message'];
            $subject="Vous avez été contacté de la part de .$mail";
            $to="optikoopticien2@gmail.com";
            $from="from: optikoopticien2@gmail.com";

            if(empty($nom) || empty($mail) || empty($msg)){ 
                header('location:../contact');  
            }
            else{
                if(isset($_POST['message'])&&$_POST['message'] !=''){
                    if(mail($to, $subject,$msg,$from)){
                        header('location:../contact');
                        // $success= '<div class="alert alert-info" role="alert">votre Mail a bien été envoyé , vous recever une reponse dans le plus bref delais</div>';
                        
                    }
                }  
            } 
        }  
    }
    public function index(){
       

        // var_dump($_POST['sub']);
        $this->render('contact');
    }
    
}


?>
   
