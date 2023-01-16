<?php 
class homeDashbordModel extends Database{
    private $db;

    public function __construct(){
        $this->db = new database();
    }

    public function insertCard($picture,$text){
        $this->db->query('INSERT INTO homecard (img,contenu)VALUES(?,?)',[$picture,$text]);
    }
    
    public function insertdataCard($titre,$text){
        $this->db->query('INSERT INTO homeactu (titre,contenu)VALUES(?,?)',[$titre,$text]);
    }   

    //afficher les tableau pour la la page homedashbordaffiche 
     public function affichehomedashB(){
         return $this->db->query("SELECT * FROM homecard")->fetchAll();
     }
     // afficher les element du 2eme bloc pour la la page homedashbordaffiche 
     public function affichebloc2(){
        return $this->db->query("SELECT * FROM homeactu")->fetchAll();
    }
    public function deletee($id){
        $this->db->query("DELETE FROM homecard WHERE id=?",[$id]);
        
    }
    //delete pour actualité
    public function del($act_id){
        $this->db->query("DELETE FROM homeactu WHERE id=?",[$act_id]);
        
    }

}

?>