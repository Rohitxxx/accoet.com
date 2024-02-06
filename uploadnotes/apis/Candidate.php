<?php
class Candidate
{
    public function __construct()
    {
        require_once dirname(__FILE__) . "/includes/DbConnect.php";
        $db = new DbConnect();
        $this->con = $db->connect();
    }
    public function createResume($user_id, $name, $gender, $father_name, $contact_no, $dob, $martial_status, $address, $address2, $city, $state, $zip, $high_school_name, $high_school_board, $high_school_percentage, $high_school_yr_of_pass, $intermediate_institution, $intermediate_board, $intermediate_percentage, $intermediate_yr_of_pass, $diploma_clg_name, $diploma_course, $diploma_percentage, $diploma_yr_of_pass, $ug_clg_name, $ug_course, $ug_percentage, $ug_yr_of_pass, $pg_clg_name, $current_company, $current_salary, $experiance, $designation, $skills, $whatsapp_profile, $insta_profile, $linkedin_profile, $fb_profile, $image, $resume, $description)
    {
        $pg_course = "";          //values not known for now
        $pg_percentage = false;
        $pg_yr_of_pass = false;
        $sql = "INSERT INTO `candidate` (`user_id`, `name`, `father_name`, `contact_no`, `dob`, `gender`, `martial_status`, `address`, `address2`, `city`, `state`, `zip`, `current_company`, `current_salary`, `experiance`, `designation`, `skills`, `high_school_name`, `high_school_board`, `high_school_percentage`, `high_school_yr_of_pass`, `intermediate_institution`, `intermediate_board`, `intermediate_yr_of_pass`, `intermediate_percentage`,`diploma_clg_name`, `diploma_course`, `diploma_percentage`, `diploma_yr_of_pass`, `ug_clg_name`, `ug_course`, `ug_percentage`, `ug_yr_of_pass`, `pg_clg_name`, `pg_course`, `pg_percentage`, `pg_yr_of_pass`, `whatsapp_profile`, `insta_profile`,`linkedin_profile`, `fb_profile`, `description`, `image`, `resume`) VALUES ($user_id, '$name', '$father_name', '$contact_no', '$dob', '$gender', '$martial_status', '$address', '$address2', '$city', '$state', '$zip', '$current_company', '$current_salary', '$experiance', '$designation', '$skills', '$high_school_name', '$high_school_board', '$high_school_percentage', '$high_school_yr_of_pass', '$intermediate_institution', '$intermediate_board', '$intermediate_yr_of_pass', '$intermediate_percentage', '$diploma_clg_name', '$diploma_course', '$diploma_percentage', '$diploma_yr_of_pass','$ug_clg_name', '$ug_course', '$ug_percentage', '$ug_yr_of_pass', '$pg_clg_name', '$pg_course', '$pg_percentage', '$pg_yr_of_pass', '$whatsapp_profile', '$insta_profile','$linkedin_profile', '$fb_profile', '$description', '$image[name]', '$resume[name]');
            ";
        $status = mysqli_query($this->con, $sql);
        if ($status > 0) {
            if (mkdir("./uploaded/" . $user_id)) {
                move_uploaded_file($image['tmp_name'], "./uploaded/" . $user_id . "/$image[name]");
                move_uploaded_file($resume['tmp_name'], "./uploaded/" . $user_id . "/$resume[name]");
                return true;
            } else {  // if folder already exists then simply move the file 
                move_uploaded_file($image['tmp_name'], "./uploaded/" . $user_id . "/$image[name]");
                move_uploaded_file($resume['tmp_name'], "./uploaded/" . $user_id . "/$resume[name]");
                return true;
            }
            echo "file not moved";
            return false;  // file not moved;
        } else {
            echo "resume not created";
            return false;
        }
        // return $status>0;
    }
    public function editResume($user_id, $name, $gender, $father_name, $contact_no, $dob, $martial_status, $address, $address2, $city, $state, $zip, $high_school_name, $high_school_board, $high_school_percentage, $high_school_yr_of_pass, $intermediate_institution, $intermediate_board, $intermediate_percentage, $intermediate_yr_of_pass, $diploma_clg_name, $diploma_course, $diploma_percentage, $diploma_yr_of_pass, $ug_clg_name, $ug_course, $ug_percentage, $ug_yr_of_pass, $pg_clg_name, $current_company, $current_salary, $experiance, $designation, $skills, $whatsapp_profile, $insta_profile, $linkedin_profile, $fb_profile, $description)
    {
        $pg_course = "";          //values not known for now
        $pg_percentage = false;
        $pg_yr_of_pass = false;
        $sql = "UPDATE `candidate` SET `name` = '$name ', `father_name` = '$father_name ', `contact_no` = '$contact_no ', `dob` = '$dob ', `gender` = '$gender ', `martial_status` = '$martial_status ', `address` = '$address ', `address2` = '$address2 ', `city` = '$city ', `state` = '$state ', `zip` = '$zip', `current_company` = '$current_company ', `current_salary` = '$current_salary ', `experiance` = '$experiance', `designation` = '$designation ', `skills` = '$skills ', `high_school_name` = '$high_school_name ', `high_school_board` = '$high_school_board ', `high_school_percentage` = '$high_school_percentage', `high_school_yr_of_pass` = '$high_school_yr_of_pass', `intermediate_institution` = '$intermediate_institution ', `intermediate_board` = '$intermediate_board ', `intermediate_yr_of_pass` = '$intermediate_yr_of_pass', `intermediate_percentage` = '$intermediate_percentage',`diploma_clg_name` = '$diploma_clg_name ', `diploma_course` = '$diploma_course', `diploma_percentage` = '$diploma_percentage', `diploma_yr_of_pass` = '$diploma_yr_of_pass',  `ug_clg_name` = '$ug_clg_name ', `ug_course` = '$ug_course', `ug_percentage` = '$ug_percentage', `ug_yr_of_pass` = '$ug_yr_of_pass', `pg_clg_name` = '$pg_clg_name ', `pg_course` = '$pg_course ', `pg_percentage` = '$pg_percentage', `pg_yr_of_pass` = '$pg_yr_of_pass',`whatsapp_profile` = '$whatsapp_profile ', `insta_profile` = '$insta_profile ', `linkedin_profile` = '$linkedin_profile ', `fb_profile` = '$fb_profile ', `description` = '$description ',  `updated_at` = current_timestamp() WHERE `candidate`.`user_id` = $user_id ";
        $status = mysqli_query($this->con, $sql);
        if ($status > 0) {
            return true;
            //     if (!file_exists("./uploaded/" . $user_id)) {
            //         mkdir("./uploaded/" . $user_id);
            //     }
            //     move_uploaded_file($image['tmp_name'],"./uploaded/".$user_id."/$image[name]");
            //     move_uploaded_file($resume['tmp_name'],"./uploaded/".$user_id."/$resume[name]");
        } else {
            return false;
            // echo "not inserted";
        }
        // return $status;
    }
    public function saveUserData($user_id, $name, $gender, $father_name, $contact_no, $dob, $martial_status, $address, $address2, $city, $state, $zip, $high_school_name, $high_school_board, $high_school_percentage, $high_school_yr_of_pass, $intermediate_institution, $intermediate_board, $intermediate_percentage, $intermediate_yr_of_pass, $diploma_clg_name, $diploma_course, $diploma_percentage, $diploma_yr_of_pass, $ug_clg_name, $ug_course, $ug_percentage, $ug_yr_of_pass, $pg_clg_name, $pg_course, $pg_percentage, $pg_yr_of_pass, $current_company, $current_salary, $experiance, $designation)
    {
        $sql = "UPDATE `candidate` SET `name` = '$name ', `father_name` = '$father_name ', `contact_no` = '$contact_no ', `dob` = '$dob ', `gender` = '$gender ', `martial_status` = '$martial_status ', `address` = '$address ', `address2` = '$address2 ', `city` = '$city ', `state` = '$state ', `zip` = '$zip', `current_company` = '$current_company ', `current_salary` = '$current_salary ', `experiance` = '$experiance', `designation` = '$designation ',  `high_school_name` = '$high_school_name ', `high_school_board` = '$high_school_board ', `high_school_percentage` = '$high_school_percentage', `high_school_yr_of_pass` = '$high_school_yr_of_pass', `intermediate_institution` = '$intermediate_institution ', `intermediate_board` = '$intermediate_board ', `intermediate_yr_of_pass` = '$intermediate_yr_of_pass', `intermediate_percentage` = '$intermediate_percentage',`diploma_clg_name` = '$diploma_clg_name ', `diploma_course` = '$diploma_course', `diploma_percentage` = '$diploma_percentage', `diploma_yr_of_pass` = '$diploma_yr_of_pass',  `ug_clg_name` = '$ug_clg_name ', `ug_course` = '$ug_course', `ug_percentage` = '$ug_percentage', `ug_yr_of_pass` = '$ug_yr_of_pass', `pg_clg_name` = '$pg_clg_name ', `pg_course` = '$pg_course ', `pg_percentage` = '$pg_percentage', `pg_yr_of_pass` = '$pg_yr_of_pass',  `updated_at` = current_timestamp() WHERE `candidate`.`user_id` = $user_id ";
        $status = mysqli_query($this->con, $sql);
        if ($status > 0) {
            return true;
            //     if (!file_exists("./uploaded/" . $user_id)) {
            //         mkdir("./uploaded/" . $user_id);
            //     }
            //     move_uploaded_file($image['tmp_name'],"./uploaded/".$user_id."/$image[name]");
            //     move_uploaded_file($resume['tmp_name'],"./uploaded/".$user_id."/$resume[name]");
        } else {
            return false;
            // echo "not inserted";
        }
        // return $status;
    }
    public function saveNecessaryDetails($post)
    {
        if (isset($post['current_company'])) {
            $sql = "UPDATE `candidate` SET `name` = '$post[name]', `gender` = '$post[gender]', `current_company` = '$post[current_company]', `experiance` = '$post[experiance]', `designation` = '$post[designation]', `domain` = '$post[domain]' ,  `updated_at`=current_timestamp() WHERE `candidate`.`user_id` = $post[user_id]";
        } else {
            $sql = "UPDATE `candidate` SET `name` = '$post[name]', `gender` = '$post[gender]',`domain` = '$post[domain]',  `updated_at`=current_timestamp() WHERE `candidate`.`user_id` = $post[user_id]";
        }
        $status = mysqli_query($this->con, $sql);
        if ($status > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function saveSkillsAndExperience($post)
    {
        if (isset($post['user_id'])) {
            $sql = "UPDATE `candidate` SET `skills` = '$post[skills]', `experiance` = '$post[experience]',`domain` = '$post[domain]',  `updated_at`=current_timestamp() WHERE `candidate`.`user_id` = $post[user_id]";
            $status = mysqli_query($this->con, $sql);
            if ($status > 0) {
                return true;
            } else {
                return false;
            }
        } else
            return false;
    }
    public function createCandidate($user_id, $contact_no)
    {
        if (!$this->isCandidateExists($user_id)) {
            $sql = "INSERT INTO candidate(user_id,contact_no) values ($user_id,$contact_no)";
            $status = mysqli_query($this->con, $sql);
            if ($status > 0) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return -1;
        }
    }
    public function getCandidateDetails($user_id)
    {
        $sql = "SELECT * FROM `candidate` WHERE `user_id`=$user_id";
        $result = mysqli_query($this->con, $sql);
        if ($result->num_rows > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return false;
        }
    }
    public function getCandidateId($user_id)
    {
        $sql = "SELECT * FROM `candidate` WHERE `user_id`=$user_id";
        $result = mysqli_query($this->con, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_array($result);
            return $row['candidate_id'];
        } else {
            return false;
        }
    }
    public function getCandidateDetailsById($candidate_id)
    {
        $sql = "SELECT * FROM `candidate` WHERE `candidate_id`=$candidate_id";
        $result = mysqli_query($this->con, $sql);
        if ($result->num_rows > 0) {
            return mysqli_fetch_array($result);
        } else {
            return false;
        }
    }
    public function isResumeCreated($user_id)
    {
        $sql = "SELECT * from `candidate` where `user_id`=$user_id";
        $result = mysqli_query($this->con, $sql);
        return $result->num_rows > 0;
    }
    public function getAllCandidates($is_active)
    {
        if ($is_active == 10)  // 10 means all
            $sql = "SELECT * FROM `candidate`";
        else
            $sql = "select *
                from candidate
                where user_id in (
                  select user_id
                  from users
                  where is_active = $is_active and role=1
                );"; //fetching the data based on is_active (join concept)
        $result = mysqli_query($this->con, $sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function getAllCandidatesWithPagination($is_active, $startLimit, $recordPerPage)
    {
        if ($is_active == 10)  // 10 means all
            $sql = "SELECT * FROM `candidate` ORDER BY updated_at DESC LIMIT $startLimit,$recordPerPage";
        else
            $sql = "select *
                from candidate
                where user_id in (
                  select user_id
                  from users
                  where is_active = $is_active and role=1
                ) ORDER BY updated_at DESC LIMIT $startLimit,$recordPerPage;"; //fetching the data based on is_active (join concept)
        $result = mysqli_query($this->con, $sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    public function deleteCandidate($candidate_id)
    {
        $sql = "DELETE FROM `candidate` WHERE `candidate_id`=$candidate_id";
        $status = mysqli_query($this->con, $sql);
        if ($status > 0)
            return true;
        else
            return false;
    }
    public function updateImage($user_id, $img)
    {
        $sql = "UPDATE `candidate` SET `image` = '$img[name]' WHERE `candidate`.`user_id` = $user_id";
        $status = mysqli_query($this->con, $sql);
        if ($status > 0) {
            if (!file_exists("../uploaded/$user_id")) {
                mkdir("../uploaded/$user_id", 0777, true);
            }
            move_uploaded_file($img['tmp_name'], "../uploaded/$user_id/$img[name]");
            return true;
        } else {
            return false;
            // echo "not inserted";
        }
    }
    public function updateResume($user_id, $resume)
    {
        $sql = "UPDATE `candidate` SET `resume` = '$resume[name]' WHERE `candidate`.`user_id` = $user_id";
        $status = mysqli_query($this->con, $sql);
        if ($status > 0) {
            if (!file_exists("../uploaded/" . $user_id)) {
                mkdir("../uploaded/$user_id", 0777, true);
            }
            move_uploaded_file($resume['tmp_name'], "../uploaded/$user_id/$resume[name]");
            return true;
        } else {
            return false;
            // echo "not inserted";
        }
    }
    function isCandidateExists($user_id)
    {
        $sql = "SELECT * FROM candidate where user_id=$user_id";
        $result = mysqli_query($this->con, $sql);
        mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
    function getCoures($courseType){
        $sql="SELECT * FROM `courses` where `course_type` =$courseType";
        $result=mysqli_query($this->con,$sql);
        return $result;
    }
}
