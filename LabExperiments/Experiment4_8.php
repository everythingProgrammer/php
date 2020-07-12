<!-- Experiment 4-5 Question 6-->
<!DOCTYPE html>
<HTML><head></head>
<body>

<form action =""  method = post>
<center><img src="abc.png" width=250px height="auto"></center>

<textarea rows="4" cols="50" name = "Input">

</textarea>
</br> </br>
<input type= "submit" value= "Click to Run "> 
</form>
</body>
</HTML>


<?php 

if($_POST)
{
    $level =0;
    
   $details = $_POST["Input"];
    $First =  explode(".",$details);
    //echo "$First[0] ";
    $PersonalDetails = array();
    foreach ( $First as $Individual )
    {
        $PersonDetails[$level] = explode(",",$Individual);
        $level++;
    }
    
    foreach ( $PersonalDetails as $value)
    {
        echo count($PersonalDetails);
    }
    
}



?>