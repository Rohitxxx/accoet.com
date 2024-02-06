<?php

    $response=array();
    $response['error']=true;
    $response['message']='no data';
    $response['data']=null;
    if($_SERVER['REQUEST_METHOD']=='GET'){
        require('../apis/Subject.php');
        $subject=new Subject();
        $result=$subject->getAllSubjects();
        if($result){
            $temp=array();
            while($row=mysqli_fetch_assoc($result)){
                $temp[]=$row;
            }
            $response['error']=false;
            $response['message']='success';
            $response['data']=$temp;
        }
    }else{
        $response['message']='Invalid request';
    }
    echo json_encode($response);
    