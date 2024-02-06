<?php

class Notes
{
    private $con;
    public function __construct()
    {
        require_once dirname(__FILE__) . "/includes/DbConnect.php";
        $db = new DbConnect();
        $this->con = $db->connect();
    }

    function getAllNotesCourseWise($id)
    {
        $sql = "SELECT * FROM `notes` WHERE course_id=$id and is_approved=1";
        return mysqli_query($this->con, $sql);
    }
    function uploadNotes($post, $file)
    {
        $temp = explode(".", $file["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $sql = "INSERT INTO `notes` (`name`, `course_id`, `file`, `notes_type`,`contributor_id`) VALUES ('$post[name]', '$post[course_id]', '$newfilename', '$post[notes_type]','$post[contributor_id]')";
        $status = mysqli_query($this->con, $sql);
        if ($status > 0) {
            move_uploaded_file($file['tmp_name'], "../assets/notes/$newfilename");
            return true;
        }
        return false;
    }
}
