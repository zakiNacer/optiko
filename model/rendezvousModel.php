<?php
class rendezvousModel extends Database{
    private $db;
    
    public function __construct(){
        $this->db=new database();
    }
    
     // filtrer les crénaux horraire
     public function trieHorraire($date){
        return $this->db->query("SELECT date FROM rendezvous WHERE date=?",[$date])->fetch();
    }

     public function fetchIdUser($mail){
        return $this->db->query("SELECT id, nom, prenom from client where mail=?",[$mail])->fetch();
     }
    public function insertData($nom,$prenom,$mail,$select,$numero,$session,$date, $identifiant,$get_id){
        
       
        $this->db->query("INSERT INTO rendezvous (nom, prenom, mail, motif, numero, session, date,identifiant,id_client)VALUES(?,?,?,?, ?, ?, ?,?,? )",[$nom,$prenom,$mail,$select,$numero,$session,$date, $identifiant, $get_id]);
       
    }
   
    
    
    
} 
?>