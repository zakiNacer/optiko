<?php
class rendezvousController extends Controller{
    
    private $insertrdv;

    public function __construct(){
        $this->insertrdv= new rendezvousModel();
    }
    
    public function session_id(){
		return session_id();
	}
    public function identifiant(){
		return uniqid();
	}
    //verifier si la date existe
    public function checktime($date){
        return $this->insertrdv->trieHorraire($date);
    }
    public function getIduser($mail){
        $mail=strip_tags($_POST['mail']);
        return $this->insertrdv->fetchIdUser($mail);
        
    }
    public function ajoutrdv(){  
            $nom=strip_tags($_POST['nom']);
            $prenom=strip_tags($_POST['prenom']);
            $mail=strip_tags($_POST['mail']);
            $select=strip_tags($_POST['select']);
            $numero=strip_tags($_POST['numero']);
            $session=$this->session_id();
            $date=$_POST['date'];
            $identifiant=$this->identifiant();
            $get_user=$this->getIduser($mail);
            $get_id=$this->getIduser($mail)->id;
            
            //mail componant
            $from="from:optikoopticien2@gmail.com";
            $subjet="Confirmation de rendezvous";
            $message="Bonjour .$nom .$prenom vous avez pris un rendez vous chez OPTIKO le .$date  pour .$select si  vous avez besoin d'aide pour trouver l'emplacement, veuillez communiquer avec monsieur Ulysse au 01 60 66  01 80 l'équipe optiko vous remercie pour votre confiance et vous dit a trés bientot.";
            $check=$this->checktime($date);

            if(!preg_match('/^[a-z0-9A-Z._-]*\@[a-zA-Z0-9]*\.[a-zA-z]{2,6}$/',$mail)){
                header('location:../rendezvous?erreur=format_inco');
            } 
            elseif(!$get_user){
                header('location:../inscription?required');
            }
            elseif($check){
                header('location:../rendezvous?erreur=indisponible');
            }
            elseif(!preg_match("#[0-9]{10}#",$numero)){
                header('location:../rendezvous?erreur=num_inco');
            }
            else{
                $this->insertrdv->insertData( $nom,$prenom,$mail,$select,$numero,$session,$date,$identifiant, $get_id);
               
                if(isset($_POST)&& $_POST != ''){
                    mail($mail,$subjet,$message,$from);
                }
               
               header('location:../espaceClient');
            }        
    }
     
    

    
    
    public function index(){
        //$time="2022/03/11 11:00";
        // $titi=$this->checktime($time);
        // var_dump($titi);
        
        $this->render('rendezvous');
        
    }
}
?>
   
