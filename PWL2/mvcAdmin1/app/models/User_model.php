<?php
class User_model{
    private $table = 'user';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllUser(){
        $sql="SELECT * FROM " . $this->table;
        $this->db->query($sql);
        return $this->db->single();
    }
    public function cekUser ($user, $pass){
        $sql="SELECT * FROM " . $this->table . " WHERE username='$user' and password='$pass'";
        $this->db->query ($sql);
        return $this->db->single();
    }
}