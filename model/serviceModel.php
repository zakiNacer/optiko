<?php
    class serviceModel extends Database{
        private $db;

    public function __construct(){
        $this->db = new database();
    }
    
     
    public function getCard(){
        return $this->db->query("SELECT * FROM service ")->fetchAll();

    }
    
   
    }
    
?>