<?php
class adminController extends Controller{
    private $cnx;

    public function __construct(){
       $this->cnx= new CadminModel();
    }


    public function authentification(){
        if(isset($_POST['submit'])){
            
            $identifiant="optiko2022@gmail.com";
            $psw="$2y$10$8ngt1pYt2CmaJimuAVGPhuV0D/o6cJQ1Ykfh1u7EvY9ndvehbZFe2";
            $this->cnx->fetchadmin($identifiant,$psw);
            if(strip_tags($_POST['mail'])===$identifiant && password_verify(strip_tags($_POST['password']),$psw)){
                $_SESSION['connecté']="ok";
                header('location:../../admin/public');
            }else{
                header('location:../login?erreur');
            }
        }
    }
    public function decon(){
        session_destroy();
        header("Location:../../public/login");
    }
    
    public function index(){
      
        $this->render('login');
    }
}

?>
   
