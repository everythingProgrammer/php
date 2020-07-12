<!DOCTYPE html>
<html>
<head></head>
<body>
<h2 style ="color:Red text-align: center" >A Simple calculator </h2> 
<form action=""  method= "post">
Input:    <input type= "text" maxlength = "5" name = "Num1" placeholder = " Enter Number1">
Input: <select name = "option">
		<option> + </option>
		<option> - </option>
		<option> * </option>
		<option> / </option>
		<option> % </option>
		</select>
Input:    <input type ="text"  maxlength = "5" name = "Num2" placeholder =" Enter Number2"><br>
<input type ="submit" value="Submit" style="Background-color: blue">
</form>
</body>
</html>
<?php 
if($_POST)
{
    $n = $_POST["option"];
    $Num1 = $_POST["Num1"];
    $Num2 = $_POST["Num2"];
    
    if($n =="+")
    {    $temp = $Num2+$Num1;
        echo " On addition Sum  = $temp";
    }
    else if($n == "-")
    {
        $temp = $Num1-$Num2;
        echo "On  substraction final Values  = $temp";
        
    }
    else if($n == "*")
    {
        $temp = $Num1 * $Num2;
        echo "After multiplication = $temp";
        
    }
    else if($n == "/")
    {
        $temp = $Num1 / $Num2;
        echo "On Division =  $temp " ;
    }
    else if($n =="%")
    {
        $temp = $Num1%$Num2;
        echo " AFter Mod $temp";
    }
  }
?>