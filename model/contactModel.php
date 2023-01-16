<?php
class contactModel extends Database{
    private $db;

    public function __construct(){
        $this->db=new database();
    }

    public function insertMessage($nom,$mail,$msg){
        $this->db->query("INSERT INTO contact (nom, mail, message)VALUES(?,?,?)",[$nom,$mail,$msg]);
    }
}

?>