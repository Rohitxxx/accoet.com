hello notes seekers...
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require('./apis/Auth.php');
$auth=new Auth();
$result=$auth->getAllUsers();

print_r(mysqli_fetch_assoc($result));