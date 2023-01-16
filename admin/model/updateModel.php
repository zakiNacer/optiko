<?php 
class updateModel extends Database{
    private $db;

    public function __construct(){
        $this->db = new database();
    }

    public function afficher($id){
        return $this->db->query("SELECT * FROM homeactu WHERE id=? ",[$id])->fetch();
    }
    public function update($titre,$text,$id){
        $this->db->query("UPDATE homeactu SET titre=? ,contenu=? WHERE id=? ",[$titre,$text,$id]);
       
    }
    
    
}

?>