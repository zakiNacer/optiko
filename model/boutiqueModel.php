<?php
    class boutiqueModel extends Database{
        private $db;

    public function __construct(){
        $this->db = new database();
    }
    
    public function getproduct($debut,$next){
        return $this->db->query("SELECT * from articles LIMIT $debut,$next")->fetchAll();
    }
    
    //compter nos d'article
    public function countArticle(){
        return $this->db->query('SELECT COUNT(*) as  nb_articles from articles')->fetch(PDO::FETCH_NUM)[0]; 
    }
    
    public function categorie(){
        return $this->db->query('SELECT * FROM categorie')->fetchAll();

    }

   

    }
?>