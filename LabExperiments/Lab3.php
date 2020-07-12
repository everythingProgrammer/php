<!DOCTYPE html>
<html>
<head></head>
<body>
<h2 style ="color:Red"> A program to check even and Odd Number </h2> 
<form action=""  method= "post">
Input:    <input type ="text"  maxlength = "5" name = "Number" placeholder =" Enter a Number">
</form>
</body>
</html>


<?php 

if($_POST)
{
    $n = $_POST["Number"];
    if($n%2==0)
        echo "$n is a Even Number";
    else 
        echo "Odd Number";
}
?>