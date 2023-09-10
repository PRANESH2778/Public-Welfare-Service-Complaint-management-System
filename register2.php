<!DOCTYPE html>  
<html>  
        <script src="jquery.min.js"></script>

<head>  
  <title>REGISTRATION FORM</title>
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
  <div class="container">  
  <center>  <h1> Applicant Registration Form</h1> </center>  
  <hr>  

<form id="form_slider" name="form_slider">  
    <label> Firstname/முதல் பெயர்: </label>   
<input type="text" name="f_name" id="firstname" placeholder= "Firstname/முதல் பெயர்" size="15"  />   
<label> Lastname/கடைசி பெயர்: </label>    
<input type="text" name="l_name" id="lastname" placeholder="Lastname/கடைசி பெயர்" size="15" />   
<div>  
<label>   
Gender/பாலினம் :  
</label><br>  
<input type="radio" value="Male/ஆண்" id="gender" name="gender" checked > Male/ஆண்   
<input type="radio" value="Female/பெண்" id="gender" name="gender"> Female/பெண்  
<input type="radio" value="Other/மற்றவை" id="gender" name="gender"> Other/மற்றவை 
  
</div>  
<label>   
Phone/தொலைபேசி எண் :  
</label>  
<input type="text" name="countrycode" id="countrycode" placeholder="Country Code"  value="+91" size="2"/>   
<input type="text" name="phone" id="phone" placeholder="phone no./தொலைபேசி எண்." size="10"/ > 
Current Address/தற்போதைய முகவரி :  
<textarea cols="80" rows="5" placeholder="Current Address/தற்போதைய முகவரி" id="address" name="address" value="" >  
</textarea>  
 <label for="email"><b>Email/மின்னஞ்சல்</b></label>  
 <input type="text" placeholder="Enter Email/மின்னஞ்சல்" id="email" name="email" >  
  
    <label for="psw"><b>Password/கடவுச்சொல்லை</b></label>  
    <input type="password" placeholder="Enter Password/கடவுச்சொல்லை உள்ளிடவும்" id="psw" name="psw" >  
  
    <label for="psw_repeat"><b>Re-type Password/கடவுச்சொல்லை மீண்டும் தட்டச்சு செய்க</b></label>  
    <input type="password" placeholder="Retype Password/registerவுச்சொல்லை மீண்டும் தட்டச்சு செய்க" name="psw_repeat" id="psw_repeat" >  
    <button onclick="register('service_add','',firstname.value,lastname.value,gender.value,countrycode.value,phone.value,address.value,email.value,psw.value,psw_repeat.value)" id="addupdate">register/பதிவு</button> 

</form>  
</div>
</body>
<script>
function register(action, id = '',firstname,lastname,gender,countrycode,phone,address,email,psw,psw_repeat) {

      var sendInfo = {
      action:action,
      id:id,
      firstname:firstname,
      lastname:lastname,
      gender:gender,
      countrycode:countrycode,
      phone:phone,
      address:address,
      email:email,
      psw:psw,
      psw_repeat:psw_repeat,
    }

    $.ajax({
        type: "POST",
        url: "controlfile2.php",
        dataType: "json",
        data: sendInfo,
       
        success: function(obj) {
            if (obj.error != '') {
                alert('Error Occured');
            }
            if (obj.msg == 'save') {
                alert('Sucessfully Saved');
                window.location.href = "index.php";
            }
           
            if (obj.msg == 'update') {
                alert('Sucessfully Updated');
                window.location.href = "index.php";
            }
        },
        error: function() {
            alert('network error');
        }

    });
}
</script>
</html>
