<!-- Experiment 4-5 Question 5 -->
<!DOCTYPE html>
<HTML><head></head>
<body>

<form action =""  method = post>
Simple Program to Sort entered array   

<input type= "text" name ="input" placeholder = "Enter your array Here" >
<input type= "submit" value= "Click to Run "> 
</form>
</body>
</HTML>


<?php
if($_POST)
{
    $str = $_POST["input"];
    $arr = explode(",", $str);
    
   $counter = 0;
   sort($arr);
   $arr2 = array();
   
   foreach($arr as $abc)
    {
        if($abc %2 == 0)
        {
            $arr2[$counter] = $abc;
            $counter++;
        }
        
    }
    $even = implode(",", $arr2);
    $counter = 0;
    echo "Array of Sorted  Even Numbers ";
    echo " $even";
    
    echo"<br>";
    
    
    foreach($arr as $value)
    {
        if($value %2 != 0)
        {
            $arr2[$counter]= $value;
            $counter++;
        }
    }
    echo "Array of Sorted Odd numbers ";
    echo " ".implode(",", $arr2);
  
}
?>