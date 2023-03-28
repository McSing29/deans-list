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
        $sql = "INSERT INTO deans_listers (fullname, gpa, department, yearlevel) VALUES
        (:fullname, :GPA, :department, :year_level);";
        $fullname = $this->firstname . " " . $this->lastname;

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':fullname', $fullname);
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
        $sql = "SELECT * FROM deans_listers ORDER BY GPA ASC;";
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
        $sql = "SELECT * FROM listers WHERE id = :id; ";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function addApplicant($userid, $fullname, $email, $curriculum, $sem, $yearlevel, $section, $schoolyear, $gpa, $status, $filename, $adviserid, $adviserstatus){

        $conn = mysqli_connect('localhost', 'u237957316_deanlist', 'U=lGFvA2ii3', 'u237957316_deanlist');
        $sql = "INSERT INTO deanslist_applicants (user_id, user_name, email, curriculum, semester, year_level, section, school_year_id, gpa, app_status, app_file, adviser_id, adviser_status)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SOMETHING WENT WRONG!";
            return false;
        }

        mysqli_stmt_bind_param($stmt, "sssssssssssss", $userid, $fullname, $email, $curriculum, $sem, $yearlevel, $section, $schoolyear, $gpa, $status, $filename, $adviserid, $adviserstatus);
        mysqli_stmt_execute($stmt);
        $lastID = mysqli_insert_id($conn);
        mysqli_stmt_close($stmt);

        $_SESSION['tableid'] = $lastID;
        return true;
    }

    function updateApplicant($id, $gpa, $appstatus, $fileName){
        $sql = "UPDATE deanslist_applicants SET gpa=:gpa, app_status=:appstatus, app_file=:appfilename WHERE id = :appid;";
        $query=$this->db->connect()->prepare($sql);

        $query->bindParam(':appid', $id);
        $query->bindParam(':gpa', $gpa);
        $query->bindParam(':appstatus', $appstatus);
        $query->bindParam(':appfilename', $fileName);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }

    }
    
    function recordGradesPerSubject($app_id, $subject_id, $grade){
        $sql = "INSERT INTO applicants_grades (applicant_id, subject_id, grade) VALUES (:appid, :subjectid, :subgrade)";
        $query=$this->db->connect()->prepare($sql);

        $query->bindParam(':appid', $app_id);
        $query->bindParam(':subjectid', $subject_id);
        $query->bindParam(':subgrade', $grade);

        $query->execute();

    }

    function get_submitted_grades($app_id){
        $conn = mysqli_connect('localhost', 'u237957316_deanlist', 'U=lGFvA2ii3', 'u237957316_deanlist');
        $sql = "SELECT * FROM grades_list WHERE applicant_id = ?";
        
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../apply/admin-application.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $app_id);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);                                                                
    }
}

?>