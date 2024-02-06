<?php

class Contributor
{
    private $con;
    public function __construct()
    {
        require_once dirname(__FILE__) . "/includes/DbConnect.php";
        $db = new DbConnect();
        $this->con = $db->connect();
    }

   function getContributor($id){
       $sql="SELECT * FROM `contributor` WHERE id=$id";
       if($result=mysqli_query($this->con,$sql)){
           return mysqli_fetch_assoc($result);
       }else
        return null;
   }
   function createNotes(){
       
   }
}
