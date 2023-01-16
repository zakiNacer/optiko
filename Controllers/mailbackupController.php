<?php
class mailbackupController extends Controller{
    private $mail;

    public function __construct(){
        $this->mail=new mailBackUpModel();
                       
    }
    public function randomPsw(){
        return uniqid();
    }
    public function pswTemporary(){
        
        $from="from:optikoopticien2@gmail.com";
            $subjet="Confirmation de rendezvous";
            $message="Bonjour<br> voici le mot de passe provisoir . pour que vous puissez le changer";
        if(isset($_POST)){
            $email=$_POST['mail'];
            $check=$this->mail->checkmail($email);
            if(!$check){
                header('location:../mailbackup?notAvailable');
            }else{
                $provisoire=$this->randomPsw();
                mail($email,$subjet,$message,$from);
                $this->mail->updatProvisoir($provisoire,$email);
                header('location:../mailbackup?available');
            }
        }
    }
    public function index(){
        $this->render('mailbackup');
    }
}
?>