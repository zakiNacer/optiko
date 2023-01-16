<?php
class rdvModel extends Database{
    private $db;

    public function __construct(){
        $this->db = new database();
    }

    
    public function afficherrdv(){
        return $this->db->query('SELECT * FROM rendezvous')->fetchAll();

    }
    public function delete($id){
        $this->db->query('DELETE FROM rendezvous WHERE id=?',[$id]);
        
    }
   
    
    
    
}

?>