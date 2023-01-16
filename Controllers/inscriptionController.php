<?php
class inscriptionController extends Controller{
    private $insert;
    private $session;
    public function __Construct(){
        $this->insert=new addcustemerModel();
        $this->session=new espaceClientController();
    }
    // public function getSession(){
    //      $this->session->CheckRdv();
    // }
    public function addCstemers(){
        if(!empty($_POST)){
            $nom=strip_tags($_POST['psudo']);
            $prenom=strip_tags($_POST['prenom']);
            $genre=strip_tags($_POST['genre']);
            $mail=strip_tags($_POST['mail']);
            $mail2=strip_tags($_POST['mail2']);
            $mdp=strip_tags(Password_hash($_POST['password'],PASSWORD_DEFAULT));
            $mdp2=strip_tags($_POST['ps2']);
            //$session=$this->getSession();
            // var_dump($session);
            // die('haya trah');
            
            $score=0;
            $existe=$this->insert->checkuser($mail);
            if($existe){
                header('location:../inscription?ErrEexistant');
            }
            elseif(preg_match('/[0-9]/',$nom)){
                header('location:../inscription?ErrNnum');
            }
            
            elseif(preg_match('/[0-9]/',$prenom)){
                 header('location:../inscription?ErrPnum');
            }
            
            elseif(!preg_match('/^[a-z0-9A-Z._-]*\@[a-zA-Z0-9]*\.[a-zA-z]{2,6}$/',$mail)){
                 header('location:../inscription?Errformat_inco');
            }
            elseif($mail!=$mail2){
                header('location:../inscription?ErrIncoherentMail');
            }
            elseif(!password_verify($mdp2, $mdp)){
                header('location:../inscription?ErrIncoherentPsw');
                
            }
            else{
                 
                 $this->insert->ajoutclient($nom,$prenom,$genre,$mail,$mdp);
                 $this->session->CheckRdv()->$_SESSION['user2'];
                 header('location:../espaceClient');
             }
            
            
            
            
            
            
        }
        
    }
    public function index(){
        $this->render('inscription');
    }
}
?>