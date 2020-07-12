<!DOCTYPE html>
<HTML><head></head>
<body>
<form action =""  method = post>
Reverse of String 
<input type = "text" name = "string" placeholder="Enter your String"> 
<input type= "submit" value= "Click to Run "> 
<input type= "hidden" name= "secretattribute" value ="1230" >
</form>
</body>
</HTML>


<?php
if($_POST)
{
    $str = $_POST["string"];
    $len = strlen($str);
    for($i = $len -1 ; $i>=0 ; $i--)
    {
        echo" $str[$i] ";
    }
}


?>