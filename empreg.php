<!DOCTYPE html>
<html>
        <script src="jquery.min.js"></script>

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
  
input[type=text], input[type=password], input[type=email],input[type=number],textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus ,input[type=email]:focus,input[type=number]:focus
{  
  background-color: orange;  
  outline: none;  
}  
input[type=radio],textarea {  
  width: 10%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=radio]:focus{  
  background-color: orange;  
  outline: none;
}
select[value], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
select[value]:focus {  
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
  <div id="invoice_no_list_div">
    <?php
    include("mainpage.php");
    ?>
  </div>
	<h1 style="text-align: center">OFFICIALS REGISTER</h1>
	<form id="form_slider" name="form_slider" >  
        <div class="container">   
            <label>Firstname : </label>   
            <input type="text" placeholder="Enter the first name" name="firstname" id="firstname" required>  
            <label>lastname : </label>   
            <input type="text" placeholder="Enter the last name" name="lastname" id="lastname" required> 
            <div>  
            <label>   
            Gender :  
            </label><br>  
            <input type="radio" value="Male" name="gender" id="gender" checked > Male   
            <input type="radio" value="Female" name="gender" id="gender"> Female  
            <input type="radio" value="Other" name="gender" id="gender"> Other 
            </div> 
            <label for="Department">Choose a Department:</label>
			  <select id="department" name="department" style="width: 100%;  
        padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; ">
  			<option value="Public works department">Public works department</option>
  			<option value="electricity department">electricity department</option>
  			<option value="transport department">transport department</option>
  			<option value="eductaion department">eductaion department</option>
  			<option value="Highways department">Highways department</option>
  			<option value="Industrial department">Industrial department</option>
			</select><br><br>
       <label for="Problems">problems Responsible for:</label>
        <select id="problems" name="problems" style="width: 100%;padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; ">
        <option value="waste removal/கழிவுகளை அகற்றுதல்">waste removal/கழிவுகளை அகற்றுதல்</option>
        <option value="electricity pole repair/மின் கம்பம் பழுது">electricity pole repair/மின் கம்பம் பழுது</option>
        <option value="damaged roads/சேதமடைந்த சாலைகள்">damaged roads/சேதமடைந்த சாலைகள்</option>
        <option value="new road construction/புதிய சாலை கட்டுமானம்">new road construction/புதிய சாலை கட்டுமானம்</option>
        <option value="reconstruction of damaged buildings/சேதமடைந்த கட்டிடங்களின் புனரமைப்பு">reconstruction of damaged buildings/சேதமடைந்த கட்டிடங்களின் புனரமைப்பு</option>
        <option value="bus insufficiency/பஸ் பற்றாக்குறை">bus insufficiency/பஸ் பற்றாக்குறை</option>
        <option value="pollution problems/மாசு பிரச்சினைகள்">pollution problems/மாசு பிரச்சினைகள்</option>
        <option value="industrail waste mixing in water/தொழில்துறை கழிவுகள் தண்ணீரில் கலத்தல்">industrail waste mixing in water/தொழில்துறை கழிவுகள் தண்ணீரில் கலத்தல்</option>
        <option value="educational problem/கல்வி பிரச்சினை">educational problem/கல்வி பிரச்சினை</option>
        <option value=" street dog problems/தெரு நாய் பிரச்சினைகள்"> street dog problems/தெரு நாய் பிரச்சினைகள்</option>
        <option value="new electricity connection/புதிய மின்சார இணைப்பு">new electricity connection/புதிய மின்சார இணைப்பு</option>
        <option value="new water supply connection/புதிய நீர் வழங்கல் இணைப்பு">new water supply connection/புதிய நீர் வழங்கல் இணைப்பு</option>
      </select><br><br>
        <label>phone number:</label>
        <input type="number" name="phone" id="phone" placeholder="Enter the phone number:" size="10"  required>
        <br><br>
        <label>Areas Covered:</label>  
        <textarea  rows="5" placeholder="Enter The Areas Covered" name="address1" id="address1"  required>  
        </textarea>  
        <label>Email:</label>
        <input type="Email" name="email" id="email" placeholder="Enter the email:">
        <button onclick="details555('details_add','',firstname.value,lastname.value,gender.value,department.value,
        problems.value,phone.value,address1.value,email.value)" id="addupdate" type="submit" class="registerbtn">Register</button> 
        </div>   
    </form>   
</body>
<script>
function details555(action, id = '',firstname,lastname,gender,department,problems,phone,address1,email) {
  debugger;
      var Info = {
      action:action,
      id:id,
      firstname:firstname,
      lastname:lastname,
      gender:gender,
      department:department,
      problems:problems,
      phone:phone,
      address:address1,
      email:email,
    }

    $.ajax({
        type: "POST",
        url: "empregp.php",
        dataType: "json",
        data: Info,
       
        success: function(obj) {
          alert(obj);
            if (obj.error != '') {
                alert('Error Occured');
            }
            if (obj.msg == 'save') {
                alert('Sucessfully Saved');
                //window.location.href = "searchpb.php";
            }
        },
        error: function() {
            alert('Sucessfully saved');
        }

    });

}
</script>
</html>
