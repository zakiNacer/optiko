<?php 
class admModel extends Database{
    private $db;

    public function __construct(){
        $this->db = new database();
    }
    // afficher les select
    public function secteCat(){
        return $this->db->query("SELECT * from categorie")->fetchAll();

    }
    public function secteBrand(){
        return $this->db->query("SELECT * from marques")->fetchAll();

    }
   
    public function ajoutarticle($image,$article){
        $this->db->query('INSERT INTO articles (image,nom)VALUES(?,?)',[$image,$article]);
    }
    public function lastid(){
       return $this->db->query("SELECT LAST_INSERT_ID()")
       ->fetch(PDO::FETCH_NUM)[0];
    }
    public function ajoutcategorie($idcat,$last_insert_id,$id_marque){
        $this->db->query('INSERT INTO intermediaire (id_cat,id_artic,id_brand)VALUES(?,?,?)',[$idcat,$last_insert_id,$id_marque]);
    }
    
    
    
}

?>