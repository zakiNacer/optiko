<?php
    class catBoutiqueModel extends Database{
        private $db;

    public function __construct(){
        $this->db = new database();
    } 
    public function categorie(){
        return $this->db->query('SELECT * FROM categorie')->fetchAll();
    }
    //la requete qui filtrante
    public function catProd($id){
        return $this->db->query(
        'SELECT 
        `intermediaire`.`id_artic`,
        `intermediaire`.`id_cat`,
        `categorie`.`nom` as catname,
        `articles`.`nom` as artname,
        `articles`.`image` as aimg,
        `articles`.`id` as a_id,
        `categorie`.`id` as cat_id
      FROM
        `articles`
        INNER JOIN `intermediaire` ON (`articles`.`id` = `intermediaire`.`id_artic`)
        INNER JOIN `categorie` ON (`intermediaire`.`id_cat` = `categorie`.`id`)
        WHERE `categorie`.`id`=?',[$id])->fetchAll();
        
        
    }
   

    }
?>