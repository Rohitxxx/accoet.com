<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    $response=array();
    $response['error']=true;
    $response['message']='no data';
    $response['data']=null;
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(isset($_GET['id'])){
            require('../apis/Notes.php');
            require('../apis/Contributor.php');
            $notes=new Notes();
            $contributor=new Contributor();
            $result=$notes->getAllNotesCourseWise($_GET['id']);
            if($result){
                $temp=array();
                while($row=mysqli_fetch_assoc($result)){
                    $r=$contributor->getContributor($row['contributor_id']);
                    $row['contributor']=$r;
                    $temp[]=$row;
                }
                $response['error']=false;
                $response['message']='success';
                $response['data']=$temp;
            }
        }else
            $response['message']='id not provided';
    }else{
        $response['message']='Invalid request';
    }
    echo json_encode($response);
    