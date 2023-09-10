<!DOCTYPE html>
<html>
<head>
	<script src="jquery.min.js"></script>
	<meta charset="utf-8">
	<title>PUBLIC WELFARE SERVICE COMPLAINT MANAGEMENT SYSTEM</title>
	<style>
		        body {
        background-color: #F3EBF6;
        font-family: 'Ubuntu', sans-serif;
        background-image: url(homebg4.jpg);
    }
    
    .main {
        background-color: #FFFFFF;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        padding-top: 40px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: blueviolet;
        padding-top: 15px;
    }
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: blueviolet;
        text-decoration: none
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
        
	</style>
</head>
<head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <form id="form_service" class="login100-form validate-form" >
      <input class="un " type="email" id="email" name="email"align="center" placeholder="Username">
      <input class="pass" type="password" id="password" name="password"align="center" placeholder="Password">
      <a class="submit" onclick="login('login',email.value,password.value)" class="login100-form validate-form" align=" center">Sign in</a>
      <p class="forgot" align="center"><a href="register.php">new user?</p>
            
                
    </div>
     

</body>
<script>
	function login(action, email, pass) {

        var form = $("#form_service").serialize();

        // form.append('action', action);
        // form.append('email', email);
        // form.append('pass', pass);
        if (email == "" && pass == "") {
            alert("Enter user name  and password!")
        } else {
            $.ajax({
                type: "POST",
                url: "checklogin.php",
                dataType: "json",
                data: form,
                beforeSend: function() {
                    $('.login100-form-btn').attr('disabled', 'disabled');
                    $('.login100-form-btn').text('Loading...');
                },
                success: function(obj) {
                    if (obj.error != '') {
                        alert('Error');;
                        $('.login100-form-btn').removeAttr('disabled');
                        $('.login100-form-btn').text('Error !');
                    }
                    if (obj.msg == 'invalid') {
                        alert('Check user name and password');
                        $('.login100-form-btn').removeAttr('disabled');
                        $('.login100-form-btn').text('Sign In');
                        // window.location.href = "dc_admin/index.php?file=home";
                    } 
                    else if (obj.msg == 'save') {
                        alert('Sucessfully Logged In');
                        window.location.href = "homepage.php";
                    }
                },
                error: function() {
                    alert('network error');
                    $('.login100-form-btn').removeAttr('disabled');
                    $('.login100-form-btn').text('Error !');

                }

            });
        }

    }
</script>
</html>