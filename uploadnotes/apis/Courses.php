<?php

class Courses
{
    private $con;
    public function __construct()
    {
        require_once dirname(__FILE__) . "/includes/DbConnect.php";
        $db = new DbConnect();
        $this->con = $db->connect();
    }

   function getAllCourses($subjectId){
       $sql="SELECT * FROM `courses` WHERE subject_id=$subjectId";
       return mysqli_query($this->con,$sql);
   }
   
}
