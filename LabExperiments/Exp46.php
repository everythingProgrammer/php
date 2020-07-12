<!-- Experiment 4-5 Question 6-->
<!DOCTYPE html>
<HTML><head></head>
<body>

<form action =""  method = post>
<center><img src="abc.png" width=250px height="auto"></center>
UPES STUDENT PORTAL WORKLOAD.   <br>

<input type= "number" name ="Math" placeholder = "Enter your Maths Score" step = "0.1" tooltip= "Enter Your marks here" required size = 28><br>
<input type= "number" name ="Science" placeholder = "Enter your Science Score" step = "0.1" tooltip= "Enter Your marks here" required size = 28><br>
<input type= "number" name ="English" placeholder = "Enter your English Score" step = "0.1" tooltip= "Enter Your marks here" required size = 28><br>
<input type= "number" name ="Language" placeholder = "Enter your Language Score" step = "0.1" tooltip= "Enter Your marks here" required size = 28 min =0 max = 100><br>
<input type= "number" name ="MoralScience" placeholder = "Enter your MoralScience Score" step = "0.1" tooltip= "Enter Your marks here" required size = 28><br>
<input type= "submit" value= "Click to Run "> 
</form>
</body>
</HTML>
<?php 
if($_POST)
{
    $sci = $_POST["Science"];
    $math = $_POST["Math"];
    $eng = $_POST["English"];
    $lang = $_POST["Language"];
    $msci = $_POST["MoralScience"];
    if($sci <= 100 && $sci>-1 && $math >-1 && $eng >-1 && $lang>-1 && $msci > -1 && $math <= 100 && $eng <= 100 && $lang <= 100 && $msci < 101)
    {
    $avg = ($sci + $math+$eng +$lang + $msci)/5;
    if( $avg >=90 && $avg <=100)
        echo " O Grade";
    else if($avg >=70 && $avg <=89 )
        echo " A Grade ";
    else if ($avg >=60 && $avg<=69)
        echo " B Grade";
    else if ($avg>=50 && $avg <= 59)
        echo " C Grade ";
    else if ($avg < 50 )
        echo " f Grade" ;
    
    echo "Average $avg";
    }
    else 
        echo "Invalid Input";
}



?>