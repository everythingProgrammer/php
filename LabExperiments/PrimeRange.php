<!DOCTYPE html>
<html>
<head></head>		
<body>
<h2 style ="color:Red"> A program to find all prime numbers in the range  </h2> 
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
    $st = $_POST["Num1"];
    $ed = $_POST["Num2"];
    if($st<=1)
        $st=2;
    for($i = $st ; $i<=$ed ; $i =$i+1)  
    {
        $c =0;
        for( $j = 2 ;$j<$i; $j++ )
        {
            if($i%$j == 0)
            {
                $c=$c+1;
                break;
            }
        }
        if($c ==0 )
            echo "Prime number $i \n";
            }
}
