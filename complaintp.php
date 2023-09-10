<?php
session_start();
error_reporting();
// require_once("../../include/commonfunction.php");
include('dbconnection.php');
$sql = $message = $error = "";

$action = $_POST['action'];
// echo 'asdfasdf'.$action;

    switch ($action) {

        

        case "details_add1":

                $name = $_POST[fname];
                $address = $_POST[address];
                $telephone = $_POST[telephone];
                $complaint = $_POST[complaint];



 $sql = "INSERT INTO complaint ( `name`, `address`, `telephone`, `complaint`) VALUES ( '$name','$address','$telephone','$complaint') ";


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
