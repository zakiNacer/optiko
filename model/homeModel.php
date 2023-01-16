<?php
    class homeModel extends Database{
        private $db;

    public function __construct(){
        $this->db = new database();
    }
    
     
    public function getCard(){
        return $this->db->query("SELECT * FROM homecard ")->fetchAll();

    }
    public function getactu(){
        return $this->db->query("SELECT * FROM homeactu ")->fetchAll();

    }
   
    }
    
?>