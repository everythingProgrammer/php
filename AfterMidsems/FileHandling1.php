<!DOCTYPE html>
<html>
	<head>
		<title> Question - 1(a) </title>
	</head>
	<body>
		<form action="" method="post">
			<h3> Student Details :  </h3><br><br>
			Student 1 : <br><br>
			Enter Roll No : <input type="number" name="num1"><br><br>
			Enter Name : <input type="text" name="str1"><br><br>
			Enter Age : <input type="number" name="num2"><br><br>
			Enter Address : <input type="text" name="str2"><br><br><br>
			
			Student 2 : <br><br>
			Enter Roll No : <input type="number" name="num3"><br><br>
			Enter Name : <input type="text" name="str3"><br><br>
			Enter Age : <input type="number" name="num4"><br><br>
			Enter Address : <input type="text" name="str4"><br><br><br>
			
			Student 3 : <br><br>
			Enter Roll No : <input type="number" name="num5"><br><br>
			Enter Name : <input type="text" name="str5"><br><br>
			Enter Age : <input type="number" name="num6"><br><br>
			Enter Address : <input type="text" name="str6"><br><br><br>
			
			Student 4 : <br><br>
			Enter Roll No : <input type="number" name="num7"><br><br>
			Enter Name : <input type="text" name="str7"><br><br>
			Enter Age : <input type="number" name="num8"><br><br>
			Enter Address : <input type="text" name="str8"><br><br><br>
			<input type="submit" value="Submit">
 		</form>
	</body>
</html>
<?php 
    if($_POST)
    {
        $num1 = $_POST["num1"];
        $str1 = $_POST["str1"];
        $num2 = $_POST["num2"];
        $str2 = $_POST["str2"];
        $num3 = $_POST["num3"];
        $str3 = $_POST["str3"];
        $num4 = $_POST["num4"];
        $str4 = $_POST["str4"];
        $num5 = $_POST["num5"];
        $str5 = $_POST["str5"];
        $num6 = $_POST["num6"];
        $str6 = $_POST["str6"];
        $num7 = $_POST["num7"];
        $str7 = $_POST["str7"];
        $num8 = $_POST["num8"];
        $str8 = $_POST["str8"];
        $string = $num1.":".$str1.":".$num2.":".$str2.PHP_EOL.$num3.":".$str3.":".$num4.":".$str4.PHP_EOL.$num5.":".$str5.":".$num6.":".$str6.PHP_EOL.$num7.":".$str7.":".$num8.":".$str8;
        $file = fopen("studentdetails.txt","a") or die("Unable to open file");
        fwrite($file,$string);
        fclose($file);
    }
?>