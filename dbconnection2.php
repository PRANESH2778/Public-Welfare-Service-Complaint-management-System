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



// function datediffer($date1,$date2,$types){
//     $date_ts1 = strtotime($date1);
//     $date_ts2 = strtotime($date2);
//     $differ = $date_ts2  - $date_ts1;
//     $day=round($differ / 86400);
    
//     return floor($day / $types);
// }
// //    $newDate = date("d/m/Y",strtotime($dateofborrow));
?>