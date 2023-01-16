<?php
    class singleProdModel extends Database{
        private $db;

    public function __construct(){
        $this->db = new database();
    }
  
    // public function affichProduit($id){
       
    //     return $this->db->query('SELECT * FROM articles WHERE id=?',[$id] )->fetch();
    // }
    public function affichProduit($id){
        return $this->db->query(
        'SELECT 
        
            `marques`.`id`,
            `marques`.`img` as marqimg ,
            `marques`.`brand`as marqname,
            `marques`.`discription`,
            `marques`.`etoile` as marqetoile,
            `categorie`.`id`,
            `categorie`.`nom` as catname,
            `intermediaire`.`id_brand`,
            `intermediaire`.`id_artic`,
            `intermediaire`.`id_cat`,
            `articles`.`id`,
            `articles`.`nom` as anom,
            `articles`.`image` as aimg
        FROM `articles`
        INNER JOIN `intermediaire` ON (`articles`.`id` = `intermediaire`.`id_artic`)
        INNER JOIN `categorie` ON (`intermediaire`.`id_cat` = `categorie`.`id`)
        INNER JOIN `marques` ON (`intermediaire`.`id_brand` = `marques`.`id`)
        WHERE `articles`.`id`=?',[$id])->fetch();
    }
   

}
?>