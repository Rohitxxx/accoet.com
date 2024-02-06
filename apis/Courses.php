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

    function getCourseDetail($courseId)
    {
        $sql = "SELECT * FROM `courses` WHERE id=$courseId";
        return mysqli_query($this->con, $sql);
    }
    function getCourseDetailByUrl($url)
    {
        $sql = "SELECT * FROM `courses` WHERE url='$url'";
        return mysqli_query($this->con, $sql);
    }
    function get4Courses()
    {
        $sql = "SELECT * FROM `courses` LIMIT 4";
        return mysqli_query($this->con, $sql);
    }
    function getLessons($id){
        $sql = "SELECT * FROM `courses_content` WHERE course_id=$id";
        return mysqli_num_rows( mysqli_query($this->con, $sql));
         
    }
    function getCourseContentDetail($courseId)
    {
        $sql = "SELECT * FROM `courses_content` WHERE course_id=$courseId";
        return mysqli_query($this->con, $sql);
    }
    function insertData($data)
    {
        $sql = "INSERT INTO enquiry (name,email,course,msg) VALUE ('$data[name]','$data[email]','$data[course]','$data[msg]');";
        $status = mysqli_query($this->con, $sql);
        return $status;
    }
    function insertUser($email)
    {
        $sql = "INSERT INTO user (email) VALUES('$email');";
        $status = mysqli_query($this->con, $sql);
        return $status;
    }
    function getCourseUrl()
    {
        $sql = "SELECT `id`, `url` FROM `courses`";
        return mysqli_query($this->con, $sql);
    }
}
