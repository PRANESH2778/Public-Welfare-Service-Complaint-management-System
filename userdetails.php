<!DOCTYPE html>
<html>
<head>

    <title>user information</title>
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
<h1><b>User Information</b></h1>
<?php  
$sql = "SELECT * FROM registration where email = '$_SESSION[email]' ";
$prepare = $conn->prepare($sql);
$exc = $prepare->execute();
$user_details = $prepare->fetchAll();
foreach ($user_details as $value) {
  

?>
<form>
    <p style="text-align: left;"> Firstname/முதல் பெயர்:<b><?php echo $value['f_name'] ?></b></p>
    <p style="text-align: left;"> Lastname/கடைசி பெயர்:<b><?php echo $value['l_name'] ?></b></p>
    <p style="text-align: left;"> Gender/பாலினம் :<b><?php echo $value['gender'] ?></b></p>
    <p style="text-align: left;"> Phone/தொலைபேசி எண்:<b><?php echo $value['phone'] ?></b></p>
    <p style="text-align: left;"> Address:<b><?php echo $value['address'] ?></b></p>
    <p style="text-align: left;"> Email/மின்னஞ்சல்:<b><?php echo $value['email'] ?></b></p>
</form>
<?php } ?>
</body>
</html>