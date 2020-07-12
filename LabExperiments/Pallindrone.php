<!DOCTYPE html>
<HTML><head></head>
<body>
<form action =""  method = post>
Reverse of String 
<input type = "text" name = "string" placeholder="Enter your String"> 
<input type= "submit" value= "Click to Run "> 
</form>
</body>
</HTML>


<?php
if($_POST)
{
    $str = $_POST["string"];
    $len = strlen($str);
    $i =0 ;
    $j = $len-1;
    $bol = true;
    for(; $i<$j; $i++ , $j--)
    {     if( ($str[$i]) != ( $str[$j]) )
        {
            $bol = false;
        }
    }
    if($bol == true )
        echo " Pallindrone String";
    else 
        echo " Not Pallindrone";
 }
?>