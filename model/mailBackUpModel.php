<?php
class mailBackUpModel extends Database{
    private $db;
    
    public function __construct(){
        $this->db=new database();
    }
   
    public function checkmail($email){
        return $this->db->query("SELECT mail from client where mail=?",[$email])->fetch();
    }
    public function updatProvisoir($provisoire,$email){
        $this->db->query("UPDATE client SET mdp =? WHERE mail=? ",[$provisoire,$email]);
    }
}
?>