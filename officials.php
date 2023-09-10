<!DOCTYPE html>
<html>
<head>

	<title>officials information</title>
	<style>
	body {
  background-color: lightblue;
}
</style>
</head>

<body>
	<div id="invoice_no_list_div">
    <?php
    include('dbconnection.php');
    ?>
  </div>
<h1><b>Officer's Information</b></h1>
<?php  
$sql = "SELECT * FROM empdet where problems='$_GET[problem_name]' ";
$prepare = $conn->prepare($sql);
$exc = $prepare->execute();
$prob_details = $prepare->fetchAll();
foreach ($prob_details as $value) {
  

?>
<form action="complaint3.php">

	<p style="text-align: left;"> Firstname/முதல் பெயர்:<b><?php echo $value['firstname'] ?></b></p>
	<p style="text-align: left;"> Lastname/கடைசி பெயர்:<b><?php echo $value['lastname'] ?></b></p>
	<p style="text-align: left;"> Gender/பாலினம் :<b><?php echo $value['gender'] ?></b></p>
	<p style="text-align: left;"> department/துறை:<b><?php echo $value['department'] ?></b></p>
	<p style="text-align: left;"> responsible for duties/கடமைகளுக்கு பொறுப்பு:<b><?php echo $value['problems'] ?></b></p>
	<p style="text-align: left;"> Phone/தொலைபேசி எண் :<b><?php echo $value['phone'] ?></b></p>
	<p style="text-align: left;"> Areas covered/அவருக்கு கீழ் உள்ள பகுதிகள்:<b><?php echo $value['address'] ?></b></p>
	<p style="text-align: left;"> Email/மின்னஞ்சல்:<b><?php echo $value['email'] ?></b></p>
	<button type="Complaint Register" >Register complaint/புகாரை பதிவு செய்யுங்கள்</button>
</form>
<?php } ?>
</body>
</html>