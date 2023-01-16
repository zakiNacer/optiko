<?php
class dashbordModel extends Database{
    private $db;

    public function __construct(){
        $this->db = new database();
    }

    
    public function afficherlesarticles(){
        return $this->db->query('SELECT * FROM articles')->fetchAll();

    }
    public function delete($id){
        $this->db->query("DELETE FROM articles WHERE id=?",[$id]);
    }
    
    
    
}

?>