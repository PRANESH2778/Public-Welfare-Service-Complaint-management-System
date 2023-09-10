<?php
session_start();
error_reporting();
// require_once("../../include/commonfunction.php");
include('dbconnection.php');
$sql = $message = $error = "";

$action = $_POST['action'];
// echo 'asdfasdf'.$action;

    switch ($action) {

        

        case "service_add":

                $f_name = $_POST[firstname];
                $l_name = $_POST[lastname];
                $gender = $_POST[gender];
                $phone = $_POST[phone];
                $address = $_POST[address];
                $email = $_POST[email];
                $psw = $_POST[psw];
                $psw_repeat = $_POST[psw_repeat];



  $sql = "INSERT INTO `registration` ( `f_name`, `l_name`, `gender`,`phone`, `address`, `email`, `psw`, `psw_repeat` ) VALUES ( '$f_name','$l_name','$gender','$phone','$address','$email','$psw','$psw_repeat' ) ";


        $prepare = $conn->prepare($sql);
        $exe = $prepare->execute();
        if ($exe == true) {
            $message = 'save';
            $error = '';
        } else {
            $message = '';
            $error = 'error';
        }

        echo json_encode(array('msg' => $message, 'error' => $error, 'sql' => $sql));

        break;

        
        default:
    }

?>
