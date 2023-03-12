<?php

require_once 'database.php';

class Listers{
    //attributes

    public $id;
    public $firstname;
    public $lastname;
    public $GPA;
    public $department;
    public $year_level;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods
    function add(){
        $sql = "INSERT INTO listers (firstname, lastname, GPA, department, year_level) VALUES
        (:firstname, :lastname, :GPA, :department, :year_level);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':GPA', $this->GPA);
        $query->bindParam(':department', $this->department);
        $query->bindParam(':year_level', $this->year_level);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function show(){
        $sql = "SELECT * FROM listers ORDER BY CONCAT('firstname',', ','lastname') ASC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function delete($record_id){
        $sql = "DELETE FROM listers WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    function edit(){
        $sql = "UPDATE listers SET firstname=:firstname, lastname=:lastname, GPA=:GPA, department=:department, year_level=:year_level WHERE id = :id;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':GPA', $this->GPA);
        $query->bindParam(':department', $this->department);
        $query->bindParam(':year_level', $this->year_level);
        $query->bindParam(':id', $this->id);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch($record_id){
        $sql = "SELECT * FROM listers WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

}

?>