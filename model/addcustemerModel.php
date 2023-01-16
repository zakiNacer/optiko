    <?php
    class addcustemerModel extends Database{
        private $db;

    public function __construct(){
        $this->db = new database();
    }
    
     public function checkuser($mail){
         return $this->db->query("SELECT mail FROM Client where mail=?",[$mail])->fetch();
     }
    public function ajoutclient($nom,$prenom,$genre,$mail,$mdp){
        $this->db->query("INSERT INTO client (nom,prenom,genre,mail,mdp) VALUES (?,?,?,?,?)",[$nom,$prenom,$genre,$mail,$mdp]);

    }
    
   
    }
    
?>