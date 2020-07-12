<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JavaScript form validation - checking email</title>
<link rel='stylesheet' href='form-style.css' type='text/css' />      
</head>
<body onload='document.form1.text1.focus()'>
<center><img src="logo2.gif" width="200" height="auto"></center>
			<center><img src="logo.png" width="200" height="auto"></center>
			<h3> Student Details :  </h3><br><br>
			Enter Name : <input type="text" name="str1"><br>
			Enter Roll No : <input type="number" name="num1"><br><br>
			Enter Age : <input type="number" name="num2"><br><br>
<div class="mail">
<form name="form1" action="">
<li>
Enter Email iD: <input type='text' name='text1'/></li>
<li class="submit"><input type="submit" name="submit" value="Submit" onclick="ValidateEmail(document.form1.text1)"/></li>
</form>
</div>
<script src="email-validation.js"></script>
</body>
</html>