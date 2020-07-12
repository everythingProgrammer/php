<!DOCTYPE html>
<html>
<head></head>
<body>
<h2 style ="color:Red"> A program to find all numbers divisible by 5  </h2> 
<form action=""  method= "post">
Input:    <input type ="text"  maxlength = "5" name = "Num1" placeholder =" Enter begening">
Input:    <input type ="text"  maxlength = "5" name = "Num2" placeholder =" Enter end">
<input type ="submit" value="Submit">
</form>
</body>
</html>


<?php

if($_POST)
{
    $Num1 = $_POST["Num1"];
    $Num2 = $_POST["Num2"];
    while($Num1 <= $Num2)
    {
        if($Num1%5==0)
        {
            echo " $Num1 is divisible <br>";
        }
        $Num1= $Num1+1;
    }
}
?>
