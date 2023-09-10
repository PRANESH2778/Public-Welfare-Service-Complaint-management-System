<?php

session_start();
error_reporting();
include('dbconnection.php');

$sql = $message = $error = "";

$sql = "SELECT COUNT(email) as usercount,email FROM registration WHERE email= '" . $_POST['email'] . "' AND psw = '" . $_POST['password'] . "'";
$prepare = $conn->prepare($sql);
$exc = $prepare->execute();
$login_details = $prepare->fetchAll();
$user_name_count = 0;

if ($exc == true) {
    
    if (!empty($login_details)) {
        
        $user_name_count = $login_details[0]['usercount'];
        if ($user_name_count > 0) {
            
            $message = 'save';
            $error = '';
            $_SESSION['email'] = $login_details[0]['email'];
        }
        else {
            $message = 'invalid';
            $error = '';
        }
    } 
} else {
    $message = '';
    $error = 'error';
}
echo json_encode(array('msg' => $message, 'error' => $error, 'sql' => $sql));
?>