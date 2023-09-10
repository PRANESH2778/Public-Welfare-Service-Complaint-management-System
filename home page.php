<!DOCTYPE html>
<html>
<head>
	<title> National Geographic</title>
	<?php 
session_start();
 ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-comptible" content="ie=edge">
        <link rel="stylesheet" href="style.css" type="text/css">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
body{
    width:100%;
    margin:0;
    padding:0;
    font-family:'Montserrat', sans-serif;
    background-image: url("https://thumbs.dreamstime.com/b/rocky-heart-dark-background-volcanic-rocks-heart-shaped-white-stone-dark-volcanic-rocks-background-copy-space-seen-192279685.jpg");
  background-size:cover;
  background-repeat:no-repeat;
    overflow:hidden;
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
span{
  display:inline-block;
  width:85px;
  height:94%;
  border:3px solid yellow;
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
    font-size: 10px;
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
}
h6{
 font-weight:600;
 color:#C8C8C8;
 font-size:13px ;
padding-bottom: 0px;
}
h1{
    margin-top: -20px;
    font-size:40px;
    letter-spacing:3px;
    font-weight:bold;
}
button{
    background-color: #FFD600;
    border:none;
    border-radius:8px;
    padding:15px 30px;
    font-size: 15px;
    font-weight:bold;

    text-align: center;
    margin-left:60px;
  cursor:pointer;
  outline:none;
}
button:hover{
   background-color: #e4bf05;
}
.left-down-image{
    background-image: url(bg4.jpg);
    background-repeat: no-repeat;
    background-size: 500px;
    background-position: right top;
    float:right;
    color:white;
    margin-right:20px;
    width:490px;
    height:160px;
    border:2px solid #FFD600;
    border-radius:2px ;
}
.head h3{
    width:100px;
    padding-left:10px;
    margin-top:10px;
    margin-left:35px;
    font-size: 15px;
    color: whitesmoke;
    font-weight: bold;
    border-left:2px solid #FFD600;

}

.head  p{
    margin-top:-10px;
    padding-left:20px;
    line-height: 20px;
    font-size:15px;
    letter-spacing: 1px;
    font-weight:400;
}

@media (max-width:1075px){
  body{
    background-size:cover;
    
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
                 <li class="logo"><a href="#" ><span></span><br>PWSCMS</a></li></div>
                <div class="right" >
                    <?php $_SESSION["username"]; ?>
                    <li><a href="logout.php">logout</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="userdetails.php">Userdetails</a></li>
                    <li><a href="searchpb.php">Search problems</a></li>
                   <li><?php if($_SESSION["username"]=='admin') { ?> <a href="empreg.php">Add details</a> <?php } ?></li>
                   <li><?php if($_SESSION["username"]=='admin') { ?> <a href="complaintdetail.php">complaintdetails</a> <?php } ?></li>           
                    <li><a href="home4.php" class="active">Home</a> </li> 
                </div>
           </ul> 
      </header>
         <hr>
      <div class="text">
           <h6>GOVERNMENT OF TAMILNADU</h6>
           <h1> Public Welfare Service Complaint Management <br>System </h1>
      </div>
      <div class="left-down-image">
            <div class="head">
               <h3>TAMIL NADU</h3>
                <br>
            </div>
         </div>   
    
    
    <script src="https://kit.fontawesome.com/1c51b0c30c.js" ></script>
</body>
</html>