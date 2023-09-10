<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini";

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  

function injection($st){
    global $conn;
    
    $st = stripslashes($st);
    $st = $conn -> real_escape_string($st);
    return $st;
}

?>