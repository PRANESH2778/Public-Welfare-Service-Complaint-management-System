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
  
input[type=text], input[type=address] , input[type=telephone] , input[type=complaint] ,textarea {  
  width: 98%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
 div {  
            padding: 10px ;  
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
  <h1 style="text-align: center;">COMPLAINT PAGE</h1>
<form action="mailto:praneshpalaniappa27@gmail.com" id="fs-frm" name="complaint-form" accept-charset="utf-8" method="post" action="https://formspree.io/f/{form_id}">
  <div class="container">
  <fieldset id="fs-frm-inputs">
    <label for="full-name">Full Name/முழு பெயர்</label>
    <input type="text" name="fname" id="fname" placeholder="Ex - s.palani" required="">
    <label for="address"> Address/முகவரி</label>
    <input type="address" name="address" id="address" placeholder="Ex - ps park,erode-1."required=""><br><br>
    <label for="telephone">Telephone Number/தொலைபேசி எண்</label>
    <input type="telephone" name="telephone" id="telephone" placeholder="Ex - 9828341920"><br><br>
    <label for="complaint">Complaint/புகார்</label>
        <select id="complaint" name="complaint" style="width: 100%;padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1; ">
        <option value="waste removal">waste removal/கழிவுகளை அகற்றுதல்</option>
        <option value="electricity pole repair">electricity pole repair/மின் கம்பம் பழுது</option>
        <option value="damaged roads">damaged roads/சேதமடைந்த சாலைகள்</option>
        <option value="new road construction">new road construction/புதிய சாலை கட்டுமானம்</option>
        <option value="reconstruction of damaged buildings">reconstruction of damaged buildings/சேதமடைந்த கட்டிடங்களின் புனரமைப்பு</option>
        <option value="bus insufficiency">bus insufficiency/பஸ் பற்றாக்குறை</option>
        <option value="pollution problems">pollution problems/மாசு பிரச்சினைகள்</option>
        <option value="industrail waste mixing in water">industrail waste mixing in water/தொழில்துறை கழிவுகள் தண்ணீரில் கலத்தல்</option>
        <option value="educational problem">educational problem/கல்வி பிரச்சினை</option>
        <option value=" street dog problems"> street dog problems/தெரு நாய் பிரச்சினைகள்</option>
        <option value="new electricity connection">new electricity connection/புதிய மின்சார இணைப்பு</option>
        <option value="new water supply connection">new water supply connection/புதிய நீர் வழங்கல் இணைப்பு</option>
      </select><br><br>
  </fieldset>
  <button onclick="details_post34('details_add1','',fname.value,address.value,telephone.value,complaint.value)" id="fs-frm" type="submit" class="registerbtn">Register</button> 
</div>
</form>
</body>
<script>
  function details_post34(action, id = '',fname,address,telephone,complaint) {
      var comInfo = {
      action:action,
      id:id,
      fname:fname,
      address:address,
      telephone:telephone,
      complaint:complaint,
    }

    $.ajax({
        type: "POST",
        url: "complaintp.php",
        dataType: "json",
        data: comInfo,
       
        success: function(obj) {
            if (obj.error != '') {
                alert('Error Occured');
            }
            if (obj.msg == 'save') {
                alert('complaint registered successsfully');
            }
           

        },
        error: function() {
            alert('complaint registered successsfully');
        }

    });


}
</script>
</html>