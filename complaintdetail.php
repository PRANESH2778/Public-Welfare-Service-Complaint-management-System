<!DOCTYPE html>
<html>
<head>

    <title>Complaint Details</title>
    <style>
    body {
  background-color: lightblue;
  color: white;
}
</style>
</head>

<body>
    <div id="invoice_no_list_div">
    <?php
    include("mainpage.php");
    include('dbconnection.php');
    ?>
  </div>
<h1><b>Complaint Details</b></h1>
<?php  
$sql = "SELECT * FROM complaint  ";
$prepare = $conn->prepare($sql);
$exc = $prepare->execute();
$user_details = $prepare->fetchAll();
foreach ($user_details as $value) {
  

?>
<form>
    <p style="text-align: left;"> Complaint No/புகார் எண்:<b><?php echo $value['id'] ?></b></p>
    <p style="text-align: left;"> Name/பெயர்:<b><?php echo $value['name'] ?></b></p>
    <p style="text-align: left;"> Address:<b><?php echo $value['address'] ?></b></p>
    <p style="text-align: left;"> Phone/தொலைபேசி எண்:<b><?php echo $value['telephone'] ?></b></p>
    <p style="text-align: left;"> Complaint/புகார்:<b><?php echo $value['complaint'] ?></b></p>
    <br><br>
</form>
<?php } ?>
</body>
</html>