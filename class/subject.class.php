<?php

require_once 'database.php';

Class subject{
    //attributes
    public $subject_id;
    public $subject_name;

    public $sem;
    public $curriculum;
    public $year_level;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function fetch($record_id){
        $sql = "SELECT * FROM tbl_subject WHERE sem = :sem AND curriculum =
        :curriculum AND year_level = :year_level";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':subject_id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function show(){
        $sql = "SELECT * FROM tbl_subject ORDER BY subject_id ASC;";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }


    function getSubjects() {
        $sql = "SELECT * FROM tbl_subject WHERE sem = :sem AND curriculum =
         :curriculum AND year_level = :year_level";
        $query=$this->db->connect()->prepare($sql);


        //  bind parameters
        $query->bindParam(':sem', $this-> sem);
        $query->bindParam(':curriculum', $this->curriculum);
        $query->bindParam(':year_level', $this->year_level);

        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
}