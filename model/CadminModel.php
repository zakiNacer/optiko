<?php
    class CadminModel extends Database{
        private $db;

    public function __construct(){
        $this->db = new database();
    }
    
     
    public function fetchadmin($identifiant,$psw){
       
        return $this->db->query("SELECT * FROM admin where identifiant =? and psw=?",[$identifiant,$psw])->fetch();

    }
   
    }
    
?>