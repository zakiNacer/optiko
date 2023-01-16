<?php
class espaceClientModel extends Database{
    private $db;
    
    public function __construct(){
        $this->db=new database();
    }
   
    
    // public function displayRdnv($session_id){
    //     return $this->db->query("SELECT * FROM rendezvous WHERE rendezvous.session=?",[$session_id])->fetchAll();
  
    // }


    public function getid($identifiant){
       
        return $this->db->query("SELECT  id FROM client where mail=?",[$identifiant])->fetch(PDO::FETCH_NUM)[0];

    }
    public function getUser($identifiant)
    {
        return $this->db->query("SELECT * FROM client where mail =?",[$identifiant])->fetch();
    }
    
    public function getUser2($sess)
    {
        return $this->db->query("SELECT  client.nom , client.prenom , client.mail, client.mdp , rendezvous.id, rendezvous.motif, rendezvous.date, rendezvous.id_client, rendezvous.identifiant, rendezvous.numero  FROM `client` INNER JOIN `rendezvous` ON (`client`.`id` = `rendezvous`.`id_client`) WHERE rendezvous.id_client=?",[$sess])->fetchAll();
    }
    
    public function dltrdv($id){
        $this->db->query("DELETE from rendezvous WHERE id=?",[$id]);
        header('location:../../espaceClient'); 
    }
}
?>