<!DOCTYPE html>
<html>
	<head>
		<title> </title>
	</head>
	<body>
	<script type="text/javascript">
	function email_validate()
	{
		 var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		 if (reg.test(document.SignUp.email.value) == false) 
         {
             document.getElementById('EmailLocation').innerText="Invalid Email";
         }

	}
	function validate_password()
	{
		var msg;  
		if(document.SignUp.pass1.value.length == document.SignUp.pass2.value.length)
			{  
				if( document.SignUp.pass1.value == document.SignUp.pass2.value)
				{
					document.getElementById('PasswordValid').innerText= "Password Valid";
				}
				else
				{
					document.getElementById('PasswordValid').innerText="Password Do not Match";

				}				  
			}  
		else
			{  
				msg = "Password Lengths does not match";
				document.getElementById('PasswordValid').innerText=msg;  
			}
	}  
				
	</script>
			<center><img src="logo.png" width="200" height="auto"></center>
		<form action="" method="post" name= "SignUp">
			<h3> SignUp Form  </h3><br><br>
<!-- 			Enter Name : <input type="text" name="str1" "><br><br> -->
			Enter Email id : <input type="text" name="email" "><br>
			<span id="EmailLocation">..</span>  
			<br>
			Enter Password : <input type= "password" name= "pass1" onkeyup = "email_validate()"><br><br>
			Confirm Password : <input type= "password" name= "pass2" "><br><br>
			<span id="PasswordValid">..</span><br><br>
			<input type="submit" value="SignUp!" onkeyup = "validate_password()">
 		</form>
	</body>
</html>
