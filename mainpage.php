<!DOCTYPE html>
<html>
<head>
	<title> PWSCMS </title>
	<?php 
session_start();
 ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-comptible" content="ie=edge">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
body{
    width:100%;
    margin:0;
    padding:0;
    font-family:'Montserrat', sans-serif;
    background-image: url("homebg2.jpg");
  background-size:cover;
  background-repeat:no-repeat;
}

header{
    padding :30px 10px;
}
.logo{
	background-image: url(logo2.jpg);
	width: 250px;
	height: 100px;
	background-repeat: no-repeat;
}
a{
  text-decoration:none;
  color:white;
}

li{
    color:yellow;
    list-style: none;
} 
.right{
    padding-right:60px;
}
.right a {
    font-weight: 900;
    letter-spacing: 2px;
    font-size: 15px;
    margin-top:-30px;
    margin-right:25px;
    padding: 10px;
    color:#C8C8C8;
    float: right;
    text-decoration: none;
}
.right a:hover{
    color:#FFD600;
}
hr{ color:#C8C8C8;
    margin-top: -20px;
    margin-left:70px;
    margin-right:90px;
    align-content: center;
}
.text{
    margin-top:100px;
    width:500px;
    color:white;
    padding-left: 50px;
    color: yellow;
}
h6{
 font-weight:600;
 color:#C8C8C8;
 font-size:13px ;
padding-bottom: 0px;
color: yellow;
}
h1{
    margin-top: -20px;
    font-size:40px;
    letter-spacing:3px;
    font-weight:bold;
    color: yellow;
}

.head  p{
    margin-top:-10px;
    padding-left:20px;
    line-height: 20px;
    font-size:15px;
    letter-spacing: 1px;
    font-weight:400;
    color: yellow;
}

@media (max-width:1075px){
  body{
    background-size:cover;
    color: yellow;
    
  }
  .text{
    margin-top:100px;
  }
  .left-down-image{
    margin-right:50px;
    margin-top:-90px;
  }
}
	</style>
</head>
<body>
	 <header class="header">
           <ul>
               <div class="left"> 
                 <li class="logo"><a href="#" ><span></span><br></a></li></div>
                <div class="right" >
                    <?php $_SESSION["email"]; ?>
                    <li><a href="logout.php">logout</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="userdetails.php">Userdetails</a></li>
                    <li><a href="searchpb.php">Search problems</a></li>
                   <li><?php if($_SESSION["email"]=='praneshpalaniappa27@gmail.com') { ?> <a href="empreg.php">Add details</a> <?php } ?></li>
                   <li><?php if($_SESSION["email"]=='praneshpalaniappa27@gmail.com') { ?> <a href="complaintdetail.php">complaintdetails</a> <?php } ?></li>    
                   <li><?php if($_SESSION["email"]=='Kavin@gmail.com') { ?> <a href="complaintdetail.php">complaintdetails</a> <?php } ?></li>        
                    <li><a href="homepage.php" class="active">Home</a> </li> 
                </div>
           </ul> 
      </header>
  </body>
  </html>