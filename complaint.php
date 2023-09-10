<!DOCTYPE html>
<html>
<head>
  <title>officials registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>
</head>
<body>
   <?php 
session_start();
 ?>
  <div id="invoice_no_list_div">
    <?php
    include("mainpage.php");
    ?>
  </div>
  <h1 style="text-align: center;">COMPLAINT PAGE</h1>
  <?php $_SESSION["email"];  ?>
<form action="mailto: <?php $_SESSION["email"]?> " id="fs-frm" name="complaint-form" accept-charset="utf-8" action="https://formspree.io/f/{form_id}" method="post">
  <div class="container">
  <fieldset id="fs-frm-inputs">
    <label for="full-name">Full Name/முழு பெயர்</label>
    <input type="text" name="name" id="full-name" placeholder="Ex - s.palani" required="">
    <label for="address"> Address/முகவரி</label>
    <input type="address" name="address" id="address/முகவரி" placeholder="Ex - ps park,erode-1."required=""><br><br>
    <label for="telephone">Telephone Number/தொலைபேசி எண்</label>
    <input type="telephone" name="telephone" id="telephone" placeholder="Ex - 9828341920"><br><br>
    <label for="complaint">Complaint/புகார்</label>
    <textarea rows="6" name="complaint" id="complaint" placeholder="water sewage problem/நீர் கழிவுநீர் பிரச்சினை"></textarea>
  </fieldset>
  <input type="submit" value="File Complaint/புகாரை தாக்கல் செய்யுங்கள்">
</div>
</form>