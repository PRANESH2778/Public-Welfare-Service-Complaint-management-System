<?php
session_start();
error_reporting();
// require_once("../../include/commonfunction.php");
include('dbconnection.php');
$sql = $message = $error = "";

$action = $_POST['action'];
// echo 'asdfasdf'.$action;

    switch ($action) {

        

        case "details_add":

                $firstname = $_POST[firstname];
                $lastname = $_POST[lastname];
                $gender = $_POST[gender];
                $department = $_POST[department];
                $problems = $_POST[problems];
                $phone = $_POST[phone];
                $address = $_POST[address];
                $email = $_POST[email];



   $sql = "INSERT INTO empdet ( `firstname`, `lastname`, `gender`, `department`, `problems`, `phone`, `address`, `email` ) VALUES ( '$firstname','$lastname','$gender','$department','$problems','$phone','$address','$email') ";


        $prepare = $conn->prepare($sql);
        $exe = $prepare->execute();
        // $email_details = $prepare->fetchAll();
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
