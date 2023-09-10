<<?php 
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)) {
	if (!empty($password)) {
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "mini";

		$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()) {
			die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
		}
		else
		{
			$sql = "INSERT INTO login (username,password) values ('$username','$password')";
			if ($conn->query($sql)) 
			{
				echo "new record is inserted successfully";
			}
			else{
				echo "error:".$sql ."<br>".$conn->error;
			}
			$conn->close();
		}
	}
	else{
		echo "username should not be empty";
		die();
	}
}
	else
	{
		echo "password should not be empty";
		die();
	}
 ?>