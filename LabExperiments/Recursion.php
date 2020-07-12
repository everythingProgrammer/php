<!DOCTYPE html>
<html>
<head></head>
<body>
<h2 style ="color:Red"> A program to find factorial of a number  </h2> 
<form action=""  method= "post">
Input:    <input type ="text"  maxlength = "5" name = "Num1" placeholder =" Enter Number">
<input type ="submit" value="Submit">
</form>
</body>
</html>
<?php
if($_POST)
{
    $num = $_POST["Num1"];
    
    function factorial( $a)
    {
        if( $a == 1)
        {
            return 1;
        }
            return ( $a * factorial($a-1));
            
    }
    echo factorial( $num );
}

