<!DOCTYPE html>
<html>
<head></head>
<body>
<h2 style ="color:Red"> A program to sum of square of digits  </h2> 
<form action=""  method= "post">
Input:    <input type ="text"  maxlength = "5" name = "Number" placeholder =" Enter a Number">

<input type ="submit" value="Submit">
</form>
</body>
</html>
<?php 

if($_POST)
{
    $n = $_POST["Number"];
    for($x = 1 ; $x <11 ; $x++)
    {
        $m = $x*$n;
        echo " $n * $x = $m <br>";
    }
    
    $d = 0;
    $sum = 0;
    $temp = $n;
    while( $temp>0)
    {
        $d = $temp%10;
        $sum = $sum + ($d * $d );
        $temp = $temp/10;
    }
    echo "The sum of square of digits  =  $sum";
   
}

?>