<?php

    $response=array();
    $response['error']=true;
    $response['message']='no data';
    $response['data']=null;
    $subjectId=1;
    if(isset($_GET['subjectId'])){
        $subjectId=$_GET['subjectId'];
    }
    if($_SERVER['REQUEST_METHOD']=='GET'){
        require('../apis/Courses.php');
        $courses=new Courses();
        $result=$courses->getAllCourses($subjectId);
        if($result){
            if(mysqli_num_rows($result)>0)
            {
                $temp=array();
                while($row=mysqli_fetch_assoc($result)){
                    $temp[]=$row;
                }
                $response['error']=false;
                $response['message']='success';
                $response['data']=$temp;
            }else{
                $response['message']='No course regarding this subject';
            }
        }
    }else{
        $response['message']='Invalid request';
    }
    echo json_encode($response);
    