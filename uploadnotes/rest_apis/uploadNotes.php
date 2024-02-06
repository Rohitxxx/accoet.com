<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$response = array();
$response['error'] = true;
$response['message'] = 'no data';
$response['data'] = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['file'])) {
        require('../apis/Notes.php');
        $notes = new Notes();
        $result = $notes->uploadNotes($_POST, $_FILES['file']);
        if ($result) {
            $response['error'] = false;
            $response['message'] = 'success';
            $response['data'] = [];
        } else {
            $response['message'] = 'something went wrong';
        }
    } else
        $response['message'] = 'file not uploaded';
} else {
    $response['message'] = 'Invalid request';
}
echo json_encode($response);
