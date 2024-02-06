<?php

class Subject
{
    private $con;
    public function __construct()
    {
        require_once dirname(__FILE__) . "/includes/DbConnect.php";
        $db = new DbConnect();
        $this->con = $db->connect();
    }

   function getAllSubjects(){
       $sql="SELECT * FROM `subjects`";
       return mysqli_query($this->con,$sql);
   }
   
}
